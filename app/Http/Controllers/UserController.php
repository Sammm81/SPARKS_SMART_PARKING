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
    public function routes($page){
        switch ($page) {
            case 'dashboard':
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                ]);
                break;
            case 'category':
                return view('user/category', [
                    'title' => 'SPARKS || CATEGORIES',
                ]);
                break;
            case 'area':
                return view('user/area', [
                    'title' => 'SPARKS || AREAS',
                    'data' => Area::getAvailableArea('isi dengan id place dari session')
                ]);
                break;
            case 'slot':
                return view('user/slot', [
                    'title' => 'SPARKS || SLOTS',
                    'data' => Slot::getAvailableSlot('isi dengan id area dari session')
                ]);
                break;
            case 'place':
                return view('user/place', [
                    'title' => 'SPARKS || PLACES',
                    'data' => Place::getAvailablePlace()
                ]);
                break;
            case 'profile':
                return view('user/profile', [
                    'title' => 'SPARKS || USERS',
                    'data' => User::getById('isi dengan id user dari session')
                ]);
                break;
            case 'payments':
                return view('user/payment', [
                    'title' => 'SPARKS || PAYMENTS'
                ]);
                break;
            case 'book':
                return view('user/book', [
                    'title' => 'SPARKS || BOOKS'
                ]);
                break;
            
            default:
                return view('user/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                ]);
                break;
        }
    }

    public function getPlaceId(Request $request){
        // $request->session()->put('placeId', $request->placeId);

        return redirect('user/area');
    }

    public function getAreaId(Request $request){
        // $request->session()->put('areaId', $request->areaId);

        return redirect('user/slot');
    }

    public function getSlotId(Request $request){
        // $request->session()->put('slotId', slotId);

        return redirect('user/book');
    }
}
