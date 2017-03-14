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
تسجيل الحساب
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
 
<?
switch($_REQUEST['txtAction'])
{
	case "1":
	      
		  
		  $decheckcustomer=mysql_query("select * from customer where customer_email='$_POST[txtemail]' ");
	      $resckcustomer=mysql_fetch_array($decheckcustomer);
	      $customer_id=$resckcustomer['ID'];
		  
		 
  		  $decity=mysql_query("select * from city where ID='$_POST[ddlcity]' ");
	      $rescity=mysql_fetch_array($decity);
	      $city_id=$rescity['ID'];
		  $city_address=$rescity['address'];
		  $country_id=$rescity['country_id'];
		  $country_address=$rescity['country_address']; 

	 		  
		  
		if($customer_id =='')
		 {
		  
		  
	   mysql_query(" insert into customer  (customer_name,customer_email,customer_pass,customer_mobile,customer_tel,city_id,city_address,country_id,country_address,status) values ('$_POST[txtname]','$_POST[txtemail]','$_POST[txtpassword]','$_POST[txtmobile]','$_POST[txttel]','$city_id','$city_address','$country_id','$country_address','انتظار التفعيل')");
	   
	   
       $desEdit=mysql_query("select * from customer order by ID desc limit 0,1");
	   $res=mysql_fetch_array($desEdit);
	   $customeractive_id=$res['ID'];
	   
		$desemail=mysql_query("select * from  site_sitting  order by ID desc  ");
	    $resemail=mysql_fetch_array($desemail);
	    $email=$resemail['email'];  
		$sitename=$resemail['sitename']; 
		$link=$resemail['link']; 
		$other_email=$resemail['other_email'];		   
	   
	   
	   $acrive_link= $link .'/regstration_active.php?customeractive_id='.$customeractive_id ;
   

	    $message_email_to= $_POST[txtemail] ;
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	    $headers .= 'From: '.$sitename.' <'.$other_email.'>' . "\r\n";
	    $subject= ' رسالة تفعيل الحساب -   '.$sitename.' '; 	 
	    $message = '
		
<html>
<head>
  <title>'.$sitename.'</title>
  <style>
  table
{
border:1px solid #666666;
width: 700px;
}
  </style>
</head>
<body>
  
  <table align="center" dir="rtl">
  <tr><td><font size="5" color="#b80007">'.$sitename.' &nbsp;&nbsp; (رسالة تفعيل الحساب) </font></td></tr>
  <tr><td><br/><br/></td></tr>
  <tr><td>شكرا لتسجيلك معنا  فى موقع '.$sitename.' <br/><br/></td></tr>
  <tr><td><br/></td></tr>
  <tr><td>قم الان بتفعيل حسابك بالظغط على اللينك التالى <br/><br/></td></tr>
  <tr><td> <a href="'.$acrive_link.' "> '.$acrive_link.' </a> </td></tr>
  <tr><td><font size="4">لمزيد من المعلومات زوروا موقعنا </font> <a href="'.$link.'"> '.$sitename.' </a></td></tr>
  </table>
  
</body>
</html>
';

mail($message_email_to, $subject, $message, $headers);
			 
			 	 
			 
		  echo "<script type=text/javascript>";
          echo "  window.location = 'regstration_thanks.php' ";
          echo " </script>";
	
		  

		  
		 }
        else
		{
         
		  
		  echo "<script type=text/javascript>";
          echo "  window.location = 'regstration_eroor.php' ";
          echo " </script>";
		
		}



	break;
}
?>			

			

<script language='javascript' type='text/javascript'>
    function btnsave_Click()
	{
	var numericExpression = /^[0-9]+$/;
	
		 if(document.getElementById('txtId').value=='-1')
		 {
			 if(document.getElementById('txtname').value=='')
			 {
			    alert('من فضلك اكتب الاسم.');
			    return false;
			 }
			 
			 if(document.getElementById('txtpassword').value=='')
			 {
			    alert('من فضلك اكتب كلمة السر.');
			    return false;
			 }
			 
			 if(document.getElementById('txtemail').value.indexOf('@')== -1)
			 {
			    alert('البريد الالكترونى مكتوب بطريقة خطأ.');
			    return false;
			 }
			 
			  if(document.getElementById('txtemail').value.indexOf('.')== -1)
			 {
			    alert('البريد الالكترونى مكتوب بطريقة خطأ.');
			    return false;
			 }
			 if(document.getElementById('txtmobile').value=='')
			 {
			    alert('من فضلك اكتب الهاتف المحمول.');
			    return false;
			 }				 
			 if(document.getElementById('ddlcity').value=='')
			 {
			    alert('من فضلك اختار المدينة.');
			    return false;
			 }			 


			 else
			 {
			 document.getElementById('txtAction').value="1";
             }  			 
		 }
		 else
		 {
		     document.getElementById('txtAction').value="2";
		 }
	 }
	 
