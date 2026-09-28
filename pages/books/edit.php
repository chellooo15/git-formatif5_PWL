<?php $pageTitle = 'Edit Buku'; $pageSubtitle = 'Form ubah buku'; $book = ['id' => 1, 'title' => 'Laskar Pelangi', 'category' => 'Fiksi', 'year' => 2005, 'stock' => 10]; $categories = [['id' => 1, 'name' => 'Fiksi'], ['id' => 2, 'name' => 'Non-Fiksi']]; $authors = [['id' => 1, 'name' => 'Andrea Hirata'], ['id' => 2, 'name' => 'Tere Liye']]; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="" action="">
<input type="hidden" name="id" value="<?php echo $book['id']; ?>">
<input name="title" value="<?php echo $book['title']; ?>">
<button>Update</button></form>
