        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Kegiatan
                    </header>
                    <div class="panel-body">
                        <form action="../post_edit" method="post" class="form-horizontal ">

                            <?php
                                if ($this->session->flashdata('message') != '') {
                                    echo '<div class="alert alert-danger">';
                                    echo $this->session->flashdata('message');
                                    echo "</div>";
                                }
                            ?>

                            <input type="hidden" name="id" value="<?php echo $kinerja->kinerjaId; ?>">                            
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Tanggal Kegiatan</label>
                                <div class="col-lg-10">
                                    <input name="tanggal" class="form-control form-control-inline input-medium dp1"  size="16" type="text" value="<?php echo $kinerja->tanggal; ?>" />
                                    <span class="help-block">Pilih Sesuai tanggal Kegiatan</span>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Waktu</label>
                                <div class="col-lg-10">
                                    <input name="waktu" type="number" class="form-control" value="<?php echo $kinerja->waktu; ?>">
                                    <span class="help-block">Dalam satuan menit</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Jenis Kegiatan </label>
                                <div class="col-lg-6">
                                    <select name="jenis" id="e1" class="populate " style="width: 300px">
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
                                <label class="col-lg-2 col-sm-2 control-label">Detail Kegiatan</label>
                                <div class="col-lg-10">
                                    <textarea name="detail" class="form-control" rows="6" ><?php echo $kinerja->detail; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                                <div class="col-lg-10">
                                    <textarea name="keterangan" class="form-control" rows="6"><?php echo $kinerja->keterangan; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Proses</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>