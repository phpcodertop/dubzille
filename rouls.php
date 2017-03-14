<?php
@ session_start();
$customer_ID=$_SESSION['customer_ID'];
$customer_name=$_SESSION['customer_name'];
$customer_email=$_SESSION['customer_email'];
$customer_pass=$_SESSION['customer_pass'];
$customer_mobile=$_SESSION['customer_mobile'];
$customer_tel=$_SESSION['customer_tel'];

$country_id=$_SESSION['country_id'];

include_once("admin/connection.php");
?>

<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9 ie8 rtl" lang="ar"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie9 rtl" lang="ar"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js ie rtl" lang="ar"><!--<![endif]-->
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<?
include_once("countryhead_check.php");
?>

<title>		
<?php
$dedc=mysql_query('select * from site_sitting order by ID desc  ');
while($result=mysql_fetch_array($dedc))
{
?>
<?=$result['sitename']?>		        
<?php
}
?>
|
الشروط والاحكام
</title>
    
<?
include_once("metatag.php");
?>


<?
include_once("site_head.php");
?> 

<?
include_once("dropmenue.php");
?> 	
    
</head>

<body class="privacy  ">

<?
include_once("head.php");
?>  
    
<?
include_once("logo_mobile.php");
?> 
   
<?
include_once("index_right.php");
?>      
    
<?
include_once("account_div.php");
?> 

        <div class="d-layout">
            

            
            <div id="container" data-action-nav-hide data-action-account-hide data-action="hideNav" class="d-layout__content">
                <div id="container-inner" class="d-layout__container">
                    



                    <div class="dfp_leaderboard_slot">
</div>
                    
    <div class="d-layout__page-content">
        
<div class="u-r">
    <div class="u-c u-c--12o12">
        <ul class="u-breadcrumb">
            <li>
                <a class="u-link" href="index.php">                    
                الصفحة الرئيسية                   
                </a>
            </li>
                           
            <li>
            الشروط والاحكام
            </li>
            
            
        </ul>
    </div>
</div>        
        
        <div class="u-r ">
            <div id="page-title" class="u-c u-c--12o12">
                <h1>الشروط والاحكام</h1>
                <div class="u-helper--margin-v-large"></div>
            </div>
        </div>
        
    <div class="clear"></div>
    <div id="static-page">
        <div class="content-wrapper">
            <div class="content-box">
                
<div class="u-r">
<div class="u-c u-c--12o12">

<?php
$dedc=mysql_query('select * from rouls order by ID desc limit 0,1 ');
while($result=mysql_fetch_array($dedc))
{
?>
		
<?=$result['details']?>
		
<?php
}
?>

</div>
</div>

            </div>
        </div>
    </div>

    </div>
    

<?
include_once("footer.php");
?>


                </div>
            </div>
            
            
                
<?
include_once("menuemobil.php");
?>
            
        </div>
        
<?
include_once("site_footer.php");
?> 
	
</html>
