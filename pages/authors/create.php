<?php $pageTitle = 'Tambah Penulis'; $pageSubtitle = 'Form tambah penulis'; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/authors/store.php"><input name="name" placeholder="Nama Penulis" required><input name="bio" placeholder="Biografi"><button>Simpan</button></form>
