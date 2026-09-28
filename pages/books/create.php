<?php $pageTitle = 'Tambah Buku'; $pageSubtitle = 'Form tambah buku'; require_once '../../repositories/category-repository.php'; require_once '../../repositories/author-repository.php'; $categories = getCategories(); $authors = getAuthors(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/books/store.php">
<input name="title" placeholder="Judul" required>
<select name="category"><?php foreach ($categories as $c): ?><option><?php echo $c['name']; ?></option><?php endforeach; ?></select>
<?php foreach ($authors as $a): ?><label><input type="checkbox" name="authors[]" value="<?php echo $a['name']; ?>"><?php echo $a['name']; ?></label><?php endforeach; ?>
<input name="year" placeholder="Tahun"><input name="stock" placeholder="Stok">
<button>Simpan</button></form>
