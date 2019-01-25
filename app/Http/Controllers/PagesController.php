<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function search(){
        return view('search');
    }

    public function posts(){
        return view('posts');
    }
    public function profile(){
        return view('profile');
    }
    public function terms(){
        return view('terms');
    }

}
