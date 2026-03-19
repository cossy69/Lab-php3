<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dự án Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Trang chủ</a>
            <ul class="navbar-nav me-auto">
                @foreach($loaitin as $lt)
                    <li class="nav-item">
                        <a class="nav-link" href="/listof/{{$lt->id}}">{{$lt->ten}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>