<?php
if (isset($_POST['id'])) {
    echo 'Data kategori diubah:';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
} else {
    echo 'Tidak ada data dikirim.';
}
echo '<p><a href="../../pages/categories/index.php">Kembali</a></p>';
