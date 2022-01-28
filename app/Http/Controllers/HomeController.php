<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {

        $comics = Comic::all();
        
        return view('pages.home', compact('comics'));
    }

    public function show($id) {

        $comic = Comic::findOrFail($id);

        return view('pages.showComic', compact('comic'));
    }

}
