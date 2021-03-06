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
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Tambah tahun akademik</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <!-- <h5 class="hk-sec-title">Horizontal Layout</h5>
                            <p class="mb-25">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls.</p> -->
                            <?php echo $this->session->flashdata('notification_password')?>
                            <div class="row">
                                <div class="col-sm">
                                    <?php
                                    $atribut = array(
                                            'class' => 'form-horizontal form-label-left',
                                            'data-parsley-validate' => '',
                                            'id'=>'demo-form2'
                                    );
                                        echo form_open_multipart('TambahTahunAkademik/savedok',$atribut);   
                                            //echo form_hidden('id',$row->id);
                                    ?>
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Tahun akademik</label>
                                                <div class="col-sm-10">
                                                    <input id="tahun" name="tahun" type="number" class="form-control col-md-4 col-xs-12" type="text" required="required" placeholder="20201 atau 20202">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0 mt-40">
                                                <div class="col-sm-10">
                                                    <button type="button" onclick="window.history.back()" class="btn btn-indigo"><i class="fa fa-arrow-left"></i> Batal</button>
                                                    <button class="btn btn-light" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success" name="btnSimpan" value="Simpan">Submit</button>
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
