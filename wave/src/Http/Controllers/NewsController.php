<?php

namespace Wave\Http\Controllers;

use App\HomePage;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;
use Wave\Post;
use Wave\Category;
class NewsController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if(isset($request['cate'])) {
            $posts = Post::with('category')->where(['category_id' => $request['cate'], 'guide' => 0])->orderBy('created_at', 'DESC')->paginate(10);
        } else {
            $posts = Post::with('category')->where('guide', 0)->orderBy('created_at', 'DESC')->paginate(10);
        }
        
        $slides = Post::with('category')->where('featured', 1)->orderBy('created_at', 'DESC')->take(5)->get();
        $categories = Category::all();

    	$seo = [
    		'title' => 'Blog',
            'description' => 'Our Blog',
            'image' => url('storage/'.setting('site.seo_img'))
       	];

        if ($request->ajax()) {
    		$view = view('theme::layouts.includes.posts',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }

    	return view('theme::news', compact('posts', 'categories', 'seo', 'slides'));
    }

    public function show($slug) {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $seo = [
            'title' => $post->title,
            'description' => $post->meta_description,
            'image'  => asset('storage/'.$post->image)

        ];

    	return view('theme::newsDetail', compact('post', 'seo'));
    }
}
