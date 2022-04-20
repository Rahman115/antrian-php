<?php
$val = $data["pasien"];
?>
<script >
    var myData = <?php echo json_encode($val); ?>
//    console.log(myData);
//    $(document).ready(function () {
//        var data = [];
//        for (var i = 0; i < 50000; i++) {
//            data.push([i, i, i, i, i]);
//        }
//
//        $('#example').DataTable({
//            data: data,
//            deferRender: true,
//            scrollY: 200,
//            scrollCollapse: true,
//            scroller: true
//        });
//    });
</script>

<div class="row">
    <div class="col-lg-12">
        <h1>Registrasi</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-pencil"></i> Registrasi</li>
        </ol>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">

            <form method="POST" role="form">
                <table class="table">
                    <tr>
                        <td>CARI BERDASRKAN</td>
                        <td>KOLOM PENCAHARIAN</td>
                        <td><a href="<?php echo PATH; ?>?page=registrasi&&action=news" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data Baru</a></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="search_type">
                                <option value="NAMA_PASIEN">NAMA PASIEN</option>
                                <option value="REKAM_MEDIS">REKAM MEDIS</option>
                                <option value="NAMA_KK">NAMA KK</option>
                            </select>
                        </td>
                        <td><input name="search_name" type="text" class="form-control" autocomplete="false" autofocus="" placeholder="Keyword pencaharian"></td>
                        <td>
                            <button type="submit" class="btn btn-danger">
                                <span class="fa fa-search"></span>
                                Cari
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                    <tr>
                        <th class="header" style="width: 40px;">No</th>
                        <th>REKAM MEDIS</th>
                        <th>NAMA PASIEN</th>
                        <th>NAMA KK</th>
                        <th class="header" style="width:50px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($data['pasien'] != '') {
                    $no = 1;
                    foreach ($data["pasien"] as $pasien) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $pasien->REKAM_MEDIS; ?></td>
                            <td><?php echo $pasien->NAMA_PASIEN; ?></td>
                            <td><?php echo $pasien->NAMA_KK; ?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="<?php echo SITE_URL; ?>?page=registrasi&&action=reg&&id=<?php echo $pasien->ID; ?>">
                                    <span class="glyphicon glyphicon-send"></span>
                                </a>
                                <a class="btn btn-danger btn-xs" href="<?php echo SITE_URL; ?>?page=registrasi&&action=info&&id=<?php echo $pasien->ID; ?>">
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </a>

                            </td>
                        </tr>
                        <?php
                        $no++;
                    }}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    if ($data['access'] != "n") {

        switch ($data['access']) {
            case "news" :
                ?>
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?php echo $data['access']; ?>
                            <a class="close" aria-label="Close" href="<?php echo SITE_URL; ?>?page=registrasi"><span aria-hidden="true">&times;</span></a>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
                <?php
                break;
            case "info" :
                ?>
                
                <?php
                break;
            case "reg" :
                ?>
                
                <?php
                break;
        }
    }
    ?>
</div>