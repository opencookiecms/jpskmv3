<div class="app-content page-body">
    <div class="container">

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Maklumat Kontrakor</h4>
            </div>

        </div>
        <!--End Page header-->

        <!--Row-->

        <!--Row-->
        <div class="row row-deck">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Senarai Kontraktor</h3>
                        <div class="card-options">
                            <div class="btn-group ml-5 mb-0">
                                <a href="<?php echo site_url('kontraktor-baru')?>" class="btn btn-success"><i
                                        class="fe fe-plus"></i>Tambah Baru</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover tableg"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>Bil</td>
                                        <td>Nama Syarikat</td>
                                        <td>No Sijil Pendaftaran</td>
                                        <td>Tarih Sijil Tamat</td>
                                        <td>Prestasi Kontraktor</td>
                                        <td>Daerah</td>
                                        <td>No Tel HP</td>
                                        <td>No Tel. Pejabat</td>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Nama Pengurus</td>
                                        <td>No Kad Pengenalan</td>
                                        <td>Nama Bank</td>
                                        <td></td>
                                        <td>Status</td>
                                        <td></td>
                                        <td>No Faksimili</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $bil=0;?>
          						<?php foreach ($getfilter as $row): $bil++?>
                                <tr>

                                    <td rowspan="2"><?php echo $bil ?></td>
                                    <td><span style="font-weight:bold"><?php echo $row->konName ?></span>
                                    </td>
                                    <td><?php echo $row->sijilNoPendaftaran ?></td>
                                    <td><?php echo $row->sijilJPSTamat ?></td>
                                    <td><?php echo $row->konPrestasi ?></td>
                                    <td><?php echo $row->konDaerah ?></td>
                                    <td><?php echo $row->NoTelPengurus ?></td>
                                    <td><?php echo $row->konTel ?></td>
                                </tr>

                                <tr>

                                    <td><?php echo $row->konPengurus ?></td>
                                    <td><?php echo $row->NoKPpengurus ?></td>
                                    <td><?php echo $row->konBank ?></td>
                                    <td></td>
                                    <td><?php

 									@session_start();
 									$RegDate = date($row->sijilJPSSah);
 									$endRegDate = date($row->sijilJPSTamat);
 									//$endofSijil = date("Y-m-d", strtotime(date("Y-m-d", strtotime($RegDate))." + 1 day"));
 									?>


                                        <?php if (date("Y-m-d") < $endRegDate) { ?>
                                            <span class="badge badge-success badge-pill p-2">Berdaftar</span>
                                        <?php } else{?>
                                        
                                          <span class="badge badge-danger badge-pill p-2">Tidak Berdaftar</span>
                                        <?php } ?>
                                    </td>
                                    <td></td>
                                    <td><?php echo $row->koFax ?></td>

                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End row-->

    </div>
</div><!-- end app-content-->