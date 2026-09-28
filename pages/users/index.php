<?php $pageTitle = 'Manajemen Pengguna'; $pageSubtitle = 'Daftar pengguna'; require_once '../../repositories/user-repository.php'; $users = getUsers(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p><a href="create.php">Tambah Pengguna</a></p>
<table border="1"><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>
<?php foreach ($users as $u): ?>
<tr><td><?php echo $u['id']; ?></td><td><?php echo $u['name']; ?></td>
<td><a href="edit.php?id=<?php echo $u['id']; ?>">Edit</a> | <a href="../../actions/users/destroy.php?id=<?php echo $u['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td></tr>
<?php endforeach; ?></table>
