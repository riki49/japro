                
               <div class="row">
                    <div class="col-md-8 col-sm-offset-3">
                        <h2 class="page-header">
                            Kategori Barang
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?php $this->load->view('template')  ?>
                    </div>

                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barang/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="example1">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td class="center">
                                                    <?php echo anchor('barang/edit/'.$r->barang_id,'ubah barang'); ?> | 
                                                    <?php echo anchor('barang/delete/'.$r->barang_id,'hapus barang'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->


