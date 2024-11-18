<?= $this->extend('admin/templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Siswa</h1>
    <form action="<?= site_url('admin/data_pndftaran/simpan') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <!-- Tambahkan field lainnya sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection(); ?>