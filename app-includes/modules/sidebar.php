<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Sidebar
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
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item <?php if ($PAGE_TITLE == "Home") {echo "active";} ?>">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Retail Dashboard") {echo "active";} ?>">
            <a class="nav-link" href="retail-dashboard.php">
              <i class="fa fa-fw fa-line-chart"></i>
              <span>Retail Dashboard</span>
            </a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Sales Reports") {echo "active";} ?>">
            <a class="nav-link" href="sales-reports.php">
              <i class="fa fa-fw fa-bar-chart"></i>
              <span>Sales Reports</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Inventory Reports") {echo "active";} ?>">
            <a class="nav-link" href="inventory-reports.php">
              <i class="fa fa-fw fa-tags"></i>
              <span>Inventory Reports</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Payment Reports") {echo "active";} ?>">
            <a class="nav-link" href="payment-reports.php">
              <i class="fa fa-fw fa-money"></i>
              <span>Payment Reports</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Sales") {echo "active";} ?>">
            <a class="nav-link" href="sales.php">
              <i class="fa fa-fw fa-table"></i>
              <span>Check Sales</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Record New Sale") {echo "active";} ?>">
            <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
              <i class="fa fa-fw fa-plus"></i>
              <span>Record New Sale</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Add New Product") {echo "active";} ?>">
            <a class="nav-link" href="" data-toggle="modal" data-target="#addProductModal">
              <i class="fa fa-fw fa-tags"></i>
              <span>Add New Product</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Brands") {echo "active";} ?>">
            <a class="nav-link" href="product-brands.php">
              <i class="fa fa-fw fa-industry"></i>
              <span>Product Brands</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Vendors") {echo "active";} ?>">
            <a class="nav-link" href="product-vendors.php">
              <i class="fa fa-fw fa-users"></i>
              <span>Product Vendors</span></a>
          </li>
          <li class="nav-item dropdown <?php if (($PAGE_TITLE == "Product Types") || ($PAGE_TITLE == "Products")) {echo "active";} ?>">
            <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-folder"></i>
              <span>
                Manage Products
                <i class="float-right fa fa-angle-down"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Inventory</h6>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-plus"></i> Add Product</a>
              <a class="dropdown-item" href="products.php"> <i class="fa fa-tags"></i> All Products</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Product Types</h6>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-plus"></i> Add New Type</a>
              <a class="dropdown-item" href="product-types.php"> <i class="fa fa-tags"></i> Product Types</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Dealers &amp; Brands</h6>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> Add New Vendor</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> Add New Brand</a>
            </div>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "History") {echo "active";} ?>">
            <a class="nav-link" href="history.php">
              <i class="fa fa-fw fa-calendar"></i>
              <span>History</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Export Record") {echo "active";} ?>">
            <a class="nav-link" href="export-record.php">
              <i class="fa fa-fw fa-external-link"></i>
              <span>Export Record</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "General Settings") {echo "active";} ?>">
            <a class="nav-link" href="general-settings.php">
              <i class="fa fa-fw fa-cogs"></i>
              <span>General Settings</span></a>
          </li>
          <li class="nav-item <?php if ($PAGE_TITLE == "Help Docs") {echo "active";} ?>">
            <a class="nav-link" href="help.php">
              <i class="fa fa-fw fa-life-ring"></i>
              <span>Help Docs</span></a>
          </li>
        </ul>
