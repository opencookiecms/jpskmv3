<div class="app-content page-body">
    <div class="container">

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Kemaskini Kontraktor : <?php echo $kdetail[0]->konName ?>  </h4>
            </div>
            <div class="page-rightheader ml-auto d-lg-flex d-none">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon"
                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                                <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span
                                class="breadcrumb-icon"> Home</span></a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form-Elements</li>
                </ol>
            </div>
        </div>
        <!--End Page header-->


        <!-- Row -->
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Pendaftaran
                        </div>
                    </div>

                   <?php  echo form_open_multipart('kontraktor-update/'.$kdetail[0]->kontraktorId ); ?>
                    <div id="wizard12" class="p-4">
                        <h3>Maklumat Syarikat</h3>
                        <section>
                            <div class="row">

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Nama Syarikat</label>
                                        <input type="text" name="konnama" value="<?php echo $kdetail[0]->konName ?>" class="form-control" placeholder="Nama Syarikat">
                                        <input type="hidden" name="hiddenid" value="<?php echo $kdetail[0]->kontraktorId ?>">
                                        <input type="hidden" name="hiddenpic" value=" <?php echo $kdetail[0]->konImage ?>">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-8"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Gambar</label>
                                        <input class="form-control" name="file" type="file" accept="image/*">
                                        <?php echo $kdetail[0]->konImage ?>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->KonAlamat ?>"   placeholder="cth:N0 1821 Lorong Peruda 1" type="text" name="alamat">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"></label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konAlamatExtS ?>"  placeholder="cth:Taman Peruda" type="text"name="alamatjalan">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"></label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konAlamatExtD ?>"  placeholder="cth:Bakar Arang" type="text" name="alamatdearah">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Poskod</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konPoskod ?>"  placeholder="eg:08000" type="text" name="poskod">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Bandar</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konBandar ?>"  placeholder="eg:Sungai Petani" type="text"name="bandar">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Daerah</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konDaerah ?>"  placeholder="eg:Kuala Muda" type="text" name="daerah">
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <label class="form-label">Negeri</label>
                                        <select class="form-control custom-select select2" name="negeri">
                                            <option value="<?php echo $kdetail[0]->konNegeri ?>"><?php echo $kdetail[0]->konNegeri ?></option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Terengganu">Terengganu</option>
                                            <option value="N.Sembilan">N.Sembilan</option>
                                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Johor">Johor</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telefon Pejabat</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konTel ?>"  placeholder="04-XXXXXXX" type="text" name="telpejabat">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Pengurus</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konPengurus ?>"  placeholder="eg:Ahmad bin Hassan" type="text"name="namapengurus">
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Kad Pengenalan</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->NoKPpengurus ?>"  placeholder="eg:72XXXX-00-XXXX" type="text" name="nokp">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Telefon Pengurus</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->NoTelPengurus ?>"  placeholder="cth:010-1234567" type="text" name="telpengurus">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->konEmail ?>"  placeholder="cth:adk@gmail.com" type="text" name="email">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Fax</label>
                                        <input class="form-control" value="<?php echo $kdetail[0]->koFax ?>"  placeholder="cth:010-1234567" type="text"
                                            name="fax">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h3>Maklumat Rakan Kongsi</h3>
                        <section>
                            <div class="row">

                                <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Rakan Konsi (1)</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKsatu ?>"  name="rakansatu" class="form-control"
                                            placeholder="cth:Salah">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Kad Pengenalan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKsatuNokp ?>"  name="rakankadsatu" class="form-control"
                                            placeholder="cth:83XXXX-XX-XXXX">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Tel</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKsatuNotel ?>"  name="rakantelsatu" class="form-control"
                                            placeholder="cth:012-12334456">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Rakan Konsi (2)</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKdua ?>"  name="rakandua" class="form-control" placeholder="cth:Salah">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Kad Pengenalan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKduaNotel ?>"  name="rakankaddua" class="form-control"
                                            placeholder="cth:83XXXX-XX-XXXX">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Tel</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKduaNotel ?>"  name="rakanteldua" class="form-control"
                                            placeholder="cth:012-12334456">
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Rakan Konsi (3)</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKtiga ?>"  name="rakantiga" class="form-control"
                                            placeholder="cth:Salah">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Kad Pengenalan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKtigaNokp ?>"  name="rakankadtiga" class="form-control"
                                            placeholder="cth:83XXXX-XX-XXXX">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Tel</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKtigaNotel ?>"  name="rakanteltiga" class="form-control"
                                            placeholder="cth:012-12334456">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Rakan Konsi (4)</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKempat ?>"  name="rakanempat" class="form-control"
                                            placeholder="cth:Salah">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Kad Pengenalan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKempatNokp ?>"  name="rakankadempat" class="form-control"
                                            placeholder="cth:83XXXX-XX-XXXX">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">No Tel</label>
                                        <input type="text" value="<?php echo $kdetail[0]->RKempatNotel ?>"  name="rakantelempat" class="form-control"
                                            placeholder="cth:012-12334456">
                                    </div>
                                </div>




                            </div>
                        </section>
                        <h3>Akaun Syarikat</h3>
                        <section>
                            <div class="form-group">
                                <label class="form-label">Bank</label>
                                <input type="text" class="form-control" id="name1" value="<?php echo $kdetail[0]->konBank ?>" 
                                    placeholder="cth:Maybank, RHB Bank, CIMB Bank" name="namabank">
                            </div>
                            <div class="form-group">
                                <label class="form-label">No Akaun</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="<?php echo $kdetail[0]->konAkaunBank ?>"  placeholder="Akaun bank terkini"
                                        name="noakaun">
                                    <span class="input-group-append">
                                        <button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i>
                                            &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                            <i class="fa fa-cc-mastercard"></i></button>
                                    </span>
                                </div>
                            </div>

                        </section>


                        <h3>Kawasan Operasi Syarikat</h3>
                        <section>
                            <div class="row">


                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Kawasan Operasi</label>
                                        <select class="form-control custom-select select21" name="kawoperasi">
                                            <option value="<?php echo $kdetail[0]->konKawOperasi ?>"><?php echo $kdetail[0]->konKawOperasi ?></option>
                                            <option value="Sik">Sik</option>
                                            <option value="Baling">Baling</option>
                                            <option value="Yan">Yan</option>
                                            <option value="Kuala Muda">Kuala Muda</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Malaysia">Malaysia</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-7"></div>

                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Prestasi</label>
                                        <select class="form-control custom-select select22" name="prestasi">
                                            <option value="<?php echo $kdetail[0]->konPrestasi ?>"><?php echo $kdetail[0]->konPrestasi ?></option>
                                            <option value="Baik">Baik</option>
                                            <option value="Cemerlang">Cemerlang</option>
                                            <option value="Memuaskan">Memuaskan</option>
                                            <option value="Sederhana">Sederhana</option>
                                            <option value="Lemah">Lemah</option>
                                            <option value="Tiada Rekod">Tiada Rekod</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                        </section>
                        <h3>Jenis Permohonan</h3>
                        <section>
                            <div class="row">


                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Permohonan Baru</label>
                                        <select class="form-control custom-select select23" name="pbaru">
                                            <option value="<?php echo $kdetail[0]->spPBaharu ?>"><?php echo $kdetail[0]->spPBaharu ?></option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-7"></div>

                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Pembaharuan</label>
                                        <select class="form-control custom-select select24" name="pembaharuan">
                                        <option value="<?php echo $kdetail[0]->spPBaharu ?>"><?php echo $kdetail[0]->spPBaharu ?></option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>


                                    </div>
                                </div>

                                <div class="col-sm-7 col-md-7"></div>
                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Lain-Lain</label>
                                        <input type="text" name="etc" class="form-control"  value="<?php echo $kdetail[0]->spLainLain ?>"
                                            placeholder="cth:012-12334456">
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-7"></div>

                                <div class="col-sm-5 col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select25" name="kategori">
                                            <option value="<?php echo $kdetail[0]->spKategori ?>"><?php echo $kdetail[0]->spKategori ?></option>
                                            <option value="Berdaftar">Kontraktor</option>
                                            <option value="Pembekal">Pembekal</option>
                                            <option value="Perkhidmatan">Perkhidmatan</option>
                                            <option value="Pembekal/Kontraktor">Pembekal/Kontraktor</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                        </section>
                        <h3>Maklumat Pemohon</h3>
                        <section>
                            <div class="row">

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tarikh Permohonan</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->spDateMohon ?>" name="tmohon" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Cas Perkhidmatan (RM)</label>
                                        <input type="text" name="casp" value="<?php echo $kdetail[0]->spCaj ?>" class="form-control" placeholder="RM 10">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">No Reset</label>
                                        <input type="text" name="noreset" class="form-control" value="<?php echo $kdetail[0]->spNoResit ?>" placeholder="cth:JPS-2938HS">
                                    </div>
                                </div>
                              

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Sijil Pendaftaran</label>
                                        <input type="text" name="nosijilp" value="<?php echo $kdetail[0]->spNoSijil ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Tarikh Sijil Dikeluarkan</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->spDateKeluar ?>" name="tsijilkeluar" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Tarikh Tamat Sijil</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->spDateTamat ?>" name="tsijiltamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>
                               

                            </div>
                        </section>
                        <h3>Disemak Oleh</h3>
                        <section>
                            <div class="row">

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Disemak oleh</label>
                                        <select class="form-control custom-select select26" name="semakoleh">
                                        <option value="<?php echo $kdetail[0]->spDisemak ?>"><?php echo $kdetail[0]->spDisemak ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->NamaO.'">'.$row->NamaO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Disahkan Oleh</label>
                                        <select class="form-control custom-select select26" name="saholeh">
                                        <option value="<?php echo $kdetail[0]->spDisah ?>"><?php echo $kdetail[0]->spDisah ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->NamaO.'">'.$row->NamaO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Diluluskan Oleh</label>
                                        <select class="form-control custom-select select26" name="lulusoleh">
                                        <option value="<?php echo $kdetail[0]->spLulus ?>"><?php echo $kdetail[0]->spLulus ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->NamaO.'">'.$row->NamaO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Jawatan Penyemak</label>
                                        <select class="form-control custom-select select26" name="jsemak">
                                        <option value="<?php echo $kdetail[0]->spJwtnPenyemak ?>"><?php echo $kdetail[0]->spJwtnPenyemak ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->JawatanO.'">'.$row->JawatanO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Jawatan Pengurus</label>
                                        <select class="form-control custom-select select26" name="jurus">
                                        <option value="<?php echo $kdetail[0]->spJwtnSah ?>"><?php echo $kdetail[0]->spJwtnSah ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->JawatanO.'">'.$row->JawatanO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Jawatan Penglulus</label>
                                        <select class="form-control custom-select select26" name="julus">
                                        <option value="<?php echo $kdetail[0]->spJwtnLulus ?>"><?php echo $kdetail[0]->spJwtnLulus ?></option>
                                        <?php

                                            foreach($jpsofficer as $row)
                                            {
                                              echo '<option value="'.$row->JawatanO.'">'.$row->JawatanO.'</option>';
                                            } 
                                        ?> 
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </section>
                        <!--sss->$-->
                        <h3>LPIPM</h3>

                        <section>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="mt-1 mb-4">Lembaga Pembangunan Industri Pembinaan Malaysia (LPIPM)
                                    </h4>
                                    <h6 class="mb-6">a) Sijil Perakuan Pendaftaran Kontraktror (PPK)</h6>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" id="txtpkk"  value="<?php echo $kdetail[0]->sijilNoPendaftaran ?>" name="lnodaftar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                        <input class="form-control fc-datepicker"  value="<?php echo $kdetail[0]->sijilSah ?>" name="tlpkksah" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                                        <input class="form-control fc-datepicker"  value="<?php echo $kdetail[0]->sijilTamat ?>" name="tlpkktamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lpkkgredsatu">
                                            <option value="<?php echo $kdetail[0]->sijilPPKGredOne ?>"><?php echo $kdetail[0]->sijilPPKGredOne ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lpkkcatsatu">
                                            <option value="<?php echo $kdetail[0]->sijilPPKCatOne ?>"><?php echo $kdetail[0]->sijilPPKCatOne ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text"  value="<?php echo $kdetail[0]->sijilPPKKhuOne ?>" name="lpkkkhusussatu" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lpkkgreddua">
                                            <option value="<?php echo $kdetail[0]->sijilPPKGredTwo ?>"><?php echo $kdetail[0]->sijilPPKGredTwo ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lpkkcatdua">
                                            <option value="<?php echo $kdetail[0]->sijilPPKCatTwo ?>"><?php echo $kdetail[0]->sijilPPKCatTwo ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilPPKKhuTwo ?>" name="lpkkkhususdua" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lpkkgredtiga">
                                            <option value="<?php echo $kdetail[0]->sijilPPKGredThree ?>"><?php echo $kdetail[0]->sijilPPKGredThree ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lpkkcattiga">
                                            <option value="<?php echo $kdetail[0]->sijilPPKCatThree ?>"><?php echo $kdetail[0]->sijilPPKCatThree ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilPPKKhuThree ?>" name="lpkkkhusustiga" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <h6 class="mt-4 mb-6">b) Sijil Perolehan Kerja Kerajaan (SPKK)</h6>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilSPKKNo ?>" id="txtspkk" name="lspkkdaftar" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilSPKKsah ?>" name="tlspkksah" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilSPKKTamat ?>" name="tlspkktamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lspkkgredsatu">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKGredOne ?>"><?php echo $kdetail[0]->sijilSPPKGredOne ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lspkkcatsatu">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKCatOne ?>"><?php echo $kdetail[0]->sijilSPPKCatOne ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilSPPKKhuOne ?>" name="lspkkkhusussatu" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lspkkgreddua">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKGredTwo ?>"><?php echo $kdetail[0]->sijilSPPKGredTwo ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lspkkcatdua">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKCatTwo ?>"><?php echo $kdetail[0]->sijilSPPKCatTwo ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilSPPKKhuTwo ?>" name="lspkkkhususdua" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Gred</label>
                                        <select class="form-control custom-select select27" name="lspkkgredtiga">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKGredThree ?>"><?php echo $kdetail[0]->sijilSPPKGredThree ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-control custom-select select27" name="lspkkcattiga">
                                            <option value="<?php echo $kdetail[0]->sijilSPPKCatThree ?>"><?php echo $kdetail[0]->sijilSPPKCatThree ?></option>
                                            <option value="B">B</option>
                                            <option value="CE">CE</option>
                                            <option value="ME">ME</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pengkhususan</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijilSPPKKhuThree ?>" name="lspkkkhusustiga" class="form-control" placeholder="cth:G1, G5, B, CE">
                                    </div>
                                </div>


                            </div>
                        </section>

                        <!--dfdf-->

                        <h3>Pusat Khidmat Kontraktor (PKK)</h3>

                        <section>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">

                                    <h6 class="mb-6">a) Sijil Taraf Bumiputra (STB)</h6>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" value="<?php echo $kdetail[0]->sijiSTBNo ?>" name="stbnosijil" id="stbsah" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilSTBSah ?>" name="stbsah" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilSTBTamat ?>" name="stbtamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Gred Pendaftaran</label>
                                         <select class="form-control custom-select select27" name="stbgred">
                                         <option value="<?php echo $kdetail[0]->sijilSTBGred ?>"><?php echo $kdetail[0]->sijilSTBGred ?></option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </section>
                        <!--ssm-->
                        <h3>Suruhanjaya Syarikat Malaysia (SSM)</h3>

                        <section>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">

                                    <h6 class="mb-6">SSM</h6>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" name="sijilssm" value="<?php echo $kdetail[0]->daftarSSM ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                     
										<input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->daftarHSSM ?>" name="ssmsah" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                                      
										<input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->daftarTSSM ?>" name="ssmtamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                            </div>
                        </section>

                        <!--GST-->
                        <h3>SST</h3>

                        <section>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">

                                    <h6 class="mb-6">SST</h6>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" name="sijilsst" value="<?php echo $kdetail[0]->daftarGST ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                      
										<input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->dateDGST ?>" name="sstsah" placeholder="MM/DD/YYYY" type="text">
										
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                               
										<input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->dateTGST ?>" name="ssttamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>



                            </div>
                        </section>

                        <!--JPS-->
                        <h3>JPS</h3>

                        <section>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">

                                    <h6 class="mb-6">a) Sijil Perakuan Pendaftaran Pembekal/Kontraktor(SPPPK)</h6>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="form-group">
                                        <label class="form-label">No Pendaftaran</label>
                                        <input type="text" name="jpsno" value="<?php echo $kdetail[0]->sijilJPSNo ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tempoh Sah Dari</label>
                                       <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilJPSSah ?>" name="jpssah" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Hingga</label>
                                        <input class="form-control fc-datepicker" value="<?php echo $kdetail[0]->sijilJPSTamat ?>" name="jpstamat" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Gred Pendaftaran</label>
                                        <select class="form-control custom-select select27" name="jpsgred">
                                        <option value="<?php echo $kdetail[0]->sijilJPSKate ?>"><?php echo $kdetail[0]->sijilJPSKate ?></option>
                                            <option value="Kontraktor">Kontraktor</option>
											<option value="Pembekal">Pembekal</option>
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                        </section>
                        <input type="submit" name="submit" id="confirm" class="btn btn-warning" value="Save">
                      </form>                       
                    </div>

                </div>
            </div>
        </div>
        <!--/Row -->
    </div>
</div><!-- end app-content-->
</div>
</div>
</div>