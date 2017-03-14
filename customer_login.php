<?php
@ session_start();
 include_once("admin/connection.php");
 switch($_REQUEST["txtAction"])
 {
	case "1":
	 $sqlsite=" Select * from  customer where (customer_email ='$_REQUEST[txtemail]' AND customer_pass = '$_REQUEST[txtpassword]' AND status = 'مفعل' )";		
	$Rows=mysql_query($sqlsite);
	 $Rows = mysql_fetch_array($Rows);
	  if($Rows != null)
	  {
	    $_SESSION['customer_ID']=$Rows['ID'];
	  	$_SESSION['customer_name']=$Rows['customer_name'];
		$_SESSION['customer_email']=$Rows['customer_email'];
		$_SESSION['customer_pass']=$Rows['customer_pass'];
		$_SESSION['customer_mobile']=$Rows['customer_mobile'];
		$_SESSION['customer_tel']=$Rows['customer_tel'];
		

		header("Location:customer_allads.php");

	  }
   break;
  }
?>

	<script>
	function Enter_Ckick()
	{
	     document.getElementById("txtAction").value="1";
	}
	</script>
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
تسجيل الدخول
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
                    
<div class="d-layout__page-content" style="min-height: 545px;">
        
        
        
        <div class="u-r 
    d-helper--center
">
            <div id="page-title" class="u-c u-c--12o12">
                <h1>
    سجل الدخول لحسابك
</h1>
                <div class="u-helper--margin-v-large"></div>
            </div>
        </div>
        
    <div class="u-r d-helper--center">
        <div id="login-form" class="u-c u-c--12o12">
            
            
            

  	<form  class="fright re-form" id="frmLogin" name="frmLogin" action="customer_login.php" method="POST">
	<input type="hidden" name="txtAction" id="txtAction" value="-1"/>
                
                

                <div class="u-r">
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="email" name="txtemail" id="txtemail" placeholder="البريد الإلكتروني" class="u-frm__el u-frm__el--txt" value="">
                            <span class="u-frm__lbl-txt">
                                البريد الإلكتروني
                            </span>
                            
                        </label>
                    </div>
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="password" name="txtpassword" id="txtpassword" placeholder="كلمة المرور" class="u-frm__el u-frm__el--txt">
                            <span class="u-frm__lbl-txt">
                                كلمة السر
                            </span>
                            
                        </label>
                        <input type="hidden" name="next" value="/ar/user/mylistings/" class="js-field-has-value">
                    </div>
                </div>

                <!-- TODO: move inline js to analytics -->
                <div class="u-c u-c--12o12 u-c--t5o12 u-helper--no-padding">
                    <input type="submit" class="u-btn u-btn--second-action js-field-has-value" value="سجل دخولك" onClick="Enter_Ckick()">
                </div>
            </form>
        </div>
        <div class="u-c u-c--12o12">
            <p>ليس لديك حساب؟</p>
            <div class="u-c--12o12 u-c--t5o12">
                <a href="registration.php" class="u-btn u-btn--subtle u-helper--no-margin-leading">
                    <span class="u-btn__text">
                        سجل الآن
                    </span>
                </a>
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
