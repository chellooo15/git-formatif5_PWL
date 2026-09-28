<?php $pageTitle = 'Tambah Pengguna'; $pageSubtitle = 'Form tambah pengguna'; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/users/store.php"><input name="name" placeholder="Nama" required><input name="email" placeholder="Email" required><input name="password" placeholder="Password"><select name="role"><option>admin</option><option>member</option></select><button>Simpan</button></form>
