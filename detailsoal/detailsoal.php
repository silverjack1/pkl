<?php
error_reporting(1);
include 'koneksi.php';
$idgroup = $_GET['idgroup'];
$f = $_GET['f'] ? $_GET['f'] : "";
?>
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>
            <?php
            $tampil = mysqli_query($mysqli, 'select * from groupsoal where idgroup=' . $idgroup);
            $hasil = mysqli_fetch_array($tampil);
            echo $hasil['namagroup'];
            ?>
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <ul class="nav nav-tabs">
            <li <?php if ($f == 1 || $f == "") { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=1&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Pilihan Ganda</h4>
                </a></li>
            <li <?php if ($f == 2) { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=2&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Benar/Salah</h4>
                </a></li>
            <li <?php if ($f == 3) { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=3&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Isian</h4>
                </a></li>
            <li <?php if ($f == 4) { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=4&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Multiple Answer</h4>
                </a></li>
            <li <?php if ($f == 5) { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=5&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Mengurutkan</h4>
                </a></li>
            <li <?php if ($f == 6) { ?>class="active" <?php } ?>><a
                    href="index.php?detailsoal&f=6&idgroup=<?php echo $idgroup ?>">
                    <h4><i class="fa fa-th-large"></i> Tabel</h4>
                </a></li>
        </ul>
    </div>
    <div class="tab-content">
        <?php

        if ($f == "1" || $f == "") {
            include_once "soalpilihanganda/soalpilihanganda.php";
        } else if ($f == "2") {
            include_once "soalbenarsalah/soalbenarsalah.php";
        } else if ($f == "4") {
            include_once "soalmultipleanswer/soalmultipleanswer.php";
        } else if ($f == "3") {
            include_once "soalisian/soalisian.php";
        } else if ($f == "6") {
            include_once "soaltabel/soaltabel.php";
        } else {
            include_once "soalsorting/soalsorting.php";
        }
        ?>
    </div>
</div>