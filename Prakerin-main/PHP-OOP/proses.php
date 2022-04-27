<?php
include "database.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $db->input($nama,$alamat,$usia);

}elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:home.
    php");
}elseif ($aksi == "update") {
    $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header("location:home.php");
}elseif ($aksi == "foto") {
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $alamat = $_POST['alamat'];
    
    $rand = rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext,$ekstensi)) {
        header("location:home.php?alert=gagal_ekstensi");
    }else {
        if ($ukuran < 1044070) {
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'],'assets/gambar/'.$rand.'_'.$filename);
            $query = "INSERT INTO user_foto (nama, kontak, alamat, gambar) VALUES ('$nama','$kontak','$alamat','$xx')";
            // echo ($query); exit();
            mysqli_query($db->conn, $query);
            header("location:home.php?alert=berhasil");
        }else {
            header("location:home.php?alert=Gagal_Ukuran");
        }
    }
}else{
    echo "<h1 text-align='center'>Halaman Tidak ditemukan !<h1><br><hr>";
}