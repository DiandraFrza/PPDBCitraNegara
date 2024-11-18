<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h3 class="text-center">List Admin</h3>

    <a href="/admin/create" class="btn btn-primary mb-3">Tambah Admin</a>

    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($admins) && is_array($admins)): ?>
                        <?php foreach ($admins as $admin): ?>
                            <tr>
                                <td><?= esc($admin['nama']); ?></td>
                                <td><?= esc($admin['role']); ?></td>
                                <td>
                                    <a href="/admin/edit/<?= esc($admin['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/delete/<?= esc($admin['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus admin ini?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data admin yang ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>