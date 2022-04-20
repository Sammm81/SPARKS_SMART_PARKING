<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Book;
use App\Models\Slot;
use App\Models\User;
use App\Models\Place;
use App\Models\Payment;

class AdminController extends Controller
{
    public function routes($page){
        switch ($page) {
            case 'dashboard':
                return view('admin/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                ]);
                break;

            case 'areas':
                return view('admin/areaView', [
                    'title' => 'SPARKS || AREAS',
                    'datas' => Area::getAll()
                ]);
                break;
            case 'slots':
                return view('admin/slotView', [
                    'title' => 'SPARKS || SLOTS',
                    'datas' => Slot::getAll()
                ]);
                break;
            case 'places':
                return view('admin/placeView', [
                    'title' => 'SPARKS || PLACES',
                    'datas' => Place::getAll()
                ]);
                break;
            case 'users':
                return view('admin/userView', [
                    'title' => 'SPARKS || USERS',
                    'datas' => User::getAll()
                ]);
                break;
            case 'payments':
                return view('admin/paymentView', [
                    'title' => 'SPARKS || PAYMENTS',
                    'datas' => Payment::getAll()
                ]);
                break;
            case 'books':
                return view('admin/bookView', [
                    'title' => 'SPARKS || BOOKS',
                    'datas' => Book::getAll()
                ]);
                break;
            
            default:
                return view('admin/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                ]);
                break;
        }
    }

    public function action($page, $action, $id){
        switch ($action) {
            case 'ADD':
                return view('admin/'.$page.'Form', [
                    'title' => 'SPARKS || '.$action,
                    'action' => 'add'
                ]);
                break;
            case 'EDIT':
                return view('admin/'.$page.'Form', [
                    'title' => 'SPARKS || '.$action,
                    'action' => 'edit'
                ]);
                break;
            case 'DELETE':
                $this->delete($page, $id);
                break;
            default:
                return view('admin/'.$page.'Form', [
                    'title' => 'SPARKS || DASHBOARD',
                ]);
                break;
        }
    }

    public function delete($page, $id){
        switch ($page) {
            case 'user':
                User::deleteById($id);
                break;
            case 'place':
                Place::deleteById($id);
                break;
            case 'area':
                Area::deleteById($id);
                break;
            case 'slot':
                Slot::deleteById($id);
                break;
            case 'book':
                Book::deleteById($id);
                break;
            case 'payment':
                Payment::deleteById($id);
                break;
            default:
                return redirect('admin/'.$page.'s');
                break;
        }
    }
}
