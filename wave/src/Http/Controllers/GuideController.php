<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;
use Wave\Post;

class GuideController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $seo = [
            'title'         => setting('site.title', 'Tapply'),
            'description'   => setting('site.description', 'Thẻ cá nhân thông minh chia sẻ thông theo xu hướng hiện đại.'),
            'image'         => url('storage/'.setting('site.seo_img')),
            'type'          => 'website',
        ];
        $posts = Post::where('guide', 1)->orderBy('created_at', 'DESC')->paginate(100);
    	return view('theme::guide', compact('posts', 'seo'));
    }
}
