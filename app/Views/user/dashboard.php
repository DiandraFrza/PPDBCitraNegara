<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets-user/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('boostrap/css/boostrap.min.css') ?>">
</head>

<body>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="notif-success" id="successNotification">
            <span><?= session()->getFlashdata('success') ?></span>
            <button class="close-btn" onclick="closeNotification()">×</button>
        </div>
    <?php endif; ?>
    <div class="header-container">
        <div class="logo-container">
            <img class="logocn" alt="Logo Citra Negara" src="<?= base_url('assets-user/img/logocn2.png') ?>" />
            <span class="text-container">
                SEKOLAH MENENGAH KEJURUAN CITRA NEGARA
            </span>
        </div>
        <div class="logos-container">
            <img alt="Logo SMK HEBAT" src="<?= base_url('assets-user/img/smkhebat.png') ?>" />
            <img alt="Logo TEKNISI GO" src="<?= base_url('assets-user/img/teknisigo.png') ?>" />
            <img alt="Logo MASAGI" src="<?= base_url('assets-user/img/masagi.png') ?>" />
            <img alt="Logo ADIWIYATA" src="<?= base_url('assets-user/img/adiwiyata.png') ?>" />
        </div>
    </div>
    <div class="navbar-container navbar-colored">
        <a href="#home">
            Home
        </a>
        <a href="#kejuruan">
            Kejuruan
        </a>
        <a href="#ekstrakulikuler">
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
            </div>
            <div class="home-btn">
                <button class="button-59 mr-10" role="button" onclick="location.href='<?= site_url('/admin/login') ?>'">MASUK</button>
                <button class="button-59 mr-10" role="button" onclick="location.href='<?= base_url('/ppdb_siswa/daftar') ?>'">DAFTAR</button>
            </div>
            <div class="stats-container">
                <div class="stat-item">
                    <img src="<?= base_url('assets-user/img/gedung.png') ?>" alt="Ruang Kelas">
                    <p class="count" data-target="72">0</p>
                    <p>Ruang Kelas</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('assets-user/img/siswa.png') ?>" alt="Siswa">
                    <p class="count" data-target="2890">0</p>
                    <p>Murid</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('assets-user/img/guru.png') ?>" alt="Guru">
                    <p class="count" data-target="100">0</p>
                    <p>Guru</p>
                </div>
                <div class="stat-item">
                    <img src="<?= base_url('assets-user/img/piagam.png') ?>" alt="Prestasi">
                    <p class="count" data-target="1000">0</p>
                    <p>Prestasi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kejuruan" class="p-4">
        <h2 class="text-center fs-2 jurusan-text">List Jurusan</h2><br><br>
        <div class="jurusan-slider">
            <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
            <div class="jurusan-wrapper" id="sliderContainer">
                <div class="jurusan-item">
                    <img src="<?= base_url('assets-user/img/jurusan/PPLG.png') ?>" alt="PPLG">
                    <p>PPLG (Pengembangan Perangkat Lunak dan Gim)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('assets-user/img/jurusan/TKJT.png') ?>" alt="TKJT">
                    <p>TKJT (Teknik Jaringan Komputer dan Telekomunikasi)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('assets-user/img/jurusan/PEMASARAN.png') ?>" alt="Pemasaran">
                    <p>Pemasaran</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('assets-user/img/jurusan/DKV.png') ?>" alt="DKV">
                    <p>DKV (Desain Komunikasi Visual)</p>
                </div>
                <div class="jurusan-item">
                    <img src="<?= base_url('assets-user/img/jurusan/MPLB.png') ?>" alt="MPLB">
                    <p>MPLB (Manajemen Perkantoran dan Layanan Bisnis)</p>
                </div>
            </div>
            <button class="next" onclick="moveSlider(1)">&#10095;</button>
        </div>
    </section>

    <section id="sertifikat">
        <h2 class="text-center fs-2 sertifikat-text">Sertifikat</h2><br><br>
        <div class="sertifikat-container">
            <div class="sertifikat-wrapper">
                <div class="certificate">
                    <img src="<?= base_url('assets-user/img/sertifikat/certif1.png'); ?>" alt="Akreditasi Sertifikat" onclick="showCertificate('<?= base_url('assets-user/img/sertifikat/certif1.png'); ?>')">
                    <div class="sertifikat-caption">Akreditasi Sertifikat</div>
                </div>
                <div class="certificate">
                    <img src="<?= base_url('assets-user/img/sertifikat/certif2.png'); ?>" alt="Sekolah Adiwiyata" onclick="showCertificate('<?= base_url('assets-user/img/sertifikat/certif2.png'); ?>')">
                    <div class="sertifikat-caption">Sekolah Masagi</div>
                </div>
                <div class="certificate">
                    <img src="<?= base_url('assets-user/img/sertifikat/certif3.png'); ?>" alt="Lomba Gala Kreasi" onclick="showCertificate('<?= base_url('assets-user/img/sertifikat/certif3.png'); ?>')">
                    <div class="sertifikat-caption">Lomba Gala Kreasi</div>
                </div>
                <div class="certificate">
                    <img src="<?= base_url('assets-user/img/sertifikat/certif4.png'); ?>" alt="Sekolah Masagi" onclick="showCertificate('<?= base_url('assets-user/img/sertifikat/certif4.png'); ?>')">
                    <div class="sertifikat-caption">Sekolah Adiwiyata</div>
                </div>
            </div>
        </div>
    </section>

    <section id="ekstrakulikuler">
        <header class="bg-yellow py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">EKSTRAKULIKULER</h1>
                    <p class="lead fw-normal text-black-50 mb-0">Daftarkan diri Anda Sekarang Juga!</p>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">HOTS</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0000.jpg'); ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0001.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0002.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0003.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0004.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0005.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0006.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0007.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0008.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets-user/img/eskul/IMG-20241031-WA0009.jpg'); ?>" alt="Akreditasi Sertifikat" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nama Eskul-->
                                <h5 class="fw-bolder">XXXX</h5>
                                <!-- Deskripsi-->
                                XXXXXXX
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Daftar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prestasi" class="pt-4">
        <h2 class="text-center fs-2 prestasi-text">Prestasi Non Akademik</h2><br><br>
        <div class="prestasi-wrapper">
            <div class="gallery">
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/band.jpg'); ?>" alt="JUARA BAND">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/dancer.jpg'); ?>" alt="JUARA DANCE">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/ff.jpg'); ?>" alt="JUARA FREEFIRE">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/futsal.jpg'); ?>" alt="JUARA FUTSAL">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/futsal1.jpg'); ?>" alt="JUARA FUTSAL">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/guitar.jpg'); ?>" alt="JUARA GITAR">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/paskibra.jpg'); ?>" alt="JUARA PASKIBRA">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/puisi.jpg'); ?>" alt="JUARA PUISI">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/taekwondo.jpg'); ?>" alt="JUARA TAEKWONDO">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/taekwondo1.jpg'); ?>" alt="JUARA TAEKWONDO">
                </figure>
                <figure class="card-prestasi">
                    <img src="<?= base_url('assets-user/img/prestasi/volly.jpg'); ?>" alt="JUARA VOLLY">
                </figure>
            </div>
        </div>
    </section>

    <div id="overlay-sertifikat" onclick="closeOverlay()">
        <img id="full-img" src="" alt="Full Certificate">
        <button id="close-btn" onclick="closeOverlay()">X</button>
    </div>

    <section id="contact">
        <h2 class="text-center fs-2 prestasi-text">Contact</h2><br><br>
        <div class="feedback-card">
            <div class="feedback-header">
                SEND FEEDBACK
            </div>
            <form class="feedback-body">
                <input type="email" class="feedback-body__email" placeholder="Email" />
                <textarea type="text" class="feedback-body__message" placeholder="Message"></textarea>
                <!-- Tombol untuk membuka map -->
                <button class="feedback-body__submit">SEND</button>
            </form>
        </div>
    </section>

    <div class="map-container" id="mapContainer" onclick="toggleFullscreen()">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.419338529648!2d106.8096617!3d-6.3804675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eeacc6e549ab%3A0xd6c5c8ece644d8ee!2sSekolah%20Menengah%20Kejuruan%20Citra%20Negara!5e0!3m2!1sid!2sid!4v1728786042559!5m2!1sid!2sid"
            loading="lazy">
        </iframe>
    </div>

