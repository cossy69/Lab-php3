@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                @foreach($tinnoibat as $tnb)
                <h4 class="card-title">{{$tnb->tieuDe}}</h4>
                <p class="card-text">{{$tnb->tomTat}}</p>
                <a href="/detail/{{$tnb->id}}" class="btn btn-primary">Đọc tiếp</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">Danh Mục Tin Tức</div>
            <ul class="list-group list-group-flush">
                @foreach($loaitin as $lt)
                <li class="list-group-item">
                    <a href="/listof/{{$lt->id}}">{{$lt->ten}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection