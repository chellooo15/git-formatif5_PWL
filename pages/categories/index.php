<?php $pageTitle = 'Manajemen Kategori'; $pageSubtitle = 'Daftar kategori'; require_once '../../repositories/category-repository.php'; $categories = getCategories(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p><a href="create.php">Tambah Kategori</a></p>
<table border="1"><tr><th>ID</th><th>Nama</th><th>Aksi</th></tr>
<?php foreach ($categories as $c): ?>
<tr><td><?php echo $c['id']; ?></td><td><?php echo $c['name']; ?></td>
<td><a href="edit.php?id=<?php echo $c['id']; ?>">Edit</a> | <a href="../../actions/categories/destroy.php?id=<?php echo $c['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td></tr>
<?php endforeach; ?></table>
