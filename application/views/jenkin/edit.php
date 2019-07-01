        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Jenis Kegiatan
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

                            <input type="hidden" name="id" value="<?php echo $jenkin->id; ?>"">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Jenis Kegiatan</label>
                                <div class="col-lg-10">
                                    <input name="kegiatan" type="text" class="form-control" value="<?php echo $jenkin->kegiatan; ?>">
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