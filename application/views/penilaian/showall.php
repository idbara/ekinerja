        <div class="row">
            <div class="col-sm-12">

                <?php
                    if ($this->session->flashdata('message') != '') {
                ?>
                <div class="alert alert-info fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <?php } ?>
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
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Waktu</th>
                        <th>Detail</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Point</th>
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
                                echo '<td>'.$row->name.'</td>';  
                                echo '<td>'.$row->tanggal.'</td>';  
                                echo '<td>'.$row->kegiatan.'</td>';  
                                echo '<td>'.$row->waktu.' Menit </td>';  
                                echo '<td>'.$row->detail.'</td>';  
                                echo '<td>'.$row->keterangan.'</td>';
                                if($row->status == 'pending'){
                                    echo '<td><span class="label label-warning">Pending</span></td>';
                                } else if($row->status == 'Disetujui'){
                                    echo '<td><span class="label label-success">Disetujui</span></td>';
                                } else {
                                    echo '<td><span class="label label-danger">Ditolak</span></td>';
                                }
                                echo '<td>'.$row->nilai.'</td>';
                                echo '<td>  <a href="'.site_url("penilaian/nilai/$row->kinerjaId").'" type="button" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
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