<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }   if ($buba == 'administrator' || $buba == 'koordinator' ){ ?>
<!-- Main Content -->
<div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">JSDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Poin JSDP</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Poin JSDP Mahasiswa</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Status Total Poin</h5>
                            <div class="row mb-20 justify-content-center">
                                <div class="col-md-6 mb-20">
                                    <div class="list-group">
                                    	<a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action active" href="#">
                                            <small><code><?php echo $this->db->where('status', 'Sah')->count_all_results('poin'); ?></code> Poin Sah</small>
                            				<!-- <span class="badge badge-primary">?php echo $sum_sah;?></span> -->
                                    	</a>
                                    	<a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="<?php echo site_url() ?>Menunggu">
                                            <small><code><?php echo $this->db->where('status', 'Menunggu')->count_all_results('poin'); ?></code> Poin Menunggu Diverifikasi</small>
                            				<span class="badge badge-warning badge-pill"><?php echo $sum_menunggu;?></span>
                                        </a>    
                                    	<a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="<?php echo site_url() ?>TidakSah" >
                                            <small><code><?php echo $this->db->where('status', 'Tidak sah')->count_all_results('poin'); ?></code> Poin Tidak Sah</small>
                            				<span class="badge badge-pumpkin badge-pill"><?php echo $sum_tidaksah;?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                            	<div class="btn-group mb-15" role="group" aria-label="Basic example">
                            		<a type="button" class="btn btn-light active" href="#">Sah</a>
                            		<a type="button" class="btn btn-light" href="<?php echo site_url(); ?>Menunggu">Menunggu diverifikasi</a>
                            		<a type="button" class="btn btn-light" href="<?php echo site_url(); ?>TidakSah">Tidak Sah</a>
                            	</div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Data Table</h5>
                            <p class="mb-10">Add advanced interaction controls to HTML tables like <code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" >View all options</a>.</p> -->
                            <div class="table-responsive">
                            <table class="table mb-10">
                                <tbody>
                                    <tr>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">ID User</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $id_user?></td>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Nama</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $nama_lengkap?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <a href="<?php echo site_url() ?>Tambahpoin" class="mb-20 btn btn-light btn-wth-icon icon-wthot-bg btn-rounded icon-right" role="button"><span class="btn-text">Tambah Poin JSDP</span><span class="icon-label"><i class="fa fa-plus"></i> </span></a>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_menunggu" class="table table-striped table-bordered w-100" style="font-size:0.75em;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-capitalize"></th>
                                                    <th class="text-center text-capitalize">#</th>
                                                    <th class="text-center text-capitalize">No</th>
                                                    <th class="text-center text-capitalize">Mahasiswa</th>
                                                    <th class="text-center text-capitalize">Domain</th>
                                                    <th class="text-center text-capitalize">Kegiatan</th>
                                                    <th class="text-center text-capitalize">Tema Kegiatan</th>
                                                    <th class="text-center text-capitalize">Lingkup</th>
                                                    <th class="text-center text-capitalize">Poin</th>
                                                    <th class="text-center text-capitalize">Status</th>
                                                    <th class="text-center text-capitalize">Keterangan</th>
                                                    <th class="text-center text-capitalize">Tanggal Pengajuan</th>
                                                    <th class="text-center text-capitalize">Tanggal Diperiksa</th>
                                                    <th class="text-center text-capitalize">Diperiksa Oleh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1; 
                                                if($buba == 'administrator'){
                                                    foreach($query as $row){
                                                        ?> 
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-center">    
                                                                <?php
                                                                if ($row->status_poin == "Tidak sah" || $row->status_poin == "Menunggu") {
                                                                    if($buba == 'administrator' ){
                                                                    ?>                                
                                                                        <a href="<?php echo site_url(); ?>poin/editpoin/<?php echo $row->no; ?>" class="btn btn-gradient-success btn-xs btnnomargin" ><i class="glyphicon glyphicon-pencil"></i></a> 
                                                                        <a href="<?php echo site_url(); ?>poin/deletedok/<?php echo $row->no; ?>" class="btn btn-gradient-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove"></i></a>
                                                                    <?php
                                                                    }
                                                                }
                                                                    ?> 
                                                                <a href="<?php echo site_url().'fileupload/'.$row->file?>" class="btn btn-gradient-secondary btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                            </td>
                                                        	<td><?php echo $no++ ?></td>
                                                        	<!-- <td>
                                                        		<b><?php echo $row->kegiatan; ?></b><br>
                                                        		<b hidden><?php echo $row->id_mhs; ?></b><br>
                                                        	</td>
                                                        	<td>
                                                        		<ul class="titiknya">
                                                        			<li>
                                                        				<?php echo $row->id_mhs;  ?>
                                                        			</li>

                                                        		</ul>
                                                        	</td> -->
                                                            <td class="text-uppercase"><?php echo $row->ID_user.' - '.$row->nama_lengkap; ?></td>
                                                        	<td>
                                                        		<b class="text-capitalize"><?php echo $row->nama_domain; ?></b><br>
                                                            </td>
                                                        <td class="text-center text-capitalize">
                                                            <b><?php echo $row->nama_kegiatan; ?></b> <small>sebagai</small> <b><?php echo $row->nama_subkegiatan; ?></b><br>
                                                        </td>
                                                        <td>
                                                            <?php if($row->detail_kegiatan != NULL) { ?>
                                                                <b class="text-capitalize"><?php echo $row->detail_kegiatan; ?></b><br>
                                                            <?php } else if($row->detail_kegiatan == NULL) { ?>
                                                            -
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <ul  class="list-ul">
                                                                <li><b class="text-capitalize"><?php echo $row->nama_lingkup; ?></b><br></li>
                                                                <?php if($row->tempat != NULL) { ?>
                                                                    <li><b class="text-capitalize"><?php echo $row->tempat; ?></b><br></li>
                                                                <?php } else if($row->tempat == NULL) { ?>
                                                                    <li><b class="text-capitalize">-</b><br></li>
                                                                <?php } ?>
                                                            </ul> 
                                                        </td>
                                                        <!-- <td class="text-center"> -->
                                                            <!-- ?php
                                                            if ($buba == 'administrator' || ($row->status_poin == "Tidak sah" || $row->status_poin == "Menunggu")) {
                                                                if($buba == 'administrator'){
                                                                    ?>
                                                                    ?php
                                                                        if(($row->file == NULL) || ($row->file == "")){
                                                                        ?>
                                                                            <button class="btn btn-primary btn-xs btnnomargin source" onclick="
                                                                                new PNotify({
                                                                                    title: 'Terjadi Kesalahan !',
                                                                                    text: 'Berkas Pendukung belum diunggah !',
                                                                                    type: 'error',
                                                                                    delay: 5000,
                                                                                    styling: 'bootstrap3'
                                                                                    });  
                                                                                "><i class="fa fa-fw fa-file-text"></i></button>
                                                                    ?php
                                                                        }else if(($row->file != NULL) || ($row->file != "") ){
                                                                        ?>
                                                                            <a href="?php echo site_url().'fileupload/'.$row->file  ?>"
                                                                            class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                                        ?php
                                                                        }
                                                                }
                                                            }
                                                            ?> -->

                                                            <!-- <a href="?php echo site_url().'fileupload/'.$row->file  ?>"
                                                               class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a> -->
                                                        <!-- </td> -->
                                                        <td class="text-center">
                                                            <b class="text-capitalize"><?php echo $row->poin; ?></b><br>
                                                        </td>
                                                        <td class="text-center">
                                                        <?php
                                                            if($row->status_poin == "Tidak sah") {
                                                              echo '<span class="font_color_red">'.$row->status_poin.'</span><br>';                            
                                                            } elseif ($row->status_poin == "Sah" ) {
                                                             echo '<span class="font_color_green">'.$row->status_poin.'</span><br>';                          
                                                            } elseif ($row->status_poin == "Menunggu") {
                                                                echo '<span class="">'.$row->status_poin.'</span><br>';  
                                                            }
                                                                                    
                                                            if($buba == 'administrator' && ($row->status_poin == "Menunggu")) {
                                                            ?>                            
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->no; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/tolakvalidasi/<?php echo $row->no; ?>" class="btn btn-xs btn-hitam btnnomargin"><i class="fa fa-times"></i></a>
                                                            <?php
                                                            } elseif ($buba == 'administrator' && ($row->status_poin ==  "Tidak sah") ) {
                                                            ?>
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->no; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>  
                                                        <td>
                                                            <?php if($row->keterangan != NULL) { ?>
                                                                <b class="text-capitalize"><?php echo $row->keterangan; ?></b><br>
                                                            <?php } else if($row->keterangan == NULL) { ?>
                                                            -
                                                            <?php } ?>
                                                        </td>
                                                            <td><?php echo $row->created_at; ?></td>
                                                            <td><?php echo $row->tanggal_periksa; ?></td>
                                                            <td><?php echo $row->diperiksa_oleh; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } else if($buba == 'koordinator'){
                                                    foreach($query as $row){
                                                        ?> 
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-center">    
                                                                <a href="<?php echo site_url().'fileupload/'.$row->file?>" class="btn btn-gradient-secondary btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                                <?php
                                                                if ($row->status_poin == "Tidak sah" || $row->status_poin == "Menunggu") {
                                                                    if($buba == 'koordinator'){
                                                                    ?>                                
                                                                        <a href="<?php echo site_url(); ?>poin/editpoin/<?php echo $row->no; ?>" class="btn btn-gradient-success btn-xs btnnomargin" ><i class="glyphicon glyphicon-pencil"></i></a> 
                                                                    <?php
                                                                    }
                                                                }
                                                                    ?> 
                                                            </td>
                                                        	<td><?php echo $no++ ?></td>
                                                        	<!-- <td>
                                                        		<b>?php echo $row->kegiatan; ?></b><br>
                                                        		<b hidden>?php echo $row->id_mhs; ?></b><br>
                                                        	</td>
                                                        	<td>
                                                        		<ul class="titiknya">
                                                        			<li>
                                                        				?php echo $row->id_mhs;  ?>
                                                        			</li>

                                                        		</ul>
                                                        	</td> -->
                                                            <td class="text-uppercase"><?php echo $row->ID_user.' - '.$row->nama_lengkap; ?></td>
                                                        	<td>
                                                        		<b class="text-capitalize"><?php echo $row->nama_domain; ?></b><br>
                                                            </td>
                                                        <td class="text-center text-capitalize">
                                                            <b><?php echo $row->nama_kegiatan; ?></b> <small>sebagai</small> <b><?php echo $row->nama_subkegiatan; ?></b><br>
                                                        </td>
                                                        <td>
                                                            <?php if($row->detail_kegiatan != NULL) { ?>
                                                                <b class="text-capitalize"><?php echo $row->detail_kegiatan; ?></b><br>
                                                            <?php } else if($row->detail_kegiatan == NULL) { ?>
                                                            -
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <ul  class="list-ul">
                                                                <li><b class="text-capitalize"><?php echo $row->nama_lingkup; ?></b><br></li>
                                                                <?php if($row->tempat != NULL) { ?>
                                                                    <li><b class="text-capitalize"><?php echo $row->tempat; ?></b><br></li>
                                                                <?php } else if($row->tempat == NULL) { ?>
                                                                    <li><b class="text-capitalize">-</b><br></li>
                                                                <?php } ?>
                                                            </ul> 
                                                        </td>
                                                        <!-- <td class="text-center"> -->
                                                            <!-- ?php
                                                            if ($buba == 'administrator' || ($row->status == "Tidak sah" || $row->status == "Menunggu")) {
                                                                if($buba == 'administrator'){
                                                                    ?>
                                                                    ?php
                                                                        if(($row->file == NULL) || ($row->file == "")){
                                                                        ?>
                                                                            <button class="btn btn-primary btn-xs btnnomargin source" onclick="
                                                                                new PNotify({
                                                                                    title: 'Terjadi Kesalahan !',
                                                                                    text: 'Berkas Pendukung belum diunggah !',
                                                                                    type: 'error',
                                                                                    delay: 5000,
                                                                                    styling: 'bootstrap3'
                                                                                    });  
                                                                                "><i class="fa fa-fw fa-file-text"></i></button>
                                                                    ?php
                                                                        }else if(($row->file != NULL) || ($row->file != "") ){
                                                                        ?>
                                                                            <a href="?php echo site_url().'fileupload/'.$row->file  ?>"
                                                                            class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                                        ?php
                                                                        }
                                                                }
                                                            }
                                                            ?> -->

                                                            <!-- <a href="?php echo site_url().'fileupload/'.$row->file  ?>"
                                                               class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a> -->
                                                        <!-- </td> -->
                                                        <td class="text-center">
                                                            <b class="text-capitalize"><?php echo $row->poin; ?></b><br>
                                                        </td>
                                                        <td class="text-center">
                                                        <?php
                                                            if($row->status_poin == "Tidak sah") {
                                                              echo '<span class="font_color_red">'.$row->status_poin.'</span><br>';                            
                                                            } elseif ($row->status_poin == "Sah" ) {
                                                             echo '<span class="font_color_green">'.$row->status_poin.'</span><br>';                          
                                                            } elseif ($row->status_poin == "Menunggu") {
                                                                echo '<span class="">'.$row->status_poin.'</span><br>';  
                                                            }
                                                                                    
                                                            if($buba == 'koordinator' && ($row->status_poin == "Menunggu")) {
                                                            ?>                            
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->no; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/tolakvalidasi/<?php echo $row->no; ?>" class="btn btn-xs btn-hitam btnnomargin"><i class="fa fa-times"></i></a>
                                                            <?php
                                                            } elseif ($buba == 'koordinator' && ($row->status_poin ==  "Tidak sah") ) {
                                                            ?>
                                                                <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->no; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>  
                                                            <td>
                                                                <?php if($row->keterangan != NULL) { ?>
                                                                    <b class="text-capitalize"><?php echo $row->keterangan; ?></b><br>
                                                                <?php } else if($row->keterangan == NULL) { ?>
                                                                -
                                                                <?php } ?>
                                                            </td>
                                                            <td><?php echo $row->created_at; ?></td>
                                                            <td><?php echo $row->tanggal_periksa; ?></td>
                                                            <td><?php echo $row->diperiksa_oleh; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
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
