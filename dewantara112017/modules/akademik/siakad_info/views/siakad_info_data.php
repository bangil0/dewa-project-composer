<div class="datatable-ajax-source">
        <div class="btn-group" style="margin:20px 0px 30px">
                            <a href="<?php echo base_url('siakad_info/baru') ?>" class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Buka siakad_info Baru </a>
                            <a href="<?php echo base_url('siakad_info') ?>" class="btn btn-lg btn-info"><i class="fa fa-database"></i> Data siakad_info</a>
                        </div>
        <h2 class="text-center" style="margin:20px 0px 30px" >Tabel Data siakad_info</h2>
    
                                <table id="datatables" class="table table-bordered table-condensed table-striped" style="">
                                    <thead class="">
                                        <tr>
                                                       
                                                        <th>nm_info</th>
                                                        <th>ket_info</th>
                                                        <th>tgl_info</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                    </thead>

                                    <tbody class="table-bordered">
                                        <tr>
                                            <td colspan="4" class="text-center dataTables_empty"><img src="<?php echo assets_url('images/loader.gif');  ?>" title="Loading" alt="Loading">&nbsp;&nbsp; Loading data, please wait....</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>