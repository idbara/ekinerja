        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Hapus Pengguna
                    </header>
                    <div class="panel-body">
                        <form action="../post_delete" method="post" class="form-horizontal ">                        
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">ID</label>
                                <div class="col-lg-10">
                                    <input name="id" type="text" class="form-control" value="<?php echo $user->id; ?>">
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input name="username" type="text" class="form-control" value="<?php echo $user->username; ?>">
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="../" type="submit" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>