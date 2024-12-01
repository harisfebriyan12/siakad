<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .content h2 {
            color: #003366;
            font-size: 28px;
            font-weight: bold;
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
            margin: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .section-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #3b5998;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        .section-title i {
            color: #e91e63;
            margin-right: 10px;
            font-size: 2rem; /* Ukuran Ikon Lebih Besar */
        }
        .content-line {
            height: 4px;
            width: 60px;
            background-color: #e91e63;
            margin: 10px auto;
        }
        .misi-text {
            font-size: 1.125rem;
            color: #555;
            line-height: 1.6;
        }
        /* Responsif pada lebar layar kecil */
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
    <div class="row justify-content-center">
        <!-- Visi Section -->
        <div class="col-md-10 col-lg-8" data-aos="fade-left" data-aos-duration="1000">
            <div class="card">
                <div class="section-title">
                    <i class="fas fa-eye"></i> VISI
                </div>
                <div class="content-line"></div>
                <p class="misi-text">
                    "TERBENTUKNYA PESERTA DIDIK YANG HEBAT DALAM PRESTASI, TERAMPIL, DAN BERAKHLAKUL KARIMAH BERDASARKAN PROFIL PELAJAR PANCASILA"
                </p>
            </div>
        </div>

        <!-- Misi Section -->
        <div class="col-md-10 col-lg-8" data-aos="fade-right" data-aos-duration="1000">
            <div class="card">
                <div class="section-title">
                    <i class="fas fa-bullseye"></i> MISI
                </div>
                <div class="content-line"></div>
                <p class="misi-text">
                    1. Melaksanakan pembelajaran dan bimbingan secara efektif dan berpihak kepada peserta didik sehingga peserta didik dapat berkembang secara optimal, sesuai potensi yang dimiliki.<br>
                    2. Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah.<br>
                    3. Membangun budaya positif di sekolah berdasarkan potensi yang dimiliki dan kearifan lokal.<br>
                    4. Melaksanakan pembelajaran ekstrakurikuler secara efektif sesuai dengan minat dan bakat peserta didik sehingga peserta memiliki keunggulan dalam belajar mandiri serta lomba akademik/non akademik.<br>
                    5. Mewujudkan penghayatan terhadap agama yang dianut dan budaya bangsa sehingga menjadi sumber kearifan dalam bertindak.<br>
                    6. Melaksanakan tata tertib sekolah secara konsisten dan konsekuen.<br>
                    7. Melaksanakan komunikasi dan koordinasi antar sekolah, masyarakat, orang tua, dan instansi lain yang terkait secara periodik berkesinambungan.
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
