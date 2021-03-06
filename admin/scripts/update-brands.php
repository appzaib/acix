<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Update Brands
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


  if (isset($_POST['update-brand'])) {
    $brandID   = mysqli_real_escape_string($appconnect, $_POST['brandID']);
    $brandName = mysqli_real_escape_string($appconnect, $_POST['brandName']);
    $brandDesc = mysqli_real_escape_string($appconnect, $_POST['brandDesc']);

    mysqli_query($appconnect, "UPDATE `product_brands` SET
                 `name` = '$brandName',
                 `description` = '$brandDesc',
                 `last_updated` = current_timestamp() WHERE `product_brands`.`id` = '$brandID' ");
  }
