<body>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10" style="font-size: 20px;">
            <h2>Edit Jadwal</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Jadwal Acara</a>
                </li>
                <li>
                    <strong>Edit Jadwal</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight" style="padding: 20px 200px 40px;">
        <div class="row">
            <div class="col-lg-11">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 style="font-size: 20px;">Edit Jadwal Acara</h5>
                    </div>
                    <div class="ibox-content" style="font-size: 17px;">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?=base_url()?>jadwal/simpan">
                            <input type="hidden" name="id" value="<?php echo $id = $_GET['id']?>">
                            <div class="form-group"><label class="col-sm-3 control-label">Pelaksana Acara</label>
                                <div class="col-sm-8"><input style="font-size: 17px;" type="text" placeholder="Edit Pelaksana Acara" class="form-control" name="pelaksana" value="<?= $data['pelaksana']?>"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label">Perihal</label>
                                <div class="col-sm-8"><input style="font-size: 17px;" type="text" placeholder="Edit Perihal" class="form-control" name="perihal" value="<?= $data['perihal']?>"></div>
                            </div>
                            <div class="form-group" id="data_5">
                                <label class="col-sm-3 control-label">Tanggal</label>
                                <div class="input-daterange input-group" id="datepicker" style="padding-left: 15px;">
                                    <input style="font-size: 17px;" type="text" class="input-sm form-control" name="tanggal_mulai" value="<?= $data['tanggal_mulai']?>"/>
                                    <span class="input-group-addon">-</span>
                                    <input style="font-size: 17px;" type="text" class="input-sm form-control" name="tanggal_selesai" value="<?= $data['tanggal_selesai']?>" />
                                </div>
                            </div>                              
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Waktu Mulai</label>
                                <div class="input-group clockpicker" data-autoclose="true" style="padding-left: 15px; padding-right: 145px;">
                                    <input style="font-size: 17px;" type="text" class="form-control" value="<?= $data['waktu_mulai']?>" name="waktu_mulai">
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Waktu Selesai</label>
                                <div class="input-group clockpicker" data-autoclose="true" style="padding-left: 15px; padding-right: 145px;">
                                    <input style="font-size: 17px;" type="text" class="form-control" value="<?= $data['waktu_selesai']?>" name="waktu_selesai">
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-8">
                                    <select name="status" class="form-control" style="font-size: 17px; padding: 4px 12px;">
                                        <?php
                                        
                                            if($data['status']=="Menunggu"){
                                                echo '
                                                    <option value="Menunggu" selected>Menunggu</option>
                                                    <option value="Proses">Sedang Berlangsung</option>
                                                    <option value="Pending">Berlangsung Besok</option>
                                                    <option value="Selesai">Selesai</option>          
                                                ';
                                            }
                                            else if ($data['status']=="Proses"){
                                                echo '
                                                    <option value="Menunggu">Menunggu</option>
                                                    <option value="Proses" selected>Sedang Berlangsung</option>
                                                    <option value="Pending">Berlangsung Besok</option>
                                                    <option value="Selesai">Selesai</option>          
                                                ';
                                            }
                                            else if ($data['status']=="Pending"){
                                                echo '
                                                    <option value="Menunggu" selected>Menunggu</option>
                                                    <option value="Proses">Sedang Berlangsung</option>
                                                    <option value="Pending" selected>Berlangsung Besok</option>
                                                    <option value="Selesai">Selesai</option>          
                                                ';
                                            }
                                            else if ($data['status']=="Selesai"){
                                                echo '
                                                    <option value="Menunggu" selected>Menunggu</option>
                                                    <option value="Proses">Sedang Berlangsung</option>
                                                    <option value="Pending">Berlangsung Besok</option>
                                                    <option value="Selesai" selected>Selesai</option>          
                                                ';
                                            }
                                        
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button style="font-size: 17px;" name="submit" type="submit" value="submit" class="btn btn-primary block full-width m-b">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="font-size: 15px;">
        <div>
            <strong>Copyright</strong> DEVELOPER PENGELOLA DATA ELEKTRONIK &copy; 2022
        </div>
    </div>
</body>
<script src="<?php echo base_url();?>assets/js/jadwal.js"></script>