<?php
include "../koneksi.php";
if (isset($_POST['soaltabel'])) {
    $pilih1 = $_POST['jawaban1'];
    $pilih2 = $_POST['jawaban2'];
    $pilih3 = $_POST['jawaban3'];
    $pilih4 = $_POST['jawaban4'];
    $idjawab = $_POST['idjawab'];
    $halaman = $_POST['halaman'];
    $page = $_POST['page'];
    $no = $_POST['soal'];
    $jawaban = [];
    array_push($jawaban, $pilih1, $pilih2, $pilih3, $pilih4);
    $masuk = implode(', ', $jawaban);
    mysqli_query($mysqli, "update jawaban set 
    jawaban = '$masuk' 
    where idjawab = '$idjawab'
    ");

    if ($halaman == $page) {
        header('location:../index.php?tes=' . $page);
    } else {
        header('location:../index.php?tes=' . $no);
    }
} else {
    //$pilihan = $_POST['pilihan'];
    echo $pilihan = implode(', ', $_POST['pilihan']);
    //echo $pilihan = implode($_POST["pilihan"], ', ');
    $idjawab = $_POST['idjawab'];
    $halaman = $_POST['halaman'];
    $page = $_POST['page'];
    $no = $_POST['soal'];

    mysqli_query($mysqli, "update jawaban set 
    jawaban = '$pilihan' 
    where idjawab = '$idjawab'
    ");

    if ($halaman == $page) {
        header('location:../index.php?tes=' . $page);
    } else {
        header('location:../index.php?tes=' . $no);
    }
};