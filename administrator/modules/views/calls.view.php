<div class="row">

    <div class="col-lg-12">
        <h1>Data Panggilan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Data Panggilan</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-danger">
            <div class="panel-heading">Panggilan Baru</div>
            <div class="panel-body list-group">
                <?php if ($data['newCallAll'] == TRUE) { ?>
                    <!--                    <form method="POST" role="form">
                                            <div class="list-group-item">
                                                <h6>Pemakai</h6>
                                                <select id="nm_custome" name="nm_custome" class="form-control" onchange="populate('nm_custome')">
                                                    <option value=""></option>
                    <?php foreach ($data['call']['callCustom'] AS $cus) { ?>
                                                                            <option value="<?php echo $cus->id_custom; ?>"><?php echo $cus->nama; ?></option>
                    <?php } ?>
                                                </select>
                                            </div>
                    
                                            <div class="list-group-item">
                                                <h6>Departemen</h6>
                                                <p id="demo">No Selected</p>
                                            </div>
                                            <div class="list-group-item">
                                                <h6>Counter</h6>
                                                <p id="code">No Selected</p>
                    
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-danger">Panggilan Berikutnya ></button>
                                            </div>
                    
                    
                                        </form>-->
                    Admin tidak dapat melakukan panggilan
                <?php } else { ?>
                    <form method="POST" role="form">
                        <div class="list-group-item">
                            <h6>Pemakai</h6>
                            <p><?php echo $data['call']['callCustom']->nama; ?></p>

                        </div>

                        <div class="list-group-item">
                            <h6>Departemen</h6>
                            <p><?php echo $data['call']['callCustom']->NAMA_POLI; ?></p>
                        </div>
                        <div class="list-group-item">
                            <h6>Counter</h6>
                            <p><?php echo $data['call']['callCustom']->counter; ?></p>

                        </div>
                        <div class="text-right">
                            <?php foreach ($data['fileSound'] AS $id => $val) { ?>
                                <!--display: none;-->
                                <audio controls id="<?php echo $id; ?>" style="display: none;"> 
                                    <source src="../public/audio/<?php echo $val; ?>" type="audio/mpeg">
                                </audio>
                            <?php } ?>

                            <!--<button type="submit" class="btn btn-danger" name="play" id="tombol"  onclick="mulai(9, 3);">Panggilan Berikutnya ></button>-->
                            <?php
                            $n_exp = explode('L', $data['call']['callCustom']->counter);
                            $n = $n_exp[1];

                            $j = 0;
                            foreach ($data['callAll'] AS $call) {
                                if ($call->code_role != '') {
                                    if ($call->status_call == 'no') {
                                        $expl = explode("-", $call->code_role);
                                        $cl[$call->id_calls] = $expl[1];
                                        $j++;
                                    } else if ($call->status_call == 'yes') {
                                        $expl = explode("-", $call->code_role);
                                        $mx[$call->id_calls] = $expl[1];
                                        $j++;
                                    } else {
                                        $mx[$call->id_calls] = FALSE;
//                                    $cl[$call->id_calls] = '0';
                                    }
                                }
                            }

                            function delay($arr = array()) {
                                $m = max($arr);
                                foreach ($arr AS $key => $value) {
                                    if ($value == $m) {
                                        $id = $key;
                                    }
                                }

                                $i = array($id, $m);
                                return $i;
                            }

                            function min_id($arr = array()) {
                                $m = min($arr);
                                foreach ($arr AS $key => $value) {
                                    if ($value == $m) {
                                        $id = $key;
                                    }
                                }

                                $i = array($id, $m);
//                                var_dump($id);
                                return $i;
                            }

                            if (!empty($cl)) {
                                $ar = min_id($cl);
                            } else {

                                $ar = FALSE;
                            }
                            if (!empty($mx)) {
                                $dly = delay($mx);
                            } else {

                                $dly = FALSE;
                            }
                            ?>
                            <?php if ($dly[1] == FALSE) { ?>

                                <button disabled="" type="button" class="btn btn-info" id="recall" onclick="mulai(<?php echo $dly[1]; ?>, <?php echo $n; ?>, <?php echo $dly[0]; ?>, false);">
                                    <span class="glyphicon glyphicon-repeat"></span>
                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-info" id="recall" onclick="mulai(<?php echo $dly[1]; ?>, <?php echo $n; ?>, <?php echo $dly[0]; ?>, false);">
                                    <span class="glyphicon glyphicon-repeat"></span>
                                </button>

                            <?php } ?>
                            <?php if ($dly == FALSE || $dly[1] == FALSE) { ?>
                                <button disabled="" type="button" class="btn btn-primary" id="delay" onclick="tunda(<?php echo $dly[1]; ?>, <?php echo $n; ?>, <?php echo $dly[0]; ?>);">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-primary" id="delay" onclick="tunda(<?php echo $dly[1]; ?>, <?php echo $n; ?>, <?php echo $dly[0]; ?>);">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            <?php } ?>
                            <?php if ($ar == FALSE) { ?>
                                <button disabled="" type="button" class="btn btn-danger" id="tombol" onclick="mulai(<?php echo $ar[1]; ?>, <?php echo $n; ?>, <?php echo $ar[0]; ?>, true);">
                                    Panggilan Berikutnya <span class="glyphicon glyphicon-bell"></span>
                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-danger" id="tombol" onclick="mulai(<?php echo $ar[1]; ?>, <?php echo $n; ?>, <?php echo $ar[0]; ?>, true);">
                                    Panggilan Berikutnya <span class="glyphicon glyphicon-bell"></span>
                                </button>
                            <?php } ?>
                            <!--                                <button type="button" class="btn btn-primary" id="delay" onclick="mulai(670,1,1,1);">
                                                                <span class="glyphicon glyphicon-time"></span> Test
                                                            </button>-->
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>

    </div>

    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Antrian Hari Ini</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover data-table table-striped tablesorter">
                        <thead>
                            <tr>
                                <th class="header" style="width: 40px;">#</th>
                                <th  class="header" style="width: 60px;">Pengunjung</th>
                                <th  class="header" style="width: 120px;">Departemen</th>
                                <th  class="header" style="width: 100px;">Code</th>
                                <th class="header" style="width:140px;">Conter</th>
                                <th class="header" style="width:140px;">Status</th>
                                <th class="header" style="width:140px;">Penarikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = '';
                            $no = 1;
                            foreach ($data['callAll'] AS $call) {
                                if ($call->code_role != '') {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $call->NAMA_PASIEN; ?></td>
                                        <td><?php echo $call->NAMA_POLI; ?></td>
                                        <td><?php
                                            echo $call->code_role;
                                            $exp = explode('-', $call->code_role);
                                            ?></td>
                                        <td><?php echo $call->counter; ?></td>
                                        <td><?php echo $call->status_call; ?></td>
                                        <td>
                                            <?php if ($call->status_call == 'delay') { ?>
                                                <button type="button" class="btn btn-info btn-xs" id="recall" onclick="mulai(<?php echo $exp[1]; ?>, <?php echo $n; ?>, <?php echo $call->id_calls; ?>);">
                                                    <span class="glyphicon glyphicon-repeat"></span>
                                                </button>
                                            <?php } else { ?>
                                                <button disabled="" type="button" class="btn btn-info btn-xs" id="recall" onclick="mulai(<?php echo $exp[1]; ?>, <?php echo $n; ?>, <?php echo $call->id_calls; ?>);">
                                                    <span class="glyphicon glyphicon-repeat"></span>
                                                </button>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
                                    //                              }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
