<body>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10" style="font-size: 20px;">
            <h2>Jadwal Acara</h2>
            <ol class="breadcrumb">
                <li>
                    <strong>Jadwal</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <form class="m-t" role="form" action="<?php echo base_url();?>jadwal/add" method="GET">
                    <button name="submit" type="submit" class="btn btn-primary block pull-right" style="font-size: 17px;">Input Jadwal</button>
                </form>
                <div class="ibox float-e-margins">
                    
                    <div class="ibox-title">
                        <h5 style="font-size: 20px;">Jadwal Acara</h5>
                    </div>
                    <div class="ibox-content" style="font-size: 16px;">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">TANGGAL MULAI</th>
                                        <th style="text-align:center;">TANGGAL SELESAI</th>
                                        <th style="text-align:center;">WAKTU MULAI</th>
                                        <th style="text-align:center;">WAKTU SELESAI</th>
                                        <th style="text-align:center;">PELAKSANA ACARA</th>
                                        <th style="text-align:center;">PERIHAL</th>
                                        <th style="text-align:center;">STATUS</th>
                                        <th style="text-align:center;">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach ($acara as $row) { ?>
                                        <tr>
                                            <!-- <td></?= $count ?></td> -->
                                            <?php $count++; ?>
                                            <td><?= $row['tanggal_mulai'] ?></td>
                                            <td><?= $row['tanggal_selesai'] ?></td>
                                            <td><?= $row['waktu_mulai'] ?></td>
                                            <td><?= $row['waktu_selesai'] ?></td>
                                            <td><?= $row['pelaksana'] ?></td>
                                            <td><?= $row['perihal'] ?></td>
                                            <?php 
                                            if($row['status']=='Menunggu'){
                                                echo '<td><span style="font-size: 16px" class="label label-danger">Menunggu</span></td>';
                                            } else if($row['status'] == 'Proses'){
                                                echo '<td><span style="font-size: 16px" class="label label-primary">Sedang Berlangsung</span></td>';
                                            } else if($row['status'] == 'Selesai'){
                                                echo '<td><span style="font-size: 16px" class="label label-success">Selesai</span></td>';
                                            } else if($row['status'] == 'Pending'){
                                                echo '<td><span style="font-size: 16px" class="label label-warning">Berlangsung Besok</span></td>';
                                            } ?>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url();?>jadwal/edit?id=<?= $row['id']?>"><button style="font-size: 16px" class="btn-white btn btn-xs">Edit</button></a>
                                                    <a href="<?php echo base_url();?>jadwal/delete?id=<?= $row['id']?>"><button style="font-size: 16px" class="btn-white btn btn-xs">Delete</button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
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
    </div>
</body>
<script src="<?php echo base_url();?>assets/js/jadwal.js"></script>