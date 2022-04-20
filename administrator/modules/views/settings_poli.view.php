<div class="row">
    <div class="col-lg-12">
        <h1>Pengaturan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-cog"></i> Pengaturan</li>
        </ol>

    </div>
</div>
<div class="row">

    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings">Pengaturan Umum</a></li>
            <li role="presentation" class="active"><a href="<?php echo SITE_URL; ?>?page=settings&&action=poli">Data Poli</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=pegawai">Data Pegawai</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=text">Teks Berjalan</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">DATA POLI</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover data-table table-striped tablesorter">
                        <thead>
                            <tr>
                                <th class="header" style="width: 40px;">#</th>
                                <th  class="header" style="width: 80px;">KODE</th>
                                <th  class="header" style="width: 140px;">DEPARTEMEN</th>

                                <th class="header" style="width:60px;">@</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['poli'] AS $poli) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $poli->KODE_POLI; ?></td>
                                    <td><?php echo $poli->NAMA_POLI; ?></td>

                                    <td>
                                        <a class="btn btn-danger btn-xs" href="<?php echo SITE_URL; ?>?page=settings&&action=poli&&id=<?php echo $poli->ID; ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a class="btn btn-info btn-xs" href="<?php echo SITE_URL; ?>?page=settings&&action=deletepoli&&id=<?php echo $poli->ID; ?>" onclick="return confirm('Are you sure delete this data?');">
                                            <span class="glyphicon glyphicon-erase"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                Tambah Data Departemen

            </div>
            <form method="POST" role="form">
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
                        <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=settings&&action=poli">

                    <?php } ?>

                    <table class="table table-responsive table-hover">
                        <tbody>
                            <tr>
                                <td style="width: 120px;"><label>Departemen</label></td>
                                <td style="width: 1px;">:</td>
                                <td>
                                    <input type="text" class="form-control" autofocus="" placeholder="Nama Poli/Departemen" name="name_departemen" <?php
                                    if (isset($data['update'])) {
                                        echo 'value="' . $data['update']->NAMA_POLI . '"';
                                    }
                                    ?> >

                                    <input type="hidden" name="id_departemen" <?php
                                    if (isset($data['update'])) {
                                        echo 'value="' . $data['update']->ID . '"';
                                    }
                                    ?> >

                                </td>
                            </tr>
                            <tr>
                                <td><label>Code</label></td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" autofocus="" placeholder="Code Poli/Departemen" name="code_departemen" <?php
                                    if (isset($data['update'])) {
                                        echo 'value="' . $data['update']->KODE_POLI . '"';
                                    }
                                    ?> >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <button class="btn btn-primary btn-sm" type="submit" name="btn_new">
                            <span class="glyphicon glyphicon-save"></span> Simpan Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>