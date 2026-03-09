<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Inter', sans-serif;
    background-color: #f3f4f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    width: 100%;
    max-width: 400px;
}

h1 {
    color: #1f2937;
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

hr {
    border: 0;
    height: 1px;
    background: #e5e7eb;
    margin: 1.5rem 0;
}

.info-group {
    margin-bottom: 1.2rem;
}

h3 {
    color: #6b7280;
    font-size: 0.8rem;
    margin: 0;
    text-transform: uppercase;
    font-weight: 600;
}

p {
    color: #111827;
    font-size: 1.1rem;
    margin: 0.2rem 0 0 0;
    font-weight: 500;
}

.highlight {
    color: #3b82f6;
    /* Màu xanh đặc trưng của Laravel/Tailwind */
}
</style>

<div class="card">
    <h1>Student Info</h1>
    <hr>

    <div class="info-group">
        <h3>Student's Name:</h3>
        <p>Đỗ Quang Anh</p>
    </div>

    <div class="info-group">
        <h3>Student's Major:</h3>
        <p class="highlight">Web Development</p>
    </div>

    <div class="info-group">
        <h3>Student's Class:</h3>
        <p>WD20301</p>
    </div>

    <div class="info-group">
        <h3>Student's Address:</h3>
        <p>Thanh Hoa</p>
    </div>

    <hr>
</div>