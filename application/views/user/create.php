        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Buat Pengguna Baru
                    </header>
                    <div class="panel-body">
                        <form action="post_create" method="post" class="form-horizontal ">

                            <?php
                                if ($this->session->flashdata('message') != '') {
                                    echo '<div class="alert alert-danger">';
                                    echo $this->session->flashdata('message');
                                    echo "</div>";
                                }
                            ?>         
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Level Pengguna</label>
                                <div class="col-lg-10">
                                    <select name="level" class="form-control">
                                        <option value="Staff">Staff</option>
                                        <option value="Kepala">Kepala</option>
                                        <option value="Administrator">Administrator</option>
                                    </select>
                                    <span class="help-block">Level Akses Pengguna</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                <div class="col-lg-10">
                                    <input name="name" type="text" class="form-control">
                                    <span class="help-block">Nama Lengkap</span>
                                </div>
                            </div>         
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input name="username" type="text" class="form-control">
                                    <span class="help-block">Username untuk Login</span>
                                </div>
                            </div>         
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input name="password" type="password" class="form-control">
                                    <span class="help-block">Password untuk Login</span>
                                </div>
                            </div>         
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input name="email" type="email" class="form-control">
                                    <span class="help-block">Email Kantor</span>
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger">Buat Pengguna</button>
                                <a href="../user" type="submit" class="btn btn-danger">Batal</a>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>