<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return "Hello World";
    }

    public function show($id){
        return $id;
    }
}
