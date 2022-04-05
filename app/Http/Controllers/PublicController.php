<?php

namespace App\Http\Controllers;

use App\Models\User;

class PublicController extends Controller
{
    public function index(){
        return view('Home', [
            'title' => 'HOME',
            'data' => User::getAll()
        ]);
    }

    public function about(){
        return view('about');
    }
}
