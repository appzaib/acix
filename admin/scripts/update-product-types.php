<?php

// preventing direct script access
if (!defined('ABSPATH'))
    exit('No direct script access allowed');


  if (isset($_POST['update-product-type'])) {
    $productTypeID  = mysqli_real_escape_string($appconnect, $_POST['productTypeID']);
    $productTypeName = mysqli_real_escape_string($appconnect, $_POST['productTypeName']);
    $productTypeDesc = mysqli_real_escape_string($appconnect, $_POST['productTypeDesc']);


    mysqli_query($appconnect, "UPDATE `product_types` SET
                              `type` = '$productTypeName',
                              `description` = '$productTypeDesc',
                              `last_updated` = current_timestamp()
                              WHERE `product_types`.`id` = '$productTypeID' ");


  }

?>
