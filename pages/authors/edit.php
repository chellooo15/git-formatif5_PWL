<?php $pageTitle = 'Edit Penulis'; $pageSubtitle = 'Form ubah penulis'; $author = ['id' => 1, 'name' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi']; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="" action=""><input type="hidden" name="id" value="<?php echo $author['id']; ?>"><input name="name" value="<?php echo $author['name']; ?>"><input name="bio" value="<?php echo $author['bio']; ?>"><button>Update</button></form>
