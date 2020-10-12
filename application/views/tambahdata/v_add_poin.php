        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">JSDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Poin</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Tambah Poin JSDP Mahasiswa</h4>
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
                                        echo form_open_multipart('Tambahpoin/savedok',$atribut);
                                    ?>
                                        <div class="form-group row">
                                            <label for="thn_akademik" class="col-sm-2 col-form-label">Tahun Akademik *</label>
                                            <div class="col-sm-10">
                                                <!-- <input class="form-control" type="text" name="thn_akademik"  id="thn_akademik" placeholder="2020" required="required"/> -->
                                                <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="thn_akademik">
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
                                                <input class="form-control" type="text" name="tgl_kegiatan" id="tgl_kegiatan" required="required"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="domain" class="col-sm-2 col-form-label">Domain *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control d-block w-100 select2_ok" id="domain" name="domain" required="required">
                                                <option value="0">Pilih...</option>
                                                <?php
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
                                                    <option value="">Pilih...</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="per_subkegiatan" class="col-sm-2 col-form-label">Sub-Kegiatan *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom2 d-block w-100" id="per_subkegiatan" name="subkegiatan" required="required">
                                                <option value="">Pilih...</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detail_kegiatan" class="col-sm-2 col-form-label">Detail Kegiatan *</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="detail_kegiatan" name="detail_kegiatan"  required="required" placeholder="Seminar Mahasiswa Entrepreneurship Tangerang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Aula Lt.3 Universitas Pembangunan Jaya, Tangerang Selatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lingkup" class="col-sm-2 col-form-label">Lingkup *</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom2 d-block w-100" id="per_lingkup" name="lingkup" required="required">
                                                    <option value="">Pilih...</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Poin</label>
                                            <div class="col-sm-10">
                                                <p style="padding-top:7px; padding-left:7px;" id="per_poin">0</p> 
                                                <input type="hidden" id="per_poin2" name="per_poin2" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Upload *</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control dropify" name="filepdf" id="upload" accept="application/pdf" required />
                                                *<small>File yang bisa diupload hanya yang berformat .pdf. </small><br>
                                                *<small>Ukuran file maximal: 1MB</small>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-50">
                                            <div class="col-sm-10">
                                                <button type="button" onclick="window.history.back()" class="btn btn-indigo"><i class="fa fa-arrow-left"></i> Batal</button>
                                                <button class="btn btn-light" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success" name="btnUpload" value="Upload">Submit</button>
                                            </div>
                                        </div>
                                        <?php
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

            