<?php $pageTitle = 'Tambah Buku'; $pageSubtitle = 'Form tambah buku'; $categories = [['id' => 1, 'name' => 'Fiksi'], ['id' => 2, 'name' => 'Non-Fiksi']]; $authors = [['id' => 1, 'name' => 'Andrea Hirata'], ['id' => 2, 'name' => 'Tere Liye']]; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/books/store.php">
<input name="title" placeholder="Judul" required>
<select name="category"><?php foreach ($categories as $c): ?><option><?php echo $c['name']; ?></option><?php endforeach; ?></select>
<?php foreach ($authors as $a): ?><label><input type="checkbox" name="authors[]" value="<?php echo $a['name']; ?>"><?php echo $a['name']; ?></label><?php endforeach; ?>
<input name="year" placeholder="Tahun"><input name="stock" placeholder="Stok">
<button>Simpan</button></form>
