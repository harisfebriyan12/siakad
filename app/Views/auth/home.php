<section id="news" class="section bg-light">
    <div class="container"><br><br>
        <div class="section-title">Dokumentasi Kami</div>
        <div class="content-line"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item: Video -->
                <div class="carousel-item active">
                    <div class="ratio ratio-16x9">
                        <video class="d-block w-100" controls>
                            <source src="/images/kami.mp4" type="video/mp4">
                            Browser Anda tidak mendukung pemutaran video.
                        </video>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 1</h5>
                        <p>Kegiatan AA.</p>
                    </div>
                </div>

                <!-- Carousel Item: Image 1 -->
                <div class="carousel-item">
                    <img src="/images/b.jpeg" class="d-block w-100" alt="Event 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 2</h5>
                        <p>Kegiatan BB.</p>
                    </div>
                </div>

                <!-- Carousel Item: Image 2 -->
                <div class="carousel-item">
                    <img src="/images/a.jpeg" class="d-block w-100" alt="Event 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 3</h5>
                        <p>Kegiatan CC.</p>
                    </div>
                </div>
                    <div class="carousel-item">
                    <img src="/images/e.jpeg" class="d-block w-100" alt="Event 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 4</h5>
                        <p>Kegiatan EE.</p>
                    </div>
                </div>
                    <div class="carousel-item">
                    <img src="/images/f.jpeg" class="d-block w-100" alt="Event 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 5</h5>
                        <p>Kegiatan FF.</p>
                    </div>
                </div>
                          <div class="carousel-item">
                    <img src="/images/g.jpeg" class="d-block w-100" alt="Event 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dokumentasi 6</h5>
                        <p>Kegiatan GG.</p>
                    </div>
                </div>
                <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
            </div>

            <!-- Kontrol Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<style>
  .section {
            padding: 50px 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .content-line {
            width: 60px;
            height: 4px;
            background-color: #0056b3;
            margin: 10px auto 30px auto;
        }

    .carousel-item img {
    height: 500px; /* Sesuaikan ukuran dengan kebutuhan */
    object-fit: cover; /* Hapus ini jika ingin proporsi asli */
    border-radius: 8px;
    }
        .carousel-item video {
    height: 400px; /* Sesuaikan ukuran dengan kebutuhan */
    object-fit: cover; /* Hapus ini jika ingin proporsi asli */
    border-radius: 8px;
    }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6); /* Transparansi untuk teks */
            padding: 15px;
            border-radius: 5px;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .carousel-caption p {
            color: #ddd;
            font-size: 1rem;
        }

        /* Custom tombol carousel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #0056b3; /* Warna tombol sebelumnya dan berikutnya */
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: brightness(90%);
            opacity: 0.7;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            filter: brightness(100%);
            opacity: 1;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                height: 250px;
            }
            .carousel-caption h5 {
                font-size: 1.2rem;
            }
            .carousel-caption p {
                font-size: 0.9rem;
            }
.carousel-item video {
    max-height: 650px; /* Batasi tinggi maksimal */
    width: 100%; /* Pastikan lebar penuh */
    object-fit: cover;
    border-radius: 8px;
}

@media (max-width: 768px) {
    .carousel-item video,
    .carousel-item img {
        height: auto; /* Biarkan ukuran fleksibel */
    }
    .carousel-caption h5 {
        font-size: 1.2rem;
    }
    .carousel-caption p {
        font-size: 0.9rem;
    }
}}
</style>