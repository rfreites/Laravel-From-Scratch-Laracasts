<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function pages(){
    	$people = ['Ronny', 'Taylor', 'Frank'];
	
		return view('pages.pages', compact('people'));
    }
}
