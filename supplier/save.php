<?php
if (isset($_POST['simpan'])) {
    include_once('db/config.php');
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    
    $sql = "INSERT INTO supplier SET nama='$nama', hp='$hp', email='$email', alamat='$alamat'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=supplier');
    } else {
        include "index.php?m=supplier&s=add";
        echo '<script language="JavaScript">';
        echo  'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}