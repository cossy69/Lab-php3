<style>
body {
    font-family: 'Segoe UI', sans-serif;
    line-height: 1.6;
    background: #f4f7f6;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 1000px;
    margin: auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
}

header {
    grid-column: 1 / span 2;
    background: #2c3e50;
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

/* Menu Loại tin */
nav {
    margin-top: 15px;
}

nav a {
    color: #ecf0f1;
    text-decoration: none;
    margin: 0 10px;
    font-weight: bold;
}

nav a:hover {
    color: #e74c3c;
}

/* Column */
.main-col,
.side-col {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

h2 {
    border-left: 5px solid #e74c3c;
    padding-left: 10px;
    color: #333;
}

.news-item {
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
}

.news-item a {
    text-decoration: none;
    color: #2980b9;
    font-weight: bold;
    font-size: 1.1rem;
}

.news-item a:hover {
    color: #e74c3c;
}

.meta {
    font-size: 0.8rem;
    color: #95a5a6;
}
</style>

<div class="container">
    <header>
        <h1>TIN TỨC ONLINE</h1>
        <nav>
            @foreach($loai_tin as $lt)
            <a href="/tintrongloai/{{ $lt->id }}">{{ $lt->ten }}</a>
            @endforeach
        </nav>
    </header>

    <div class="main-col">
        <h2>TIN MỚI CẬP NHẬT</h2>
        @foreach($tin_moi as $tm)
        <div class="news-item">
            <a href="/tin/{{ $tm->id }}">{{ $tm->tieuDe }}</a>
            <div class="meta">Ngày đăng: {{ date('d/m/Y', strtotime($tm->ngayDang)) }}</div>
        </div>
        @endforeach
    </div>

    <div class="side-col">
        <h2>XEM NHIỀU NHẤT</h2>
        @foreach($tin_xem_nhieu as $txn)
        <div class="news-item">
            <a href="/tin/{{ $txn->id }}" style="font-size: 0.95rem;">{{ $txn->tieuDe }}</a>
            <div class="meta">Lượt xem: {{ $txn->xem }}</div>
        </div>
        @endforeach
    </div>
</div>