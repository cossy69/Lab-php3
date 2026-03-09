<style>
/* Tổng thể trang [cite: 323, 560] */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 850px;
    margin: 40px auto;
    padding: 0 20px;
    background-color: #f4f7f6;
}

/* Tiêu đề trang [cite: 471, 482] */
h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 2.2rem;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Container cho mỗi tin [cite: 509, 514] */
.news-item {
    background: #fff;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s;
    /* Hiệu ứng khi di chuột  */
}

.news-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

/* Tiêu đề tin [cite: 475, 512] */
.news-item p {
    font-size: 1.3rem;
    font-weight: 700;
    margin: 0 0 10px 0;
}

.news-item p a {
    text-decoration: none;
    color: #e74c3c;
    transition: color 0.2s;
}

.news-item p a:hover {
    color: #c0392b;
}

/* Ngày đăng [cite: 476, 484] */
.news-item em {
    display: block;
    font-size: 0.9rem;
    color: #7f8c8d;
    font-style: normal;
}

/* Thanh ngang phân cách [cite: 477, 514] */
hr {
    border: 0;
    height: 1px;
    background: #eee;
    margin: 0;
}
</style>

<h1>Tin mới nhất</h1>

@foreach($data as $tin)
<div class="news-item">
    <p>
        <a href="/tin/{{ $tin->id }}">{{ $tin->tieuDe }}</a>
    </p>
    <em>Ngày đăng: {{ date('d/m/Y', strtotime($tin->ngayDang)) }}</em> [cite: 347, 476]
</div>
@endforeach