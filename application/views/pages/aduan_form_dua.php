<div class="app-content page-body">
    <div class="container">

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Aduan</h4>
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
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <H4>Langkah 2</H4>


                    </div>
                </div>

            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diisi oleh pengawai penyiasat</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-pay">
                            <ul class="tabs-menu nav">
                                <li class=""><a href="#tab20" class="" data-toggle="tab"><i class="fa fa-credit-card"></i> Maklumat Pengadu</a></li>
                                <li><a href="#tab21" data-toggle="tab" class="active"><i class="fa fa-paypal"></i> Dalam
                                        Siasatan</a></li>
                    
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab20">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <h4 class="mt-1 mb-4">Maklumat Pengadu</h4>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Nama Pengadu</label>
                                                <input type="text" name="pengadu" readonly
                                                       value="<?php echo $aduan[0]->pengadu ?>" class="form-control"
                                                    placeholder="cth: Ridzam bin Jusoh">
                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-md-5">
                                            <div class="form-group">
                                                <label class="form-label">No Kad Pengenalan</label>
                                                <input type="text" name="nokp" value="<?php echo $aduan[0]->nokp ?>" readonly class="form-control"
                                                    placeholder="78xxx-xx-xxxx">
                                            </div>
                                        </div>

                                        <div class="col-sm-7 col-md-7">
                                            <div class="form-group">
                                                <label class="form-label">Email Pengadu</label>
                                                <input type="text" name="emailpengadu" readonly value="<?php echo $aduan[0]->emailpengadu ?>" class="form-control"
                                                    placeholder="cth:zaki@gmail.com">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Alamat</label>
                                                <textarea class="form-control" readonly name="alamat"><?php echo $aduan[0]->alamat ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tarikh Aduan</label>
                                                <input class="form-control fc-datepicker" readonly value="<?php echo $aduan[0]->tarikhaduan ?>" name="tarikhaduan"
                                                    placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tarikh surat akuan Aduan</label>
                                                <input class="form-control fc-datepicker" readonly value="<?php echo $aduan[0]->tarikhsurat ?>" name="tarikhsurat"
                                                    placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Jawatan Pengadu</label>
                                                <select class="form-control custom-select select231"
                                                    name="jawatanpengadu" readonly>
                                                    <option value="<?php echo $aduan[0]->jawatanpengadu ?>"><?php echo $aduan[0]->jawatanpengadu ?></option>
                                                    <option value="Penghulu">Penghulu</option>
                                                    <option value="Pengerusi JKKK">Pengerusi JKKK</option>
                                                    <option value="YB">YB</option>
                                                    <option value="Ketua Unit">Ketua Unit</option>
                                                    <option value="JKKK">JKKK</option>
                                                    <option value="Orang Awam">Orang Awam</option>
                                                    <option value="Penduduk">Penduduk</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Salinan Aduan</label>
                                                <select class="form-control custom-select select231" name="salinanaduan">
                                                    <option value="<?php echo $aduan[0]->salinanaduan ?>"><?php echo $aduan[0]->salinanaduan ?></option>
                                                    <option value="Menteri Besar">Menteri Besar</option>
                                                    <option value="Exco">Exco</option>
                                                    <option value="ADUN">ADUN</option>
                                                    <option value="Pegawai Daerah">Pegawai Daerah</option>

                                                    <option value="Penghulu">Penghulu</option>
                                                    <option value="SPRM">SPRM"</option>
                                                    <option value="Persatuan Pengguna">Persatuan Pengguna</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Sumber</label>
                                                <select class="form-control custom-select select232" name="sumber">
                                                    <option value="<?php echo $aduan[0]->sumber ?>"><?php echo $aduan[0]->sumber ?></option>
                                                    <option value="Ibu Pejabat">Ibu Pejabat</option>
                                                    <option value="Soalan Dewan">Soalan Dewan</option>
                                                    <option value="Telefon">Telefon</option>
                                                    <option value="Email">Email</option>
                                                    <option value="Datang Sendiri">Datang Sendiri</option>
                                                    <option value="Media Cetak">Media Cetak</option>
                                                    <option value="Surat">Surat</option>
                                                    <option value="Media Sosial">Media Sosial</option>
                                                    <option value="Lain-lain Agensi">Lain-lain Agensi</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6"></div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">No Telefon</label>
                                                <input type="text" name="notel" readonly value="<?php echo $aduan[0]->notel ?>" class="form-control"
                                                    placeholder="011-1234567">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Aduan</label>
                                                <textarea class="form-control" readonly name="aduantxt"><?php echo $aduan[0]->aduantxt ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h4 class="mt-1 mb-4">Lokasi Aduan</h4>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Lokasi</label>
                                                <input class="form-control" readonly value="<?php echo $aduan[0]->lokasi ?>" placeholder="eg:Kuala Muda" type="text"
                                                    name="lokasi">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Mukim</label>
                                                <input class="form-control" readonly placeholder="eg:Kuala Muda" type="text"
                                                    name="mukim">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Sungai</label>
                                                <input class="form-control" readonly value="<?php echo $aduan[0]->sungai ?>" placeholder="eg:Kuala Muda" type="text"
                                                    name="sungai">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pegawai Penyiasat</label>
                                         
                                                <input class="form-control" readonly value="<?php echo $aduan[0]->jps_name ?>"  type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                          
                                                <label class="form-label">Email</label>
                                                <input class="form-control" readonly value="<?php echo $aduan[0]->jps_email ?>"  type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Daerah</label>
                                                <input class="form-control" placeholder="eg:Kuala Muda" readonly value="<?php echo $aduan[0]->daerah ?>"  type="text"
                                                    name="daerah">
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Kod Aduan</label>
                                                <input class="form-control" readonly value="<?php echo $aduan[0]->kodaduan ?>"  placeholder="eg:Kuala Muda" type="text"
                                                    name="kodaduan">
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tarikh Majukan Kepada Pegawai</label>
                                                <input class="form-control fc-datepicker" readonly value="<?php echo $aduan[0]->tarikhmaju ?>"  name="tarikhmaju"
                                                    placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>


                                    </div>

                                </div>
                           
                                <div class="tab-pane active show" id="tab21">
                                <?php  echo form_open('aduan/b-aduan-dua/'.$aduan[0]->aid); ?>
                                    <div class="row">
                                 
                                    <input type="hidden" name="aduan1_id" value="<?php echo $aduan[0]->aid ?>" class="form-control">
                                        <div class="col-md-12">
                                            <h4 class="mt-1 mb-4">Kegunaan Pejabat</h4>
                                            <h5 class="mt-1 mb-4">(Diisi oleh pegawai penyiasat)</h6>
                                        </div>

                                    

                                        <div class="col-sm-6 col-md-6 mt-4">
                                            <div class="form-group">
                                                <label class="form-label">Tarikh Siasatan</label>
                                                <input class="form-control fc-datepicker" name="tsiasat"
                                                    placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 mt-4">
                                            <div class="form-group">
                                                <label class="form-label">Kategori Aduan</label>
                                                <select class="form-control custom-select select2"
                                                    name="kategoriaduan">
                                                    <option value="Tiada">Tiada</option>
                                                    <option value="Banjir">Banjir</option>
                                                    <option value="Hakisan Tebing">Hakisan Tebing</option>
                                                    <option value="Kerosakan Struktur">Kerosakan Struktur</option>
                                                    <option value="Kuari Pasir">Kuari Pasir</option>
                                                    <option value="Pencerobohan Rizab Sungai">Pencerobohan Rizab Sungai</option>
                                                    <option value="Halangan Dalam Sungai">Halangan Dalam Sungai</option>
                                                    <option value="Lain-Lain">Lain-Lain</option>
                                               
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Longlitute</label>
                                                <input type="text" name="longs" value="" class="form-control"
                                                    placeholder="cth::4.214943">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Latitute</label>
                                                <input type="text" name="lat" value="" class="form-control"
                                                    placeholder="cth::101.312177">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tindakan Jabatan / Agensi Lain</label>
                                                <select class="form-control custom-select select2"
                                                    name="tagensi">
                                                    <option value="Tiada">Tiada</option>
                                                    <option value="Pilih Agensi Berkaitan">Pilih Agensi Berkaitan</option>
                                                    <option value="JPS Negeri Kedah">JPS Negeri Kedah</option>
                                                    <option value="JPS PLSM/Mekanikal">JPS PLSM/Mekanikal</option>
                                                    <option value="JPS Kuala Muda"></option>
                                                    <option value="MPSP">MPSP</option>
                                                    <option value="MPB">MPB</option>
                                                    <option value="MPSK">MPSK</option>
                                                    <option value="JKR">JKR</option>
                                                    <option value="P.Daerah">P.Daerah</option>
                                                    <option value="P.Tanah">P.Tanah</option>
                                                    <option value="KEDA">KEDA</option>
                                                    <option value="MADA">MADA</option>
                                                    <option value="Jabatan Pertanian">Jabatan Pertanian</option>
                                                    <option value="Jabatan Hutan">Jabatan Hutan</option>
                                                    <option value="NGO">NGO</option>
                                                    <option value="JPS RTB">JPS RTB</option>
                                                    <option value="JPS Kuala Muda">JPS Kuala Muda</option>
                                                    <option value="JPS BPME">JPS BPME</option>
                                                    <option value="JPS BPME">Jabatan Alam Sekitar</option>
                                                    <option value="JPS BPME">Sada</option>
                                                    <option value="JPS BPME">TNB</option>
                                                    <option value="Lain-Lain">Lain-Lain</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6"></div>

                                
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Kepentingan</label>
                                                <select class="form-control custom-select select2"
                                                    name="kepentingan">
                                                    <option value="Tiada">Tiada</option>
                                                    <option value="Awam">Awam</option>
                                                    <option value="Individu">Individu</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6"></div>
                                
                                    
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tahap Keseriusan</label>
                                                <select class="form-control custom-select select2"
                                                    name="kesiriusan">
                                                    <option value="Tiada">Tiada</option>
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 mt-5">
                                                <label class="form-label">Nota::</label>
                                                <p>I - Sangat serius, perlukan tindakan segera</p>
                                                <p>II -  Serdehana serius, perlukan tindakan segera</p>
                                                <p>III - Kurang serius, perlukan tindakan</p>
                                        </div>


                                        <div class="col-sm-6 col-md-6"></div>
                                 

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Cadangan Pembaikan</label>
                                                <textarea class="form-control" name="cadangan"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Anggaran Kos::</label>
                                                <input type="text" name="anggaran" value="" class="form-control"
                                                    placeholder="cth::RM 200,000.00">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6"></div>


                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pengawai Penyiasat</label>
                                                <input class="form-control" placeholder="" type="text"
                                                    name="ppenyiasat">
                                            </div>
                                        </div>

                                   
                                      
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pegawai Penyemak</label>
                                          
                                                <select class="form-control custom-select select2" id="ppenyemak"
                                                    name="ppenyemak">
                                                    <option value="Tiada">Tiada</option>
                                                    <?php
                                                            foreach($getuser as $row)
                                                            {
                                                                echo '<option value="'.$row->user_id.'">'.$row->jps_name.'</option>';
                                                            } 
                                                        ?>
                                                </select>
                                            </div>
                                        </div>

                                                 
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Pegawai Pengesyor</label>
                                          
                                                <select class="form-control custom-select select221" id="ppengesyor"
                                                    name="ppengesyor">
                                                    <option value="Tiada">Tiadas</option>
                                                    <?php
                                                            foreach($getuser as $row)
                                                            {
                                                                echo '<option value="'.$row->user_id.'">'.$row->jps_name.'</option>';
                                                            } 
                                                        ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <select class="form-control custom-select select2" id="pemailpengesyor"
                                                    name="emailpengesyor">

                                                </select>
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-6 col-md-6 mt-4">
                                            <div class="form-group">
                                                <label class="form-label">Tarikh</label>
                                                <input class="form-control fc-datepicker" name="aduan2tarikh"
                                                    placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                        </div>


                                        <div class="col-md-6"></div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                    name="status">
                                                <input class="form-control" name="aduan1id" placeholder="eg:Kuala Muda" type="hidden"
                                                    name="status">
                                            </div>
                                        </div>

                                        <div class="col-md-6"></div>

                                        <div class="col-md-3">
                                            <input type="submit" name="submit" id="confirm" class="btn btn-primary"
                                                value="Save">
                                        </div>
                                    
                                     

                                    </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab22">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div><!-- end app-content-->
</div>