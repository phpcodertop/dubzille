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
switch($_REQUEST['txtAction33'])
{
	case "6":
	
        $country_id =  $_POST[ddlcountry] ;
        $_SESSION['country_id']=$country_id;
	
        echo "<script type=text/javascript>";
        echo "  window.location = 'index.php' ";
        echo " </script>";
		 	 
	break;

}
?> 

<script language='javascript' type='text/javascript'>

	 function btncountry_Click()
	{
		 if(document.getElementById('txtId33').value=='-1')
		 {  
		     
			
			 {
			 document.getElementById('txtAction33').value="6";
             }  			 
		 }
		 
	 }

</script>  

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
الصفحة الرئيسية
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
    
<body class="home  ">


        
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
    <div id="dfp-leaderboard" class="dfp_slot" style="display:none">
        <script type="text/javascript">
            googletag.cmd.push(function() { googletag.display('dfp-leaderboard'); });
        </script>
    </div>

</div>
                    
    <div class="d-layout__page-content">
        
        
	
<div class="u-r ">
            <div id="page-title" class="u-c u-c--12o12">
                <h1>
		
<?php
	$Selectword=mysql_query(" Select * from word_index    ");
	while($result_word=mysql_fetch_array($Selectword))
	{
?>
<?=$result_word['address']?>
<?php
	}
?>
		
		</h1>
                <div class="u-helper--margin-v-large"></div>
            </div>
	    
	    <div class="dropdown-cities clear group" style="border-top:1px solid #eee;width:100%;float:right;margin-bottom:10px;padding:10px 0;">
	    <div class="u-c u-c--12o12 u-c--t4o12 u-c--d4o12 dropdown-label" style="margin-top:20px;">
	    <p >أختر دولتك وشوف فيها ايه</p>
	    </div>
	    
	<form id="sear" action="" method="POST" enctype="multipart/form-data" style="position:relative">
        <input type='hidden' id='txtId33' name='txtId33' value='<?=($_POST['txtAction22']=="3"?$_POST['txtId22']:"-1")?>'>
        <input type='hidden' id='txtAction33' name='txtAction33' value=''>		    
	    
	    <div class="u-c u-c--12o12 u-c--t4o12 u-c--d4o12">
	    <label class="u-frm__lbl u-frm__sel-arrow">
<select  class="u-frm__el u-frm__el--sel placeholder" id="ddlcountry" name="ddlcountry" >


<?php
	$SelectSystem=mysql_query(" Select * from country  where ID=$country_id  ");
	while($result=mysql_fetch_array($SelectSystem))
	{
?>
	<option value='<?=$result['ID']?>'><?=$result['address']?></option>						
<?php
	}
?>

<?php
	$SelectSystem=mysql_query(" Select * from country order by appearance asc  ");
	while($result=mysql_fetch_array($SelectSystem))
	{
?>
	<option value='<?=$result['ID']?>'><?=$result['address']?></option>						
<?php
	}
?>

</select>
            
	    </label>
	    
	    </div>
	    
	    <div class="u-c u-c--12o12 u-c--t4o12 u-c--d4o12 dropdown-label" style="margin-top:14px;">
            <input id="btncountry"  name="btncountry"  class="u-btn u-btn--second-action js-field-has-value"  onclick="return btncountry_Click()" value="أذهب"  type="submit" style="background-color:#005F96;border-bottom:solid 3px #00446B;">	    
	    </div>   
	</form>	    
	    
	    </div>
	    
    
</div>	

        
        <div class="u-r">
            <div class="u-c u-c--12o12">
                <div class="u-r">
                    
                        
                            
	<?php
	$dedc=mysql_query(" select * from  ads where country_id='$country_id' and  status='موافقة'  order by ID  desc limit 0,15  ");
	while($result=mysql_fetch_array($dedc))
	{
	?>                            
                        <div class="u-c u-c--6o12 u-c--d4o12 u-c--t4o12 d-listing">                                   
                           <a href="ads.php?ads_id=<?=$result['ID']?>" title="<?=$result['address']?>">                                          
                                
				<div class="d-listing__image u-img">                                                  
                                <img title="<?=$result['address']?>   " src="<?=$result['ImagePath']?>"/>
                                </div>
                                            
                                <div class="d-listing__price">                                              
                                <span class="d-listing__price__value"><?=$result['price']?></span>
                                <span class="d-listing__price__currency"><?=$result['currency_address']?></span>                                                                                                  
                                </div>
                                
				<p class="d-listing__title d-listing__title--truncated">                                               
                                <?=$result['address']?>                                              
                                </p>
				
                           </a>                                  
                        </div>
        <?php
	}
	?>                        
                        
                    
                </div>
                
                    <div class="u-r">
                        <div class="u-c u-c--6o12 u-c--offset-3">
                            <a id="home-load-more" class="u-btn u-btn--third-action" href="allads.php">
                                <span class="u-btn__text">ارني المزيد</span>
                            </a>
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
