<?php
include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");
$pasien = new ProsesPasien();

$nik = null;
$nama = null;
$tempat = null;
$tl = null;
$gender = null;
$genderL = null;
$genderP = null;
$email = null;
$telp = null;

if(isset($_GET['id_add'])){
    
    if(isset($_POST['submit'])){
        $pasien->add($_POST);
        header('location:index.php');
    }
    
}

// Membaca template skin.html
$tpl = new Template("templates/adddata.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("NIK", $nik);
$tpl->replace("NAMA", $nama);
$tpl->replace("TEMPAT", $tempat);
$tpl->replace("TL", $tl);
$tpl->replace("GENDERL", $genderL);
$tpl->replace("GENDERP", $genderP);
$tpl->replace("EMAIL", $email);
$tpl->replace("NOHP", $telp);


// Menampilkan ke layar
$tpl->write();
?>

