<?php include "incl/header.php" ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include "incl/functions.php" ?>
      <?php include "incl/nav.php" ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><small></small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-paper-plane"></i> Post Section</li>
            </ol>
          </div>

          


         <?php

         if (isset($_GET['source'])) {
         
           $source = $_GET['source'];
         }
         error_reporting(0);
         switch ($source) {
           case 'create_post':
             include "incl/create_post.php";
             break;
           
           default:
             include "incl/view_post.php";
             break;
         }


          ?>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <!-- <script src="js/jquery-1.10.2.js"></script> -->
 <?php include "incl/foot.php" ?>