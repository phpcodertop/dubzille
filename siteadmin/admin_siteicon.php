<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ايكونه الموقع</title>
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

switch($_REQUEST['txtAction'])
{

	case "3":
	   $ID=$_POST['txtId'];
	   $desEdit=mysql_query("select * from siteicon where ID=$ID");
	   $res=mysql_fetch_array($desEdit);
	   $address=$res['address'];
	   $ImagePath=$res['ImagePath'];


     break;
	 case "2":
	      $page=$_GET['page'];
	      $ID=$_POST['txtId'];
		  

		  $SelectImagePath=mysql_query("Select ImagePath from siteicon  where ID=$ID");
		  $resImage=mysql_fetch_array($SelectImagePath);
		  $Image=$resImage['ImagePath'];
		  if ($_FILES['UploadlogoFile']['name'] != null && $_FILES['UploadlogoFile']['name'] != '')
	 {
		  if(is_file("$Image"))
		  {
		    unlink($Image);
		  }
		  $Trget_ImagePath='SiteImages/';
		  $Trget_ImagePath=$Trget_ImagePath.$ID.'_'.baseName($_FILES['UploadlogoFile']['name']);
		  
		  
		  $Trget_ImagePath_upload='../SiteImages/';
		  $Trget_ImagePath_upload=$Trget_ImagePath_upload.$ID.'_'.baseName($_FILES['UploadlogoFile']['name']);			  
		  
		  move_uploaded_file($_FILES['UploadlogoFile']['tmp_name'],$Trget_ImagePath_upload);


			mysql_query("update siteicon set address='$_POST[txtaddress]',ImagePath='".$Trget_ImagePath."' where ID=$ID");
			
	 }
		  else		  
		  {
			mysql_query("update siteicon set address='$_POST[txtaddress]' where ID=$ID");
		  }


		  
		  
           if($page=='')
            {		   
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_siteicon.php' ";
           echo " </script>";
		     }
			 else
			 {
		   echo "<script type=text/javascript>";
           echo "  window.location = 'admin_siteicon.php?page=$page' ";
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
			    alert('من فضلك اكتب العنوان');
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


<div  class="wrap">

<h2>ايكونه الموقع</h2>

<div id="dashboard-widgets-wrap">

<div id="dashboard-widgets" class="metabox-holder">

<div class="postbox-container" style="width:100%;">

<div id="side-sortables" class="meta-box-sortables ui-sortable">

<div id="dashboard_quick_press" class="postbox ">
<div class="handlediv" title="أنقر للفتح والإغلاق"><br></div>
<h3 class="hndle"><span>ايكونه الموقع</span></h3>
<div style="" class="inside">


	<form id="frmcategory" action="" method="POST" enctype="multipart/form-data">
      <input type='hidden' id='txtId' name='txtId' value='<?=($_POST['txtAction']=="3"?$_POST['txtId']:"-1")?>'>
      <input type='hidden' id='txtAction' name='txtAction' value=''>
	  
	  
		<h4 id="quick-post-title"><label for="title">العنوان</label></h4>
		<div >
			<input  name="txtaddress" id="txtaddress" tabindex="1" style="width:100%" type="text" value="<?=$address;?>">
		</div>
		
		<br/>		
		
		
		<h4 id="quick-post-title"><label for="title">الصورة </label></h4>
		<div >
			<input type='file'  id='UploadlogoFile' name='UploadlogoFile'>
			
		</div>

		<br/>

		</div>

		<br/><br/>
		اضغط على تعديل وقم باضافة البيانات
		<br/><br/>
		
		
		
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


<div  style="float:left;dirction:ltr"  class="tablenav top">



	<?php

$page=$_GET['page'];



	if($page<1){
		$page=1;
	}
	
	$recordsPerPage=$_GET['recordsPerPage'];
	if(!$recordsPerPage){
		$recordsPerPage=30;
	}

	
		
		$i=($page-1)*$recordsPerPage;
		
		
		 $date= @date("Y-m-d") ;
		$countRes=mysql_query("select count(ID)from  siteicon  ");
			if($countRow=mysql_fetch_row($countRes)){
				$totalRecords=$countRow[0];
				}
			$totalPages=ceil($totalRecords/$recordsPerPage);
			if($countRow=mysql_fetch_row($countRes)){
				$totalRecords=$countRow[0];
				
				}
	
			$totalPages=ceil($totalRecords/$recordsPerPage);
		
		
		 $date= @date("Y-m-d") ;
		if(!$result=mysql_query("select * from  siteicon   order by ID desc  limit $i,$recordsPerPage  ")){
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
		echo "<a class='zo' href= admin_siteicon.php>الاولى</a>";
		echo "</td>";
        echo "<td>";		
		echo "<a class='zo' href= admin_siteicon.php?page=".($page-1).">السابق</a>";
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
		echo "<a class='zo' href= admin_siteicon.php?page=".($page+1).">التالى</a>";
		echo "</td>";
		echo "<td>";
		echo "<a class='zo' href= admin_siteicon.php?page=".$totalPages.">الاخيره</a>";
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
        <th style='width:10%;' scope="col" id="categories" class="manage-column column-categories" style="">الرقم</th>
		<th style='width:40%;' scope="col" id="categories" class="manage-column column-categories" style="">العنوان</th>
		<th style='width:40%;' scope="col" id="categories" class="manage-column column-categories" style="">الصورة</th>
		<th scope="col" id="tags" class="manage-column column-tags" style="">حركات</th>
	</tr>
	</thead>



	<tbody id="the-list">

<?php
	    $num= 0 ;
		while($record=mysql_fetch_row($result) )
		{
		$num= $num+1 ;
	   ?>
	<tr id="post-1175" class="author-self status-publish format-default iedit" valign="top">
							
	<td  class="hsm_pagetitle column-hsm_pagetitle"><?echo $num ;?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><?=$record['1']?></td>
	<td class="hsm_pagetitle column-hsm_pagetitle"><img src="../<?=$record['2']?>" width="16" height="16" /></td>
	<td class="hsm_pagetitle column-hsm_pagetitle">
	<input type='button' id='btnEdit' value='تعديل' onclick='btnEdit_Click(<?=$record['0'];?>)'>
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