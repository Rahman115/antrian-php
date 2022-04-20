<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data['title']; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php echo SITE_URL; ?>?page=registrasi"><i class="fa fa-user"></i> </a></li>
            <li class="active"><i class="fa fa-pencil"></i> <?php echo $data['title']; ?></li>
        </ol>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">


        <div class="panel panel-info">
            <div class="panel-heading">
                Form <?php echo $data['title']; ?>
                <a class="close" aria-label="Close" href="<?php echo SITE_URL; ?>?page=registrasi"><span aria-hidden="true">&times;</span></a>
            </div>
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="panel-body">

                    <?php
                    if (isset($data["error"]) && count($data["error"]) > 0) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <ul class="list-square">
                                <?php
                                foreach ($data["error"] as $error) {
                                    ?>
                                    <li>
                                        <?php echo $error; ?>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                        <?php
                    } else if (isset($data["success"])) {
                        ?>

                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $data["success"]; ?>
                        </div>
                        <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=registrasi">

                    <?php } ?>


                    <div class="col-lg-6">
                        <table class="table-responsive table">

                            <tbody>
                                <tr>
                                    <td style="width: 150px;"><label>REKAM MEDIS</label></td>
                                    <td style="width: 1px;">:</td>
                                    <td>
                                        <input disabled="" type="text" <?php if (isset($data["medis"])) echo 'value="' . $data["medis"] . '"'; ?> class="form-control" placeholder="Otomatis Terisi">
                                        <input type="hidden" <?php if (isset($data["medis"])) echo 'value="' . $data["medis"] . '"'; ?> name="form_rekam_medis">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>NAMA PASIEN</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->NAMA_PASIEN . '"'; ?> name="form_nama" class="form-control" placeholder="NAMA LENGKAP">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>NAMA KK</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->NAMA_KK . '"'; ?> name="form_nama_kk" class="form-control" placeholder="NAMA KEPALA KELUARGA">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>ALAMAT</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->ALAMAT . '"'; ?> name="form_alamat" class="form-control" placeholder="ALAMAT">
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>NOMOR TELEPON</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="number" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->NO_TELPON . '"'; ?> name="form_nomor_telepon" class="form-control" placeholder="0823XXXXXX">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>TEMPAT LAHIR</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->TEMPAT_LAHIR . '"'; ?> name="form_tempat_lahir" class="form-control" placeholder="TEMPAT LAHIR">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>TANGGAL LAHIR</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="date" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->TANGGAL_LAHIR . '"'; ?> name="form_tanggal_lahir" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>JENIS KELAMIN</label></td>
                                    <td>:</td>
                                    <td>
                                        <?php
                                        if (isset($data["regWhere"]->JENIS_KELAMIN)) {
                                            if ($data["regWhere"]->JENIS_KELAMIN == 'L') {
                                                ?>
                                                <input checked="checked"  type="radio" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->JENIS_KELAMIN . '"'; ?> name="form_jenis_kelamin"> Laki - laki
                                                <input type="radio" value="P" name="form_jenis_kelamin"> Perempuan
                                            <?php } else { ?>
                                                <input checked="checked"  type="radio" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->JENIS_KELAMIN . '"'; ?> name="form_jenis_kelamin"> Perempuan
                                                <input type="radio" value="L" name="form_jenis_kelamin"> Laki - laki
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <input type="radio" value="L" name="form_jenis_kelamin" > Laki - laki
                                            <input type="radio" value="P" name="form_jenis_kelamin" > Perempuan
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>GOLONGAN DARAH</label></td>
                                    <td>:</td>
                                    <td>
                                        <select name = "form_golongan_darah" class="form-control">
                                            <?php if (isset($data["regWhere"])) echo '<option value="' . $data["regWhere"]->GOLONGAN_DARAH . '" >' . $data["regWhere"]->GOLONGAN_DARAH . '</option>'; ?> 
                                            <option value="TT">Tidak Diketuhi</option>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>STATUS</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->STATUS . '"'; ?> name="form_status" class="form-control" placeholder="STATUS">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table-responsive table">

                            <tbody>
                                <!-- KARTU IDENTITAS -->
                                <tr> 
                                    <td style="width: 150px;"><label>KARTU IDENTITAS</label></td>
                                    <td style="width: 1px;">:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->KARTU_IDENTITAS . '"'; ?> name="form_kartu_identitas" class="form-control" placeholder="KTP / BELUM PUNYA">
                                    </td>
                                </tr>
                                <!--NOMOR IDENTITAS-->
                                <tr>
                                    <td><label>NOMOR IDENTITAS</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->NO_IDENTITAS . '"'; ?> name="form_nomor_identitas" class="form-control" placeholder="567xxxxxx">
                                    </td>
                                </tr>
                                <!--STATUS MARITAL-->
                                <tr>
                                    <td><label>STATUS MARITAL</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->STATUS_MARITAL . '"'; ?> name="form_status_marital" class="form-control" placeholder="BELUM KAWIN / KAWIN">
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>TITEL PASIEN</label></td>
                                    <td>:</td>
                                    <td>
                                        <select name = "form_titel_pasien" class="form-control">
                                            <?php if (isset($data["regWhere"])) echo '<option value="' . $data["regWhere"]->TITEL_PASIEN . '" >' . $data["regWhere"]->TITEL_PASIEN . '</option>'; ?> 
                                            <option value="Tn.">Tuan</option>
                                            <option value="Ny.">Nyonya</option>
                                            <option value="An.">Anak</option>
                                            <option value="By.">Bayi</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>AGAMA</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->AGAMA . '"'; ?> name="form_agama" class="form-control" placeholder="ISLAM/KRISTEN/HINDU">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>KELURAHAN</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->KELURAHAN . '"'; ?> name="form_kelurahan" class="form-control" placeholder="KELURAHAN">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>KECAMATAN</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->KECAMATAN . '"'; ?> name="form_kecamatan" class="form-control" placeholder="KECAMATAN">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>KOTA</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->KOTA . '"'; ?> name="form_kota" class="form-control" placeholder="KOTA">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>PROPINSI</label></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->PROPINSI . '"'; ?> name="form_propinsi" class="form-control" placeholder="PROPINSI">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>KODE POS</label></td>
                                    <td>:</td>
                                    <td>
                                        <input placeholder="KODE POS" type="text" <?php if (isset($data["regWhere"])) echo 'value="' . $data["regWhere"]->KODE_POS . '"'; ?> name="form_kode_pos" class="form-control">
                                        <?php if (isset($data["regWhere"])) { ?>
                                            <input type="hidden" value="<?php echo $data["regWhere"]->TANGGAL_DAFTAR; ?>" name="form_tanggal_daftar">
                                            <input type="hidden" value="<?php echo $data["regWhere"]->ID; ?>" name="form_id">
                                        <?php } ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=registrasi&&action=reg">
                        <span class="glyphicon glyphicon-send"></span> Daftar Poli
                    </a>

                    <button class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-floppy-save"></span> Simpan Data
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>