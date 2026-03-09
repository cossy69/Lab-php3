<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/txn', function(){
    $query = DB::table('tin')
    ->select('id','tieuDe','xem')
    ->orderBy('xem','desc')
    ->limit(10);
    $data = $query->get();
    foreach($data as $tin) echo "<p> {$tin->tieuDe} </p>";
});

Route::get('/tinmoi', function(){
    $query = DB::table('tin')->select('id','tieuDe','ngayDang')->orderBy('ngayDang','desc')->limit(10);
    $data = $query->get(10);
    return view('tinmoi', ['data'=>$data]);
});

Route::get('/tintrongloai/{id}', function($id) {
    // Join bảng tin với loaiTin để lấy cột 'ten' của loại tin 
    $data = DB::table('tin')
        ->join('loaiTin', 'tin.idLT', '=', 'loaiTin.id')
        ->select('tin.*', 'loaiTin.ten as tenLoai')
        ->where('tin.idLT', '=', $id) 
        ->orderBy('tin.ngayDang', 'desc')
        ->get(); 

    return view('tintrongloai', ['data' => $data]); 
});

Route::get('/tin/{id}', function($id) {
    $tin = DB::table('tin')->where('id', $id)->first();
    return view('chitiettin', ['tin' => $tin]);
});

Route::get('/', function () {
    // 1. Lấy 5 tin mới nhất
    $tin_moi = DB::table('tin')->orderBy('ngayDang', 'desc')->limit(5)->get();

    // 2. Lấy 5 tin xem nhiều nhất
    $tin_xem_nhieu = DB::table('tin')->orderBy('xem', 'desc')->limit(5)->get();

    // 3. Lấy danh sách các loại tin để làm menu điều hướng
    $loai_tin = DB::table('loaiTin')->where('anHien', 1)->get();

    return view('trangchu', compact('tin_moi', 'tin_xem_nhieu', 'loai_tin'));
});