<?php $pageTitle = 'Manajemen Penulis'; $pageSubtitle = 'Daftar penulis'; require_once '../../repositories/author-repository.php'; $authors = getAuthors(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p><a href="create.php">Tambah Penulis</a></p>
<table border="1"><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>
<?php foreach ($authors as $a): ?>
<tr><td><?php echo $a['id']; ?></td><td><?php echo $a['name']; ?></td>
<td><a href="edit.php?id=<?php echo $a['id']; ?>">Edit</a> | <a href="../../actions/authors/destroy.php?id=<?php echo $a['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td></tr>
<?php endforeach; ?></table>
