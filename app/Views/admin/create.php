<!-- app/Views/admin/create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <h1>Tambah Admin</h1>
    <form action="/admin/store" method="post">
        <?= csrf_field() ?>
        <label>Nama</label>
        <input type="text" name="nama" required><br>
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Password</label>
        <input type="password" name="password" required><br>
        <label>Role</label>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="superadmin">Superadmin</option>
        </select><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>