<?php

namespace Wave\Http\Controllers;

use Wave\Page;
use Illuminate\Http\Request;

class PageController extends \App\Http\Controllers\Controller
{
    public function page($slug){
    	$page = Page::where('slug', '=', $slug)->firstOrFail();

        $seo = [
            'title'         => setting('site.title', 'Tapply'),
            'description'   => setting('site.description', 'Thẻ cá nhân thông minh chia sẻ thông theo xu hướng hiện đại.'),
            'image'         => url('storage/'.setting('site.seo_img')),
            'type'          => 'website',
        ];

    	return view('theme::page', compact('page', 'seo'));
    }
}
