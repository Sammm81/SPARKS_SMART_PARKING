<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allPlace.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request,
            'table' => 'place'
        ]);
        return $response->json();
    }

    public static function getAvailablePlace(){
        $response = Http::get('http://localhost/SPARKS_API/getAvailablePlace.php');
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function addPlace($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addPlace.php',[
            'name' => $request['name']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updatePlaceById.php',[
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
            'table' => 'place'
        ]);
        return $response->json();
    }
}
