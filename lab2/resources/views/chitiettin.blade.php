<style>
/* Tổng thể trang */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    max-width: 800px;
    margin: 40px auto;
    padding: 0 20px;
    background-color: #f9f9f9;
}

/* Tiêu đề chính (Bài 4) */
h1 {
    font-size: 2.5rem;
    color: #1a1a1a;
    line-height: 1.2;
    margin-bottom: 20px;
    font-weight: 700;
}

/* Tóm tắt tin */
p {
    font-size: 1.2rem;
    font-weight: 600;
    color: #555;
    border-left: 4px solid #e74c3c;
    /* Tạo điểm nhấn bên trái */
    padding-left: 15px;
    margin-bottom: 30px;
}

/* Nội dung chi tiết */
#noidung {
    font-size: 1.1rem;
    text-align: justify;
    /* Căn đều hai bên cho đẹp */
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}
</style>
<h1>{{$tin->tieuDe}}</h1>
<p>{{ $tin->tomTat }}</p>
<div id="noidung">{!! $tin->noiDung !!}</div>