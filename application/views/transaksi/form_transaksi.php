            
                <div class="row">
                    <div class="col-md-8 col-sm-offset-3">
                        <h2 class="page-header">
                            Kolom Transaksi
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?php $this->load->view('template')  ?>
                    </div>
             
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('transaksi', array('class'=>'form-horizontal')); ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Kode Barang</label>
                                        <div class="col-sm-10">
                                          <input list="kode" name="barang" placeholder="masukan Kode barang" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Barang</label>
                                        <div class="col-sm-10">
                                          <input list="barang" name="barang" placeholder="masukan nama barang" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">banyaknya barang</label>
                                        <div class="col-sm-4">
                                          <input type="text" name="qty" placeholder="jumlah" class="form-control">
                                        </div>

                                        <div class="col-sm-5">
                                          <input type="text" placeholder="satuan" class="form-control">
                                        </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">bade dibeli</button> | <?php echo anchor('transaksi/selesai_belanja','atos cekap',array('class'=>'btn btn-success btn-sm'))?>
                                        </div>
                                    </div>
                                </form>

                                <datalist id="barang">
                                    <?php foreach ($barang->result() as $b) {
                                        echo "<option value='$b->nama_barang'>";
                                    } ?>
                                    
                                </datalist>

                                <datalist id="kode">
                                    <?php foreach ($kode->result() as $b) {
                                        echo "<option value='$b->nama_kategori'>";
                                    } ?>
                                    
                                </datalist>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-14">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Barang</th>
                                                <th>jumlah</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_barang.' - '.anchor('transaksi/hapusitem/'.$r->t_detail_id,'teu jadi beli',array('style'=>'color:red;')) ?></td>
                                                <td><?php echo $r->qty ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->qty*$r->harga,2) ?></td>
                                            </tr>
                                        <?php $total=$total+($r->qty*$r->harga);
                                        $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="4">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total,2);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->