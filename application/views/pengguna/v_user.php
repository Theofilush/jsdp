<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }   if ($buba == 'administrator' || $buba == 'koordinator' ){ ?>
<!-- Main Content -->
<div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">JSDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Daftar Pengguna JSDP Mahasiswa</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Data Table</h5>
                            <p class="mb-10">Add advanced interaction controls to HTML tables like <code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" >View all options</a>.</p> -->
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-10">                        
                                    <button type="button" class="btn btn-primary btn-xs btnnomargin"  data-toggle="modal" data-target="#modal-tambah"><span class="glyphicon glyphicon-plus"></span>  User Baru</button> 
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-10">                        
                                    <a type="button" class="btn btn-light btn-xs btnnomargin" href="<?php echo site_url() ?>Users">Mahasiswa</a>
                                    <a type="button" class="btn btn-light btn-xs btnnomargin" href="<?php echo site_url() ?>Users/dosen">Dosen</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_users" class="table w-100 table-striped table-bordered" style="font-size:0.8em;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-capitalize"></th>
                                                    <th class="text-center text-capitalize">No.</th>
                                                    <th class="text-center text-capitalize">ID</th>
                                                    <th class="text-center text-capitalize">Username</th>
                                                    <th class="text-center text-capitalize">Nama Lengkap</th>
                                                    <th class="text-center text-capitalize">Program Studi</th>
                                                    <th class="text-center text-capitalize">Email</th>
                                                    <th class="text-center text-capitalize">Author</th>
                                                    <th class="text-center text-capitalize">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $no = 1; 
                                            foreach($query as $row){                   
                                            ?> 
                                            <tr>
                                            <td></td>
                                            <td><?php echo $no++ ?></td>
                                            <td><b><?php echo $row->ID_user; ?></b><br>                            
                                            </td>
                                            <td><b><?php echo $row->username; ?></b></td>
                                            <td><b><?php echo $row->nama_lengkap; ?></b></td>
                                            <td>                           
                                            <b><?php echo $row->prodi; ?></b>
                                            </td> 
                                            <td>
                                                <b><?php echo $row->email; ?></b>
                                            </td>
                                            <td>
                                                <b><?php echo $row->author; ?></b>
                                            </td>
                                            <td class="ketengah">                              
                                                <button type="button" class="btn btn-primary btn-xs btnnomargin"  data-toggle="modal" data-target="#modal-edit<?php echo $row->id;?>"><span class="glyphicon glyphicon-pencil"></span></button> 
                                                <a href="<?php echo site_url(); ?>pengguna/users/deleteUser/<?php echo $row->id; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove  "></i></a> 
                                                
                                            </td>                                                
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                       
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

          
            <?php
} else{
  echo '<div class="hk-pg-wrapper">
  <div class="container">
  <h2>Halaman Tidak tidak ditemukan</h2>
  </div>
  </div>';
}?>


<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="exampleDropdownFormEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleDropdownFormEmail1"
							placeholder="email@example.com">
					</div>
					<div class="form-group">
						<label for="exampleDropdownFormPassword1">Password</label>
						<input type="password" class="form-control" id="exampleDropdownFormPassword1"
							placeholder="Password">
					</div>
					<div class="custom-control custom-checkbox mb-10">
						<input type="checkbox" class="custom-control-input" id="customChk">
						<label class="custom-control-label" for="customChk">Remember me</label>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>
		</div>
	</div>
</div>