<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function index(Request $request){
        $session_data = $request->session()->all();
        return view('public/Home', [
            'title' => 'SPARKS || HOME',
            'session_data' => $session_data
        ]);
    }

    public function routes($page, Request $request){
        $session_data = $request->session()->all();

        switch ($page) {
            case 'about':
                return view('public/About', [
                    'title' => 'SPARKS || ABOUT',
                    'session_data' => $session_data
                ]);
                break;
            case 'register':
                return view('public/Register', [
                    'title' => 'SPARKS || REGISTER',
                    'session_data' => $session_data
                ]);
                break;
            case 'login':
                return view('public/Login', [
                    'title' => 'SPARKS || LOGIN',
                    'session_data' => $session_data
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
        
        $request->session()->put('id', $response['Details']['id']);
        $request->session()->put('name', $response['Details']['name']);
        $request->session()->put('email', $response['Details']['email']);
        $request->session()->put('admin', $response['Details']['admin']);
        $request->session()->put('balance', $response['Details']['balance']);
        $request->session()->put('status', 'online');

        if($request->session()->get('admin') == 0){
            return redirect('/user/dashboard');
        }
        else{
            return redirect('admin/dashboard');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
    }
}
