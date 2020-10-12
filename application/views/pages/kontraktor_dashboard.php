
				<div class="app-content page-body">
					<div class="container">

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Kontraktor Dashboard</h4>
							</div>
						
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-6 col-md-12 col-lg-12">
								<div class="card bg-primary text-white">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-12 col-md-12 col-lg-6">
												<div class="d-block card-header border-0 text-center px-0">
													<h3 class="text-center mb-4">Jumlah <b>Kontraktor</b></h3>
													<small>Berdaftar</small>
												</div>
												<div class="row text-center">
													<div class="col-md-12">
														<h2 class="mb-0 fs-40 counter font-weight-bold"><?php echo $count[0]->TOTAL; ?></h2>
														<h6 class="mt-4 text-white-50">Syarikat</h6>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body text-center">
										<span class="fs-50 icon-muted"><i class="mdi mdi-check-circle icon-dropshadow-info text-info"></i></span>
										<p class=" mb-1">Aktif</p>
										<h2 class="mb-1 fs-40 font-weight-bold"><?php echo $count[0]->daftar; ?></h2>
									
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body text-center">
										<span class="fs-50 icon-muted"><i class="mdi mdi-close-circle icon-dropshadow-danger text-danger"></i></span>
										<p class=" mb-1 ">Tidak Aktif</p>
										<h2 class="mb-1 fs-40 font-weight-bold"><?php echo $count[0]->TOTAL- $count[0]->daftar; ?></h2>
										
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-md-12 col-lg-12">
							<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<i class="mdi mdi-account-box-outline card-custom-icon icon-dropshadow-primary text-primary fs-60"></i>
												<p class=" mb-1 fs-20 font-weight-bold">Malaysia</p>
												<h2 class="mb-1 fs-30 font-weight-bold"><?php echo $count[0]->malaysia; ?></h2>
											
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<i class="mdi mdi-account-box-outline card-custom-icon icon-dropshadow-info text-info fs-60"></i>
												<p class=" mb-1 fs-20 font-weight-bold">Kedah</p>
												<h2 class="mb-1 fs-30 font-weight-bold"><?php echo $count[0]->kedah; ?></h2>
											
											</div>
										</div>
									</div>
							</div>
								<div class="row">

						
									<div class="col-xl-4 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<i class="mdi mdi-account-box-outline card-custom-icon icon-dropshadow-warning text-warning fs-60"></i>
												<p class=" mb-1 fs-20 font-weight-bold">Kuala Muda</p>
												<h2 class="mb-1 fs-30 font-weight-bold"><?php echo $count[0]->km; ?></h2>
											
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<i class="mdi mdi-account-box-outline card-custom-icon icon-dropshadow-success text-success fs-60"></i>
												<p class=" mb-1 fs-20 font-weight-bold">Sik</p>
												<h2 class="mb-1 fs-30 font-weight-bold"><?php echo $count[0]->sik; ?></h2>
										
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<i class="mdi mdi-account-box-outline card-custom-icon icon-dropshadow-secondary text-secondary fs-60"></i>
												<p class=" mb-1 fs-20 font-weight-bold">Baling</p>
												<h2 class="mb-1 fs-30 font-weight-bold"><?php echo $count[0]->baling; ?></h2>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
						<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table mb-0 table-vcenter table-hover text-nowrap border">
												<thead>
													<tr>
														<th class="border-bottom-0">Daerah</th>
														<th>G1</th>
														<th>Berdaftar</th>
														<th>Tidak Berdaftar</th>
												
													</tr>
												</thead>
												<tbody>
												
											
											
													<tr>
														<td><h5 class="font-weight-bold mb-0">Daerah Kuala Muda</h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->km ?></h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->daftar ?></h5></td>
														<td><h5 class="font-weight-bold mb-0">''''</h5></td>
													
													
													</tr>
													<tr>
														<td><h5 class="font-weight-bold mb-0">Dearah Sik</h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->sik ?></h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->daftar ?></h5></td>
														<td><h5 class="font-weight-bold mb-0">''''</h5></td>
													
													
													</tr>
											
													<tr>
														<td><h5 class="font-weight-bold mb-0">Daerah Baling</h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->baling ?></h5></td>
														<td><h5 class="font-weight-bold mb-0"><?php echo $countgi[0]->daftar ?></h5></td>
														<td><h5 class="font-weight-bold mb-0">''''</h5></td>
													
													
													</tr>
											
											
											
											
											
							
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
					
						</div>
						<!--End row-->

						<!--Row-->

						<!--End row-->
					</div>
				</div><!-- end app-content-->
			</div>