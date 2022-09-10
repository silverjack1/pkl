<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Edit Soal Tabel
        </h1>
    </div>
</div>
<?php
include "koneksi.php";
$idgroup = $_GET['idgroup'];
$idsoal = $_GET['idsoal'];
?>
<div class="block full">
    <form action="detailsoal/soaltabel/prosesedit.php" method="post">
        <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
        <input type="hidden" name="idsoal" value="<?php echo $idsoal; ?>">
        <?php $hasil = mysqli_query($mysqli, "select * from soal where idsoal='$idsoal'");
        $tampil = mysqli_fetch_array($hasil);
        ?>
        <div class="form-group">
            <label>Soal</label>
            <div>
                <textarea id="textarea-ckeditor" name="soal" class="ckeditor"><?php echo $tampil['soal']; ?></textarea>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <td class="success" style="width: 20px;"><strong>No</strong></td>
                <td class=" success"><strong>Pernyataan</strong></td>
                <td class="success col-md-2"><strong>Jawaban</strong></td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <?php $pilih = explode(', ', $tampil['pilihanbenar']); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihana" placeholder="Pernyataan 1"
                            value="<?php echo $tampil['pilihana']; ?>">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B" <?= $pilih[0] == "B" ? "selected" : ""; ?>>Benar</option>
                        <option value="S" <?= $pilih[0] == "S" ? "selected" : ""; ?>>Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihanb" placeholder="Pernyataan 2"
                            value="<?php echo $tampil['pilihanb']; ?>">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B" <?= $pilih[1] == "B" ? "selected" : ""; ?>>Benar</option>
                        <option value="S" <?= $pilih[1] == "S" ? "selected" : ""; ?>>Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihanc" placeholder="Pernyataan 3"
                            value="<?php echo $tampil['pilihanc']; ?>">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B" <?= $pilih[2] == "B" ? "selected" : ""; ?>>Benar</option>
                        <option value="S" <?= $pilih[2] == "S" ? "selected" : ""; ?>>Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    4
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihand" placeholder="Pernyataan 4"
                            value="<?php echo $tampil['pilihand']; ?>">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B" <?= $pilih[3] == "B" ? "selected" : ""; ?>>Benar</option>
                        <option value="S" <?= $pilih[3] == "S" ? "selected" : ""; ?>>Salah</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="form-group">
            <label>Pembahasan</label>
            <div>
                <textarea id="textarea-ckeditor" rows="2" name="pembahasan" class="ckeditor"></textarea>
            </div>
        </div>
        <div class="form-group form-actions">
            <div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit Soal</button>
            </div>
        </div>
    </form>
</div>

<script src="js/helpers/ckeditor/ckeditor.js"></script>