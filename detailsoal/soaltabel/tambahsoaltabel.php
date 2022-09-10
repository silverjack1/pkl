<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Tambah Soal Tabel
        </h1>
    </div>
</div>
<div class="block full">
    <form action="detailsoal/soaltabel/prosestambah.php" method="post">
        <input type="hidden" name="idgroup" value="<?php echo $_GET['idgroup']; ?>">
        <div class="form-group">
            <label>Soal</label>
            <div>
                <textarea id="textarea-ckeditor" name="soal" class="ckeditor"></textarea>
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
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihana" placeholder="Pernyataan 1">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B">Benar</option>
                        <option value="S">Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihanb" placeholder="Pernyataan 2">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B">Benar</option>
                        <option value="S">Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihanc" placeholder="Pernyataan 3">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B">Benar</option>
                        <option value="S">Salah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    4
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pilihand" placeholder="Pernyataan 4">
                    </div>
                </td>
                <td>
                    <select name="jawaban[]" class="form-control">
                        <option value="B">Benar</option>
                        <option value="S">Salah</option>
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
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Soal</button>
            </div>
        </div>
    </form>
</div>

<script src="js/helpers/ckeditor/ckeditor.js"></script>