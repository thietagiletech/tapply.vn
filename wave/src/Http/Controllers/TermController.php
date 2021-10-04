<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Http;
use App\Term;

class TermController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $term = Term::orderBy('id', 'ASC')->first();
    	return view('theme::term', compact('term'));
    }
}
