<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }  ?>
<!-- Main Content -->
<div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">JSDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transkip JSDP</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Transkip JSDP Mahasiswa</h4>
                </div>
                <!-- /Title -->
                
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
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $id_user?></td>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Nama</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $nama_lengkap?></td>
                                    </tr>
                                </tbody>
                                <?php
                                    if ($buba == 'administrator' || $buba == 'koordinator') {
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Program Studi</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $prodi?></td>
                                        <td class="text-right py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;">Status</td>
                                        <td class="py-0" style="width:25%; border-top: 1px dotted black; border-bottom: 1px dotted black;"><?php echo $status?></td>
                                    </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                            </table>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_3" class="table w-100 table-striped" style="font-size:0.8em;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-capitalize"></th>
                                                    <th class="text-center text-capitalize">#</th>
                                                    <th class="text-center text-capitalize">No</th>
                                                    <th class="text-center text-capitalize">Domain</th>
                                                    <th class="text-center text-capitalize">Kegiatan</th>
                                                    <th class="text-center text-capitalize">Tema Kegiatan</th>
                                                    <th class="text-center text-capitalize">Lingkup</th>
                                                    <th class="text-center text-capitalize">Poin</th>
                                                    <th class="text-center text-capitalize">Status</th>
                                                    <th class="text-center text-capitalize">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1; 
                                                    foreach($queryMhs as $row){
                                                        ?> 
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-center">    
                                                                <?php
                                                                if ($row->status == "Tidak sah" || $row->status == "Menunggu") {
                                                                    ?>                                
                                                                        <a href="<?php echo site_url(); ?>poin/editpoin/<?php echo $row->no; ?>" class="btn btn-gradient-success btn-xs btnnomargin" ><i class="glyphicon glyphicon-pencil"></i></a> 
                                                                    <?php
                                                                }
                                                                    ?> 
                                                                <a href="<?php echo site_url().'fileupload/'.$row->file?>" class="btn btn-gradient-danger btn-xs btnnomargin"><i class="fa fa-fw fa-file-text"></i></a>
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
                                                            if($row->status == "Tidak sah") {
                                                              echo '<span class="font_color_red">'.$row->status.'</span><br>';                            
                                                            } elseif ($row->status == "Sah" ) {
                                                             echo '<span class="font_color_green">'.$row->status.'</span><br>';                          
                                                            } elseif ($row->status == "Menunggu") {
                                                                echo '<span class="">'.$row->status.'</span><br>';  
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
