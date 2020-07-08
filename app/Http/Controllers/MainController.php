<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Response;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }
}
