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
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=poli">Data Poli</a></li>
            <li role="presentation" class="active"><a href="<?php echo SITE_URL; ?>?page=settings&&action=pegawai">Data Pegawai</a></li>
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=text">Teks Berjalan</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">

        <div class="panel panel-danger">
            <div class="panel-heading">Data Customer</div>

            <div class="panel-body">
                <table class="table table-responsive data-table tablesorter table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Departemen</th>
                            <th>Nama Pengguna</th>
                            <th>Status</th>
                            <th>@</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['custom'] AS $value) { ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $value->NAMA_POLI; ?></td>
                                <td><?php echo $value->nama; ?></td>
                                <td><?php echo $value->status; ?></td>
                                <td><a class="btn btn-danger btn-xs" href="<?php echo SITE_URL; ?>?page=settings"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">

            </div>  
        </div>
    </div>

    <div class="col-lg-6">
        <form method="POST" role="form">
            <div class="panel panel-danger">
                <div class="panel-heading">Tambah Data Pegawai</div>
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
                        <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=settings&&action=pegawai">

                    <?php } ?>
                    <table class="table table-responsive table-hover">
                        <tbody>
                            <tr>
                                <td style="width: 120px;"><label>Poli</label></td>
                                <td style="width: 1px;">:</td>
                                <td>
                                    <select name="departemen" class="form-control" autofocus="" >
                                        <option value="">-- Select --</option>
                                        <?php foreach ($data['poli'] AS $d) { ?>
                                            <option value="<?php echo $d->ID; ?>"><?php echo $d->NAMA_POLI; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Pegawai</label></td>
                                <td>:</td>
                                <td>
                                    <select name="custom_name" class="form-control" autofocus="" >
                                        <option value="">-- Select --</option>
                                        <?php foreach ($data['user'] AS $user) { ?>
                                            <option value="<?php echo $user->ID; ?>"><?php echo $user->NAMA_LENGKAP; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <button class="btn btn-primary btn-sm" type="submit">
                            <span class="glyphicon glyphicon-save"></span> Simpan Data
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>