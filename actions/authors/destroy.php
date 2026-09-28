<?php
if (isset($_GET['id'])) {
    echo 'Data penulis dengan id ' . $_GET['id'] . ' berhasil dihapus (simulasi).';
} else {
    echo 'Tidak ada id dikirim.';
}
echo '<p><a href="../../pages/authors/index.php">Kembali</a></p>';
