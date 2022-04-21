<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class User extends Model
{
    // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allUser.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request,
            'table' => 'users'
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function register($value){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/register.php',[
            'name' => $value['name'],
            'email' => $value['email'],
            'password' => $value['password']
        ]);
        return $response->json();
    }

    public static function login($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/login.php',[
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updateUserById.php',[
            'id' => $request['id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'admin' => $request['admin'],
            'balance' => $request['balance']
        ]);
        return $response->json();
    }


    /// DELETE 
    public static function deleteAll(){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/deleteAll.php',[
            '' => ''
        ]);
        return $response->json();
    }

    public static function deleteById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/deleteById.php',[
            'id' => $request,
            'table' => 'users'
        ]);
        return $response->json();
    }
}
