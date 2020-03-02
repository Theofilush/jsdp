<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }  ?>
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
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Poin JSDP Mahasiswa</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Status Poin</h5>
                            <p class="mb-10">Total Poin = 1000</p>
                            <div class="progress mb-20">
                                <div class="progress-bar  progress-bar-striped bg-primary progress-bar-animated w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" tiyle="16">
                                    <div style="color: #000;position: absolute;bottom: 40px;/* display: block;font-size: 12px;font-weight: 500;left: 50%;transform: translate(-50%,-50%);*/"> 25% Sah (250 poin)</div> 
                                </div>
                                <div class="progress-bar  progress-bar-striped bg-warning progress-bar-animated w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" tiyle="16">
                                    <div style="color: #000;position: absolute;bottom: 40px;/* display: block;font-size: 12px;font-weight: 500;left: 50%;transform: translate(-50%,-50%);*/"> 70% Menunggu diverifikasi (700 poin)</div> 
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
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">NIM</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">ASA</td>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Nama</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">ASA</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Program Studi</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Informatika</td>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Status</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Aktif</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <a href="<?php echo site_url() ?>Tambahpoin" class="mb-20 btn btn-light btn-wth-icon icon-wthot-bg btn-rounded icon-right" role="button"><span class="btn-text">Tambah Poin JSDP</span><span class="icon-label"><i class="fa fa-plus"></i> </span></a>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_3" class="table table-hover w-100 display">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-capitalize"></th>
                                                    <th class="text-center text-capitalize">#</th>
                                                    <th class="text-center text-capitalize">No</th>
                                                    <th class="text-center text-capitalize">Domain</th>
                                                    <th class="text-center text-capitalize">Kegiatan</th>
                                                    <th class="text-center text-capitalize">Tema Kegiatan</th>
                                                    <th class="text-center text-capitalize">Lingkup</th>
                                                    <th class="text-center text-capitalize">File Pendukung</th>
                                                    <th class="text-center text-capitalize">Poin</th>
                                                    <th class="text-center text-capitalize">Status</th>
                                                    <th class="text-center text-capitalize">Keterangan</th>
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
                                                            <td class="ketengah">    
                                                                <?php
                                                                if ($buba == 'administrator' || ($row->status == "TIDAK" || $row->status == NULL)) {
                                                                    if($buba == 'administrator' || ($bubi ==  $row->penulis_publikasi || ($bubi ==  $row->penulis_anggota1) || ($bubi ==  $row->penulis_anggota2))){
                                                                    ?>                                
                                                                    <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/editdok/<?php echo $row->no; ?>" class="btn btn-primary btn-xs btnnomargin" ><i class="glyphicon glyphicon-pencil"></i></a> 
                                                                    <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/deletedok/<?php echo $row->no; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove"></i></a>
                                                                    <?php
                                                                    }
                                                                    }
                                                                    ?> 
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
                                                        	<td>
                                                        		<b class="text-capitalize"><?php echo $row->domain; ?></b><br>
                                                            </td>
                                                        <td class="text-center text-capitalize">
                                                            <b><?php echo $row->kegiatan; ?></b> <small>sebagai</small> <b><?php echo $row->sub_kegiatan; ?></b><br>
                                                        </td>
                                                        <td>
                                                            <b><?php echo $row->detail_kegiatan; ?></b><br>
                                                        </td>
                                                        <td>
                                                            <b class="text-capitalize"><?php echo $row->lingkup; ?></b><br>
                                                        </td>
                                                        	<td class="ketengah">
                                                            <?php
                                                            if ($buba == 'administrator' || ($row->status == "TIDAK" || $row->status == NULL)) {
                                                            if($buba == 'administrator' || ($bubi ==  $row->penulis_publikasi || ($bubi ==  $row->penulis_anggota1) || ($bubi ==  $row->penulis_anggota2))){
                                                                ?>
                                                            <button type="button" class="btn btn-success btn-xs btnnomargin" data-toggle="modal"
                                                            data-target="#modal-upload<?php echo $row->no;?>"><span
                                                                class="glyphicon glyphicon-cloud-upload"></span></button>
                                                            <?php
                                                                if(($row->file == NULL) || ($row->file == "")){
                                                                ?>
                                                            <button class="btn btn-default btn-xs btnnomargin source" onclick="
                                                                        new PNotify({
                                                                            title: 'Terjadi Kesalahan !',
                                                                            text: 'Berkas Pendukung belum diunggah !',
                                                                            type: 'error',
                                                                            delay: 5000,
                                                                            styling: 'bootstrap3'
                                                                            });  
                                                                        "><i class="fa fa-fw fa-file-text"></i></button>
                                                            <?php
                                                                }else if(($row->file != NULL) || ($row->file != "") ){
                                                                ?>
                                                            <a href="<?php echo site_url().'fileupload/publikasi_jurnal/'.$row->file  ?>"
                                                            class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                            <?php
                                                                }
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="ketengah"></td>
                                                        <td class="ketengah">
                                                        <?php
                                                            if($row->status == "TIDAK") {
                                                            echo '<span class="font_color_red">'.$row->status.'</span>';                            
                                                            } elseif ($row->status == "YA" ) {
                                                            echo '<span class="font_color_green">'.$row->status.'</span>';                          
                                                            }                            
                                                            if($buba == 'administrator' && ($row->status == NULL)) {
                                                            ?>                            
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->id_publikasi; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/tolakvalidasi/<?php echo $row->id_publikasi; ?>" class="btn btn-xs btn-hitam btnnomargin"><i class="fa fa-thumbs-down"></i></a>
                                                            <?php
                                                            } elseif ($buba == 'administrator' && ($row->status ==  "TIDAK") ) {
                                                            ?>
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->id_publikasi; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>  
                                                        <td></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } else if($buba == 'administrator'){
                                                    foreach($queryByProdi as $row){
                                                        ?> 
                                                        <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td>
                                                            <b><?php echo $row->judul; ?></b><br>
                                                            <b hidden><?php echo $row->cakupan_publikasi;?></b><br>
                                                            <b hidden><?php echo $row->tahun_penerbitan;?></b><br>
                                                        </td>
                                                        <td>
                                                            <ul class="titiknya">
                                                            <li>
                                                                <?php echo $row->penulis_publikasi;  ?> 
                                                            </li>                              
                                                            <?php
                                                                if($row->penulis_anggota1 != NULL){
                                                                ?>         
                                                                    <li>
                                                                    <?php echo $row->penulis_anggota1; ?>
                                                                    </li>
                                                                <?php
                                                                }
                                                                ?>     
                                                                <?php
                                                                if($row->penulis_anggota2 != NULL){
                                                                ?>         
                                                                    <li>
                                                                    <?php echo $row->penulis_anggota2; ?>
                                                                    </li>
                                                                <?php
                                                                }
                                                                ?>  
                                                                <?php
                                                                if($row->penulis_non_dosen != NULL){
                                                                ?>         
                                                                    <li>
                                                                    <?php echo $row->penulis_non_dosen; ?>
                                                                    </li>
                                                                <?php
                                                                }
                                                                ?>                               
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <b><?php echo $row->nama_jurnal; ?></b><br>                             
                                                            ISSN :&nbsp;<span class="font_color_blue"><?php echo $row->issn; ?></span><br>
                                                            Volume :&nbsp;<span class="font_color_blue"> <?php echo $row->volume; ?> </span><br>
                                                            Nomor :&nbsp;<span class="font_color_blue"> <?php echo $row->nomor; ?> </span><br>
                                                            Halaman :&nbsp;<span class="font_color_blue"><?php echo $row->halaman_awal; ?> s/d <?php echo $row->halaman_akhir; ?></span><br>
                                                            URL :&nbsp;<span class="font_color_blue"><a href="<?php echo $row->url; ?>" class="link_url"> <?php echo $row->url; ?></a></span><br>
                                                        </td>
                                                        <td class="ketengah">
                                                            <?php
                                                            if ($buba == 'administrator' || ($row->status == "TIDAK" || $row->status == NULL)) {
                                                            if($buba == 'administrator' || ($bubi ==  $row->penulis_publikasi || ($bubi ==  $row->penulis_anggota1) || ($bubi ==  $row->penulis_anggota2))){
                                                                ?>
                                                            <button type="button" class="btn btn-success btn-xs btnnomargin" data-toggle="modal"
                                                            data-target="#modal-upload<?php echo $row->id_publikasi;?>"><span
                                                                class="glyphicon glyphicon-cloud-upload"></span></button>
                                                            <?php
                                                                if(($row->file == NULL) || ($row->file == "")){
                                                                ?>
                                                            <button class="btn btn-default btn-xs btnnomargin source" onclick="
                                                                        new PNotify({
                                                                            title: 'Terjadi Kesalahan !',
                                                                            text: 'Berkas Pendukung belum diunggah !',
                                                                            type: 'error',
                                                                            delay: 5000,
                                                                            styling: 'bootstrap3'
                                                                            });  
                                                                        "><i class="fa fa-fw fa-file-text"></i></button>
                                                            <?php
                                                                }else if(($row->file != NULL) || ($row->file != "") ){
                                                                ?>
                                                            <a href="<?php echo site_url().'fileupload/publikasi_jurnal/'.$row->file  ?>"
                                                            class="btn btn-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
                                                            <?php
                                                                }
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="ketengah">    
                                                        <?php
                                                        if ($buba == 'administrator' || ($row->status == "TIDAK" || $row->status == NULL)) {
                                                            if($buba == 'administrator' || ($bubi ==  $row->penulis_publikasi || ($bubi ==  $row->penulis_anggota1) || ($bubi ==  $row->penulis_anggota2))){
                                                            ?>                                
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/editdok/<?php echo $row->id_publikasi; ?>" class="btn btn-primary btn-xs btnnomargin" ><i class="glyphicon glyphicon-pencil"></i></a> 
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/deletedok/<?php echo $row->id_publikasi; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove"></i></a>
                                                            <?php
                                                            }
                                                            }
                                                            ?> 
                                                        </td>
                                                        <td class="ketengah">
                                                        <?php
                                                            if($row->status == "TIDAK") {
                                                            echo '<span class="font_color_red">'.$row->status.'</span>';                            
                                                            } elseif ($row->status == "YA" ) {
                                                            echo '<span class="font_color_green">'.$row->status.'</span>';                          
                                                            }                            
                                                            if($buba == 'administrator' && ($row->status == NULL)) {
                                                            ?>                            
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->id_publikasi; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/tolakvalidasi/<?php echo $row->id_publikasi; ?>" class="btn btn-xs btn-hitam btnnomargin"><i class="fa fa-thumbs-down"></i></a>
                                                            <?php
                                                            } elseif ($buba == 'administrator' && ($row->status ==  "TIDAK") ) {
                                                            ?>
                                                            <a href="<?php echo site_url(); ?>publikasi/PublikasiJurnal/validasi/<?php echo $row->id_publikasi; ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-thumbs-up"></i></a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>                         
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
