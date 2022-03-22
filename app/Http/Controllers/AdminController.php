<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function create(){
        return "Pagina para crear un Admin";
    }
    public function show(){
        //
    }
    public function edit(){
        //
    }
    public function update(){
        //
    }
    public function destroy(){
        //
    }
}
