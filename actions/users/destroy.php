<?php
if (isset($_GET['id'])) {
    echo 'Data pengguna dengan id ' . $_GET['id'] . ' berhasil dihapus (simulasi).';
} else {
    echo 'Tidak ada id dikirim.';
}
echo '<p><a href="../../pages/users/index.php">Kembali</a></p>';
