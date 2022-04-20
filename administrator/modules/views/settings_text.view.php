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
            <li role="presentation"><a href="<?php echo SITE_URL; ?>?page=settings&&action=pegawai">Data Pegawai</a></li>
            <li role="presentation" class="active"><a href="<?php echo SITE_URL; ?>?page=settings&&action=text">Teks Berjalan</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-danger">
            <div class="panel-heading">Tulisan Berjalan</div>
            <div class="panel-body">

                <form method="POST" role="form">

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
                        <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=settings&action=text">

                    <?php } ?>

                    <table class="table table-responsive table-hover">
                        <tbody>
                            <tr>
                                <td style="width: 120px;"><label>Pesan</label></td>
                                <td style="width: 1px;">:</td>
                                <td>
                                    <textarea class="form-control" name="text_message"><?php echo $data['slide']->message; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Behavior</label></td>
                                <td>:</td>
                                <td>
                                    <select name="text_behavior" class="form-control">
                                        <option  <?php if($data['slide']->behavior == 'scroll') echo 'selected="selected"'; ?> value="scroll" >scroll</option>
                                        <option  <?php if($data['slide']->behavior == 'slide') echo 'selected="selected"'; ?> value="slide" >slide</option>
                                        <option  <?php if($data['slide']->behavior == 'alternate') echo 'selected="selected"'; ?> value="alternate" >alternate</option>
                                    </select>
                                    <!--<input type="text" class="form-control" name="text_behavior" value="<?php echo $data['slide']->behavior; ?>">-->
                                </td>
                            </tr>
                            <tr>
                                <td><label>Width</label></td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="text_width" value="<?php echo $data['slide']->width; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Scrollamount</label></td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="text_scrollamount" value="<?php echo $data['slide']->scrollamount; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Height</label></td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="text_height" value="<?php echo $data['slide']->height; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Direction</label></td>
                                <td>:</td>
                                <td>
                                    <select name="text_direction" class="form-control">
                                        <option  <?php if($data['slide']->direction == 'up') echo 'selected="selected"'; ?> value="up" >up</option>
                                        <option  <?php if($data['slide']->direction == 'down') echo 'selected="selected"'; ?> value="down" >down</option>
                                        <option  <?php if($data['slide']->direction == 'left') echo 'selected="selected"'; ?> value="left" >left</option>
                                        <option  <?php if($data['slide']->direction == 'right') echo 'selected="selected"'; ?> value="right" >right</option>
                                    </select>
                                    
                                    <!--<input type="text" class="form-control" name="text_direction" value="<?php echo $data['slide']->direction; ?>">-->
                                </td>
                            </tr>
                            <tr>
                                <td><label>Align</label></td>
                                <td>:</td>
                                <td>
                                    <select name="text_align" class="form-control">
                                        <option  <?php if($data['slide']->align == 'center') echo 'selected="center"'; ?> value="center" >center</option>
                                        <option  <?php if($data['slide']->align == 'justify') echo 'selected="selected"'; ?> value="justify" >justify</option>
                                        <option  <?php if($data['slide']->align == 'left') echo 'selected="selected"'; ?> value="left" >left</option>
                                        <option  <?php if($data['slide']->align == 'right') echo 'selected="selected"'; ?> value="right" >right</option>
                                    </select>
                                    
                                    <!--<input type="text" class="form-control" name="text_align" value="<?php echo $data['slide']->align; ?>">-->
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="text-right">
                        <button class="btn btn-success btn-sm" type="submit">
                            <span class="glyphicon glyphicon-save"></span> Ubah Teks
                        </button>
                    </div>

                </form>

            </div>
            <div class="panel-footer">
                <?php if ($data['slideAccess'] == TRUE) { ?>
                    <marquee align="<?php echo $data['slide']->align; ?>" direction="<?php echo $data['slide']->direction; ?>" height="30" scrollamount="<?php echo $data['slide']->scrollamount; ?>" width="<?php echo $data['slide']->width; ?>%" behavior="<?php echo $data['slide']->behavior; ?>"> 
                        <?php echo $data['slide']->message; ?> 
                    </marquee>
                <?php } ?>
            </div>
        </div>
    </div>
</div>