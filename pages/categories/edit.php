<?php $pageTitle = 'Edit Kategori'; $pageSubtitle = 'Form ubah kategori'; require_once '../../repositories/category-repository.php'; $category = getCategory(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/categories/update.php"><input type="hidden" name="id" value="<?php echo $category['id']; ?>"><input name="name" value="<?php echo $category['name']; ?>" required><input name="description" value="<?php echo $category['description']; ?>"><button>Update</button></form>
