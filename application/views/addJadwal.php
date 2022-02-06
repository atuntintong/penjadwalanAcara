<body>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10" style="font-size: 20px;">
            <h2>Input Jadwal</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Jadwal</a>
                </li>
                <li>
                    <strong>Input Jadwal</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight" style="padding: 20px 200px 40px;">
        <form class="form-horizontal" action="<?php echo base_url();?>Jadwal/addData" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-11">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 style="font-size: 20px;">Input Jadwal Acara</h5>
                    </div>
                    <div class="ibox-content" style="font-size: 17px;">
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-3 control-label">Pelaksana Acara</label>
                                <div class="col-sm-8"><input style="font-size: 17px;" type="text" placeholder="Input Pelaksana Acara" class="form-control" name="pelaksana"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label">Perihal</label>
                                <div class="col-sm-8"><input style="font-size: 17px;" type="text" placeholder="Input Perihal" class="form-control" name="perihal"></div>
                            </div>
                            <div class="form-group" id="data_5">
                                <label class="col-sm-3 control-label">Tanggal</label>
                                <div class="input-daterange input-group" id="datepicker" style="padding-left: 15px;">
                                    <input style="font-size: 17px;" type="text" class="input-sm form-control" name="tanggal_mulai" value="01-01-2022"/>
                                    <span class="input-group-addon">-</span>
                                    <input style="font-size: 17px;" type="text" class="input-sm form-control" name="tanggal_selesai" value="01-01-2022"/>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Waktu Mulai</label>
                                <div class="input-group clockpicker" data-autoclose="true" style="padding-left: 15px; padding-right: 145px;">
                                    <input style="font-size: 17px;" type="text" class="form-control" name="waktu_mulai" value="00:00">
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Waktu Selesai</label>
                                <div class="input-group clockpicker" data-autoclose="true" style="padding-left: 15px; padding-right: 145px;">
                                    <input style="font-size: 17px;" type="text" class="form-control" name="waktu_selesai" value="00:00">
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                            </div>
                            <button style="font-size: 17px;" name="submit" type="submit" value="submit" class="btn btn-primary block full-width m-b">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="footer" style="font-size: 15px;">
        <div>
            <strong>Copyright</strong> DEVELOPER PENGELOLA DATA ELEKTRONIK &copy; 2022
        </div>
    </div>
</body>
<script src="<?php echo base_url();?>assets/js/jadwal.js"></script>