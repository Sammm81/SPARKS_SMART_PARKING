<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Book;
use App\Models\Slot;
use App\Models\User;
use App\Models\Place;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function routes($page, Request $request){
        $session = $request->session()->all();

        switch ($page) {
            case 'dashboard':
                return view('admin/dashboard', [
                    'title' => 'SPARKS || DASHBOARD',
                    'session' => $session
                ]);
                break;

            case 'area':
                return view('admin/areaView', [
                    'title' => 'SPARKS || AREAS',
                    'session' => $session,
                    'datas' => Area::getAll()
                ]);
                break;
            case 'slot':
                return view('admin/slotView', [
                    'title' => 'SPARKS || SLOTS',
                    'session' => $session,
                    'datas' => Slot::getAll()
                ]);
                break;
            case 'place':
                return view('admin/placeView', [
                    'title' => 'SPARKS || PLACES',
                    'session' => $session,
                    'datas' => Place::getAll()
                ]);
                break;
            case 'users':
                return view('admin/userView', [
                    'title' => 'SPARKS || USERS',
                    'session' => $session,
                    'datas' => User::getAll()
                ]);
                break;
            case 'payment':
                return view('admin/paymentView', [
                    'title' => 'SPARKS || PAYMENTS',
                    'session' => $session,
                    'datas' => Payment::getAll()
                ]);
                break;
            case 'book':
                return view('admin/bookView', [
                    'title' => 'SPARKS || BOOKS',
                    'session' => $session,
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
 
    public function delete($page, $id){
        switch ($page) {
            case 'users':
                User::deleteById($id);
                return redirect('/admin/users');
                break;
            case 'slot':
                Slot::deleteById($id);
                return redirect('/admin/slot');
                break;
            case 'area':
                Area::deleteById($id);
                return redirect('/admin/area');
                break;
            case 'place':
                Place::deleteById($id);
                return redirect('/admin/place');
                break;
            case 'book':
                Book::deleteById($id);
                return redirect('/admin/book');
                break;
            case 'payment':
                Payment::deleteById($id);
                return redirect('/admin/payment');
                break;
            
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function add($page, Request $request){
        $session = $request->session()->all();

        return view('admin/'.$page.'Form', [
            'title' => 'SPARKS || EDIT',
            'session' => $session,
            'action' => 'add'
        ]);
    }

    public function addPost($page, Request $request){
        switch ($page) {
            case 'users':
                $value = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password
                );
                $response = User::register($value);
                return redirect('/admin/users');
                break;
            case 'slot':
                $value = array(
                    'areaId' => $request->areaId,
                    'name' => $request->name
                );
                Slot::addSlot($value);
                return redirect('admin/slot');
                break;
            case 'area':
                $value = array(
                    'placeId' => $request->placeId,
                    'name' => $request->name
                );
                Area::addArea($value);
                return redirect('admin/area');
                break;
            case 'place':
                $value = array(
                    'name' => $request->name
                );
                Place::addPlace($value);
                return redirect('admin/place');
                break;
            case 'book':
                $value = array(
                    'userId' => $request->userId,
                    'slotId' => $request->slotId
                );
                Book::addBook($value);
                return redirect('admin/book');
                break;
            case 'payment':
                $value = array(
                    'bookId' => $request->bookId
                );
                Payment::addPayment($value);
                return redirect('admin/payment');
                break;
            
            default:
                return redirect('admin/dashboard');
                break;
        }
    }
    
    public function edit($page, $id, Request $request){
        $session = $request->session()->all();

        switch ($page) {
            case 'users':
                return view('admin/usersForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => User::getById($id)
                ]);
                break;
            case 'slot':
                return view('admin/slotForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => Slot::getById($id)
                ]);
                break;
            case 'area':
                return view('admin/areaForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => Area::getById($id)
                ]);
                break;
            case 'place':
                return view('admin/placeForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => Place::getById($id)
                ]);
                break;
            case 'book':
                $value = array(
                    'bookId' => $id
                );
                return view('admin/bookForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => Book::getById($value)
                ]);
                break;
            case 'payment':
                return view('admin/paymentForm', [
                    'title' => 'SPARKS || EDIT',
                    'action' => 'edit',
                    'session' => $session,
                    'data' => Payment::getById($id)
                ]);
                break;
            
            default:
                return redirect('admin/dashboard');
                break;
        }
    }

    public function editPost($page, Request $request){
        switch ($page) {
            case 'users':
                $value = array(
                    'id' => $request->id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'admin' => $request->admin,
                    'balance' => $request->balance
                );
                User::updateById($value);
                return redirect('admin/users');
                break;
            case 'slot':
                $value = array(
                    'id' => $request->id,
                    'slot_name' => $request->name
                );
                $values = array('Details' => $value);
                Slot::updateById($values, $request->book, $request->available);
                return redirect('admin/slot');
                break;
            case 'area':
                $value = array(
                    'id' => $request->id,
                    'name' => $request->name,
                    'full' => $request->full
                );
                Area::updateById($value);
                return redirect('admin/area');
                break;
            case 'place':
                $value = array(
                    'id' => $request->id,
                    'name' => $request->name,
                    'full' => $request->full
                );
                Place::updateById($value);
                return redirect('admin/place');
                break;
            case 'book':
                $value = array(
                    'bookId' => $request->id
                );
                Book::updateById($value, $request->verified);
                return redirect('admin/book');
                break;
            case 'payment':
                $value = array(
                    'id' => $request->id,
                    'paid' => $request->paid
                );
                Payment::updateById($value);
                return redirect('admin/payment');
                break;
            
            default:
                return redirect('admin/dashboard');
                break;
        }
    }
}
