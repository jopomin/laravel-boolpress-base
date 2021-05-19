<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        $articoli = Post::all();
        @dd($articoli);
/*         $data = [
            'articoli' => $articoli
        ]; */
/*         return view('articoli'); */
    }
}
