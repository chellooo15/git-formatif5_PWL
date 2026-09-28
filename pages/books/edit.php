<?php $pageTitle = 'Edit Buku'; $pageSubtitle = 'Form ubah buku'; require_once '../../repositories/book-repository.php'; require_once '../../repositories/category-repository.php'; require_once '../../repositories/author-repository.php'; $book = getBook(); $categories = getCategories(); $authors = getAuthors(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/books/update.php">
<input type="hidden" name="id" value="<?php echo $book['id']; ?>">
<input name="title" value="<?php echo $book['title']; ?>" required>
<select name="category"><?php foreach ($categories as $c): ?><option <?php echo $c['name'] === $book['category'] ? 'selected' : ''; ?>><?php echo $c['name']; ?></option><?php endforeach; ?></select>
<?php foreach ($authors as $a): ?><label><input type="checkbox" name="authors[]" value="<?php echo $a['name']; ?>"><?php echo $a['name']; ?></label><?php endforeach; ?>
<input name="year" value="<?php echo $book['year']; ?>"><input name="stock" value="<?php echo $book['stock']; ?>">
<button>Update</button></form>
