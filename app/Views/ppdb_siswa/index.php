<h2>Daftar Siswa Terdaftar</h2>

<?php if (session()->getFlashdata('message')): ?>
    <p><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<table>
    <tr>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Pilihan Jurusan</th>
        <th>Nilai Ijazah</th>
    </tr>
    <?php if (!empty($siswa) && is_array($siswa)): ?>
        <?php foreach ($siswa as $s): ?>
            <tr>
                <td><?= $s['nama_lengkap'] ?></td>
                <td><?= $s['tempat_lahir'] ?></td>
                <td><?= $s['tanggal_lahir'] ?></td>
                <td><?= $s['alamat'] ?></td>
                <td><?= $s['telepon'] ?></td>
                <td><?= $s['email'] ?></td>
                <td><?= $s['pilihan_jurusan'] ?></td>
                <td><?= $s['nilai_ijazah'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Belum ada data siswa.</td>
        </tr>
    <?php endif; ?>

</table>