<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articoli = Post::all();
        $data = [
            'articoli' => $articoli
        ];
        return view('articoli.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articoli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'titolo' => 'required|unique:posts|max:50',
            'autore' => 'required|max:50',
            'tema' => 'required|max:20',
            'battute' => 'required|max:5',
        ]);

        $new_post = new Post();
        $new_post->titolo = $data['titolo'];
        $new_post->autore = $data['autore'];
        $new_post->tema = $data['tema'];
        $new_post->battute = $data['battute'];
        $new_post->save();
        return redirect()->route('articoli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id) {
            $articolo = Post::find($id);
            $data = [
                'articolo' => $articolo
            ];
            return view('articoli.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $articoli)
    {
        return view('articoli.edit', compact('articoli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $articoli)
    {
        $data = $request->all();
/*         @dd($data); */
        $articoli->update($data);
        return redirect()->route('articoli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $articoli)
    {
        $articoli->delete();
        return redirect()->route('articoli.index');        
    }
}
