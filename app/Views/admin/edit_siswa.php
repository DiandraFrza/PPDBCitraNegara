<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <h3>Edit Data Siswa</h3>
    <form action="admin/data_pndftaran/update<?= $siswa['id_siswa'] ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $siswa['nama_lengkap'] ?>" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki" <?= $siswa['jenis_kelamin'] === 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                <option value="Perempuan" <?= $siswa['jenis_kelamin'] === 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir'] ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required><?= $siswa['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $siswa['telepon'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $siswa['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="pilihan_jurusan">Pilihan Jurusan</label>
            <input type="text" class="form-control" id="pilihan_jurusan" name="pilihan_jurusan" value="<?= $siswa['pilihan_jurusan'] ?>" required>
        </div>
        <div class="form-group">
            <label for="nilai_ijazah">Nilai Ijazah</label>
            <input type="number" class="form-control" id="nilai_ijazah" name="nilai_ijazah" value="<?= $siswa['nilai_ijazah'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/admin/data_pndftaran" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection(); ?>