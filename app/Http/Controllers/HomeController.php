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

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:60',
            'release_date' => 'required|date',
            'pages' => 'required|integer'
        ]);

        $comic = Comic::create($data);

        // return redirect()->route('pages.home');
        return redirect()->route('show', $comic->id);
    }

    public function edit($id) {
        
        $comic = Comic::findOrFail($id);

        return view('pages.edit', compact('comic'));
    }

    public function update(Request $request, $id) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:60',
            'release_date' => 'required|date',
            'pages' => 'required|integer'
        ]);

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('show', $comic->id);
    }
}
