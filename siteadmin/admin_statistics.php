<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>الاحصائيات</title>
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

?>
	

	
	
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

<h2>الاحصائيات</h2>

<div id="dashboard-widgets-wrap">

<div id="dashboard-widgets" class="metabox-holder">

<div class="postbox-container" style="width:100%;">

<div id="side-sortables" class="meta-box-sortables ui-sortable">

<div id="dashboard_quick_press" class="postbox ">
<div class="handlediv" title="أنقر للفتح والإغلاق"><br></div>
<h3 class="hndle"><span>الاحصائيات</span></h3>
<div style="" class="inside">

<b>
<table >

<tr>

<td style="width:180px;"> عدد زوار الموقع  </td>
<td style="width:5px;"> : </td>
<td style="width:40px;"> 
<?
$descount=mysql_query("select counter  from site_counter ");
$res_count=mysql_fetch_array($descount);
$counter=$res_count['counter'];
echo "<font color='red'>" . $counter."</font>" ;
?>
</td>

<td style="width:180px;"> عدد الدول  </td>
<td style="width:5px;"> : </td>
<td style="width:40px;"> 
<?
$descount=mysql_query("select count(ID) as count_id from country ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td style="width:180px;"> عدد المدن  </td>
<td style="width:5px;"> : </td>
<td style="width:40px;"> 
<?
$descount=mysql_query("select count(ID) as count_id from city ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td style="width:180px;"> عدد العملات  </td>
<td style="width:5px;"> : </td>
<td style="width:50px;"> 
<?
$descount=mysql_query("select count(ID) as count_id from currency ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>



</tr>

<tr><td colspan="15"><br/></td></tr>

<tr>

<td > عدد الغرض  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from objective ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > </td>
<td >  </td>
<td > 

</td>

<td >  </td>
<td >  </td>
<td > 

</td>

<td >  </td>
<td >  </td>
<td > 

</td>



</tr>

<tr><td colspan="15"><br/></td></tr>

<tr>

<td > عدد الاقسام الرئيسية  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads_cat ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاقسام الفرعية  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads_catb ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد ايميلات القائمة  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from emiallist ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الرسائل المرسلة  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from sendmesage ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

</tr>

<tr><td colspan="15"><br/></td></tr>

<tr>

<td > عدد الاعلانات  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads  ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعلانات المفعلة  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads where status='موافقة' or status='تثبيت' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعلانات انتظار التفعيل  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads where status='انتظار الموافقة' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعلانات المرفوضة  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads where status='رفض' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

</tr>

<tr><td colspan="15"><br/></td></tr>

<tr>

<td > عدد الاعلانات المعلقة  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads where status='تعليق' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعضاء المثبته  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from ads where status='تثبيت' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

</tr>

<tr><td colspan="15"><br/></td></tr>

<tr>

<td > عدد الاعضاء  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from customer  ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعضاء المفعلين  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from customer where status='مفعل' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعضاء انتظار التفعيل  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from customer where status='انتظار التفعيل' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

<td > عدد الاعضاء المحظورين  </td>
<td > : </td>
<td > 
<?
$descount=mysql_query("select count(ID) as count_id from customer where status='محظور' ");
$res_count=mysql_fetch_array($descount);
$count_id=$res_count['count_id'];
echo "<font color='red'>" . $count_id."</font>" ;
?>
</td>

</tr>


</table>
</b>	

</div>
</div>




</div>	

</div>



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