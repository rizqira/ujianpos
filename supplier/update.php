<?php
if (isset($_POST['update'])) {
    include_once ('db/config.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE supplier SET nama='$nama', hp='$hp', email='$email', alamat='$alamat' WHERE id='$id'";
    $result =mysqli_query($koneksi, $sql);
    if ($result){
        header ('location: index.php?m=supplier');
    } else {
        include "index.php?m=supplier&s=edit&id='$id'";
        echo '<script language="JavaScript">';
        echo 'alert{"Data gagal Ditambahkan."}';
        echo '</script>';
    }
}