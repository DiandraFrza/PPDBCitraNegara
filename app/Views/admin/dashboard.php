<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Main Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Siswa Terdaftar</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button id="printBtn" class="btn btn-secondary">Print</button>
                <a href="<?= site_url('ppdb_siswa/export_pdf') ?>" class="btn btn-danger">Export to PDF</a>
                <a href="<?= site_url('ppdb_siswa/export_excel') ?>" class="btn btn-success">Export to Excel</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Pilihan Jurusan</th>
                            <th>Nilai Ijazah</th>
                            <th>Aksi</th>
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
                                        <a href="<?= site_url('ppdb_siswa/edit/' . $s['id_siswa']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="<?= site_url('ppdb_siswa/delete/' . $s['id_siswa']) ?>" method="post" style="display:inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</button>
                                        </form>
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