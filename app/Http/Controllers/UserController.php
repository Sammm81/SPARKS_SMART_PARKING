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
        $session = $request->session()->all();

        switch ($page) {
            case 'dashboard':
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                    'places' => Place::getAvailablePlace(),
                    'payments' => Payment::getPaymentDetailsByUser($session['id']),
                    'session' => $session
                ]);
                break;
            case 'category':
                return view('user/category', [
                    'title' => 'SPARKS || CATEGORIES',
                    'session' => $session
                ]);
                break;
            case 'area':
                return view('user/area', [
                    'title' => 'SPARKS || AREAS',
                    'data' => Area::getAvailableArea($session['placeId']),
                    'session' => $session
                ]);
                break;
            case 'slot':
                return view('user/slot', [
                    'title' => 'SPARKS || SLOTS',
                    'data' => Slot::getAvailableSlot($session['areaId']),
                    'session' => $session
                ]);
                break;
            case 'place':
                return view('user/place', [
                    'title' => 'SPARKS || PLACES',
                    'data' => Place::getAvailablePlace(),
                    'session' => $session
                ]);
                break;
            case 'profile':
                return view('user/profile', [
                    'title' => 'SPARKS || USERS',
                    'data' => User::getById($session['id']),
                    'session' => $session
                ]);
                break;
            case 'payments':
                return view('user/payment', [
                    'title' => 'SPARKS || PAYMENTS',
                    'payments' => Payment::getPaymentDetailsByUser($session['id']),
                    'session' => $session
                ]);
                break;
            case 'book':
                return view('user/book', [
                    'title' => 'SPARKS || BOOKS',
                    'data' => Book::getBookDetails($session['id']),
                    'session' => $session
                ]);
                break;
            
            default:
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                    'session' => $session
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
        $session = $request->session()->all();
        $request->session()->put('slotId', $request->slotId);
        $response = Book::addBook($session);
        var_dump($response);
        $request->session()->put('bookId', $response['Details']['id']);
        return redirect('user/book');
    }

    public function verifyToken(Request $request){
        $session = $request->session()->all();
        $response = Book::verifyToken($request->token);
        if($response['Message'] == 'Success'){
            $slot = Slot::getById($session['slotId']);
            Book::updateById($session, 1);
            Slot::updateById($slot, 0, 0);
            Payment::addPayment($session);
            return redirect('user/dashboard');
        }
        else{
            return redirect('user/book');
        }

    }

    public function pay($id, Request $request){
        $request->session()->decrement('balance', $decrementBy = 2000);
        $session = $request->session()->all();
        $user = User::getById($session['id']);

        $value = array(
            'id' => $id,
            'paid' => 1
        );
        $user = array(
            'id' => $user['Details']['id'],
            'name' => $user['Details']['name'],
            'email' => $user['Details']['email'],
            'admin' => $user['Details']['admin'],
            'balance' => $session['balance']
        );

        Payment::updateById($value);
        User::updateById($user);

        return redirect('user/dashboard');
    }

    public function topUp(Request $request){
        $data = User::getById($request->session()->get('id'));
        $user = $data['Details'];
        $user['balance'] = $user['balance'] + $request->topup;
        User::updateById($user);
        return redirect('/user/profile');
    }
}
