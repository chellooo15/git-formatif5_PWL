<?php $pageTitle = 'Tambah Kategori'; $pageSubtitle = 'Form tambah kategori'; ?>
<?php require_once '../../components/admin/sidebar.php'; ?>
<?php require_once '../../components/admin/topbar.php'; ?>
<form method="POST" action="../../actions/categories/store.php"><input name="name" placeholder="Nama Kategori" required><input name="description" placeholder="Deskripsi"><button>Simpan</button></form>
