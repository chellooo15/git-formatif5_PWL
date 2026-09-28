<?php $pageTitle = 'Manajemen Buku'; $pageSubtitle = 'Daftar buku'; require_once '../../repositories/book-repository.php'; $books = getBooks(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p><a href="create.php">Tambah Buku</a></p>
<table border="1"><tr><th>ID</th><th>Judul</th><th>Aksi</th></tr>
<?php foreach ($books as $b): ?>
<tr><td><?php echo $b['id']; ?></td><td><?php echo $b['title']; ?></td>
<td><a href="show.php?id=<?php echo $b['id']; ?>">Detail</a> | <a href="edit.php?id=<?php echo $b['id']; ?>">Edit</a> | <a href="#">Hapus</a></td></tr>
<?php endforeach; ?></table>
