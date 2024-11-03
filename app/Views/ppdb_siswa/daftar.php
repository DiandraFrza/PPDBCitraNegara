<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/daftar.css') ?>">
</head>

<body>
    <a href="<?= base_url('index.php') ?>" class="btn-kembali">Kembali</a>
    <div class="container">
        <header>Form Pendaftaran</header>
        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        <div class="notif pulse">
            <p>Upload foto dan sertifikat opsional. Ini hanya saran, tapi jika tidak diperlukan, bisa kosongkan saja!</p>
            <span class="notif-close" style="cursor: pointer;">&times;</span>
        </div>

        <form class="daftar-wrapper" action="/ppdb_siswa/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="notif-sukses">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="form first">
                <div class="details personal">
                    <span class="title garis-bawahk">Detail Pribadi</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" placeholder="Masukkan Tanggal Lahir" required>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input name="alamat" type="text" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="Masukkan Email" required>
                        </div>


                        <div class="input-field">
                            <label>No.Telepon</label>
                            <input name="telepon" type="number" placeholder="Masukkan No.Telepon" required>
                        </div>

                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title garis-bawahk">Detail Pendaftaran</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nilai Ijazah</label>
                            <input name="nilai_ijazah" type="number" placeholder="Masukkan Nilai Ijazah" required>
                        </div>

                        <div class="input-field">
                            <label>Upload Foto Kamu</label>
                            <input id="foto_siswa" name="foto_siswa" type="file">
                        </div>

                        <div class="input-field">
                            <label>Upload Sertifikat</label>
                            <input id="dokumen_pendukung" name="dokumen_pendukung" type="file"">
                        </div>
                        <div class=" input-field">
                            <label>Pilih Jurusan/Kejuruan</label>
                            <select name="pilihan_jurusan" required>
                                <option disabled selected>List Jurusan</option>
                                <option value="PPPLG">PPPLG</option>
                                <option value="TKJT">TKJT</option>
                                <option value="DKV">DKV</option>
                                <option value="MPLB">MPLB</option>
                                <option value="PEMASARAN">PEMASARAN</option>
                            </select>
                        </div>
                        <button type="submit" class="nextBtn">
                            <span class="btnText">Send</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.querySelector(".notif-close").addEventListener("click", function() {
            document.querySelector(".notif").classList.add("hide");
        });
    </script>
</body>

</html>