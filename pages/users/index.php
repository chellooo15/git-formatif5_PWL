<?php $pageTitle = 'Manajemen Pengguna'; $pageSubtitle = 'Daftar pengguna'; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p><a href="create.php">Tambah Pengguna</a></p>
<table border="1"><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>
<tr><td>1</td><td>Admin</td><td><a href="edit.php?id=1">Edit</a> | <a href="#">Hapus</a></td></tr>
</table>
