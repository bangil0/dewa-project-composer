
    <div class="tabbable page-tabs">
        <ul class="nav nav-tabs">
            <li class="daftar active"><a href="#inside" data-toggle="tab"><i class="icon-checkbox-partial"></i> Daftar Paket Tagihan Biaya</a></li>
            <li class="baru"><a href="#outside" data-toggle="tab"><i class="icon-plus"></i> Tambah Paket Tagihan Biaya Baru</a></li>
        </ul>
        <div class="tab-content">
                    
                    <!-- First tab content -->
                    <div class="tab-pane active fade in" id="inside">
                        <!-- AJAX source -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-table"></i> Daftar Paket Tagihan Biaya</h6> 
                               
                            </div>
                            <div class="panel-body">
                                 <div class="btn-group pull-right">
                                    <a href="#outside" data-toggle="tab" class="baru btn btn-success"><i class="icon-plus"></i> Tambah Paket Tagihan Biaya Baru</a>
                                </div> 
                            <?php $this->load->view('siakad_keu_paket_komp_data') ?>
                            </div>
                        </div>
                        <!-- /saving state -->

                    </div>
                    <!-- /first tab content -->


                   <?php $this->load->view('siakad_keu_paket_komp_form') ?>

            </div>
    </div>
