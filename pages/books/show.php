<?php $pageTitle = 'Detail Buku'; $pageSubtitle = 'Detail satu buku'; require_once '../../repositories/book-repository.php'; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<p>Judul: <?php echo $book['title']; ?></p><p>Kategori: <?php echo $book['category']; ?></p>
<p><a href="index.php">Kembali</a></p>
