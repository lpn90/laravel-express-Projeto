<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projeto.index');
    }

    public function posts()
    {
        $posts = [
            0 => "/img/imagem1.jpg",
            1 => "/img/imagem2.jpg",
            2 => "/img/imagem3.jpg",
            3 => "/img/imagem4.jpg",
            4 => "/img/imagem5.jpg",
            5 => "/img/imagem6.jpg",
            6 => "/img/imagem7.jpg",
            7 => "/img/imagem8.jpg",
        ];

        return view('projeto.posts', compact('posts'));
    }

    public function exibePost($id)
    {
        $posts = [
            0 => "/img/imagem1.jpg",
            1 => "/img/imagem2.jpg",
            2 => "/img/imagem3.jpg",
            3 => "/img/imagem4.jpg",
            4 => "/img/imagem5.jpg",
            5 => "/img/imagem6.jpg",
            6 => "/img/imagem7.jpg",
            7 => "/img/imagem8.jpg",
        ];

        return view('projeto.exibePost', compact('posts', 'id'));
    }
}
