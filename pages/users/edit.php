<?php $pageTitle = 'Edit Pengguna'; $pageSubtitle = 'Form ubah pengguna'; $user = ['id' => 1, 'name' => 'Admin', 'email' => 'admin@lib.id', 'role' => 'admin']; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="" action=""><input type="hidden" name="id" value="<?php echo $user['id']; ?>"><input name="name" value="<?php echo $user['name']; ?>"><input name="email" value="<?php echo $user['email']; ?>"><select name="role"><option>admin</option><option>member</option></select><button>Update</button></form>
