@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <h2 class="mb-3">{{$tintuc->tieuDe}}</h2>
        <p class="text-muted small">đăng ngày: {{$tintuc->ngayDang}} | Lượt xem: {{$tintuc->xem}}</p>
        <div class="content" style="line-height: 1.8;">
            <p>{{$tintuc->noiDung}}</p>
        </div>
    </div>
</div>
@endsection