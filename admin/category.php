<?php include "incl/header.php" ?>
<?php include "incl/db.php" ?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include "incl/nav.php" ?>
      <?php include "incl/functions.php" ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Categories <small></small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-list"></i> Categories</li>
            </ol>
            <!-- <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              There are two options for charts: <a href="http://www.flotcharts.org/" target="_blank" class="alert-link">Flot charts</a> and <a href="http://www.oesmith.co.uk/morris.js/" class="alert-link" target="_blank">morris.js</a>. Choose which one best suits your needs, and make sure to master the documentation to get the most out of these charts!
            </div> -->
          </div>
        </div><!-- /.row -->

       

        <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Add Categories</h3>
              </div>
              <div class="panel-body">
                <div id="morris-chart-donut"></div>

                <form action="incl/functions.php" method="post">
                <div>
                  <input type="text" name="cat_title" class="form-control" id="">
                </div>
                <div class="text-left"><br>
                  <input type="submit" name="add_cat" class="btn btn-primary" value="Add Category">
                </div>
              </form>

              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Available Categories</h3>
              </div>
              <div class="panel-body">
                <div id="morris-chart-bar"></div>
                <div class="text-left panel-heading">
                  <table class="table">
                    <tbody><b><?php show_category(); ?></b></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

       

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
	<script src="js/flot/jquery.flot.js"></script>
	<script src="js/flot/jquery.flot.tooltip.min.js"></script>
	<script src="js/flot/jquery.flot.resize.js"></script>
	<script src="js/flot/jquery.flot.pie.js"></script>
	<script src="js/flot/chart-data-flot.js"></script>

  </body>
</html>
