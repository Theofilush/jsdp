
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Informatika - <a href="#" class="text-dark" >Universitas Pembangunan Jaya</a> © 2020</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a> -->
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assett/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/jquery.slimscroll.js"></script>

    <!-- Data Table JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/dataTables-data.js"></script>
 
    <!-- Ion JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/rangeslider-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <!-- Datepicker JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assett/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/daterangepicker-data.js"></script>

    <!-- Dropzone JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/dropzone/dist/dropzone.js"></script>
    
    <!-- Form Flie Upload Data JavaScript -->
	<script src="<?php echo base_url() ?>assett/dist/js/form-file-upload-data.js"></script>
	
    <!-- Dropify JavaScript -->
	<script src="<?php echo base_url() ?>assett/vendors/dropify/dist/js/dropify.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?php echo base_url() ?>assett/dist/js/feather.min.js"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="<?php echo base_url() ?>assett/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Toggles JavaScript -->
    <script src="<?php echo base_url() ?>assett/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="<?php echo base_url() ?>assett/dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src = "<?php echo base_url() ?>assett/dist/js/init.js" > </script> 
    <script>
        $('.select2_ok').select2({
            placeholder: 'Pilih....',
            allowClear: true  
        });
    	$(document).ready(function () { // Ketika halaman sudah siap (sudah selesai di load)
    			// Kita sembunyikan dulu untuk loadingnya
    			// $("#loading").hide();

    			$("#domain").change(function () {
    				$.ajax({
    					type: "POST", // Method pengiriman data bisa dengan GET atau POST
    					url: "<?php echo base_url("Tambahpoin/listKegiatan"); ?>", // Isi dengan url/path file php yang dituju 
    					data: {
    						id_domain: $("#domain").val()
    					}, // data yang akan dikirim ke file yang dituju
    					dataType: "json",
    					beforeSend: function (e) {
    						if (e && e.overrideMimeType) {
    							e.overrideMimeType("application/json;charset=UTF-8");
    						}
    					},
    					success: function (response) { // Ketika proses pengiriman berhasil
    						//$("#loading").hide(); // Sembunyikan loadingnya
    						// set isi dari combobox kota
    						// lalu munculkan kembali combobox kotanya
    						$("#per_kegiatan").html(response.list_perkegiatan).show();
    					},
    					error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
    						alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
    					}
    				});
                });
                $("#per_kegiatan").change(function () {
                    $.ajax({
                        type: "POST", // Method pengiriman data bisa dengan GET atau POST
                        url: "<?php echo base_url("Tambahpoin/listSubKegiatan "); ?>", // Isi dengan url/path file php yang dituju
                        data: {
                            id_kegiatan: $("#per_kegiatan").val()
                        }, // data yang akan dikirim ke file yang dituju
                        dataType: "json",
                        beforeSend: function (e) {
                            if (e && e.overrideMimeType) {
                                e.overrideMimeType("application/json;charset=UTF-8");
                            }
                        },
                        success: function (response) { // Ketika proses pengiriman berhasil
                            $("#per_subkegiatan").html(response.list_persubkegiatan).show();
                        },
                        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                        }
                    }); 
                });
                $("#per_subkegiatan").change(function () {
                    $.ajax({
                        type: "POST", // Method pengiriman data bisa dengan GET atau POST
                        url: "<?php echo base_url("Tambahpoin/listLingkup "); ?>", // Isi dengan url/path file php yang dituju
                        data: {
                            id_subkegiatan: $("#per_subkegiatan").val()
                        }, // data yang akan dikirim ke file yang dituju
                        dataType: "json",
                        beforeSend: function (e) {
                            if (e && e.overrideMimeType) {
                                e.overrideMimeType("application/json;charset=UTF-8");
                            }
                        },
                        success: function (response) { // Ketika proses pengiriman berhasil
                            $("#per_lingkup").html(response.list_perlingkup).show();
                        },
                        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                        }
                    }); 
                });
                $("#per_lingkup").change(function () {
                    $.ajax({
                        type: "POST", // Method pengiriman data bisa dengan GET atau POST
                        url: "<?php echo base_url("Tambahpoin/getPoin "); ?>", // Isi dengan url/path file php yang dituju
                        data: {
                            id_lingkup: $("#per_lingkup").val()
                        }, // data yang akan dikirim ke file yang dituju
                        dataType: "json",
                        beforeSend: function (e) {
                            if (e && e.overrideMimeType) {
                                e.overrideMimeType("application/json;charset=UTF-8");
                            }
                        },
                        success: function (response) { // Ketika proses pengiriman berhasil
                            // $("#per_poin").html(response.list_perpoin).show();
                            $("#per_poin").text(response.list_perpoin);
                            $('#per_poin2').val(response.list_perpoin);
                        },
                        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                        }
                    }); 
                });
        });
    </script>
</body>

</html>