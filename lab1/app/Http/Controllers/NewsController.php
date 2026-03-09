<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index() {
        return view('index');
    }
    function contact() {
        return view('contact');
    }
    function getOneNews($id){
        $data = ['id'=>$id];
        return view('detail',$data);
    }
}