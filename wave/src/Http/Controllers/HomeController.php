<?php

namespace Wave\Http\Controllers;

use App\HomePage;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;

class HomeController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \Cart::session('cart')->remove(5);
    	if(setting('auth.dashboard_redirect', true) != "null"){
    		if(!\Auth::guest()){
    			return redirect('dashboard');
    		}
    	}

        $seo = [
            'title'         => setting('site.title', 'Tapply'),
            'description'   => setting('site.description', 'Thẻ cá nhân thông minh chia sẻ thông theo xu hướng hiện đại.'),
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website',
        ];

        $cards = json_decode(callAPI('GET', setting('site.api_url').'/api/v1/card/list'));
        $data = [];
        if($cards) {
            $data = $cards->data->cards->data;
        }

        return view('theme::home', compact('seo', 'data'));
    }

    public function store(Request $request) {
        $data = $request->all();
        array_shift($data);
        foreach ($data as $key => $value) {
            $homePage = HomePage::where('key', $key)->first();
            if ($homePage !== null) {
                $homePage->update(['value1' => $value]);
            } else {
                $homePage = HomePage::create([
                'key' => $key,
                'value1' => $value,
                ]);
            }
        }
        return back();
        // dd($data);
    }
}
