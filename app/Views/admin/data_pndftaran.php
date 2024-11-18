<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Main Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Siswa Terdaftar</h1>
    <?= session()->getFlashdata('success') ? '<div class="alert alert-success alert-dismissible fade show" role="alert">'
        . session()->getFlashdata('success') .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>' : '' ?>

    <?= session()->getFlashdata('error') ? '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
        . session()->getFlashdata('error') .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>' : '' ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button id="printBtn" class="btn btn-secondary">Print</button>
                <a href="<?= site_url('ppdb_siswa/export_pdf') ?>" class="btn btn-danger">Export to PDF</a>
                <a href="<?= site_url('ppdb_siswa/export_excel') ?>" class="btn btn-success">Export to Excel</a>
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalTambahSiswa">
                    Tambah Siswa
                </button>
            </div>

            <!-- Modal Tambah Siswa -->
            <div class="modal fade" id="modalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="<?= site_url('admin/data_pndftaran/simpan') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Data Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="pilihan_jurusan">Pilihan Jurusan</label>
                                    <input type="text" class="form-control" id="pilihan_jurusan" name="pilihan_jurusan" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_ijazah">Nilai Ijazah</label>
                                    <input type="number" step="0.01" class="form-control" id="nilai_ijazah" name="nilai_ijazah" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="table-responsive">
                <table id="dataTable" class="table table-sm table-striped table-bordered" width="100%" style="overflow-x: scroll;">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Nama Lengkap</th>
                            <th scope="col" class="text-center">Jenis Kelamin</th>
                            <th scope="col" class="text-center">Tanggal Lahir</th>
                            <th class="text-center align-middle" rowspan="2">Alamat</th>
                            <th class="text-center align-middle" rowspan="2">Telepon</th>
                            <th class="text-center align-middle" rowspan="2">Email</th>
                            <th scope="col" class="text-center">Pilihan Jurusan</th>
                            <th scope="col" class="text-center">Nilai Ijazah</th>
                            <th class="text-center align-middle" rowspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($siswa) && is_array($siswa)): ?>
                            <?php foreach ($siswa as $s): ?>
                                <tr>
                                    <td><?= esc($s['nama_lengkap']) ?></td>
                                    <td><?= esc($s['jenis_kelamin']) ?></td>
                                    <td><?= esc($s['tanggal_lahir']) ?></td>
                                    <td><?= esc($s['alamat']) ?></td>
                                    <td><?= esc($s['telepon']) ?></td>
                                    <td><?= esc($s['email']) ?></td>
                                    <td><?= esc($s['pilihan_jurusan']) ?></td>
                                    <td><?= esc($s['nilai_ijazah']) ?></td>
                                    <td>
                                        <a href="<?= site_url('admin/data_pndftaran/edit/' . $s['id_siswa']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= site_url('admin/data_pndftaran/hapus/' . $s['id_siswa']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">Tidak ada data siswa.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "language": {
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "paginate": {
                    "previous": "Previous",
                    "next": "Next"
                }
            }
        });

        document.getElementById('printBtn').addEventListener('click', function() {
            window.print();
        });
    });
</script>