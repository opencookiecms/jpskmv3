
				<div class="app-content page-body">
					<div class="container">

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Profil Kontraktor</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile 02</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->
						<!--/app header-->
						<div class="main-proifle">
							<div class="row">
								<div class="col-lg-7">
									<div class="box-widget widget-user">
										<div class="widget-user-image d-sm-flex">
											<img alt="User Avatar" class="rounded-circle border p-0" src="<?php echo base_url() ?>assets/userimage/<?php echo $kdetail[0]->konImage ?>" style="width:200px; height:200px;">
											<div class="ml-sm-4 mt-4">
												<h4 class="pro-user-username mb-3 font-weight-bold"><?php echo $kdetail[0]->konName ?></h4>
												<div class="d-flex mb-1">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5.08 8h2.95c.32-1.25.78-2.45 1.38-3.56-1.84.63-3.37 1.9-4.33 3.56zm2.42 4c0-.68.06-1.34.14-2H4.26c-.16.64-.26 1.31-.26 2s.1 1.36.26 2h3.38c-.08-.66-.14-1.32-.14-2zm-2.42 4c.96 1.66 2.49 2.93 4.33 3.56-.6-1.11-1.06-2.31-1.38-3.56H5.08zM12 4.04c-.83 1.2-1.48 2.53-1.91 3.96h3.82c-.43-1.43-1.08-2.76-1.91-3.96zM18.92 8c-.96-1.65-2.49-2.93-4.33-3.56.6 1.11 1.06 2.31 1.38 3.56h2.95zM12 19.96c.83-1.2 1.48-2.53 1.91-3.96h-3.82c.43 1.43 1.08 2.76 1.91 3.96zm2.59-.4c1.84-.63 3.37-1.91 4.33-3.56h-2.95c-.32 1.25-.78 2.45-1.38 3.56zM19.74 10h-3.38c.08.66.14 1.32.14 2s-.06 1.34-.14 2h3.38c.16-.64.26-1.31.26-2s-.1-1.36-.26-2zM9.66 10c-.09.65-.16 1.32-.16 2s.07 1.34.16 2h4.68c.09-.66.16-1.32.16-2s-.07-1.35-.16-2H9.66z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1"><?php echo $kdetail[0]->KonAlamat ?></br><?php echo $kdetail[0]->konAlamatExtS ?><?php echo $kdetail[0]->konAlamatExtD ?></br><?php echo $kdetail[0]->konPoskod ?> <?php echo $kdetail[0]->konBandar ?> <?php echo $kdetail[0]->konDaerah?></br><?php echo $kdetail[0]->konNegeri ?></div>
												</div>
												<div class="d-flex mb-1">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1"><?php echo $kdetail[0]->konPengurus?></div>
												</div>
												<div class="d-flex">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
													<div class="h6 mb-0 ml-3 mt-1"><?php echo $kdetail[0]->konTel ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-auto">
									<div class="text-lg-right mt-4 mt-lg-0">
									<?php 
										$endDate = $kdetail[0]->sijilJPSTamat;	
								     ?>
														 
								    <?php if (date("Y-m-d") < $endDate) { ?>
										<div class="bg-primary p-3 br-3 mt-4 text-center">
											<span class="h4 text-white mb-0 font-weight-bold">BERDAFTAR</span>
										</div>
                                    <?php } else{?>
										<div class="bg-danger p-3 br-3 mt-4 text-center">
											<span class="h4 text-white mb-0 font-weight-bold">TIDAK BERDAFTAR</span>
										</div>
                                    <?php } ?>
									</div>
									<div class="mt-5">
										<div class="main-profile-contact-list row">
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-sticky-note-o fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Posts</small>
													<div class="font-weight-bold fs-25">
														245
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-user fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Followers</small>
													<div class="font-weight-bold fs-25">
														689k
													</div>
												</div>
											</div>
											<div class="media col-sm-4">
												<div class="media-icon bg-light text-primary mr-3 mt-1">
													<i class="fa fa-feed fs-18"></i>
												</div>
												<div class="media-body">
													<small class="text-muted">Following</small>
													<div class="font-weight-bold fs-25">
														3,765
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="profile-cover">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading p-0">
										<div class="tabs-menu1 px-3">
											<ul class="nav">
												<li><a href="#tab-7" class="active" data-toggle="tab">Maklumat Syarikat</a></li>
												<li><a href="#tab-8" data-toggle="tab" class="">Maklumat Rakan Konsi</a></li>
												<li><a href="#tab-9" data-toggle="tab" class="">Sijil</a></li>
												<li><a href="#tab-10" data-toggle="tab" class="">Maklumat Projek</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /.profile-cover -->
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-7">
											<div class="card">
											<div class="card-body border-top">
													<h5 class="font-weight-bold">Maklumat Syarikat</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-5">
															<div class="media-icon bg-info text-white mr-4">
																<i class="fa fa-wpforms"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">No Kad Pengenalan:</h6>
																<span><?php echo $kdetail[0]->NoKPpengurus ?></span>
														
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-secondary text-white mr-4">
																<i class="fa fa-fax"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">No Telefon Pengurus:</a></h6>
																<span><?php echo $kdetail[0]->NoTelPengurus ?></span>
															
															</div>
														</div>
												
													</div>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">SSM</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-5">
															<div class="media-icon bg-success text-white mr-4">
																<i class="fa fa-gg"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">No Pendaftaran SSM:</h6>
																<span><?php echo $kdetail[0]->daftarSSM ?></span>
														
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-primary text-white mr-4">
																<i class="fa fa-calendar-check-o"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Tempoh Sah Dari:</a></h6>
																<span><?php echo $kdetail[0]->daftarHSSM ?></span>
															
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-danger text-white mr-4">
															<i class="fa fa-calendar-times-o"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Hingga:</a></h6>
																<span><?php echo $kdetail[0]->daftarTSSM ?></span>
															
															</div>
														</div>
													</div>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-bold">Kawasan Operasi Syarikat</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-5">
															<div class="media-icon bg-warning text-white mr-4">
																<i class="fa fa-map-marker"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Kawasan Operasi:</h6>
																<span><?php echo $kdetail[0]->konKawOperasi ?></span>
														
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-success text-white mr-4">
																<i class="fa fa-star"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-bold mb-1">Prestasi Kontrakor:</a></h6>
																<span><?php echo $kdetail[0]->konPrestasi ?></span>
															
															</div>
														</div>
												
													</div>
												</div>
										
											
											</div>
										</div>
										<div class="tab-pane" id="tab-8">
											<div class="card p-5">
											<h5 class="font-weight-bold">Maklumat Rakan Kongsi</h5>
												<div class="row">
												
													<div class="col-lg-6">
													<div class="d-flex align-items-center border p-3 mb-3 br-7">
														<div class="box-widget widget-user">
															<div class="widget-user-image d-sm-flex">
																<div class="ml-sm-4 mt-4">
																<h4 class="pro-user-username mb-3 font-weight-bold">Rakan Kongsi <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm11 10h2V5h-4v2h2v8zm7-14H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14z"/></svg></h4>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="12" cy="4" r="2"/><path d="M15.89,8.11C15.5,7.72,14.83,7,13.53,7c-0.21,0-1.42,0-2.54,0C8.24,6.99,6,4.75,6,2H4c0,3.16,2.11,5.84,5,6.71V22h2v-6h2 v6h2V10.05L18.95,14l1.41-1.41L15.89,8.11z"/></svg>
																	<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKsatu==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada Maklumat rakan kongsi pertama</span>';
																			}else{
																				echo $kdetail[0]->RKsatu;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKsatuNokp==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no kad pengenalan</span>';
																			}else{
																				echo $kdetail[0]->RKsatuNokp;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex">
																		<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKsatuNotel==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no telefon</span>';
																			}else{
																				echo $kdetail[0]->RKsatuNotel;	
																			} 
																		?>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="d-flex align-items-center border p-3 mb-3 br-7">
														<div class="box-widget widget-user">
															<div class="widget-user-image d-sm-flex">
																<div class="ml-sm-4 mt-4">
																	<h4 class="pro-user-username mb-3 font-weight-bold">Rakan Kongsi <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm18-4H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14zm-4-4h-4v-2h2c1.1 0 2-.89 2-2V7c0-1.11-.9-2-2-2h-4v2h4v2h-2c-1.1 0-2 .89-2 2v4h6v-2z"/></svg></h4>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="12" cy="4" r="2"/><path d="M15.89,8.11C15.5,7.72,14.83,7,13.53,7c-0.21,0-1.42,0-2.54,0C8.24,6.99,6,4.75,6,2H4c0,3.16,2.11,5.84,5,6.71V22h2v-6h2 v6h2V10.05L18.95,14l1.41-1.41L15.89,8.11z"/></svg>
																	<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKdua==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada Maklumat rakan kongsi kedua</span>';
																			}else{
																				echo $kdetail[0]->RKdua;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKduaNokp==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no kad pengenalan</span>';
																			}else{
																				echo $kdetail[0]->RKduaNokp;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex">
																		<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKduaNotel==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no telefon</span>';
																			}else{
																				echo $kdetail[0]->RKduaNotel;	
																			} 
																		?>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="d-flex align-items-center border p-3 mb-3 br-7">
														<div class="box-widget widget-user">
															<div class="widget-user-image d-sm-flex">
																<div class="ml-sm-4 mt-4">
																<h4 class="pro-user-username mb-3 font-weight-bold">Rakan Kongsi <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 1H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14zM3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm14 8v-1.5c0-.83-.67-1.5-1.5-1.5.83 0 1.5-.67 1.5-1.5V7c0-1.11-.9-2-2-2h-4v2h4v2h-2v2h2v2h-4v2h4c1.1 0 2-.89 2-2z"/></svg></h4>
																	<div class="d-flex mb-1">
																		
																		<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="4" r="2"/><path d="M15.89,8.11C15.5,7.72,14.83,7,13.53,7c-0.21,0-1.42,0-2.54,0C8.24,6.99,6,4.75,6,2H4c0,3.16,2.11,5.84,5,6.71V22h2v-6h2 v6h2V10.05L18.95,14l1.41-1.41L15.89,8.11z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKtiga==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada Maklumat rakan kongsi ketiga</span>';
																			}else{
																				echo $kdetail[0]->RKtiga;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKtigaNokp==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no kad pengenalan</span>';
																			}else{
																				echo $kdetail[0]->RKtigaNokp;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex">
																		<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKtigaNotel==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no telefon</span>';
																			}else{
																				echo $kdetail[0]->RKtigaNotel;	
																			} 
																		?>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="d-flex align-items-center border p-3 mb-3 br-7">
														<div class="box-widget widget-user">
															<div class="widget-user-image d-sm-flex">
																<div class="ml-sm-4 mt-4">
																<h4 class="pro-user-username mb-3 font-weight-bold">Rakan Kongsi <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm12 10h2V5h-2v4h-2V5h-2v6h4v4zm6-14H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14z"/></svg></h4>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><circle cx="12" cy="4" r="2"/><path d="M15.89,8.11C15.5,7.72,14.83,7,13.53,7c-0.21,0-1.42,0-2.54,0C8.24,6.99,6,4.75,6,2H4c0,3.16,2.11,5.84,5,6.71V22h2v-6h2 v6h2V10.05L18.95,14l1.41-1.41L15.89,8.11z"/></svg>
																	<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKempat==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada Maklumat rakan kongsi keempat</span>';
																			}else{
																				echo $kdetail[0]->RKempat;	
																			} 
																		?>
																	</div>
																	</div>
																	<div class="d-flex mb-1">
																	<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKempatNokp==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no kad pengenalan</span>';
																			}else{
																				echo $kdetail[0]->RKempatNokp;	
																			} 
																		?>
																		</div>
																	</div>
																	<div class="d-flex">
																		<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.2 18.21c1.21.41 2.48.67 3.8.76v-1.5c-.88-.07-1.75-.22-2.6-.45l-1.2 1.19zM6.54 5h-1.5c.09 1.32.35 2.59.75 3.79l1.2-1.21c-.24-.83-.39-1.7-.45-2.58zM14 8h5V5h-5z" opacity=".3"/><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.46 2.59L5.79 8.8c-.41-1.21-.67-2.48-.76-3.8zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51zM12 3v10l3-3h6V3h-9zm7 5h-5V5h5v3z"/></svg>
																		<div class="h6 mb-0 ml-3 mt-1">
																		<?php 
																			if( $kdetail[0]->RKempatNotel==""){
																				echo '<span class="badge badge-pill badge-danger">Tiada maklumat no telefon</span>';
																			}else{
																				echo $kdetail[0]->RKempatNotel;	
																			} 
																		?>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													</div>
									
													
							
												</div>
											</div>
									
										</div>
										<div class="tab-pane" id="tab-9">
											<div class="card">
										   		<div class="card-body">
												   <table class="table table-bordered">

											<td colspan="9" class="bg-primary text-white">Status Pendaftaran Syarikat<br></td>
											</tr>
											<tr>
											<th>Status Pendaftaran<br></th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spStatusPendaftaran ?></td>
											<td class="tg-yw4l" colspan="8"><?php echo $kdetail[0]->spNoSiri ?></td>
											</tr>
											<tr>
											<th>Permohonan Baru<br></td>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spPBaharu ?></td>
											<th>Pembaharuan</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spPembaharuan ?></td>
											<th>Lain-Lain</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spLainLain ?></td>
											<th>Kategori<br></th>
											<td colspan="3" class="tg-yw4l"><?php echo $kdetail[0]->spKategori ?></td>
											</tr>
											<tr>
											<td colspan="9" class="bg-primary text-white">Maklumat Pemohon</td>
											</tr>
											<tr>
											<th>Tarikh Permohonan</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spDateMohon ?></td>
											<th>Cas Perkhidmatan</th>
											<td>RM:<?php echo $kdetail[0]->spCaj ?></td>
											<th>No Resit</th>
											<td colspan="4"><?php echo $kdetail[0]->spNoResit ?></td>

											</tr>
											<tr>
											<th>No Sijil Pendaftaran<br></th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spNoSijil ?></td>
											<th>Tarikh Sijil Dikeluarkan<br></th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->spDateKeluar ?></td>
											<th>Tarikh Tamat Sijil<br></th>
											<td colspan="4"><?php echo $kdetail[0]->spDateTamat ?></td>
											</tr>
											<tr>
											<td colspan="9" class="bg-primary text-white">Disemak Oleh</td>
											</tr>
											<tr>
											<th >Disemak Oleh<br></th>
											<td colspan="2"><?php echo $kdetail[0]->spDisemak ?></td>
											<th>DiSahkan Oleh</th>
											<td colspan="2"><?php echo $kdetail[0]->spDisah ?></td>
											<th>Diluluskan Oleh</th>
											<td colspan="2"><?php echo $kdetail[0]->spLulus ?></td>

											</tr>
											<tr>
											<th>Jawatan Penyemak</th>
											<td colspan="2"><?php echo $kdetail[0]->spJwtnPenyemak ?></td>
											<th>Jawatan Pengurus</th>
											<td colspan="2"><?php echo $kdetail[0]->spJwtnSah ?></td>
											<th>Jawatan Penglulus</th>
											<td colspan="2"><?php echo $kdetail[0]->spJwtnLulus ?></td>

											</tr>
											<tr>
											<th>Status Sijil<br></th>
											<td colspan="9" class="tg-yw4l"><?php echo $kdetail[0]->spStatusSijil ?></td>
											</tr>
											<tr>
											<td colspan="9" class="bg-primary text-white">1) Lembaga Pembangunan Industri Pembinaan Malaysia (LPIPM)</td>
											</tr>
											<tr>
											<td class="tg-9hbo" colspan="10">a) Sijil Perakuan Pendaftaran Kontraktro (PPK)</td>
											</tr>
											<tr>
											<th>No Pendaftaran<br></th>
											<td colspan="2"><?php echo $kdetail[0]->sijilNoPendaftaran ?></td>
											<th>Tempoh Sah Dari</th>
											<td colspan="1"><?php echo $kdetail[0]->sijilSah ?></td>
											<th>Hingga</th>
											<td colspan="3" class="tg-yw4l"><?php echo $kdetail[0]->sijilTamat ?></td>
											</tr>
											<tr>
											<th>Gred_1<br></th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKGredOne ?></td>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKCatOne ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKKhuOne ?></td>
											</tr>
											<tr>
											<th>Gred_1_2</th>
											<th><?php echo $kdetail[0]->sijilPPKGredTwo ?></th>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKCatTwo ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKKhuTwo ?></td>
											</tr>
											<tr>
											<th>Gred_1_3</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKGredThree ?></td>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKCatThree ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilPPKKhuThree ?></td>
											</tr>
											<tr>
											<td class="tg-9hbo" colspan="10">b) Sijil Perolehan Kerja Kerajaan (SPKK)</td>
											</tr>
											<tr>
											<th>No Pendaftaran</th>
											<td colspan="2"><?php echo $kdetail[0]->sijilSPKKNo ?></td>
											<th>Tempoh Sah Dari</th>
											<td colspan="1"><?php echo $kdetail[0]->sijilSPKKsah ?></td>
											<th>Hingga</th>
											<td colspan="3"><?php echo $kdetail[0]->sijilSPKKTamat ?></td>
											</tr>
											<tr>
											<th>Gred_2_1</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKGredOne ?></td>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKCatOne ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKKhuOne ?></td>
											</tr>
											<tr>
											<th>Gred_2_2</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKGredTwo ?></td>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKCatTwo ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKKhuTwo ?></td>
											</tr>
											<tr>
											<th>Gred_2_3</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKGredThree ?></td>
											<th>Kategori</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKCatThree ?></td>
											<th>Pengkususan</th>
											<td colspan="5" class="tg-yw4l"><?php echo $kdetail[0]->sijilSPPKKhuThree ?></td>
											</tr>
											<tr>
											<td colspan="9" class="bg-primary text-white">2) Pusat Khidmat Kontraktor (PPK)</td>
											</tr>
											<tr>
											<td class="tg-9hbo" colspan="10">a) Sijil Taraf Bumiputra (STB)</td>
											</tr>
											<tr>
											<th>No Pendaftaran<br></th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijiSTBNo ?></td>
											<th>Tempoh Sah Dari</th>
											<td ><?php echo $kdetail[0]->sijilSTBSah ?></td>
											<th>Hingga</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilSTBTamat ?></td>
											<th>Gred Pendaftaran<br></th>
											<td colspan="2"><?php echo $kdetail[0]->sijilSTBGred ?></td>

											</tr>
											<tr>
											<td class="tg-achz" colspan="10">Jabatan Pengairan dan Saliran (JPS)</td>
											</tr>
											<tr>
											<td class="tg-9hbo" colspan="10">a) Sijil Perakuan Pendaftaran Pembekal/Kontraktor(SPPPK)</td>
											</tr>
											<tr>
											<th>No Pendaftaran</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilJPSNo ?></td>
											<th>Tempoh Sah Dari</th>
											<td class="tg-yw4l"><?php echo $kdetail[0]->sijilJPSSah ?></td>
											<th>Hingga</td>
												<td class="tg-yw4l"><?php echo $kdetail[0]->sijilJPSTamat ?></td>
												<th>Gred Pendaftaran</th>
												<td colspan="2"><?php echo $kdetail[0]->sijilJPSKate ?></td>

											</tr>

											</table>
									     </div>
											</div>								
										</div>
										<div class="tab-pane" id="tab-10">
											<div class="card p-5">
											<table class="table table-striped card-table table-vcenter text-nowrap mb-0">

												<tr>
												<th>Bil</th>
												<th>Projek</th>
												<th>Tarikh Mula</th>
												<th>Tarikh Siap</th>
												<th>Kategori</th>
												<th>Status</th>
												</tr>
											
												
												<tr>
												


													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												
												</tr>



												</table>							
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>

		