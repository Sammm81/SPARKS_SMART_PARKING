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
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request,
            'table' => 'area'
        ]);
        return $response->json();
    }

    public static function getAvailableArea($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getAvailableArea.php',[
            'place_id' => $request
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function addArea($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addArea.php',[
            'place_id' => $request['placeId'],
            'name' => $request['name']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updateAreaById.php',[
            'id' => $request['id'],
            'name' => $request['name'],
            'full' => $request['full']
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
            'table' => 'area'
        ]);
        return $response->json();
    }
}
