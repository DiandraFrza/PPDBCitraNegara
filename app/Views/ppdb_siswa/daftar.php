<h2>Form Pendaftaran Siswa</h2>
<form action="/ppdb_siswa/store" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <label>Nama Lengkap:</label>
    <input type="text" name="nama_lengkap" required><br>

    <label>Tempat Lahir:</label>
    <input type="text" name="tempat_lahir" required><br>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required><br>

    <label>Alamat:</label>
    <textarea name="alamat" required></textarea><br>

    <label>Telepon:</label>
    <input type="text" name="telepon" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Pilihan Jurusan:</label>
    <input type="text" name="pilihan_jurusan" required><br>

    <label>Nilai Ijazah:</label>
    <input type="number" name="nilai_ijazah" step="0.01" required><br>

    <label>Foto Siswa:</label>
    <input type="file" name="foto_siswa" required><br>

    <label>Dokumen Pendukung:</label>
    <input type="file" name="dokumen_pendukung" required><br>

    <button type="submit">Daftar</button>
</form>