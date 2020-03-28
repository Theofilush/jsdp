<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }   if ($buba == 'administrator' ){ ?>
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
                                    <a type="button" class="btn btn-light btn-xs btnnomargin" href="<?php echo site_url() ?>pengguna/Users">Mahasiswa</a>
                                    <a type="button" class="btn btn-light btn-xs btnnomargin" href="<?php echo site_url() ?>pengguna/Users/index/dosen">Dosen</a>
                                    <a type="button" class="btn btn-light btn-xs btnnomargin" href="<?php echo site_url() ?>pengguna/Users/index/koordinator">Koordinator</a>
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
                                            <td><b><?php echo $row->ID_user; ?></b><br></td>
                                            <td><b><?php echo $row->username; ?></b></td>
                                            <td><b><?php echo $row->nama_lengkap; ?></b></td>
                                            <td><b><?php echo $row->prodi; ?></b></td> 
                                            <td><b><?php echo $row->email; ?></b></td>
                                            <td><b><?php echo $row->author; ?></b></td>
                                            <td class="ketengah">
                                                <a href="<?php echo site_url(); ?>pengguna/users/editUser/<?php echo $row->id; ?>" class="btn btn-primary btn-xs btnnomargin"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <a href="<?php echo site_url(); ?>pengguna/users/deleteUser/<?php echo $row->id; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove"></i></a>
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


<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Pengguna Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
                    <?php
                        $atribut = array(
                            'class' => 'form-horizontal form-label-left',
                            'data-parsley-validate' => '',
                            'id'=>'demo-form2'
                        );
                        echo form_open('pengguna/Users/tambahUser',$atribut);
                        echo form_hidden('id',$row->ID_user);
                    ?>
                    <div class="form-group row">
                    	<label for="id_user" class="col-sm-3 col-form-label">NIM / NIP</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" id="id_user" placeholder="NIM / NIP" name="id_user">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="username" class="col-sm-3 col-form-label">Username</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="namaLengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="namaLengkap">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="prodi" class="col-sm-3 col-form-label">Prodi</label>
                    	<div class="col-sm-9">
                    		<select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Prodi" name="prodi">
                    			<option></option>
                    			<?php 
                                   foreach($tampil_prodi as $row){                                               
                                ?>
                    			<option><?php echo $row->program_studi; ?></option>
                    			<?php
                                    }
                                ?>
                    		</select>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="email" class="col-sm-3 col-form-label">Email</label>
                    	<div class="col-sm-9">
                    		<input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="password" class="col-sm-3 col-form-label">Password</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" id="password" placeholder="Password" name="password">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="cpassword" class="col-sm-3 col-form-label">Ulangi Password</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" id="cpassword" placeholder="Ulangi Password" name="cpassword">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="status" class="col-sm-3 col-form-label">Status</label>
                    	<div class="col-sm-9">
                    		<select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Status" name="status">
                    			<option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="form-group row mb-40">
                    	<label for="author" class="col-sm-3 col-form-label">Author</label>
                    	<div class="col-sm-9">
                    		<select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Author" name="author">
                    			<option></option>
                    			<?php 
                                   foreach($tampil_author as $row){ 
                                ?>
                    			<option><?php echo $row->author; ?></option>
                    			<?php
                                    }
                                ?>
                    		</select>
                    	</div>
                    </div>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-success" name="btnSimpan" value="Simpan">Submit</button>
                <?php
                echo form_close();
                ?>
			</div>
		</div>
	</div>
</div>