</body>
<footer class="py-5 footer-wrapper">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; @Diandrfrzaa_</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets-user/js/script.js') ?>"></script>
<script src="<?= base_url('boostrap/js/boostrap.min.js') ?>"></script>
<script>
    function toggleFullscreen() {
        const mapContainer = document.getElementById('mapContainer');
        mapContainer.classList.toggle('fullscreen');
    }

    function increaseNumberAnimation() {
        const counters = document.querySelectorAll('.count');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const currentCount = +counter.innerText;
                const increment = target / 50; // Atur pembagian supaya kecepatannya sesuai

                if (currentCount < target) {
                    counter.innerText = Math.ceil(currentCount + increment);
                    setTimeout(updateCount, 50); // Kecepatan animasi, bisa disesuaikan
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    }

    // Memulai animasi saat halaman dimuat
    document.addEventListener("DOMContentLoaded", increaseNumberAnimation);

    // Animasi notifikasi
    document.addEventListener("DOMContentLoaded", function() {
        const notif = document.getElementById("successNotification");
        if (notif) {
            notif.classList.add("show");
            setTimeout(() => notif.classList.remove("show"), 30000); // Auto-hide setelah 30 detik
        }
    });

    // Tutup notifikasi manual
    function closeNotification() {
        document.getElementById("successNotification").style.display = "none";
    }
</script>

</html>