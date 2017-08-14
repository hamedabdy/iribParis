<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\IribParis;

class SearchController extends Controller
{

	public function index() {
		return view('home');
	}

    public function search(Request $request) {
    	$error = ['error' => 'No results found. Please try with different keywords.'];

    	if($request->has('q')) {
    		$items = IribParis::search($request->get('q'))->get();

    		return $items->count() ? $items : $error;
    	}

    	return $error;
    }
}
