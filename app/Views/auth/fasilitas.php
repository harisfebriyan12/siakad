<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }
        .content h2 {
            color: #003366;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .content-container {
            padding: 40px 0;
        }
        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            transition: transform 0.3s;
            margin: 20px 0;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #3b5998;
            margin-bottom: 15px;
        }
        .section-title i {
            color: #e91e63;
            margin-right: 10px;
            font-size: 2rem; /* Bigger Icon Size */
        }
        .content-line {
            height: 4px;
            width: 60px;
            background-color: #e91e63;
            margin: 10px auto;
        }
        /* Responsive for wider layouts */
        @media (max-width: 768px) {
            .card {
                padding: 20px;
            }
            .section-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<div class="container content-container">
<div class="section-title">
    <i class="fas fa-cogs"></i> Fasilitas Kami
</div>
    <div class="row justify-content-center">
        
        <!-- Perpustakaan Section -->
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRURxWjcU6x8wu6z69k6naIwLM03rr8X6zEDQ&s" alt="Perpustakaan">
                <div class="section-title">
                    <i class="fas fa-book"></i> Perpustakaan
                </div>
                <div class="content-line"></div>
                <p>
                    Perpustakaan kami menyediakan berbagai koleksi buku untuk mendukung proses pembelajaran.
                </p>
            </div>
        </div>

       <div class="col-md-4 col-lg-3">
    <div class="card">
        <img src="/images/g.jpeg" alt="Laboratorium Kimia">
        <div class="section-title">
            <i class="fas fa-basketball-ball"></i> Lapangan<!-- Ganti ikon menjadi basket -->
        </div>
        <div class="content-line"></div>
        <p>
            Dilengkapi dengan Ring Basket dan lapangan olahraga <!-- Tambahkan teks tambahan -->
        </p>
    </div>
</div>

        <!-- Kantin Section -->
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <img src="data:image/jpeg;base64,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" alt="Kantin">
                <div class="section-title">
                    <i class="fas fa-utensils"></i> Kantin
                </div>
                <div class="content-line"></div>
                <p>
                    Kantin menyediakan makanan sehat dan bergizi untuk mendukung kebutuhan energi siswa.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- AOS Animation Library -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init(); // Initialize AOS animations
</script>

</body>
</html>
