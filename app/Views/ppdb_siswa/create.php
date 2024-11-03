<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/main1.css') ?>">
</head>

<div class="daftar-pages">
    <a href="<?= base_url('index.php') ?>" class="btn-kembali">Kembali</a>
    <form class="daftar-wrapper" action="/ppdb_siswa/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <h2>Form Pendaftaran</h2>

        <input class="font-poppins" placeholder="Nama Lengkap" type="text" name="nama_lengkap" required><br>
        <input class="font-poppins" placeholder="Tempat Lahir" type="text" name="tempat_lahir" required><br>
        <input class="font-poppins" placeholder="Tanggal Lahir" type="date" name="tanggal_lahir" required><br>
        <input class="font-poppins" placeholder="Alamat" name="alamat" required><br>
        <input class="font-poppins" placeholder="Telepon" type="text" name="telepon" required><br>
        <input class="font-poppins" placeholder="Email" type="email" name="email" required><br>
        <input class="font-poppins" placeholder="Nilai Ijazah" type="number" name="nilai_ijazah" step="0.01" required><br>


        <label for="foto_siswa" class="file-label font-poppins">Upload Foto Kamu</label>
        <input id="foto_siswa" type="file" name="foto_siswa"><br>

        <label for="dokumen_pendukung" class="file-label font-poppins">Upload Sertifikat</label>
        <input id="dokumen_pendukung" type="file" name="dokumen_pendukung"><br>

        <label class="font-poppins">Pilih Jurusan/Kejuruan:</label><br>
        <div class="jurusan-options">
            <input type="radio" id="pplg" name="pilihan_jurusan" value="PPLG" required>
            <label class="font-poppins" for="pplg">PPLG</label>
            <input type="radio" id="dkv" name="pilihan_jurusan" value="DKV" required>
            <label for="dkv">DKV</label>
            <input type="radio" id="mplb" name="pilihan_jurusan" value="MPLB" required>
            <label for="mplb">MPLB</label>
            <input type="radio" id="tkjt" name="pilihan_jurusan" value="TKJT" required>
            <label for="tkjt">TKJT</label>
            <input type="radio" id="pemasaran" name="pilihan_jurusan" value="PEMASARAN" required>
            <label for="pemasaran">PEMASARAN</label>
        </div>
        <button type="submit">Daftar</button>
    </form>
</div>