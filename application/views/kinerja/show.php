        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
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
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Waktu</th>
                        <th>Detail</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = '1';
                            foreach ($allKinerja->result() as $row)
                            {
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                $no++;
                                echo '<td>'.$row->tanggal.'</td>';  
                                echo '<td>'.$row->kegiatan.'</td>';  
                                echo '<td>'.$row->waktu.' Menit </td>';  
                                echo '<td>'.$row->detail.'</td>';  
                                echo '<td>'.$row->keterangan.'</td>';
                                if($row->status == 'pending') {
                                    echo '<td><span class="label label-warning">Pending</span></td>';
                                    echo '<td>
                                                <a href="'.site_url("kinerja/edit/$row->kinerjaId").'" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="'.site_url("kinerja/delete/$row->kinerjaId").'" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                                            </td>';
                                } elseif ($row->status == 'Disetujui') {                                    
                                    echo '<td><span class="label label-success">Disetujui</span></td>';
                                    echo '<td><span class="label label-success">Disetujui</span></td>';
                                } elseif ($row->status == 'Ditolak') {                                    
                                    echo '<td><span class="label label-danger">Ditolak</span></td>';
                                    echo '<td><span class="label label-danger">Ditolak</span></td>';
                                }
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