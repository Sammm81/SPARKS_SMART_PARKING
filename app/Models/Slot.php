<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allSlot.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/slotById.php',[
            '' => ''
        ]);
        return $response->json();
    }

    public static function getAvailableSlot($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getAvailableSlot.php',[
            '' => ''
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function register($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addSlot.php',[
            '' => ''
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updateSlotById.php',[
            '' => ''
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
            '' => ''
        ]);
        return $response->json();
    }
}
