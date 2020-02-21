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
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <fieldset class="form-group mb-15">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input id="option_1" name="optionHorizontal" class="custom-control-input" checked="" type="radio">
                                                        <label class="custom-control-label" for="option_1">Option 1</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input id="option_2" name="optionHorizontal" class="custom-control-input" type="radio">
                                                        <label class="custom-control-label" for="option_2">Option 2</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input id="option_3" name="optionHorizontal" class="custom-control-input" type="radio">
                                                        <label class="custom-control-label" for="option_3">Option 3</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-2 pt-0">Checkbox</label>
                                            <div class="col-sm-10">
                                                <div class="custom-control custom-checkbox mb-15">
                                                    <input class="custom-control-input" id="chkbox_horizontal" type="checkbox" checked>
                                                    <label class="custom-control-label" for="chkbox_horizontal">Checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                                <button type="submit" class="btn btn-light">Cancel</button>
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

            