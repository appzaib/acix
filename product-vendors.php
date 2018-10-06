<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Product Vendors</title>
    <link href="app-include/css/bootstrap.css" rel="stylesheet">
    <link href="app-include/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="app-include/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="app-include/css/styles.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.php">Acix Sales Pro</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-plus fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addSaleModal"> <i class="fa fa-money"></i> New Sale</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-tag"></i> New Product</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-tags"></i> New Product Type</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> New Product Vendor</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> New Product Brand</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addExpenseAccountModal"> <i class="fa fa-dollar"></i> New Expense Account</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-flash fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="products.php"> <i class="fa fa-tag"></i> All Products</a>
            <a class="dropdown-item" href="product-types.php"> <i class="fa fa-tags"></i> Product Types</a>
            <a class="dropdown-item" href="product-vendors.php"> <i class="fa fa-user"></i> Product Vendors</a>
            <a class="dropdown-item" href="product-brands.php"> <i class="fa fa-industry"></i> Product Brands</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="revenue.php"> <i class="fa fa-money"></i> Revenue</a>
            <a class="dropdown-item" href="improvements.php"> <i class="fa fa-rocket"></i> Improvements</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="accounts.php"> <i class="fa fa-dollar"></i> Accounts</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow ml-3">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-warning">9+</span>
            <i class="fa fa-fw fa-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> You've few blocked products</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="notifications.php">See more notifications</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow ml-3">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-header">Rao Ahmed</div>
            <a class="dropdown-item" href="profile.php"> <i class="fa fa-user"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Settings</a>
            <a class="dropdown-item" href="history.php"> <i class="fa fa-line-chart"></i> Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-power-off"></i> Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="retail-dashboard.php">
            <i class="fa fa-fw fa-line-chart"></i>
            <span>Retail Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales-reports.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span>Sales Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inventory-reports.php">
            <i class="fa fa-fw fa-tags"></i>
            <span>Inventory Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payment-reports.php">
            <i class="fa fa-fw fa-money"></i>
            <span>Payment Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales.php">
            <i class="fa fa-fw fa-table"></i>
            <span>Check Sales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
            <i class="fa fa-fw fa-plus"></i>
            <span>Record New Sale</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#addProductModal">
            <i class="fa fa-fw fa-tags"></i>
            <span>Add New Product</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product-brands.php">
            <i class="fa fa-fw fa-industry"></i>
            <span>Product Brands</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="product-vendors.php">
            <i class="fa fa-fw fa-users"></i>
            <span>Product Vendors</span></a>
        </li>
        <li class="nav-item dropdown">
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
        <li class="nav-item">
          <a class="nav-link" href="history.php">
            <i class="fa fa-fw fa-calendar"></i>
            <span>History</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="export-record.php">
            <i class="fa fa-fw fa-external-link"></i>
            <span>Export Record</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="general-settings.php">
            <i class="fa fa-fw fa-cogs"></i>
            <span>General Settings</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.php">
            <i class="fa fa-fw fa-life-ring"></i>
            <span>Help</span></a>
        </li>
      </ul>
        <div id="content-wrapper">
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Vendors</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                Product Vendors
                <a href="#" class="text-white" data-toggle="modal" data-target="#addProductVendorModal">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Vendor
                  </span>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Vendor ID</th>
                        <th>Vendor Name</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Total Products Qty</th>
                        <th>Revenue Generated</th>
                        <th>Inventory Worth</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Vendor ID</th>
                        <th>Vendor Name</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Total Products Qty</th>
                        <th>Revenue Generated</th>
                        <th>Inventory Worth</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>054681</td>
                        <td>Aness Ahmad</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
                      </tr>
                      <tr>
                        <td>054682</td>
                        <td>Faisal Hayat</td>
                        <td>555-555-555</td>
                        <td>3</td>
                        <td>8</td>
                        <td>Rs7000</td>
                        <td>Rs11500</td>
                      </tr>
                      <tr>
                        <td>054683</td>
                        <td>Haider Abbass</td>
                        <td>555-555-555</td>
                        <td>16</td>
                        <td>65</td>
                        <td>Rs9100</td>
                        <td>Rs8600</td>
                      </tr><tr>
                        <td>01</td>
                        <td>Abdul Wahid Babar</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>Nouman Aslam</td>
                        <td>555-555-555</td>
                        <td>3</td>
                        <td>8</td>
                        <td>Rs7000</td>
                        <td>Rs11500</td>
                      </tr>
                      <tr>
                        <td>03</td>
                        <td>Zohaib Saleem</td>
                        <td>555-555-555</td>
                        <td>16</td>
                        <td>65</td>
                        <td>Rs9100</td>
                        <td>Rs8600</td>
                      </tr><tr>
                        <td>01</td>
                        <td>Ahmed Bangyal</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <br><br><br>
          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto ">
                <br><br><br>
                <small class="text-muted">
                  You're using  v1.0 of this software. <a href="#"> <i class="fa fa-external-link"></i> Check for Updates</a>. In order to report a bug, please create an issue <a href="https://github.com/appzaib/acix/issues">here.</a>
                  <br><br><br>
                  <a href="#">Legal</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Advertisements</a>
                </small>
                <br><br><br>
                <span>Copyright &copy; 2013-2018 <a href="#">Blackrock Digital, LLC.</a>, 2018 <a href="https://vruqa.github.io">Vruqa Designs</a>, 2018 <a href="https://appzaib.github.io">Appzaib</a>. All rights reserved.</span>
                <br><br><br>
              </div>
            </div>
          </footer>
        </div>
      </div>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Modals -->
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-white">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="login.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Sale Modal-->
      <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-money"></i>
                Add New Sale
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label>Select Product</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product</sub></option>
                    <option disabled><sub>Speakers &amp; MICs</sub></option>
                    <option>Audionic MIC AM-20</option>
                    <option>USB Sound Card</option>
                    <option>Audionic Headphones AHT-11</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Blue Mousepad</option>
                    <option>Apple Mouse Wireless A11</option>
                    <option>DELL Mouse Wireless D232</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                    <option>Razer Mousepad</option>
                  </select>
                  <small class="float-right">Product not listed here? <a href="#" data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label for="">Product Price</label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter product price here..." required>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Sale">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Modal-->
      <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-tag"></i>
                Add New Product
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label>Product Type</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product type</sub></option>
                    <option>Speakers</option>
                    <option>Card Readers</option>
                    <option>Headphones & MICs</option>
                    <option>Mousepads</option>
                    <option>Mice &amp; Pointing Devices</option>
                    <option>Display Monitors</option>
                    <option>Keyboards</option>
                    <option>Cables & Chargers</option>
                    <option>Power Supplies</option>
                  </select>
                  <small class="float-right">Product type not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label>Product Brand</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product brand</sub></option>
                    <option>Audionic</option>
                    <option>DELL</option>
                    <option>HP</option>
                    <option>Samsung</option>
                    <option>AMB</option>
                    <option>Nokia</option>
                    <option>Razer</option>
                    <option>MSI</option>
                  </select>
                  <small class="float-right">Products brand not listed here? <a href="#"data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label>Product Vendor</label>
                  <select class="form-control text-primary" required>
                    <option disabled selected><sub>Please select a product vendor</sub></option>
                    <option>Haider Abbas</option>
                    <option>Muhammad Faisal</option>
                    <option>Nouman Aslam</option>
                    <option>Anees Ahmad Khan</option>
                    <option>Waleed Ahmad</option>
                    <option>Abdul Wahid</option>
                  </select>
                  <small class="float-right">Product vendor not listed here? <a href="#"data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
                </div>
                <div class="form-group">
                  <label for="">Product Name</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter product name..." required>
                  <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
                </div>
                <div class="form-group">
                  <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter cost of product per item..." required>
                </div>
                <div class="form-group">
                  <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                  <input type="number" class="form-control" name="" value="" placeholder="Enter number of items..." required>
                  <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
                </div>
                How are you paying for this product?
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Store Account
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    Other. I don't want to record this epxense.
                  </label>
                </div>
                <br>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Product">
              </div>
            </form>
          </div>
        </div>
      </div>
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
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Product Type</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter product type..." required>
                  <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this product type..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Product Type">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Brand-->
      <div class="modal fade" id="addProductBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-industry"></i>
                Add Product Brand
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Product Brand</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter brand name here..." required>
                  <small class="text-muted">Example: Nokia, AMB or MSI etc</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Brand">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Product Vendor -->
      <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-user"></i>
                Add Products Vendor
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Vendor Name</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's name here..." required>
                  <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small>
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's phone number here...">
                  <small class="text-muted">Example: 555-665-123</small>
                </div>
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" class="form-control" name="" value="" placeholder="Enter vendor's email here...">
                  <small class="text-muted">Example: ahmadanees02@gmail.com</small>
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Vendor">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Expense Account Modal -->
      <div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-dollar"></i>
                Add Expense Account
              </h5>
              <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form class="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Account Title</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter account title here..." required>
                  <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal Account etc</small>
                </div>
                <div class="form-group">
                  <label for="">How much are you depositing?</label>
                  <input type="email" class="form-control" name="" value="" placeholder="Enter the amount you are despositing...">
                </div>
                <div class="form-group">
                  <label for="">Description <small class="text-muted">(Optional)</small></label>
                  <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
                </div>
                <small class="text-muted"><em>Please double check information before submitting.</em></small>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Add Account">
              </div>
            </form>
          </div>
        </div>
      </div>
      <script src="app-include/js/jquery.min.js"></script>
      <script src="app-include/js/bootstrap.bundle.min.js"></script>
      <script src="app-include/js/jquery.easing.min.js"></script>
      <script src="app-include/js/jquery.dataTables.js"></script>
      <script src="app-include/js/dataTables.bootstrap4.js"></script>
      <script src="app-include/js/datatables-demo.js"></script>
      <script src="app-include/js/rc-pos.min.js"></script>
    </body>
  </html>
