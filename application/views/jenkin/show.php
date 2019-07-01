        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="<?php echo site_url('jenkin/create'); ?>" type="button" class="btn btn-primary btn-sm">Tambah Kegiatan</a>
                        <?php echo $judul; ?>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kegiatan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = '1';
                            foreach ($allJenkin->result() as $row)
                            {
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                $no++;
                                echo '<td>'.$row->kegiatan.'</td>';
                                echo '<td>
                                            <a href="'.site_url("jenkin/edit/$row->id").'" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="'.site_url("jenkin/delete/$row->id").'" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>