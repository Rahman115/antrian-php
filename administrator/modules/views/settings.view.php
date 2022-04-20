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
            <li role="presentation" class="active"><a href="<?php echo SITE_URL; ?>?page=settings">Pengaturan Umum</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=poli">Data Poli</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=pegawai">Data Pegawai</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=text">Teks Berjalan</a></li>
        </ul>
    </div>
</div>
<div class="row">


    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">Data Print</div>
            <div class="panel-body">
                <div class="alert alert-info" role="alert">
                    <b>Penting !! </b> Pastikan ukuran kertas printer Lebar (W):55mm, Tinggi(E):100mm dan Print dalam ke adaan tersambung.
                </div>
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
                    <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=settings">

                <?php } ?>
                <form method="POST" role="form">
                    <table class="table table-responsive tablesorter table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">NAMA PRINTER</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" placeholder="Tambah Printer Baru" name="print_name" autofocus="" class="form-control">
                                    <input type="hidden" value="print" name="print_type"></td>
                                <td><input type="submit" class="btn btn-primary" value="Tambah Printer"></td>
                            </tr>

                        </tbody>
                    </table>

                </form>
                <table class="table table-responsive data-table tablesorter table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAMA PRINTER</th>
                            <th>STATUS</th>
                            <th>@</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['dataPrint'] AS $print) { ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $print->PRINT_NAME; ?></td>
                                <td><?php echo $print->PRINT_STATUS; ?></td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="<?php echo SITE_URL; ?>?page=settings&&action=change_print_status&&id=<?php echo $print->ID; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <?php if ($print->PRINT_STATUS == 'Y') { ?>
                                        <a class="btn btn-primary btn-xs" href="<?php echo SITE_URL; ?>?page=settings&&action=test_print&&id=<?php echo $print->ID; ?>"><span class="glyphicon glyphicon-print"></span></a>
                                    <?php } else { ?>
                                        <button class="btn btn-primary btn-xs " disabled=""><span class="glyphicon glyphicon-print"></span></button>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">Tampilan Display</div>
            <div class="panel-body">
                <table class="table table-responsive data-table tablesorter table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ROOM</th>
                            <th>DIS 1</th>
                            <th>DIS 2</th>
                            <th>DIS 3</th>
                            <th>@</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['dataDisplay'] AS $display) { ?>
                            <tr>
                                
                                <td><?php echo $display->ID; ?></td>
                                <td><?php echo $display->ROOMS; ?></td>
                                <td><?php echo $display->DIS_1; ?></td>
                                <td><?php echo $display->DIS_2; ?></td>
                                <td><?php echo $display->DIS_3; ?></td>
                                <td>
                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">Pengaturan Tambahan</div>
            <div class="panel-body">
                here
            </div>
        </div>
    </div>
</div>
