<?php
if (isset($_POST['id'])) {
    echo 'Data pengguna diubah:';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
} else {
    echo 'Tidak ada data dikirim.';
}
echo '<p><a href="../../pages/users/index.php">Kembali</a></p>';
