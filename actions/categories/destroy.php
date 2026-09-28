<?php
if (isset($_GET['id'])) {
    echo 'Data kategori dengan id ' . $_GET['id'] . ' berhasil dihapus (simulasi).';
} else {
    echo 'Tidak ada id dikirim.';
}
echo '<p><a href="../../pages/categories/index.php">Kembali</a></p>';
