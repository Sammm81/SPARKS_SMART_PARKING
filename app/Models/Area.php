<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allArea.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::post('http://localhost/SPARKS_API/areaById.php',[
            '' => ''
        ]);
        return $response->json();
    }

    public static function getAvailableArea($request){
        $response = Http::post('http://localhost/SPARKS_API/getAvailableArea.php',[
            '' => ''
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function register($request){
        $response = Http::post('http://localhost/SPARKS_API/addArea.php',[
            '' => ''
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::post('http://localhost/SPARKS_API/updateAreaById.php',[
            '' => ''
        ]);
        return $response->json();
    }


    /// DELETE 
    public static function deleteAll(){
        $response = Http::post('http://localhost/SPARKS_API/deleteAll.php',[
            '' => ''
        ]);
        return $response->json();
    }

    public static function deleteById($request){
        $response = Http::post('http://localhost/SPARKS_API/deleteById.php',[
            '' => ''
        ]);
        return $response->json();
    }
}
