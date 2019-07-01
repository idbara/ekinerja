        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Hapus Kegiatan
                    </header>
                    <div class="panel-body">
                        <form action="../post_delete" method="post" class="form-horizontal ">
                            <input type="hidden" name="id" value="<?php echo $jenkin; ?>">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="../" type="submit" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>