<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; } ?>        
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">JSDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Poin</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Edit Poin JSDP Mahasiswa</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Horizontal Layout</h5>
                            <p class="mb-25">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls.</p> -->
                            <div class="row">
                                <div class="col-sm">
                                    <?php
                                    $atribut = array(
                                            'class' => 'form-horizontal form-label-left',
                                            'data-parsley-validate' => '',
                                            'id'=>'demo-form2'
                                    );
                                        echo form_open_multipart('Poin/updatepoin',$atribut);
                                            foreach ($query as $rou) {    
                                            echo form_hidden('no',$rou->no);
                                            echo form_hidden('id_mhs',$rou->id_mhs);
                                    ?>
                                        <div class="form-group row">
                                            <label for="thn_akademik" class="col-sm-2 col-form-label">Tahun Akademik *</label>
                                            <div class="col-sm-10">
                                                <!-- <input class="form-control" type="text" name="thn_akademik"  id="thn_akademik" placeholder="2020" value="<?php echo $rou->tahun; ?>" required="required"/> -->
                                                <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="thn_akademik">
                                                    <option selected><?php echo $rou->tahun; ?></option> 
                                                    <?php 
                                                        foreach($tampil_tahun as $row){
                                                    ?>  
                                                    <option><?php echo $row->tahun; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_kegiatan" class="col-sm-2 col-form-label">Tanggal Kegiatan *</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="tgl_kegiatan" id="tgl_kegiatan" value="<?php echo date('m/d/yy', strtotime($rou->tanggal_kegiatan)); ?>" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="domain" class="col-sm-2 col-form-label">Domain *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control d-block w-100 select2_ok" id="domain" name="domain" required="required">
                                                <?php  foreach($select_domain as $row){
                                                            echo "<option value=".$row->id_domain.">".$row->nama_domain."</option>";
                                                        } 
                                                foreach($domain as $row){
                                                ?>
                                                    <option value="<?php echo $row->id_domain; ?>"><?php echo $row->nama_domain; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="per_kegiatan" class="col-sm-2 col-form-label">Kegiatan *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom2 d-block w-100" id="per_kegiatan" name="kegiatan" required="required">
                                                <!-- <option><?php echo $rou->nama_kegiatan; ?></option> -->
                                                <?php  foreach($select_kegiatan as $row){
                                                            echo "<option value=".$row->id_kegiatan.">".$row->nama_kegiatan."</option>";
                                                        }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="per_subkegiatan" class="col-sm-2 col-form-label">Sub-Kegiatan *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom2 d-block w-100" id="per_subkegiatan" name="subkegiatan" required="required" >
                                            <!-- <option>?php echo $rou->nama_subkegiatan; ?></option> -->

                                                <?php  foreach($select_subKegiatan as $row){
                                                            echo "<option value=".$row->id_subkegiatan.">".$row->nama_subkegiatan."</option>";
                                                        }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detail_kegiatan" class="col-sm-2 col-form-label">Detail Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="detail_kegiatan" name="detail_kegiatan" value="<?php echo $rou->detail_kegiatan; ?>" placeholder="Seminar Mahasiswa Entrepreneurship Tangerang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $rou->tempat; ?>" placeholder="Aula Lt.3 Universitas Pembangunan Jaya, Tangerang Selatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lingkup" class="col-sm-2 col-form-label">Lingkup *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom2 d-block w-100" id="per_lingkup" name="lingkup" required="required">
                                                <!-- <option><?php echo $rou->nama_lingkup; ?></option> -->

                                                <?php  foreach($select_lingkup as $row){
                                                            echo "<option value=".$row->id_lingkup.">".$row->nama_lingkup."</option>";
                                                        }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Poin</label>
                                            <div class="col-sm-10">
                                                <p style="padding-top:7px; padding-left:7px;" id="per_poin"><?php echo $rou->poin; ?></p> 
                                                <input type="hidden" id="per_poin2" name="per_poin2" value="<?php echo $rou->poin; ?>">
                                            </div>
                                        </div>
                                        <?php
                                        if ($buba == "administrator" || $buba == "koordinator") {
                                        ?>
                                        <div class="form-group row">
                                            <label for="detail_kegiatan" class="col-sm-2 col-form-label">Edit Poin</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="edit_poin" name="edit_poin" value="0">
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Upload</label>
                                            <div class="col-sm-10">
                                                <small class="mb-20">File sudah ada. <a href="<?php echo site_url().'fileupload/'.$rou->file?>" class="btn btn-gradient-danger btn-xs btnnomargin" target="_blank"><i class="fa fa-fw fa-file-text"></i></a> Mau diganti? <i class="fa fa-arrow-bottom"></i></small><br>
                                                <input type="file" class="form-control dropify" name="filepdf" id="upload" accept="application/pdf" <?php echo $rou->file; ?> />
                                                *<small>File yang bisa diupload hanya yang berformat .pdf. </small><br>
                                                *<small>Ukuran file maximal: 1MB</small>
                                            </div>
                                        </div>
                                        <?php
                                        if ($buba == "administrator" || $buba == "koordinator") {
                                        ?>
                                        <fieldset class="form-group mb-15">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Sah ?</label>
                                                <div class="col-sm-10">
                                                    <div class="form-control custom-radio mb-5">
                                                        <input id="option_1" name="status_change" class="custom-control-input" type="radio" value="Sah" <?php echo ($rou->status== 'Sah')? 'checked="checked"' : '' ; ?>>
                                                        <label class="custom-control-label" for="option_1">Sah</label>
                                                    </div>
                                                    <div class="form-control custom-radio mb-5">
                                                        <input id="option_2" name="status_change" class="custom-control-input" type="radio" value="Tidak sah" <?php echo ($rou->status== 'Tidak sah')? 'checked="checked"' : '' ; ?>>
                                                        <label class="custom-control-label" for="option_2">Tidak Sah</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label for="keterangan_poin" class="col-sm-2 col-form-label">Keterangan Tidak Sah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="keterangan_poin" name="keterangan_poin" value="<?php echo $rou->keterangan; ?>" placeholder="Bukti file tiak diupload">
                                                *<small>Kosongkan jika data telah benar. </small><br>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="form-group row mb-0 mt-50">
                                            <div class="col-sm-10">
                                                <button type="button" onclick="window.history.back()" class="btn btn-indigo"><i class="fa fa-arrow-left"></i> Batal</button>
                                                <button class="btn btn-light" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success" name="btnUpload" value="Upload">Submit</button>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                            echo form_close();
                                        ?>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

