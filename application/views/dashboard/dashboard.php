<?php if($this->session->userdata('level') == 'Staff') { ?>
<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span><?php echo $all->total; ?></span>
                Total Kegiatan
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-check-circle"></i></span>
            <div class="mini-stat-info">
                <span><?php echo $setuju->total; ?></span>
                Kegiatan Disetujui
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="faf a-times-circle-o"></i></span>
            <div class="mini-stat-info">
                <span><?php echo $tolak->total; ?></span>
                Kegiatan Ditolak
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
            <div class="mini-stat-info">
                <span><?php echo $pending->total; ?></span>
                Kegiatan Pending
            </div>
        </div>
    </div>
</div>
<?php } ?>