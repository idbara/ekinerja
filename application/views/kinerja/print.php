<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Kode Nusantara">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Laporan</title>

    <!--Core CSS -->
    <link href="<?= base_url() ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet" />

    <link href="<?= base_url() ?>assets/css/invoice-print.css" rel="stylesheet" media="all">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="print" >

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body invoice">
                        <div class="invoice-header">
                            <div class="invoice-title col-md-6 col-xs-5">
                                    <h1>Laporan Bulanan</h1>
                            </div>
                            
                        </div>
                        <div class="row invoice-to">
                            <div class="col-md-4 col-sm-4 pull-left">
                                
                                <h2><?php echo $profil->name; ?></h2>
                                <p>
                                    Email : <?php echo $profil->email; ?>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-5 pull-right">
                                <p>Bulan : <?php echo $bulan; ?></p>
                                
                            </div>
                        </div>
                        <table class="table table-invoice" border="1">
                            
                            <tr>
                                    <th>#</th>
                                    <th class="text-center">Jenis Kegiatan</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Point</th>
                                </tr>
                                <?php
                                $no = '1';
                                $totalPoint= 0;
                                foreach ($kinerja->result() as $row)
                                {
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    $no++;
                                    echo '<td>'.$row->kegiatan.'</td>';  
                                    echo '<td>'.$row->tanggal.'</td>';  
                                    echo '<td>'.$row->waktu.' Menit </td>';  
                                    echo '<td>'.$row->detail.'</td>';  
                                    echo '<td>'.$row->keterangan.'</td>';
                                    echo '<td>'.$row->nilai.'</td>';
                                    $totalPoint += $row->nilai;
                                    echo '</tr>';
                                }
                                ?>   
                                <tr>
                                    <td colspan="6" class="text-right">Total Point</td>
                                    <th class="text-center"><?php echo $totalPoint; ?></th>
                                </tr> 
                           
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url() ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="<?= base_url() ?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?= base_url() ?>assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?= base_url() ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?= base_url() ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?= base_url() ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>


<!--common script init for all pages-->
<script src="<?= base_url() ?>assets/js/scripts.js"></script>

<script type="text/javascript">
    window.print();
</script>

</body>
</html>
