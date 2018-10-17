                <div class="row">
                    <div class="col-md-8 col-sm-offset-3">
                        <h2 class="page-header">
                            Pegawai Toko
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?php $this->load->view('template')  ?>
                    </div>
                               

                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('operator/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="example1">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Login Trakhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->username ?></td>
                                                <td><?php echo $r->last_login ?></td>
                                                <td class="center">
                                                    <?php echo anchor('operator/edit/'.$r->operator_id,'Edit'); ?> | 
                                                    <?php echo anchor('operator/delete/'.$r->operator_id,'Delete'); ?>
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