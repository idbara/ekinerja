        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Cetak Kegiatan
                    </header>
                    <div class="panel-body">
                        <form action="cetakbulanan" method="post" class="form-horizontal ">

                            <?php
                                if ($this->session->flashdata('message') != '') {
                                    echo '<div class="alert alert-success">';
                                    echo $this->session->flashdata('message');
                                    echo "</div>";
                                }
                            ?>
                            <div class="form-group">
                                <label class="control-label col-md-3">Bulan </label>
                                <div class="col-md-4 col-xs-11">
                                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2019"  class="input-append date dpMonths">
                                        <input type="text" name="bulan" readonly="" value="07/2019" size="16" class="form-control">
                                        <span class="input-group-btn add-on">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
 
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn btn-danger">Cetak</button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>