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
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <?php //echo $data['access'];  ?> REGISTRASI ANTRIAN
                    <a class="close" aria-label="Close" href="<?php echo SITE_URL; ?>?page=registrasi"><span aria-hidden="true">&times;</span></a>
                </div>
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
                </div>
                <form method="POST" role="form">
                    <table class="table table-responsive tablesorter">
                        <tbody>
                            <tr>
                                <td  style="width: 150px;"><label>REKAM MEDIS</label></td>
                                <td  style="width: 1px;">:</td>
                                <td>
                                    <?php echo $data['antri']->REKAM_MEDIS; ?>
                                    <input name="id_reg" value="<?php echo $data['antri']->REKAM_MEDIS; ?>" type="hidden">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Nama pengunjung</label></td>
                                <td>:</td>
                                <td>
                                    <?php echo $data['antri']->NAMA_PASIEN; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Rujukan</label></td>
                                <td>:</td>
                                <td>
                                    <select name="rujuk" class="form-control">
                                        <?php
                                        foreach ($data['poli'] AS $val) {
                                            echo '<option value="' . $val->ID . '">' . $val->NAMA_POLI . '</option>';
                                        }
                                        ?>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-print"></span> Cetak Antrian
                                    </button>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </form>
            </div>
        </div>
    </div>
</div>