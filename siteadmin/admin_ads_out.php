<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
اعلانات معلقة
</title>
<script type="text/javascript">
//<![CDATA[
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var userSettings = {
		'url': '/',
		'uid': '1',
		'time':'1335870543'
	},
	ajaxurl = '',
	pagenow = 'dashboard',
	typenow = '',
	adminpage = 'index-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 1;
//]]>
</script>
<link rel="stylesheet" href="clothes_files/load-styles.css" type="text/css" media="all">
<link rel="stylesheet" id="ThemeOptions-css" href="clothes_files/ThemeOptions.css" type="text/css" media="all">
<link rel="stylesheet" id="thickbox-css" href="clothes_files/thickbox.css" type="text/css" media="all">
<link rel="stylesheet" id="colors-css" href="clothes_files/colors-fresh.css" type="text/css" media="all">
<link rel="stylesheet" id="colors-rtl-css" href="clothes_files/colors-fresh-rtl.css" type="text/css" media="all">

<!--start of text editor js calling code -->
	<script language="Javascript" src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script language="Javascript" src="js/htmlbox.colors.js" type="text/javascript"></script>
	<script language="Javascript" src="js/htmlbox.styles.js" type="text/javascript"></script>
	<script language="Javascript" src="js/htmlbox.syntax.js" type="text/javascript"></script>
	<script language="Javascript" src="js/xhtml.js" type="text/javascript"></script>
	<script language="Javascript" src="js/htmlbox.full.js" type="text/javascript"></script>

<!--end of text editor js calling code -->

<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='http://profstars.org/wp-admin/css/ie.css?ver=20101102' type='text/css' media='all' />
<link rel='stylesheet' id='ie-rtl-css'  href='http://profstars.org/wp-admin/css/ie-rtl.css?ver=20101102' type='text/css' media='all' />
<![endif]-->
<script type="text/javascript" src="clothes_files/l10n.js"></script>
<script type="text/javascript" src="clothes_files/load-scripts_002.js"></script>

	<style type="text/css">
	#dolly {
		float: left;
		padding-left: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>


﻿<?php
@ session_start();
$User_ID=$_SESSION['user_ID'];
$User_name=$_SESSION['username'];
$admin_name=$_SESSION['admin_name'];
include_once("../admin/connection.php");
 
$cat_id=$_GET['cat_id'];

	      $date= @date("Y-m-d") ;
		  $time= @date("G:i") ;

