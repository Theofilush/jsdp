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
                                        echo form_open('Tambahpoin/savedok',$atribut);
                                    ?>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Akademik</label>
                                            <div class="col-sm-10">
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                        <option value="">Choose...</option>
                                                        <option>United States</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="tgl_kegiatan" value="02/02/2020" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Domain</label>
                                            <div class="col-sm-10">
                                            <select class="form-control d-block w-100 select2_ok" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kegiatan</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Sub-Kegiatan</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="firstName" placeholder="Tanggal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Lingkup</label>
                                            <div class="col-sm-10">
                                            <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Upload</label>
                                            <div class="col-sm-10">
                                                <input type="file" id="input-file-now" class="dropify" />
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

            