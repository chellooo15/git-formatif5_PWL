<?php $pageTitle = 'Edit Pengguna'; $pageSubtitle = 'Form ubah pengguna'; require_once '../../repositories/user-repository.php'; $user = getUser(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/users/update.php"><input type="hidden" name="id" value="<?php echo $user['id']; ?>"><input name="name" value="<?php echo $user['name']; ?>" required><input name="email" value="<?php echo $user['email']; ?>" required><select name="role"><option <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>admin</option><option <?php echo $user['role'] === 'member' ? 'selected' : ''; ?>>member</option></select><button>Update</button></form>
