<?php
session_start();
$customer_ID="";
$customer_name="";
$customer_email="";
$customer_pass="";
$customer_mobile="";
$customer_tel="";
session_destroy();
//you can change index.php with any url
          echo "<script type=text/javascript>";
          echo "  window.location = 'index.php' ";
          echo " </script>";
?>
