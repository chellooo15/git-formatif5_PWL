<?php
if (isset($_POST['name'])) {
    echo 'Data profil diubah:';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
} else {
    echo 'Tidak ada data dikirim.';
}
echo '<p><a href="../../pages/profile/edit.php">Kembali</a></p>';
