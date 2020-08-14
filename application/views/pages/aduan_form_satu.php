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
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <!--aduan bahagia 1 -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Borang Aduan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <h4 class="card-title">Aduan Bahagian Satu</h4>
                            </div>
                         
                            <div class="col-lg-9">
                            <?php  echo form_open('aduan/b-aduan-satu') ?>
                                <div class="row">
                              
                                    <div class="col-md-12">
                                        <h4 class="mt-1 mb-4">Maklumat Pengadu</h4>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Nama Pengadu</label>
                                            <input type="text" name="pengadu" value="" class="form-control" placeholder="cth: Ridzam bin Jusoh">
                                        </div>
                                    </div>

                                    <div class="col-sm-5 col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">No Kad Pengenalan</label>
                                            <input type="text" name="nokp" value="" class="form-control"
                                            placeholder="78xxx-xx-xxxx">
                                        </div>
                                    </div>

                                    <div class="col-sm-7 col-md-7">
                                        <div class="form-group">
                                            <label class="form-label">Email Pengadu</label>
                                            <input type="text" name="emailpengadu" value="" class="form-control"
                                              
                                                placeholder="cth:zaki@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tarikh Aduan</label>
                                            <input class="form-control fc-datepicker" name="tarikhaduan"
                                                placeholder="MM/DD/YYYY" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tarikh surat akuan Aduan</label>
                                            <input class="form-control fc-datepicker" name="tarikhsurat"
                                                placeholder="MM/DD/YYYY" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Jawatan Pengadu</label>
                                            <select class="form-control custom-select select2" name="jawatanpengadu">
                                                <option value="Tiada">Tiada Jawatan</option>
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
                                            <select class="form-control custom-select select2" name="salinanaduan">
                                                <option value="Tiada">Tiada Salinan Aduan</option>
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
                                            <select class="form-control custom-select select2" name="sumber">
                                                <option value="Tiada">Tiada</option>
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
                                            <input type="text" name="notel" value="" class="form-control"
                                                placeholder="011-1234567">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Aduan</label>
                                            <textarea class="form-control" name="aduantxt"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="mt-1 mb-4">Lokasi Aduan</h4>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Lokasi</label>
                                            <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                name="lokasi">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Mukim</label>
                                            <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                name="mukim">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Sungai</label>
                                            <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                name="sungai">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Pegawai Penyiasat</label>
                                            <select class="form-control custom-select select2" id="pegawaiemail" name="pegawai">
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
                                            <label class="form-label">Email</label>
                                            <select class="form-control custom-select select2" id="pemail"  name="emailpegawai">
                                             
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Daerah</label>
                                            <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                name="daerah">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Kod Aduan</label>
                                            <input class="form-control" placeholder="eg:Kuala Muda" type="text"
                                                name="kodaduan">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tarikh Majukan Kepada Pegawai</label>
                                            <input class="form-control fc-datepicker" name="tarikhmaju"
                                                placeholder="MM/DD/YYYY" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-3">
                                         <input type="submit" name="submit" id="confirm" class="btn btn-primary" value="Save">
                                    </div>
                                    </form>
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