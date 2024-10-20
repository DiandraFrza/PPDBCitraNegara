<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('boostrap/css/boostrap.min.css') ?>">
</head>

<body>
    <div class="header-container">
        <div class="logo-container">
            <img class="logocn" alt="Logo Citra Negara" src="<?= base_url('img/logocn2.png') ?>" />
            <span class="text-container">
                SEKOLAH MENENGAH KEJURUAN CITRA NEGARA
            </span>
        </div>
        <div class="logos-container">
            <img alt="Logo SMK HEBAT" src="<?= base_url('img/smkhebat.png') ?>" />
            <img alt="Logo TEKNISI GO" src="<?= base_url('img/teknisigo.png') ?>" />
            <img alt="Logo MASAGI" src="<?= base_url('img/masagi.png') ?>" />
            <img alt="Logo ADIWIYATA" src="<?= base_url('img/adiwiyata.png') ?>" />
        </div>
    </div>
    <div class="navbar-container navbar-colored">
        <a href="#home">
            Home
        </a>
        <a href="#kejuruan">
            Kejuruan
        </a>
        <a href="#eskrakulikuler">
            Ekstrakulikuler
        </a>
        <a href="#prestasi">
            Prestasi
        </a>
        <a href="#contact">
            Contact
        </a>
    </div>
    <section id="home">
        <div class="home-container">
            <div class="overlay"></div>
            <div class="home-text">
                <h1>
                    Selamat Datang di SMK Citra Negara
                </h1>
                <p>
                    Sekolah Terbesar di Kota Depok dengan Segudang Prestasi
                </p>
                <a class="btn btn-primary btn-lg" href="#kejuruan" role="button">
                    Lanjutkan
                </a>
            </div>
            <div class="stats-container">
                <div class="stat-item">
                    <img src="<?= base_url('img/gedung.png') ?>" alt="Ruang Kelas">
                    <p>72 Ruang Kelas</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('img/siswa.png') ?>" alt="Siswa">
                    <p>2.890 Murid</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('img/guru.png') ?>" alt="Guru">
                    <p>100+ Guru</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('img/piagam.png') ?>" alt="Prestasi">
                    <p>1000+ Prestasi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kejuruan" class="p-4">
        <h2 class="text-center fs-2 jurusan-text">Jurusan</h2><br><br>
        <div class="jurusan-slider">
            <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
            <div class="jurusan-wrapper" id="sliderContainer">
                <div class="jurusan-item">
                    <img src="<?= base_url('img/jurusan/PPLG.png') ?>" alt="PPLG">
                    <p>PPLG (Pengembangan Perangkat Lunak dan Gim)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('img/jurusan/TKJT.png') ?>" alt="TKJT">
                    <p>TKJT (Teknik Jaringan Komputer dan Telekomunikasi)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('img/jurusan/PEMASARAN.png') ?>" alt="Pemasaran">
                    <p>Pemasaran</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('img/jurusan/DKV.png') ?>" alt="DKV">
                    <p>DKV (Desain Komunikasi Visual)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('img/jurusan/MPLB.png') ?>" alt="MPLB">
                    <p>MPLB (Manajemen Perkantoran dan Layanan Bisnis)</p>
                </div>
            </div>
            <button class="next" onclick="moveSlider(1)">&#10095;</button>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.419338529648!2d106.8096617!3d-6.3804675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eeacc6e549ab%3A0xd6c5c8ece644d8ee!2sSekolah%20Menengah%20Kejuruan%20Citra%20Negara!5e0!3m2!1sid!2sid!4v1728786042559!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
<script src="<?= base_url('js/script.js') ?>"></script>
<script src="<?= base_url('boostrap/js/boostrap.min.js') ?>"></script>

</html>