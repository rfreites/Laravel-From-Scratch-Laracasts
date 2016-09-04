<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	
    	//1 way to save
    	
    	//$note = new Note;
    	
    	//$note->body = $request->body;
    	
    	//$card->notes()->save($note);
    	
    	//2 way to save
    	
    	//$note = new Note(['body' => $request->body]);
    	
    	//$card->notes()->save($note);
    	
    	//3 way to save
    	
    	//$card->notes()->save(new Note(['body' => $request->body]));
    	
    	//4 way to save
    	
    	//$card->notes()->create(['body' => $request->body]);
    	
    	//5 way to save
    	
    	//$card->notes()->create($request->all()); //[]
    	
    	//6 way to save
    	
    	$card->addNote(
    				new Note($request->all())
    			);
    	
    	return back();
    	
    }
}
