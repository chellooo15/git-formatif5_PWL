<?php $pageTitle = 'Profil Saya'; $pageSubtitle = 'Ubah profil'; require_once '../../repositories/user-repository.php'; $user = getUser(); $profile = getProfile(); ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/profile/update.php"><input name="name" value="<?php echo $user['name']; ?>" required><input name="email" value="<?php echo $user['email']; ?>" required><input name="phone" value="<?php echo $profile['phone']; ?>"><input name="address" value="<?php echo $profile['address']; ?>"><input name="bio" value="<?php echo $profile['bio']; ?>"><button>Simpan Perubahan</button></form>
