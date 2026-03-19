@extends('layouts.app')
@section('content')
<div class="mb-4 border-bottom pb-2">
    <span class="h4">Chuyên mục: {{ $loaitin_hientai->ten }}</span>
</div>
<div class="row">
    @foreach($tintuc as $tt)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $tt->tieuDe }}</h5>
                <p class="card-text">{{ $tt->tomTat }}</p>
                <a href="/detail/{{ $tt->id }}" class="btn btn-primary">Đọc tiếp</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection