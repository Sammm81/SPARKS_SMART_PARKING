<?php

namespace App\Http\Controllers;

use App\Models\User;

class PublicController extends Controller
{
    public function index(){
        return view('public/Home', [
            'title' => 'HOME',
            'data' => User::getAll()
        ]);
    }

    public function login(){
        return view('public/Login', [
            'title' => 'Sign in',
            'data' => User::getAll()
        ]);
    }

    public function register(){
        return view('public/Register', [
            'title' => 'Sign up',
            'data' => User::getAll()
        ]);
    }

    public function about(){
        return view('public/about', [
            'title' => 'About'
        ]);
    }
}
