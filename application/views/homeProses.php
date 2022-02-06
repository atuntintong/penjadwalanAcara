<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body style="background-color: #d3eaff;">
    <div class="row wrapper border-bottom white-bg page-heading" style="background-color: #2c506a;">
        <div class="col-lg-12">
            <h2 style="text-align:center; margin-top:40px; font-size: 70px; color: white;"><b>JADWAL ACARA</b></h2>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="form-group">
            <marquee class="btn btn-info" scrollDelay="20" scrollamount="3" direction="left" style="font-size: 60px; background-color: #436a6a;">
                <b id="statusAcara">
                    <td><span style="color: #97FF00;">ACARA SEDANG BERLANGSUNG</span></td>
                </b>
            </marquee>
        </div>
        <div class="row">
            <div class="col-lg-12 carousel slide" id="myCarousel" data-ride="carousel" style="text-align:center;">
                <div class="carousel-inner">
                    <div class="widget lazur-bg p-xl carousel-item active" style="border-radius: 50px; padding: 100px; background-color: #295395;">
                        <h2 style="font-size: 70px;"><b id="perihalAcara"></b></h2>
                        <ul class="list-unstyled m-t-md" style="font-size: 50px;">
                            <li>
                                <span class="fa fa-user-circle m-r-xs"></span>
                                <label>
                                    <h1 style="font-size: 50px;">PELAKSANA ACARA: <span id="pelaksanaAcara"><i class="fa fa-spinner fa-spin"></i></span></h1>
                                </label>
                            </li>
                            <li>
                                <span class="fa fa-calendar m-r-xs"></span>
                                <label>
                                    <h1 style="font-size: 50px;">
                                        TANGGAL: <span id="tanggalMulai"><i class="fa fa-spinner fa-spin"></i></span> - <span id="tanggalSelesai"><i class="fa fa-spinner fa-spin"></i></span>
                                    </h1>
                                </label>
                            </li>
                            <li>
                                <span class="fa fa-clock-o m-r-xs"></span>
                                <label>
                                    <h1 style="font-size: 50px;">WAKTU: <span id="waktuMulai"><i class="fa fa-spinner fa-spin"></i></span> - <span id="waktuSelesai"><i class="fa fa-spinner fa-spin"></i></span></h1>
                                </label>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div style="font-size: 16px; text-align:center;">
            <strong>Copyright</strong> DEVELOPER PENGELOLA DATA ELEKTRONIK (PDE) &copy; 2022
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/home.js"></script>
<script>
    async function updateEvent() {
        var idAcara = '<?= $id ?>';
        var jadwal = await $.ajax({
            url: '<?= base_url(); ?>home/getAcaraById/',
            data: {
                id: idAcara
            }
        });
        console.log(jadwal);
    }
    updateEvent();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>