switch($_REQUEST['txtAction'])
{
	case "1":
	      $page=$_GET['page'];
		  $cat_id=$_GET['cat_id'];
		  
		  $deeteatcher=mysql_query("select * from  ads_catb where ID='$_POST[ddlads_catb]' ");
	      $resteatcher=mysql_fetch_array($deeteatcher);
	      $catb_id=$resteatcher['ID'];
		  $catb_address=$resteatcher['address'];
		  $cata_id=$resteatcher['cat_id'];
		  $cata_address=$resteatcher['cat_name'];
		  
		  
		  $decity=mysql_query("select * from city where ID='$_POST[ddlcity]' ");
	      $rescity=mysql_fetch_array($decity);
	      $city_id=$rescity['ID'];
		  $city_address=$rescity['address'];
		  $country_id=$rescity['country_id'];
		  $country_address=$rescity['country_address'];
		  
		  $deobjective=mysql_query("select * from objective where ID='$_POST[ddlobjective]' ");
	      $reobjective=mysql_fetch_array($deobjective);
	      $objective_id=$reobjective['ID'];
		  $objective_address=$reobjective['address'];
		  
		  $decurrency=mysql_query("select * from currency where ID='$_POST[ddlcurrency]' ");
	      $recurrency=mysql_fetch_array($decurrency);
	      $currency_id=$recurrency['ID'];
		  $currency_address=$recurrency['address'];
		  
		if($_FILES['UploadlogoFile']['name'] == '')
          {	

		  $dedefault_imag=mysql_query("select * from default_image order by ID desc limit 0,1 ");
	      $redefault_imag=mysql_fetch_array($dedefault_imag);
	      $default_image=$redefault_imag['ImagePath'];
		  
          mysql_query(" insert into ads  (address,descrip,details,price,city_id,city_address,objective_id,objective_address,owner,tel,mobil,email,ImagePath,catb_id,catb_address,cata_id,cata_address,ads_type,ads_date,ads_time,show_number,currency_id,currency_address,country_id,country_address,status) 
		  values ('$_POST[txtaddress]','$_POST[txtdescrip]','$_POST[txtdetails]','$_POST[txtprice]','$city_id','$city_address','$objective_id','$objective_address','$_POST[txtowner]','$_POST[txttel]','$_POST[txtmobil]','$_POST[txtemail]','$default_image','$catb_id','$catb_address','$cata_id','$cata_address','$_POST[ddlads_type]','$date','$time','0','$currency_id','$currency_address','$country_id','$country_address','$_POST[ddlstatus]')");
		  		  
		  
		  }
		  
		  else
		  { 
		  
          mysql_query(" insert into ads  (address,descrip,details,price,city_id,city_address,objective_id,objective_address,owner,tel,mobil,email,ImagePath,catb_id,catb_address,cata_id,cata_address,ads_type,ads_date,ads_time,show_number,currency_id,currency_address,country_id,country_address,status) 
		  values ('$_POST[txtaddress]','$_POST[txtdescrip]','$_POST[txtdetails]','$_POST[txtprice]','$city_id','$city_address','$objective_id','$objective_address','$_POST[txtowner]','$_POST[txttel]','$_POST[txtmobil]','$_POST[txtemail]','-','$catb_id','$catb_address','$cata_id','$cata_address','$_POST[ddlads_type]','$date','$time','0','$currency_id','$currency_address','$country_id','$country_address','$_POST[ddlstatus]')");
		  $MaxID=mysql_query("SELECT MAX(ID) ID FROM ads ");
		  $res=mysql_fetch_array($MaxID);
		  $Trget_ImagePath='SystemImages/';
		  $Trget_ImagePath=$Trget_ImagePath.$res['ID'].'_'.baseName($_FILES['UploadlogoFile']['name']);
		  
		  $Trget_ImagePath_upload='../SystemImages/';
		  $Trget_ImagePath_upload=$Trget_ImagePath_upload.$res['ID'].'_'.baseName($_FILES['UploadlogoFile']['name']);		  
		  
		  move_uploaded_file($_FILES['UploadlogoFile']['tmp_name'],$Trget_ImagePath_upload);
		  
		  mysql_query('Update ads  set ImagePath="'.$Trget_ImagePath.'" Where ID='.$res['ID']);	  	  
		  }
		  
           if($page=='')
             {		   
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php' ";
           echo " </script>";
		     }
			 else
			 {
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php?page=$page' ";
           echo " </script>";
			 }
          
	break;
	case "3":
	   $ID=$_POST['txtId'];
	   $desEdit=mysql_query("select * from ads where ID=$ID");
	   $res=mysql_fetch_array($desEdit);
	   $address=$res['address'];
	   $descrip=$res['descrip'];
	   $details=$res['details'];
	   $price=$res['price'];
	   $city_id=$res['city_id'];
	   $city_address=$res['city_address'];
	   $objective_id=$res['objective_id'];
	   $objective_address=$res['objective_address'];
	   $owner=$res['owner'];
	   $tel=$res['tel'];
	   $mobil=$res['mobil'];
	   $email=$res['email'];
       $ImagePath=$res['ImagePath'];
	   $ads_type=$res['ads_type'];
	   $currency_id=$res['currency_id'];
	   $currency_address=$res['currency_address'];
	   $status=$res['status'];
	   $catb_id=$res['catb_id'];
	   $catb_address=$res['catb_address'];

     break;

	 case "2":
	 	  $page=$_GET['page'];
	      $ID=$_POST['txtId'];


		  $deeteatcher=mysql_query("select * from  ads_catb where ID='$_POST[ddlads_catb]' ");
	      $resteatcher=mysql_fetch_array($deeteatcher);
	      $catb_id=$resteatcher['ID'];
		  $catb_address=$resteatcher['address'];
		  $cata_id=$resteatcher['cat_id'];
		  $cata_address=$resteatcher['cat_name'];		  
		  
		  $decity=mysql_query("select * from city where ID='$_POST[ddlcity]' ");
	      $rescity=mysql_fetch_array($decity);
	      $city_id=$rescity['ID'];
		  $city_address=$rescity['address'];
		  $country_id=$rescity['country_id'];
		  $country_address=$rescity['country_address'];
		  
		  $deobjective=mysql_query("select * from objective where ID='$_POST[ddlobjective]' ");
	      $reobjective=mysql_fetch_array($deobjective);
	      $objective_id=$reobjective['ID'];
		  $objective_address=$reobjective['address'];
		  
		  
		  $decurrency=mysql_query("select * from currency where ID='$_POST[ddlcurrency]' ");
	      $recurrency=mysql_fetch_array($decurrency);
	      $currency_id=$recurrency['ID'];
		  $currency_address=$recurrency['address'];
		  

		  $SelectImagePath=mysql_query("Select ImagePath from ads  where ID=$ID");
		  $resImage=mysql_fetch_array($SelectImagePath);
		  $Image=$resImage['ImagePath'];
		  if ($_FILES['UploadlogoFile']['name'] != null && $_FILES['UploadlogoFile']['name'] != '')
	{
		  if(is_file("$Image"))
		  {
		    unlink($Image);
		  }
		  $Trget_ImagePath='SystemImages/';
		  $Trget_ImagePath=$Trget_ImagePath.$ID.'_'.baseName($_FILES['UploadlogoFile']['name']);
		  
		  $Trget_ImagePath_upload='../SystemImages/';
		  $Trget_ImagePath_upload=$Trget_ImagePath_upload.$ID.'_'.baseName($_FILES['UploadlogoFile']['name']);			  
		  
		  move_uploaded_file($_FILES['UploadlogoFile']['tmp_name'],$Trget_ImagePath_upload);
		  
		  
			mysql_query("update ads set address='$_POST[txtaddress]',descrip='$_POST[txtdescrip]',details='$_POST[txtdetails]',price='$_POST[txtprice]',city_id='$city_id',city_address='$city_address',objective_id='$objective_id',objective_address='$objective_address',owner='$_POST[txtowner]',tel='$_POST[txttel]',mobil='$_POST[txtmobil]',email='$_POST[txtemail]',ImagePath='".$Trget_ImagePath."',ads_type='$_POST[ddlads_type]',currency_id='$currency_id',currency_address='$currency_address',country_id='$country_id',country_address='$country_address',status='$_POST[ddlstatus]',catb_id='$catb_id',catb_address='$catb_address',cata_id='$cata_id',cata_address='$cata_address' where ID=$ID");
        
		  
	 }
		  else		  
		  {


			mysql_query("update ads set address='$_POST[txtaddress]',descrip='$_POST[txtdescrip]',details='$_POST[txtdetails]',price='$_POST[txtprice]',city_id='$city_id',city_address='$city_address',objective_id='$objective_id',objective_address='$objective_address',owner='$_POST[txtowner]',tel='$_POST[txttel]',mobil='$_POST[txtmobil]',email='$_POST[txtemail]',ads_type='$_POST[ddlads_type]',currency_id='$currency_id',currency_address='$currency_address',country_id='$country_id',country_address='$country_address',status='$_POST[ddlstatus]',catb_id='$catb_id',catb_address='$catb_address',cata_id='$cata_id',cata_address='$cata_address' where ID=$ID");
        

         }		  
		  

        include_once("send_mail.php");

			
		  
           if($page=='')
             {		   
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php' ";
           echo " </script>";
		     }
			 else
			 {
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php?page=$page' ";
           echo " </script>";
			 }
	 break;
	 case "4":
	    $page=$_GET['page'];
	    $ID=$_POST['txtId'];
		
		  $SelectImagePath=mysql_query("Select ImagePath from ads  where ID=$ID");
		  $resImage=mysql_fetch_array($SelectImagePath);
		  $Image='../'.$resImage['ImagePath'];
		  if(is_file("$Image"))
		  {
		    unlink($Image);
		  }	
		  
	   mysql_query("Delete from ads where ID=$ID");
	   
	   
           if($page=='')
             {		   
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php' ";
           echo " </script>";
		     }
			 else
			 {
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_ads_out.php?page=$page' ";
           echo " </script>";
			 }
	 break;
	}	
?>
	

<script language='javascript' type='text/javascript'>
    function btnsave_Click()
	{
		 if(document.getElementById('txtId').value=='-1')
		 {
			 if(document.getElementById('txtaddress').value=='')
			 {
			    alert('من فضلك اكتب العنوان.');
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
	 function btnEdit_Click(ID)
	 {
	   document.getElementById('txtAction').value="3";
	   document.getElementById('txtId').value=ID
	   document.getElementById('frmcategory').submit();
	 }
	 function btndelete_Click(ID)
	 { 
	     if(window.confirm("هل تريد الحذف ؟"))
		 {
	           document.getElementById('txtAction').value="4";
		       document.getElementById('txtId').value=ID;
		       document.getElementById('frmcategory').submit();
		 }
	 }
</script>
	
	
	</head>
	
	
<body class="wp-admin js  index-php">

<?php
	if ($User_ID==''){

		  echo "<script type=text/javascript>";
          echo "  window.location = 'adminlogin.php' ";
          echo " </script>";
	
	}
	else
	{
?>

<script type="text/javascript">
//<![CDATA[
(function(){
var c = document.body.className;
c = c.replace(/no-js/, 'js');
document.body.className = c;
})();
//]]>
</script>

<div id="wpwrap" style="position:relative; top:-15px;">
<div id="wpcontent">


<?php
 include_once("admin_header.php");
?>



<div id="wpbody">

<?php
 include_once("admin_menue.php");
?>

<div style="overflow: hidden;" id="wpbody-content">


<?php
 include_once("welcom.php");
?>


<div class="wrap">

<h2>اعلانات معلقة</h2>

<div id="dashboard-widgets-wrap">

<div id="dashboard-widgets" class="metabox-holder">

<div class="postbox-container" style="width:100%;">

<div id="side-sortables" class="meta-box-sortables ui-sortable">

<div id="dashboard_quick_press" class="postbox ">
<div class="handlediv" title="أنقر للفتح والإغلاق"><br></div>
<h3 class="hndle"><span>
اعلانات معلقة	  
</span></h3>
<div style="" class="inside">


	<form id="frmcategory" action="" method="POST" enctype="multipart/form-data">
      <input type='hidden' id='txtId' name='txtId' value='<?=($_POST['txtAction']=="3"?$_POST['txtId']:"-1")?>'>
      <input type='hidden' id='txtAction' name='txtAction' value=''>
	  
		<h4 id="quick-post-title"><label for="title">القسم</label></h4>
		<div >
							<select id='ddlads_catb' name='ddlads_catb' style="width:100%">
							  <option value='<?=$catb_id;?>'><?=$catb_address;?></option>
							     <?php
								  $SelectSystem=mysql_query(" Select * from ads_cat order by appearance asc  ");
								  while($result=mysql_fetch_array($SelectSystem))
						          {
								  $cat_id=$result['ID'] ;
								 ?>
							        <option value=''>---------<?=$result['address']?>-----------</option>
								<?php
								  $SelectSystem22=mysql_query(" Select * from ads_catb  where cat_id='$cat_id' order by appearance asc  ");
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
		</div>


		<br/>
	  
	    <h4 id="quick-post-title"><label for="title">العنوان</label></h4>
		<div >
			<input name="txtaddress" id="txtaddress" tabindex="1" style="width:100%" type="text" value="<?=$address;?>">
		</div>


		<br/>
		
		<h4 id="quick-post-title"><label for="title">الوصف</label></h4>
		<div >
			<input name="txtdescrip" id="txtdescrip" tabindex="1" style="width:100%" type="text" value="<?=$descrip;?>">
		</div>
		
		<br/>
		
		<h4 id="content-label"><label for="content">التفاصيل</label></h4>
		<div >
			<textarea name="txtdetails" id="txtdetails" class="mceEditor" rows="10" style="width:100%" tabindex="2"><?=$details;?></textarea>			
		</div>

		<br/>
		
		
		<h4 id="quick-post-title"><label for="title">المدينة</label></h4>
		<div >
							<select id='ddlcity' name='ddlcity' style="width:100%">
							  
							  <option value='<?=$city_id;?>'><?=$city_address;?></option>
							     <?php
								  $SelectSystem=mysql_query(" Select * from country order by appearance asc ");
								  while($result=mysql_fetch_array($SelectSystem))
						          {
								  $country_id=$result['ID'] ;
								 ?>
							        <option value=''>---------<?=$result['address']?>-----------</option>
								<?php
								  $SelectSystem22=mysql_query(" Select * from city  where country_id='$country_id' order by appearance asc ");
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
		</div>


		<br/>
		
		
		<h4 id="quick-post-title"><label for="title">الغرض</label></h4>
		<div >
							<select id='ddlobjective' name='ddlobjective' style="width:100%">
							  
							  <option value='<?=$objective_id;?>'><?=$objective_address;?></option>
							     <?php
								  $SelectSystem=mysql_query(" Select * from objective order by appearance asc ");
								  while($result=mysql_fetch_array($SelectSystem))
						          {
								 ?>
							        <option value='<?=$result['ID']?>'><?=$result['address']?></option>
								<?php
								  }
								?>
							</select>
		</div>


		<br/>
		

		<h4 id="quick-post-title"><label for="title">العملة</label></h4>
		<div >
							<select id='ddlcurrency' name='ddlcurrency' style="width:100%">
							  
							  <option value='<?=$currency_id;?>'><?=$currency_address;?></option>
							     <?php
								  $SelectSystem=mysql_query(" Select * from currency order by appearance asc ");
								  while($result=mysql_fetch_array($SelectSystem))
						          {
								 ?>
							        <option value='<?=$result['ID']?>'><?=$result['address']?></option>
								<?php
								  }
								?>
							</select>
		</div>


		<br/>		
		
		<h4 id="quick-post-title"><label for="title">السعر</label></h4>
		<div >
			<input name="txtprice" id="txtprice" tabindex="1" style="width:100%" type="text" value="<?=$price;?>">
		</div>


		<br/>
		
		<h4 id="quick-post-title"><label for="title">المعلن</label></h4>
		<div >
			<input name="txtowner" id="txtowner" tabindex="1" style="width:100%" type="text" value="<?=$owner;?>">
		</div>


		<br/>
		
		<h4 id="quick-post-title"><label for="title">التليفون</label></h4>
		<div >
			<input name="txttel" id="txttel" tabindex="1" style="width:100%" type="text" value="<?=$tel;?>">
		</div>


		<br/>
		
		<h4 id="quick-post-title"><label for="title">الموبايل</label></h4>
		<div >
			<input name="txtmobil" id="txtmobil" tabindex="1" style="width:100%" type="text" value="<?=$mobil;?>">
		</div>


		<br/>
		
		<h4 id="quick-post-title"><label for="title">الايميل</label></h4>
		<div >
			<input name="txtemail" id="txtemail" tabindex="1" style="width:100%" type="text" value="<?=$email;?>">
		</div>


		<br/>
	
		
		<h4 id="quick-post-title"><label for="title">الصورة</label></h4>
		<div >
        <input type='file' id='UploadlogoFile' name='UploadlogoFile'>
		</div>

		<br/>
		



		
		<h4 id="quick-post-title"><label for="title">الحالة</label></h4>
		<div >
				<select id='ddlstatus' name='ddlstatus' style="width:100%">
                                <option value='<?=$status;?>'><?=$status;?></option>
				<option value='موافقة'>موافقة</option>
				<option value='تعليق'>تعليق</option>
				<option value='رفض'>رفض</option>
				<option value='انتظار الموافقة'>انتظار الموافقة</option>
				</select>
		</div>


		<br/>
			
		
		<p class="submit">
		        <input name="btnsave" id="btnsave" class="button-primary" value="حفظ" type="submit" onclick="return btnsave_Click()" >
		
			<span id="publishing-action">
				<input value="تفريغ الحقول" class="button" type="reset">
			</span>
			<br class="clear">
		</p>

	

</div>
</div>




</div>	

</div>


<div class="tablenav top">



	<?php

$page=$_GET['page'];
$cat_id=$_GET['cat_id'];


	if($page<1){
		$page=1;
	}
	
	$recordsPerPage=$_GET['recordsPerPage'];
	if(!$recordsPerPage){
		$recordsPerPage=30;
	}

	
		
		$i=($page-1)*$recordsPerPage;
		
		
		 $date= @date("Y-m-d") ;
		$countRes=mysql_query("select count(ID)from ads where status='تعليق' ");
			if($countRow=mysql_fetch_row($countRes)){
				$totalRecords=$countRow[0];
				}
			$totalPages=ceil($totalRecords/$recordsPerPage);
			if($countRow=mysql_fetch_row($countRes)){
				$totalRecords=$countRow[0];
				
				}
	
			$totalPages=ceil($totalRecords/$recordsPerPage);
		
		
		 $date= @date("Y-m-d") ;
		if(!$result=mysql_query("select * from  ads where status='تعليق' order by ID desc  limit $i,$recordsPerPage  ")){
			echo"query invalid:".mysql_error();
			exit;
		}
		?>
	
			<?
			//echo "Page $page";
		echo "<table align='center' style='border:1px solid #707070'>";
		echo"<tr>";
		
			//here i must change the path to the same path that i work in ;
		if($page>1){
		echo "<td>";		
		echo "<a class='zo' href= admin_ads_out.php>الاولى</a>";
		echo "</td>";
        echo "<td>";		
		echo "<a class='zo' href= admin_ads_out.php?page=".($page-1).">السابق</a>";
		echo "</td>";
	}else{

	}
		
		
		echo "<td>";
		echo " $page ";
		echo " &nbsp;";
        echo " من ";
		echo " &nbsp;";
		echo "$totalPages ";
		echo "</td>";
		
		
	if($page!=$totalPages){
	//here also i must change the path to the same page that i work in;
	    echo "<td>";
		echo "<a class='zo' href= admin_ads_out.php?page=".($page+1).">التالى</a>";
		echo "</td>";
		echo "<td>";
		echo "<a class='zo' href= admin_ads_out.php?page=".$totalPages.">الاخيره</a>";
		echo "</td>";
	}else{
		
	}
		echo"</tr>";
		echo"</table>";
	?>



		<br class="clear">
</div>


<table class="wp-list-table widefat fixed posts" cellspacing="0">
	<thead>
	<tr>
        <th style='width:6%;' scope="col" id="categories" class="manage-column column-categories" style="">الرقم</th>
		<th style='width:23%;' scope="col" id="categories" class="manage-column column-categories" style="">العنوان</th>
		<th style='width:10%;' scope="col" id="categories" class="manage-column column-categories" style="">الغرض</th>
		<th style='width:15%;' scope="col" id="categories" class="manage-column column-categories" style="">المعلن</th>
		<th style='width:15%;' scope="col" id="categories" class="manage-column column-categories" style="">الدولة / المدينة</th>
		<th style='width:10%;' scope="col" id="categories" class="manage-column column-categories" style="">الحالة</th>
		<th style='width:10%;' scope="col" id="categories" class="manage-column column-categories" style="">الصورة</th>
		<th scope="col" id="tags" class="manage-column column-tags" style="">حركات</th>
	</tr>
	</thead>



	<tbody id="the-list">

<?php
	    $num= 0 ;
		while($record=mysql_fetch_row($result) )
		{
		$num= $num+1 ;
		$ImagePath=$record['13'] ;
	   ?>
	<tr id="post-1175" class="author-self status-publish format-default iedit" valign="top">
							
	<td  class="hsm_pagetitle column-hsm_pagetitle"><?echo $num ;?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['1']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['8']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['9']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['25']?> / <?=$record['6']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['26']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><img src="../<?=$ImagePath?>" width='70' height='70' /></td>
	<td class="hsm_pagetitle column-hsm_pagetitle">
	<input type='button' id='btnEdit' value='تعديل' onclick='btnEdit_Click(<?=$record['0'];?>)'>
	<input type='button' id='btndelete' value='حذف' onclick='btndelete_Click(<?=$record['0'];?>)'>
	<br/>
	<a href="../ads.php?ads_id=<?=$record['0'];?>" target="_blank">تفاصيل الاعلان</a>
	</td>
	</tr>

   <?php
	   }
	   ?>	

</form>
	   
	</tbody>
</table>

</div>

<form style="display:none" method="get" action="">
	<p>
<input id="closedpostboxesnonce" name="closedpostboxesnonce" value="bfe694cc7f" type="hidden"><input id="meta-box-order-nonce" name="meta-box-order-nonce" value="e4ff19e6b0" type="hidden">	</p>
</form>


<div class="clear"></div>
</div>
<!-- dashboard-widgets-wrap -->

</div><!-- wrap -->


<div class="clear"></div>

</div><!-- wpbody-content -->

<div class="clear"></div>

</div>

<!-- wpbody -->
<div class="clear"></div>

</div><!-- wpcontent -->

</div><!-- wpwrap -->


<?php
 include_once("admin_footer.php");
?>



<script type="text/javascript">list_args = {"class":"WP_Comments_List_Table","screen":{"id":"dashboard","base":"dashboard","action":"","is_network":false,"is_user":false,"parent_file":"index.php","parent_base":"index"}};</script>

<script type="text/javascript" src="clothes_files/load-scripts.js"></script>

<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>


</body>

</html>


<?
}
?>