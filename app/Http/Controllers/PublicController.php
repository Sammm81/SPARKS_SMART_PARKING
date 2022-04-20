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
                    'title' => 'SPARKS || ABOUT',
                    'data' => User::getAll()
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
        $response = User::register($value);
        return redirect('/login');
    }

    public function login(Request $request){
        $value = array(
            'email' => $request->email,
            'password' => $request->password
        );
        $response = User::login($value);
        
        $request->session()->put('name', $response['Details']['name']);
        $request->session()->put('email', $response['Details']['email']);
        $request->session()->put('admin', $response['Details']['admin']);
        $request->session()->put('balance', $response['Details']['balance']);
        $request->session()->put('status', 'online');

        return redirect('/user/dashboard');
    }
}
