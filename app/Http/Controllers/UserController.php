<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Slot;
use App\Models\Place;
use App\Models\Payment;
use App\Models\Book;
use App\Models\User;

class UserController extends Controller
{
    public function routes($page, Request $request){
        $session_data = $request->session()->all();

        switch ($page) {
            case 'dashboard':
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                    'places' => Place::getAvailablePlace(),
                    'payments' => Payment::getPaymentDetailsByUser($session_data['id']),
                    'session_data' => $session_data
                ]);
                break;
            case 'category':
                return view('user/category', [
                    'title' => 'SPARKS || CATEGORIES',
                    'session_data' => $session_data
                ]);
                break;
            case 'area':
                return view('user/area', [
                    'title' => 'SPARKS || AREAS',
                    'data' => Area::getAvailableArea($session_data['placeId']),
                    'session_data' => $session_data
                ]);
                break;
            case 'slot':
                return view('user/slot', [
                    'title' => 'SPARKS || SLOTS',
                    'data' => Slot::getAvailableSlot($session_data['areaId']),
                    'session_data' => $session_data
                ]);
                break;
            case 'place':
                return view('user/place', [
                    'title' => 'SPARKS || PLACES',
                    'data' => Place::getAvailablePlace(),
                    'session_data' => $session_data
                ]);
                break;
            case 'profile':
                return view('user/profile', [
                    'title' => 'SPARKS || USERS',
                    'data' => User::getById('isi dengan id user dari session'),
                    'session_data' => $session_data
                ]);
                break;
            case 'payments':
                return view('user/payment', [
                    'title' => 'SPARKS || PAYMENTS',
                    'payments' => Payment::getPaymentDetailsByUser($session_data['id']),
                    'session_data' => $session_data
                ]);
                break;
            case 'book':
                return view('user/book', [
                    'title' => 'SPARKS || BOOKS',
                    'data' => Book::getBookDetails($session_data['bookId']),
                    'session_data' => $session_data
                ]);
                break;
            
            default:
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                    'session_data' => $session_data
                ]);
                break;
        }
    }

    public function getCategory(Request $request){
        $request->session()->put('category', $request->category);

        return redirect('user/place');
    }

    public function getPlaceId(Request $request){
        $request->session()->put('placeId', $request->placeId);

        return redirect('user/area');
    }

    public function getAreaId(Request $request){
        $request->session()->put('areaId', $request->areaId);
        return redirect('user/slot');
    }

    public function getSlotId(Request $request){
        $session_data = $request->session()->all();
        $request->session()->put('slotId', $request->slotId);
        $response = Book::addBook($session_data);
        var_dump($response);
        $request->session()->put('bookId', $response['Details']['id']);
        return redirect('user/book');
    }

    public function verifyToken(Request $request){
        $session_data = $request->session()->all();
        $response = Book::verifyToken($request->token);
        if($response['Message'] == 'Success'){
            $slot = Slot::getById($session_data['slotId']);
            Book::updateById($session_data, 1);
            Slot::updateById($slot, 0, 0);
            return redirect('user/dashboard');
        }
        else{
            return redirect('user/book');
        }

    }
}
