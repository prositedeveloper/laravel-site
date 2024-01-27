<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }


    
}

