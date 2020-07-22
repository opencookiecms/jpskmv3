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
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php  echo form_open('maklumat-kontraktor/daerah'); ?>
                        <div class="form-group">
                            <div class="col-md-5">
                                <label>Sila Kontraktor Mengikut Daerah</label>
                                <select type="text" name="daerah" class="form-control custom-select select2">
                                    <option value="Tiada">Tiada</option>
                                    <option value="Yan">Yan</option>
                                    <option value="Baling">Baling</option>
                                    <option value="Sik">Sik</option>
                                    <option value="Kuala Muda">Kuala Muda</option>
                                    <option value="Kedah">Kedah</option>
                                    <select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 mb-2">
                                <input type="submit" value="find" name="search" class="btn btn-success" />
                            </div>
                            <div class="col-md-3">
                            <a class="btn btn-primary" href="<?php echo site_url('cetak-maklumat-kontraktor/daerah/'.$getdaerah) ?>" target="_blank">Cetak</a>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                    <div>
                    </div>
                </div>
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
                                        id="example1">
                                        <thead>
                                            <tr>
                                                <td>Bil</td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">Nama Syarikat</p> </br>
                                                    <p class="font-weight-semibold">Nama Pengurus</p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">No Sijil Pendaftaran</p> </br>
                                                    <p class="font-weight-semibold">No Kad Pengenalan</p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">Tarikh Sijil Tamat</p> </br>
                                                    <p class="font-weight-semibold">Nama Bank</p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">Prestasi</p> </br>

                                                </td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">Daerah</p></br>
                                                    <p class="font-weight-semibold mb-0">Status</p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-semibold mb-0">No Tel</p> </br>
                                                </td>

                                                <td>
                                                    <p class="font-weight-semibold mb-0">Tel Pejabat</p> </br>
                                                    <p class="font-weight-semibold">Fax</p>
                                                </td>
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php $bil=0;?>
                                            <?php foreach ($getfilter as $row): $bil++?>
                                            <tr>

                                                <td><?php echo $bil ?></td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->konName ?><p></br>
                                                            <p class="font-weight-normal">
                                                                <?php echo $row->konPengurus ?><p></br>
                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->sijilNoPendaftaran ?>
                                                    </p></br>
                                                    <p class="font-weight-normal"><?php echo $row->NoKPpengurus ?></p>
                                                    </br>
                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->sijilJPSTamat ?></p>
                                                    </br>
                                                    <p class="font-weight-normal"><?php echo $row->konBank ?></p></br>
                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->konPrestasi ?></p>
                                                    </br>

                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->konDaerah ?></p></br>
                                                    <?php

                                                    @session_start();
                                                    $RegDate = date($row->sijilJPSSah);
                                                    $endRegDate = date($row->sijilJPSTamat);
                                                        //$endofSijil = date("Y-m-d", strtotime(date("Y-m-d", strtotime($RegDate))." + 1 day"));
                                                        ?>


                                                    <?php if (date("Y-m-d") < $endRegDate) { ?>
                                                    <span class="badge badge-success badge-pill p-2">Berdaftar</span>
                                                    <?php } else{?>

                                                    <span class="badge badge-danger badge-pill p-2">Tidak
                                                        Berdaftar</span>
                                                    <?php } ?>


                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->NoTelPengurus ?></p>
                                                    </br>

                                                </td>
                                                <td>
                                                    <p class="font-weight-normal"><?php echo $row->konTel ?></p></br>
                                                    <p class="font-weight-normal"><?php echo $row->koFax ?></p></br>
                                                </td>


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