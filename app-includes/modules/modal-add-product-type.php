<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Modal Add Product
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
    <!-- Add Product Type-->
    <div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-tags"></i>
              Add Product Type
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="product_type">Product Type</label>
                <input type="text" class="form-control" name="product_type" id="product_type" value="" placeholder="Enter product type..." required>
                <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
              </div>
              <div class="form-group">
                <label for="product_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="product_desc" id="product_desc" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this product type..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addProductType" class="btn btn-primary" value="Add Product Type">
            </div>
          </form>
        </div>
      </div>
    </div>
