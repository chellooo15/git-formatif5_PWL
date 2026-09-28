<?php $pageTitle = 'Edit Penulis'; $pageSubtitle = 'Form ubah penulis'; require_once '../../repositories/author-repository.php'; $author = getAuthor(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/authors/update.php"><input type="hidden" name="id" value="<?php echo $author['id']; ?>"><input name="name" value="<?php echo $author['name']; ?>" required><input name="bio" value="<?php echo $author['bio']; ?>"><button>Update</button></form>
