<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Payment extends Model
{
    // BASIC CRUD MUST BE PERFORMED -- CREATE -- READ -- UPDATE -- DELETE

    /// READ (SELECT)
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allPayment.php');
        return $response->json();
    }

    public static function getById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getById.php',[
            'id' => $request,
            'table' => 'payment'
        ]);
        return $response->json();
    }

    public static function getPaymentDetails($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/paymentById.php',[
            '' => ''
        ]);
        return $response->json();
    }

    public static function getPaymentDetailsByUser($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/getPaymentDetailsByUser.php',[
            'userId' => $request
        ]);
        return $response->json();
    }

    /// CREATE (INSERT)
    public static function addPayment($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/addPayment.php',[
            'book_id' => $request['bookId']
        ]);
        return $response->json();
    }


    /// UPDATE
    public static function updateById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/updatePaymentById.php',[
            'id' => $request['id'],
            'paid' => $request['paid']
        ]);
        return $response->json();
    }


    /// DELETE 
    public static function deleteAll(){
        $response = Http::get('http://localhost/SPARKS_API/deleteAll.php');
        return $response->json();
    }

    public static function deleteById($request){
        $response = Http::asForm()->post('http://localhost/SPARKS_API/deleteById.php',[
            'id' => $request,
            'table' => 'payment'
        ]);
        return $response->json();
    }
}
