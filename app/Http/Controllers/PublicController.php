<?php

namespace App\Http\Controllers;


class PublicController extends Controller
{
    public function index(){
        return view('landing', [
            'title' => 'home'
        ]);
    }

    public function about(){
        return view('about');
    }
}
