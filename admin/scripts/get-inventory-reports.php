<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Inventory Reports
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

  session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `products`");


} else {
      // Redirecting to for further redirection
      header('location: /');
    }
