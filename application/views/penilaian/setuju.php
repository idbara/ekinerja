        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Penilaian
                    </header>
                    <div class="panel-body">
                        <form action="../post_nilai" method="post" class="form-horizontal ">

                            <?php
                                if ($this->session->flashdata('message') != '') {
                                    echo '<div class="alert alert-success">';
                                    echo $this->session->flashdata('message');
                                    echo "</div>";
                                }
                            ?>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">ID Kegiatan</label>
                                <div class="col-md-4 col-xs-11">
                                    <input name="id" class="form-control" type="text" value="<?php echo $kinerja->kinerjaId; ?>" readonly />
                                    
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-4 col-xs-11">
                                    <input name="name" class="form-control" type="text" value="<?php echo $kinerja->name; ?>" readonly />
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Tanggal Kegiatan</label>
                                <div class="col-md-4 col-xs-11">
                                    <input name="tanggal" class="form-control form-control-inline input-medium dp1"  size="16" type="text"  value="<?php echo $kinerja->tanggal; ?>" readonly/>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Waktu</label>
                                <div class="col-md-4 col-xs-11">
                                <input name="waktu" type="number" class="form-control" value="<?php echo $kinerja->waktu; ?>" readonly>
                                    <span class="help-block">Dalam satuan menit</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Jenis Kegiatan </label>
                                <div class="col-lg-6">
                                    <select name="jenis" id="e1" class="populate " style="width: 300px" disabled>
                                        <?php
                                            foreach ($jenkin->result() as $row)
                                            {
                                                if($kinerja->jenis == $row->id){
                                                    echo '<option value="'.$row->id.'" selected>'.$row->kegiatan.'</option>';
                                                } else {
                                                    echo '<option value="'.$row->id.'">'.$row->kegiatan.'</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Detail Kegiatan</label>
                                <div class="col-md-4 col-xs-11">
                                    <textarea name="detail" class="form-control" rows="6" readonly><?php echo $kinerja->detail; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Keterangan</label>
                                <div class="col-md-4 col-xs-11">
                                    <textarea name="keterangan" class="form-control" rows="6" readonly><?php echo $kinerja->keterangan; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Point</label>
                                <div class="col-md-4 col-xs-11">
                                        <input name="point" class="form-control" type="number" placeholder="10"<?php if($kinerja->nilai != 0){ ?> value="<?php echo $kinerja->nilai; ?>" <?php } ?> />
                                    
                                </div>
                            </div> 
 
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn btn-danger">Simpan</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>