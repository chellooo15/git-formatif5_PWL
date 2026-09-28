<?php $pageTitle = 'Profil Saya'; $pageSubtitle = 'Ubah profil'; $user = ['id' => 1, 'name' => 'Admin', 'email' => 'admin@lib.id']; $profile = ['phone' => '081234', 'address' => 'Pontianak', 'bio' => 'Pustakawan']; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="" action=""><input name="name" value="<?php echo $user['name']; ?>"><input name="email" value="<?php echo $user['email']; ?>"><input name="phone" value="<?php echo $profile['phone']; ?>"><input name="address" value="<?php echo $profile['address']; ?>"><input name="bio" value="<?php echo $profile['bio']; ?>"><button>Simpan Perubahan</button></form>
