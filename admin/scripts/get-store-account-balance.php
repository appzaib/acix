<?php


  $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`<='$thisMonth' AND `year`='$thisYear'");

  $row = mysqli_fetch_array($res);

  $balance = $row['balance'] / 1000;


?>
