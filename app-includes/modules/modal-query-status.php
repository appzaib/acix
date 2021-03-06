<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Modal Query Status
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <iam@ranajahanzaib.com>
 * 
 * @package Acix
 */

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');

?>
    <!-- Query Status-->
    <div class="modal fade" id="queryStatus" tabindex="-1" role="dialog" aria-labelledby="queryStatus" aria-hidden="true">
      <div class="modal-dialog modal-sm vertical-center" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="queryStatus">
              <?php
                if (($ADD_PRODUCT_ERROR == 1)
                 || ($ADD_BRAND_ERROR == 1)
                 || ($ADD_VENDOR_ERROR == 1)
                 || ($ADD_PTYPE_ERROR == 1)
                 || ($ADD_SALE_ERROR == 1)
                 || ($ADD_EACC_ERROR == 1)) {

                  echo "Sorry, I can't do that.";
                }else {
                  // code...
                }
              ?>

            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
              if ($ADD_PRODUCT_ERROR == 1) {
                echo "We already have a product with this name.
                <br><br>
                I recommend using a slightly different name for this product.
                This way I can track profit/loss by this product easily.
                That'll be good!
                <br><br>
                <span class=\"small text-muted\">Hey, You can use <strong> $productName $thisMonth</strong>
                instead of just <strong> $productName </strong> or may be something else.</span>";
              }elseif ($ADD_VENDOR_ERROR == 1) {
                echo "We already have a vendor named <strong>$vendorName</strong>.
                <br><br>
                I think this might be a mistake. But we can use a different name.
                This way I can track profit/loss by this vendor easily.
                <br>
                That'll be good!";
              }elseif ($ADD_PTYPE_ERROR == 1) {
                echo "We already have a product type with the name <strong>$productType</strong>.
                <br><br>
                But we can use a different name instead.
                As it will help us calculating profit/loss by this product type.
                <br>
                That'll be great!";
              }elseif ($ADD_BRAND_ERROR == 1) {
                echo "We already have a brand named <strong>$brandName</strong> listed in our database.
                ";
              }elseif ($ADD_EACC_ERROR == 1) {
                echo "We already have an Expense Account with a name <strong>$accountTitle</strong>.";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
