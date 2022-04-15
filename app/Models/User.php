<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class User extends Model
{
    public static function getAll(){
        $response = Http::get('http://localhost/SPARKS_API/allUser.php');
        return $response->json();
    }
}
