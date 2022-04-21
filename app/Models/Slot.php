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
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request,
            'table' => 'slot'
        ]);
        return $response->json();
    }

    public static function getAvailableSlot($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getAvailableSlot.php',[
            'area_id' => $request
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function addSlot($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addSlot.php',[
            'area_id' => $request['areaId'],
            'name' => $request['name']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request, $book=0, $available=1){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updateSlotById.php',[
            'id' => $request['Details']['id'],
            'name' => $request['Details']['slot_name'],
            'available' => $available,
            'book' => $book
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
            'table' => 'slot'
        ]);
        return $response->json();
    }
}
