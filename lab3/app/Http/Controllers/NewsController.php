<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function home() {
        $loaitin = DB::table('loaitin')->get();
        $tinnoibat = DB::table('tin')->where('noiBat', 1)->orderBy('ngayDang', 'desc')->limit(5)->get();
        return view('home', compact('tinnoibat', 'loaitin'));
        return view('layouts/app', compact('loaitin'));
    }

    public function detail($id) {
        $tintuc = DB::table('tin')->where('id', $id)->first();
        $loaitin = DB::table('loaitin')->get();
        return view('detail', compact('id', 'tintuc', 'loaitin'));
    }

    public function listof($idLT) {
        $loaitin_hientai = DB::table('loaitin')->where('id', $idLT)->first();
        $loaitin = DB::table('loaitin')->get();
        $tintuc = DB::table('tin')->where('idLT', $idLT)->orderBy('xem', 'desc')->limit(5)->get();
        return view('listof', compact('idLT', 'loaitin', 'tintuc', 'loaitin_hientai'));
    }
}