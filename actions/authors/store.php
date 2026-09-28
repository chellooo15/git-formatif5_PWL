<?php
if (isset($_POST['name'])) {
    echo 'Data penulis diterima:';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
} else {
    echo 'Tidak ada data dikirim.';
}
echo '<p><a href="../../pages/authors/index.php">Kembali</a></p>';
