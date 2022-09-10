<?php
include "../../koneksi.php";

if (isset($_POST['submit'])) {
    $idgroup = $_POST['idgroup'];
    $idsoal = $_POST['idsoal'];
    $soal = $_POST['soal'];
    $pilihana = $_POST['pilihana'];
    $pilihanb = $_POST['pilihanb'];
    $pilihanc = $_POST['pilihanc'];
    $pilihand = $_POST['pilihand'];
    $pilihanbenar = implode(', ', $_POST["jawaban"]);
    $pembahasan = $_POST['pembahasan'];

    $update = mysqli_query($mysqli, "UPDATE soal SET 
       idgroup='$idgroup',
    soal = '$soal',
    pilihana = '$pilihana',
    pilihanb = '$pilihanb',
    pilihanc = '$pilihanc',
    pilihand = '$pilihand',
    pilihane = '',
    jenissoal = 'soaltabel',
    pilihanbenar='$pilihanbenar',
    pembahasan = '$pembahasan'
     WHERE idsoal = '$idsoal'");

    if ($update) {
        echo "<script>alert('proses edit berhasil');'</script>";
        header('location:http://localhost/pkl/index.php?detailsoal&f=6&idgroup=' . $idgroup);
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/pkl/index.php?detailsoal&idgroup=' . $idgroup);
}