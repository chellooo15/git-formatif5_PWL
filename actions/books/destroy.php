<?php
if (isset($_GET['id'])) {
    echo 'Data buku dengan id ' . $_GET['id'] . ' berhasil dihapus (simulasi).';
} else {
    echo 'Tidak ada id dikirim.';
}
echo '<p><a href="../../pages/books/index.php">Kembali</a></p>';
