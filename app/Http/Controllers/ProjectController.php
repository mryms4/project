<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function index1(){
        return view('ToDoList');
    }
    public function index2(){
        return view('edit');
    }
    public function index3(){
        return view('add');
    }
    public function index4(){
        return view('delete');
    }
}
