<?php

  require ('load.php');


  $PAGE_TITLE  = "Sales Count";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
<?php require (ABSPATH.APPINC."/page-unit/head.php"); ?>
  <body id="page-top">
<?php require (ABSPATH.APPINC."/page-unit/nav.php"); ?>
    <div id="wrapper">
<?php require (ABSPATH.APPINC."/page-unit/sidebar.php"); ?>
        <div id="content-wrapper">
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Sales Count</li>
            </ol>
            <!-- Page Content -->
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-header">
                    <h1>Last 7 Days</h1>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-money"></i>
                    </div>
                    <div class="card-text">
                      <h1 class="text-center display-3"><strong>135<span class="small" style="font-size: 20px;">Rs9.52k</span></strong></h1>
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="sales-count.php">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="card text-white bg-info o-hidden h-100">
                  <div class="card-header">
                    <h1>Last 30 Days</h1>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-money"></i>
                    </div>
                    <div class="card-text">
                      <h1 class="text-center display-3"><strong>540<span class="small" style="font-size: 20px;">Rs38.0k</span></strong></h1>
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="card text-white bg-dark o-hidden h-100">
                  <div class="card-header">
                    <h1>Last 3 Months</h1>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-money"></i>
                    </div>
                    <div class="card-text">
                      <h1 class="text-center display-3"><strong>1.62k<span class="small" style="font-size: 20px;">Rs114.2k</span></strong></h1>
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-header">
                    <h1>Last 6 Months</h1>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-money"></i>
                    </div>
                    <div class="card-text">
                      <h1 class="text-center display-3"><strong>3.24k<span class="small" style="font-size: 20px;">Rs228.4k</span></strong></h1>
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <!-- Area Chart Example-->
                <div class="card mb-3">
                  <div class="card-header bg-primary text-white">
                    <i class="fa fa-chart-area"></i>
                    Last 6 Months Profit
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
              </div>
            </div>
          </div>
          <br><br><br>
          <?php require (ABSPATH.APPINC.'/page-unit/footer.php'); ?>
        </div>
      </div>
  <?php
    include (ABSPATH.APPINC.'/page-unit/scroll-to-top.php');
    require (ABSPATH.APPINC.'/page-unit/modal-logout.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-sale.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-product.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-product-type.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-brand.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-vendor.php');
    require (ABSPATH.APPINC.'/page-unit/modal-add-expense-account.php');
    include (ABSPATH.APPINC."/page-unit/footer-scripts.php");
  ?>
    </body>
  </html>
