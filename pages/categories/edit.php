<?php $pageTitle = 'Edit Kategori'; $pageSubtitle = 'Form ubah kategori'; $category = ['id' => 1, 'name' => 'Fiksi', 'description' => 'Karya imajinatif']; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="" action=""><input type="hidden" name="id" value="<?php echo $category['id']; ?>"><input name="name" value="<?php echo $category['name']; ?>"><input name="description" value="<?php echo $category['description']; ?>"><button>Update</button></form>