</script>    
    
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
        
        
        
<div class="u-r d-helper--center">
<div id="page-title" class="u-c u-c--12o12">
<h1>
    أنشئ حساب مجاني 
</h1>
<div class="u-helper--margin-v-large"></div>
</div>
</div>
        
    <div class="u-r d-helper--center">
        <div id="register-form" class="u-c u-c--12o12">
            
            
            

     <form class="fright re-form" id="frmcategory" action="" method="POST" enctype="multipart/form-data" style="position:relative">
      <input type='hidden' id='txtId' name='txtId' value='<?=($_POST['txtAction']=="3"?$_POST['txtId']:"-1")?>'>
      <input type='hidden' id='txtAction' name='txtAction' value=''>
      
                <div style="display:none">
		<input type="hidden" name="csrfmiddlewaretoken" value="M6DWNCAY1hJlImOzHbiZJZ9qJcOsQb3v" class="js-field-has-value">
		</div>
                <div class="u-c u-c--12o12">
                    سجل باستخدام الإيميل
                </div>
                
                
                <div class="u-r">
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="txt" name="txtname" id="txtname" placeholder="الاسم" class="u-frm__el u-frm__el--txt" value="">
                            <span class="u-frm__lbl-txt">
                            الإسم
                            </span>                           
                        </label>
                    </div>
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="email" name="txtemail" id="txtemail" placeholder="البريد الإلكتروني" class="u-frm__el u-frm__el--txt" value="">
                            <span class="u-frm__lbl-txt">
			     البريد الإلكتروني
			    </span>                   
                        </label>
                    </div>
                </div>
		
                <div class="u-r">
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="password" name="txtpassword" id="txtpassword" placeholder="كلمة المرور" class="u-frm__el u-frm__el--txt">
                            <span class="u-frm__lbl-txt">
			    كلمة المرور
			    </span>
                            
                        </label>
                    </div>
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="txt" name="txtmobile" id="txtmobile" placeholder="الهاتف المحمول" class="u-frm__el u-frm__el--txt">
                            <span class="u-frm__lbl-txt">
			    الهاتف المحمول
			    </span>
                            
                        </label>
                    </div>
                </div>
		
                <div class="u-r">
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__lbl--required ">
                            <input type="txt" name="txttel" id="txttel" placeholder="التليفون" class="u-frm__el u-frm__el--txt">
                            <span class="u-frm__lbl-txt">
			    التليفون
			    </span>
                            
                        </label>
                    </div>
                    <div class="u-c u-c--12o12 u-c--t6o12">
                        
                        <label class="u-frm__lbl u-frm__sel-arrow">
			<select id="ddlcity" name="ddlcity" class="u-frm__el u-frm__el--sel placeholder" >
							     <?php
								  $SelectSystem=mysql_query(" Select * from country ");
								  while($result=mysql_fetch_array($SelectSystem))
						          {
								  $country_id=$result['ID'] ;
								 ?>
							        <option value=''>---------<?=$result['address']?>-----------</option>
								<?php
								  $SelectSystem22=mysql_query(" Select * from city  where country_id='$country_id' ");
								  while($result22=mysql_fetch_array($SelectSystem22))
						          {
								 ?>
								 
								 <option value='<?=$result22['ID']?>'><?=$result22['address']?></option>
								 
								<?php
								  }
								?>
								<?php
								  }
								?>
			</select>                            
			    
                        </label>
                    </div>
                </div>		
		
		
                <div class="u-c--12o12 u-c--t5o12 u-helper--no-padding">
                    <input type="submit" class="u-btn u-btn--second-action js-field-has-value" value="سجل الآن" onclick="return btnsave_Click()"">
                </div>
                <p class="u-helper--no-margin-vertical d-helper--fs-boring">
                    
                        
                        
            
بالضغط على سجل الآن، أنت توافق على 
<a href="rouls.php" target="_blank" class="u-link">الشروط والأحكام</a> و 
<a href="policy.php" target="_blank" class="u-link">سياسة الخصوصية</a>
للموقع                   
                    
                </p>
            </form>
        </div>
	
        <div class="u-c u-c--12o12">
            <div class="u-r">
                <div class="u-c u-c--12o12">
                    <p>
		    لديك حساب على
<?php
$dedc=mysql_query('select * from site_sitting order by ID desc  ');
while($result=mysql_fetch_array($dedc))
{
?>
<?=$result['sitename']?>		        
<?php
}
?>		    		    
		    </p>
                </div>
            </div>
            <div class="u-c--12o12 u-c--t5o12">
                <a href="customer_login.php" class="u-btn u-btn--subtle u-helper--no-margin-leading">
                    <span class="u-btn__text">
                        سجل الدخول لحسابك
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
