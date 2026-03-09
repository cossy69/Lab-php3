<style>
/* Tổng thể trang */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 900px;
    margin: 40px auto;
    padding: 0 20px;
    background-color: #f4f7f6;
}

/* Tiêu đề loại tin */
h1 {
    color: #2c3e50;
    font-size: 2rem;
    margin-bottom: 30px;
    padding-bottom: 10px;
    border-bottom: 3px solid #e74c3c;
    display: inline-block;
}

/* Container cho mỗi dòng tin */
.news-card {
    background: #fff;
    padding: 25px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

/* Tiêu đề tin */
.news-card h3 {
    margin-top: 0;
    margin-bottom: 12px;
}

.news-card h3 a {
    text-decoration: none;
    color: #2980b9;
    font-size: 1.4rem;
    font-weight: 700;
    transition: color 0.2s;
}

.news-card h3 a:hover {
    color: #e74c3c;
}

/* Tóm tắt tin */
.news-card p {
    color: #666;
    font-size: 1.05rem;
    margin-bottom: 0;
    text-align: justify;
}

/* Thông báo khi trống */
.empty-msg {
    text-align: center;
    padding: 50px;
    color: #95a5a6;
    background: #fff;
    border-radius: 10px;
}
</style>

@if($data->count() > 0)
<h1>TIN TRONG LOẠI: {{ $data[0]->tenLoai }}</h1> @else
<div class="empty-msg">
    <h1>Loại tin này chưa có bài viết</h1>
</div>
@endif

@foreach($data as $tin) <div class="news-card">
    <h3>
        <a href="/tin/{{ $tin->id }}">{{ $tin->tieuDe }}</a>
    </h3>
    <p>{{ $tin->tomTat }}</p>
</div>
@endforeach