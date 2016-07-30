<?php
	$root = "../../";
	require "../template/header.php";
?>

        <div id="page-wrapper">
            <br>
			<br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-upload fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Upload Terbaru</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $root.HOME."upload.php"; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ke Upload</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">29</div>
                                    <div>Total Gambar</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $root.HOME."gallery.php"; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Semua Gambar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-eye fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Pengunjung Hari Ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $root.HOME."stats.php"; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Statistik</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>Pengguna Terdaftar</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo $root.HOME."profile.php"; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Daftar Pengguna</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $root; ?>assets-admin/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $root; ?>assets-admin/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $root; ?>assets-admin/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $root; ?>/raphael/raphael-min.js"></script>
    <script src="<?php echo $root; ?>/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $root; ?>assets-admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
