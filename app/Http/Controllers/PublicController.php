<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function index(){
        return view('public/Home', [
            'title' => 'HOME',
            'data' => User::getAll()
        ]);
    }

    public function routes($page){
        switch ($page) {
            case 'about':
                return view('public/About', [
                    'title' => 'SPARKS || ABOUT'
                ]);
                break;
            case 'register':
                return view('public/Register', [
                    'title' => 'SPARKS || REGISTER'
                ]);
                break;
            case 'login':
                return view('public/Login', [
                    'title' => 'SPARKS || LOGIN'
                ]);
                break;
            
            default:
                return redirect('/');
                break;
        }
    }

    public function register(Request $request){
        $value = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        );
        User::register($value);
    }

    public function login(Request $request){
        // $request->session()->put('name', $request->name);
        // $request->session()->put('email', 'value');
        // $request->session()->put('password', 'password');
        
        User::login($request);
    }
}
