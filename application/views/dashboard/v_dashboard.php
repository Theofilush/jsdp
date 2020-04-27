<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username;$nama_lengkap=$row->nama_lengkap; }  ?>
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
				<!-- Row -->
                <div class="row">
				<?php if ($this->session->flashdata('notification')) {
				 ?>
				<div class="offset-xl-3 col-xl-6">
					<div class = "alert alert-primary" role = "alert" > <h4 class="alert-heading mb-5">Berhasil</h4>
						<p><?php echo $this->session->flashdata('notification')?></p>
					</div>
				</div>
				<?php } ?>
                    <div class="offset-xl-3 col-xl-6">
						<div class="card card-refresh">
									<div class="refresh-container">
										<div class="loader-pendulums"></div>
									</div>
									<div class="card-header card-header-action">
										<div>
											<h5 class="mb-10">Selamat Datang, <?php echo $nama_lengkap?></h6>
											<!-- <p class="font-14">Selamat datang di Sisfo Kampus - Universitas Pembangunan Jaya.</p> -->
											<p class="font-14">Please don't forget to logout after finish your work. Thanks... :)</p>
										</div>
										<div class="d-flex align-items-end card-action-wrap">
										<p class="font-14"><?php echo tanggal();?></p>
											<!-- <a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<a href="#" class="inline-block full-screen">
												<i class="ion ion-md-expand"></i>
											</a> -->
										</div>
									</div>
									<div class="card-body">
										
									</div>
						</div>
					</div>
                </div>
                <!-- /Row -->

			</div>
            <!-- /Container -->
			<!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
				<div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Informatika - <a href="#" class="text-dark" >Universitas Pembangunan Jaya</a> © 2020</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a> -->
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->
