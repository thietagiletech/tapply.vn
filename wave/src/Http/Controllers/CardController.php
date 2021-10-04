<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;

class CardController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $cardList = [];
        $response = Http::get(setting('site.api_url').'/api/v1/card/show/'.$slug);

        if($response->ok()) {
            $card = json_decode($response->getBody()->getContents());
            $data = $card->data->card;
        } else {
            abort(404);
        }
        $cards = json_decode(callAPI('GET', setting('site.api_url').'/api/v1/card/list'));
        if($cards) {
            $cardList = $cards->data->cards->data;
        }

        $seo = [
            'title'         => $data->name,
            'description'   => $data->description,
            'image'         => isset($data->image_front) ? setting('site.api_url').'/storage/'.$data->image_front : ''
        ];

        return view('theme::detailCard', compact('data', 'cardList', 'seo'));
    }

    public function addToCard(Request $request) {

        $cardItem = [];
        $card = json_decode($request['cart']);
        $cardItem['name_on_card'] = $request['nameOnCard'];
        if($request['blackCard'] && $request['whileCard']) {
            $cardItem['card_color'] = $request['blackCard'].','. $request['whileCard'];
        } else {
            $cardItem['card_color'] = $request['blackCard'] ? $request['blackCard'] : $request['whileCard'];
        }

        try {
            if(empty(\Cart::session('cart')->getContent($card->id))) {
                \Cart::session('cart')->update($card->id, [
                    'quantity' => (int)$request['quantity']
                ]);
                return response()->json([
                    'status' => 'success'
                ]);
            } else {
                $data = [
                    'id' => $card->id,
                    'name' => $card->name,
                    'quantity' => $request['quantity'],
                    'price' => $card->price,
                    'attributes' => $cardItem,
                    'associatedModel' => $card
                ];
        
                \Cart::session('cart')->add(array(
                    $data
                ));
                return response()->json([
                    'status' => 'success'
                ]);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail'
            ]);
        }
    }

    public function updateCart(Request $request) {
        if(\Cart::session('cart')->getContent($request['id'])) {
            if($request['status'] == 'plus') {
                \Cart::session('cart')->update($request['id'],[
                    'quantity' => 1
                ]);
            }
            if($request['status'] == 'decrease') {
                \Cart::session('cart')->update($request['id'],[
                    'quantity' => -1
                ]);
            }
            return response()->json([
                'status' => 'success',
                'total' => product_price(\Cart::session('cart')->getTotal()),
            ]);
        }
    }

    public function deleteCart(Request $request) {
        if(\Cart::session('cart')->getContent($request['id'])) {
            \Cart::session('cart')->remove($request['id']);
            return response()->json([
                'status' => 'success'
            ]);
        }
    }

    public function checkout() {

        return view('theme::checkout');
    }

    public function orderCart(Request $request) {

        $items = [];
        foreach(\Cart::session('cart')->getContent() as $item) {
            $items ['items'][] = [
                'id' => $item['id'],
                'name_product' => $item['name'],
                'name' => $item['attributes']['name_on_card'],
                'quantity' => (int)$item['quantity'],
                'price' => $item['price'],
                'template_id' => $item['id'],
                'card_color' => $item['attributes']['card_color'],
                'total_price_on_card' => (int)$item['quantity'] * $item['price']
            ];
        }
        $items['total'] = \Cart::session('cart')->getTotal();
        $response = Http::post(setting('site.api_url').'/api/v1/make-order', [
            'customer_name' => $request['name'],
            'shipping_address' => $request['address'],
            'phone' => $request['phone'],
            'note' => $request['note'],
            'email' => $request['email'],
            'order_no' => strtotime(now()),
            'time_order' => now()->format('d-m-Y H:i:s'),
            'items' => $items
        ]);

        if($response->ok()) {
            \Cart::session('cart')->clear();
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'fail'
            ]);
        }
    }

    public function list(Request $request) {

        $cardList = [];
        $response = Http::get(setting('site.api_url').'/api/v1/card/list', [
            'order' => $request['order'],
            'direction' => $request['direction'],
        ]);

        if($response->ok()) {
            $card = json_decode($response->getBody()->getContents());
            $cardList = $card->data->cards->data;
        }

        if ($request->ajax()) {
    		$view = view('theme::cardFilter',compact('cardList'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('theme::listCard', compact('cardList'));
    }
}
