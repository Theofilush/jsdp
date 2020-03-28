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
                                        echo form_open_multipart('pengguna/Users/updateUser',$atribut);
                                            foreach ($query as $rou) {    
                                            echo form_hidden('id',$rou->id);
                                    ?>
                                            <div class="form-group row">
                                                <label for="id_user" class="col-sm-2 col-form-label">NIM / NIP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="id_user" placeholder="NIM / NIP" name="id_user" value="<?php echo $rou->ID_user; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $rou->username; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="namaLengkap" value="<?php echo $rou->nama_lengkap; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Prodi" name="prodi">
                                                        <option><?php echo $rou->prodi; ?></option>
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
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $rou->email; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="password" placeholder="Kosongkan jika tidak terjadi perubahan" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cpassword" class="col-sm-2 col-form-label">Ulangi Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="cpassword" placeholder="Kosongkan jika tidak terjadi perubahan" name="cpassword">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Status" name="status">
                                                        <option value="Aktif" <?php echo ($rou->status == "Aktif")? "selected" : ""; ?>>Aktif</option>
                                                        <option value="Tidak Aktif" <?php echo ($rou->status == "Tidak Aktif")? "selected" : ""; ?>>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-40">
                                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Author" name="author">
                                                    <option><?php echo $rou->author; ?></option>
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
                                            <div class="form-group row mb-0 mt-50">
                                                <div class="col-sm-10">
                                                    <button type="button" onclick="window.history.back()" class="btn btn-indigo"><i class="fa fa-arrow-left"></i> Batal</button>
                                                    <button class="btn btn-light" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success" name="btnSimpan" value="Simpan">Submit</button>
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

            