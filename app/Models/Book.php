<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allBook.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request['bookId'],
            'table' => 'book'
        ]);
        return $response->json();
    }
    
    public static function getBookDetails($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getBookDetails.php',[
            'id' => $request
        ]);
        return $response->json();
    }

    public static function verifyToken($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/verifyToken.php',[
            'token' => $request
        ]);
        return $response->json();
    }


    /// CREATE (INSERT)
    public static function addBook($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addBook.php',[
            'user_id' => $request['id'],
            'slot_id' => $request['slotId']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request, $verified=0){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updateBookById.php',[
            'id' => $request['bookId'],
            'verified' => $verified
        ]);
        return $response->json();
    }


    /// DELETE 
    public static function deleteAll(){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/deleteAll.php',[
            'table' => 'Book'
        ]);
        return $response->json();
    }

    public static function deleteById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/deleteById.php',[
            'id' => $request,
            'table' => 'Book'
        ]);
        return $response->json();
    }
}
