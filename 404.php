<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Error 404 Page
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <iam@ranajahanzaib.com>
 * 
 * @package Acix
 */

  session_start();

  if (isset($_SESSION['user_id'])) {

    require ('load.php');
    require (ABSPATH.'/admin/scripts/getuserinfo.php');


    $PAGE_TITLE  = "Page Not Found";
    $PAGE_DESC   = "...";
    $PAGE_AUTHOR = "...";

?>
<!DOCTYPE html>
<html lang="en">
  <?php
    require (ABSPATH.'/admin/scripts/add-sale.php');
    require (ABSPATH.'/admin/scripts/add-product.php');
    require (ABSPATH.'/admin/scripts/add-vendor.php');
    require (ABSPATH.'/admin/scripts/add-product-type.php');
    require (ABSPATH.'/admin/scripts/add-brand.php');
    require (ABSPATH.'/admin/scripts/add-expense-account.php');
    require (ABSPATH.'/admin/scripts/add-expense.php');
    require (ABSPATH.APPINC."/modules/head.php");
  ?>
  <body id="page-top">
    <?php require (ABSPATH.APPINC."/modules/nav.php"); ?>
    <div id="wrapper">
      <?php require (ABSPATH.APPINC."/modules/sidebar.php"); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <?php require (ABSPATH.APPINC."/modules/breadcrumbs.php"); ?>
          <h1 class="display-1">404</h1>
          <p class="lead">Page not found. You can
            <a href="javascript:history.back()">go back</a>
            to the previous page, or
            <a href="index.php">return home</a>.</p>
        </div>
        <br><br><br>
        <?php require (ABSPATH.APPINC.'/modules/footer.php'); ?>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC.'/modules/scroll-to-top.php');
      require (ABSPATH.APPINC.'/modules/modal-logout.php');
      require (ABSPATH.APPINC.'/modules/modal-add-sale.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product-type.php');
      require (ABSPATH.APPINC.'/modules/modal-add-brand.php');
      require (ABSPATH.APPINC.'/modules/modal-add-vendor.php');
      require (ABSPATH.APPINC.'/modules/modal-add-expense-account.php');
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
  </body>
</html>

<?php
}else {
  header('location: login.php');
}

?>
