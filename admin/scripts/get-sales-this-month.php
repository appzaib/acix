<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Sales Of This Month
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
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear'");
    $salesCount = mysqli_num_rows($res);

    if ((mysqli_num_rows($res))>0) {
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $grossProfit +=$saleProfit;
      }
      $grossProfit = $grossProfit / 1000;
    }
  } else {
    // Redirecting to for further redirection
    header('location: /');
  }
