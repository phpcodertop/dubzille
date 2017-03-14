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
أضافة اعلان
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
$category_id=$_GET['category_id'];

$date= @date("Y-m-d") ;
$time= @date("G:i") ;


switch($_REQUEST['txtAction'])
{
	case "1":

		  
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
		  values ('$_POST[txtaddress]','$_POST[txtdescrip]','$_POST[txtdetails]','$_POST[txtprice]','$city_id','$city_address','$objective_id','$objective_address','$_POST[txtowner]','$_POST[txttel]','$_POST[txtmobile]','$_POST[txtemail]','$default_image','$catb_id','$catb_address','$cata_id','$cata_address','عادى','$date','$time','0','$currency_id','$currency_address','$country_id','$country_address','انتظار الموافقة')");
 
          }
		  
		  else
		  {
		  
          mysql_query(" insert into ads  (address,descrip,details,price,city_id,city_address,objective_id,objective_address,owner,tel,mobil,email,ImagePath,catb_id,catb_address,cata_id,cata_address,ads_type,ads_date,ads_time,show_number,currency_id,currency_address,country_id,country_address,status) 
		  values ('$_POST[txtaddress]','$_POST[txtdescrip]','$_POST[txtdetails]','$_POST[txtprice]','$city_id','$city_address','$objective_id','$objective_address','$_POST[txtowner]','$_POST[txttel]','$_POST[txtmobile]','$_POST[txtemail]','-','$catb_id','$catb_address','$cata_id','$cata_address','عادى','$date','$time','0','$currency_id','$currency_address','$country_id','$country_address','انتظار الموافقة')");
		  $MaxID=mysql_query("SELECT MAX(ID) ID FROM ads ");
		  $res=mysql_fetch_array($MaxID);
		  $Trget_ImagePath='SystemImages/';
		  $Trget_ImagePath=$Trget_ImagePath.$res['ID'].'_'.baseName($_FILES['UploadlogoFile']['name']);		 	
		  
		  move_uploaded_file($_FILES['UploadlogoFile']['tmp_name'],$Trget_ImagePath);
		  mysql_query('Update ads  set ImagePath="'.$Trget_ImagePath.'" Where ID='.$res['ID']);
		  
		  }

		  
	    $desEdit=mysql_query("select * from ads order by ID desc limit 0,1");
	    $res=mysql_fetch_array($desEdit);
	    $ads_id=$res['ID'];		  
		
		
		
		$category_id=$_GET['category_id'];
	    $dedc2=mysql_query(" select * from  filed_category  where cata_id=$category_id  limit 0,10");
		while($result2=mysql_fetch_array($dedc2))
		{
		$filed_address=$result2['address'] ;
		$filed_category_id=$result2['ID'] ;
		
          mysql_query(" insert into newfiled  (ads_id,filed_address,filed_value) values ('$ads_id','$filed_address','$_POST[$filed_category_id]')");		  
		
        }		
		  
          echo "<script type=text/javascript>";
          echo "  window.location = 'add_ads_thanks.php' ";
          echo " </script>";
		  
  
	       
			
	break;
	}	
?>
	

<script language='javascript' type='text/javascript'>
    function btnsave_Click()
	{
	var numericExpression = /^[0-9]+$/;
	
		 if(document.getElementById('txtId').value=='-1')
		 {
			 if(document.getElementById('txtowner').value=='')
			 {
			    alert('من فضلك اكتب الاسم.');
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
			    alert('من فضلك اكتب رقم الجوال.');
			    return false;
			 }
             if (! document.getElementById('txtmobile').value.match(numericExpression) )
			 {
			    alert('رقم الجوال يجب الايحتوى على حروف.');
			    return false;
			 }
			 if(document.getElementById('txtmobile').value.length < 10 )
			 {
			    alert('رقم الجوال اقل من المعتاد.');
			    return false;
			 }
			 
			 if(document.getElementById('ddlads_catb').value=='')
			 {
			    alert('من فضلك اختار القسم.');
			   return false;
			 }
			 
			 if(document.getElementById('ddlcity').value=='')
			 {
			    alert('من فضلك اختار المدينة.');
			   return false;
			 }
			 
			 if(document.getElementById('txtaddress').value=='')
			 {
			    alert('من فضلك اكتب عنوان الاعلان.');
			   return false;
			 }
			 
			 if(document.getElementById('txtdescrip').value=='')
			 {
			    alert('من فضلك اكتب الوصف.');
			   return false;
			 }
			 
			 if(document.getElementById('txtdetails').value=='')
			 {
			    alert('من فضلك اكتب التفاصيل.');
			   return false;
			 }
			 
			 if(document.getElementById('txtprice').value=='')
			 {
			    alert('من فضلك اكتب السعر.');
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
        
 <div class="u-r">
    <div class="u-c u-c--12o12">
        <ul class="u-breadcrumb">
            <li>
                <a class="u-link" href="index.php">                    
                الصفحة الرئيسية                   
                </a>
            </li>
                           
            <li>
           أضف اعلان
            </li>
            
            
        </ul>
    </div>
</div>        
        

        
    <div id="paa-form" class="u-c u-c--12o12">
    <style>.wmobile .u-alert__msg{ width:70%;  padding-left: 0; line-height: 18px;} .d-details__slider-alert .d-details__tips-btn--close{ float:left; margin-top:20px;}.wmobile .video-embed{ display:none;} .wmobile .d-details__slider-alert .d-details__tips-btn--close{float: none; margin: 0 auto; margin-top:20px;width: 100px;}  .d-details__slider-alert li{ font-size:14px; line-height: 25px;}</style>
        
        

      <form class="fright re-form" id="frmcategory" action="" method="POST" enctype="multipart/form-data" style="position:relative">
      <input type='hidden' id='txtId' name='txtId' value='<?=($_POST['txtAction']=="3"?$_POST['txtId']:"-1")?>'>
      <input type='hidden' id='txtAction' name='txtAction' value=''>

            
                

            <div class="u-c u-c--12o12 u-paa__overlay-span u-helper--no-padding">
                <div class="u-r">
                    <div class="u-c u-c--12o12">
                        
                        
                            



<div id="add-photos-block" class="dbz-form-block">
   <!-- <div class="overlay"></div> -->
    <div class="add-photos-header">
        <span class="camera-icon"></span>
    </div>
    


    
    <div class="u-c--12o12 hide-in-mobile-app-v1-1" id="photos-uploader">
        <noscript>
            
            
                &lt;input type="file" name="raw_photo" id="id_raw_photos"&gt;
            
        </noscript>

        <div class="file-selection u-helper--no-js-hide">
            <div class="upload-inline-msg hide-in-mobile-app-v1-1">
                <span class="u-icon u-icon--camera"></span>
                <div class="upload-txt">
                     <strong>
                        اضف صور
                     </strong>
                </div>
            </div>
            <div class="u-r">
                <div class="u-c u-c--12o12">
                    <div class="photos-wrapper u-c u-c--12o12 u-helper--no-margin">
                        

                        

                        

                        
                    </div>
                </div>
            </div>
            <div class="u-r">
                <div class="u-c--6o12 u-c--offset-3" style="margin-right:17%;">
                    <label class="u-frm__lbl u-frm__file-upload u-btn u-btn--third-action hide-in-mobile-app-v1-1">
                        <input id="UploadlogoFile" name="UploadlogoFile" class="u-frm__file-upload__button js-f-upload" type="file"   accept="image/png, image/gif, image/jpeg" capture="camera,filesystem">
                        <span id="photoupload-text" class="u-frm__file-upload__text" style="line-height:40px;">
                            اضف صور
                        </span>
                    </label>
                </div>
            </div>
            
                <p id="photos-tip" class="hide-in-mobile-app-v1-1">
                هل تعلم أن الصور تؤدي للبيع بمعدل أعلى بكثير؟
		&nbsp;
                انواع الملفات المدعومة: jpg, png, gif.		
                </p>
            
        </div>
    </div>
    
</div>

                        
                    </div>
                </div>


<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="txtowner" name="txtowner" type="text" placeholder="اسم المعلن" class="u-frm__el u-frm__el--txt" value="">
       
        <span class="u-frm__lbl-txt">
        اسم المعلن
        </span>
        
        <span class="u-frm__tooltip">من فضلك اكتب اسم المعلن</span>
               
</label>
</div>

</div>
</div>		

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="txtemail" name="txtemail" type="text" placeholder="البريد الإلكترونى" class="u-frm__el u-frm__el--txt" value="">
       
        <span class="u-frm__lbl-txt">
        البريد الإلكترونى
        </span>
        
        <span class="u-frm__tooltip">من فضلك اكتب البريد الالكترونى الخاص بك</span>
               
</label>
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="txtmobile" name="txtmobile" type="text" placeholder="رقم الموبايل" class="u-frm__el u-frm__el--txt" value="">
      
        <span class="u-frm__lbl-txt">
        رقم الموبايل
        </span>
        
        <span class="u-frm__tooltip">من فضلك اكتب رقم الموبايل الخاص بك</span>
                
</label>
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="txttel" name="txttel" type="text" placeholder="رقم التليفون" class="u-frm__el u-frm__el--txt" value="">
      
        <span class="u-frm__lbl-txt">
        رقم التليفون
        </span>
        
        <span class="u-frm__tooltip">من فضلك اكتب رقم التليفون الخاص بك</span>
                
</label>
</div>

</div>
</div>


<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__model">
<label class="u-frm__lbl u-frm__sel-arrow  u-frm__lbl--required">
            
<select id="ddlads_catb" name="ddlads_catb" type="text" placeholder="القسم" class="u-frm__el u-frm__el--sel placeholder">
    
        <option selected="selected" value="" disabled="disabled">القسم</option>
	<?php
	$SelectSystem22=mysql_query(" Select * from ads_catb  where cat_id='$category_id' order by appearance asc  ");
	while($result22=mysql_fetch_array($SelectSystem22))
	{
	?>	
        <option value="<?=$result22['ID']?>"><?=$result22['address']?></option>
        <?php
	}
	?>        
    
</select>

        <span class="u-frm__lbl-txt">
        القسم
        </span>

</label>   
</div>

</div>
</div>


<div class="u-r">
<div class="u-c u-c--12o12">
                        
<div class="d-paa__title">
<label class="u-frm__lbl u-frm__lbl--required">
        
<input id="txtaddress" name="txtaddress" type="text" class="u-frm__el u-frm__el--txt" placeholder="أضف عنوان لإعلانك" value="" data-char-counter="" maxlength="65"><span class="js-char-counter"><span data-current-char-count="">0</span>/65</span><span class="js-char-counter"><span data-current-char-count="">0</span>/65</span>
<span class="js-char-counter"><span data-current-char-count="">0</span>/65</span>
    
        <span class="u-frm__lbl-txt">
        أضف عنوان لإعلانك
        </span>
              
        <span class="u-frm__tooltip">
        فكر في عنوان واضح ومختصر لإعلانك.
        </span>
        
        
    </label>
</div>

</div>
</div>


<div class="u-r">
<div class="u-c u-c--12o12" data-form-description="">
                        
<div class="d-paa__description">
<label class="u-frm__lbl u-frm__lbl--required">
        
<textarea id="txtdescrip" name="txtdescrip" class="u-frm__el u-frm__el--area" placeholder="وصف الاعلان"></textarea>
    
        <span class="u-frm__lbl-txt">
        وصف الاعلان
        </span>
        
        
        <span class="u-frm__tooltip">
        اكتب وصف مختصر لما تريد بيعه
        </span>
        
        
</label>
</div>

</div>
</div>

<?php
$category_id=$_GET['category_id'];
$dedc2=mysql_query(" select * from  filed_category  where cata_id=$category_id  limit 0,10");
while($result2=mysql_fetch_array($dedc2))
{
?>
<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="<?=$result2['ID']?>" name="<?=$result2['ID']?>" type="text" placeholder="<?=$result2['address']?>" class="u-frm__el u-frm__el--txt" value="">
      
        <span class="u-frm__lbl-txt">
        <?=$result2['address']?>
        </span>
        
        <span class="u-frm__tooltip">
	من فضلك اكتب 
	<?=$result2['address']?>
	</span>
                
</label>
</div>

</div>
</div>
<?php
}
?> 

<div class="u-r">
<div class="u-c u-c--12o12" data-form-description="">
                        
<div class="d-paa__description">
<label class="u-frm__lbl u-frm__lbl--required">
        
<textarea id="txtdetails" name="txtdetails" class="u-frm__el u-frm__el--area" placeholder="تفاصيل الاعلان"></textarea>
    
        <span class="u-frm__lbl-txt">
        تفاصيل الاعلان
        </span>
        
        
        <span class="u-frm__tooltip">
        الوصف الدقيق هو مفتاح البيع الاسرع: <br>- حاول الرد على أسئلة المشتري (مثلاً: الحجم والأبعاد)<br>- إشرح أهم المواصفات والمعلومات (مثلاً: الضمان إن وجد) يرجى عدم اضافة عنوان إيميلك داخل الوصف وهذا لحماية خصوصيتك.
        </span>
        
        
</label>
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__model">
<label class="u-frm__lbl u-frm__sel-arrow  u-frm__lbl--required">
            
<select id="ddlcity" name="ddlcity" type="text" placeholder="الدولة / المدينة" class="u-frm__el u-frm__el--sel placeholder">
    
        <option selected="selected" value="" disabled="disabled">الدولة / المدينة</option>
	
	<?php
	$SelectSystem=mysql_query(" Select * from country order by appearance asc  ");
	while($result=mysql_fetch_array($SelectSystem))
	{
	$country_id=$result['ID'] ;
	?>
	<option value=''>---------<?=$result['address']?>-----------</option>
	<?php
	$SelectSystem22=mysql_query(" Select * from city  where country_id='$country_id' order by appearance asc  ");
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

        <span class="u-frm__lbl-txt">
        الدولة / المدينة
        </span>

</label>   
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__model">
<label class="u-frm__lbl u-frm__sel-arrow  u-frm__lbl--required">
            
<select id="ddlobjective" name="ddlobjective" type="text" placeholder="الخدمة المطلوبة" class="u-frm__el u-frm__el--sel placeholder">
    
        <option selected="selected" value="" disabled="disabled">الخدمة المطلوبة</option>
	<?php
	$SelectSystem=mysql_query(" Select * from objective order by appearance asc  ");
	while($result=mysql_fetch_array($SelectSystem))
	{
	?>
	<option value='<?=$result['ID']?>'><?=$result['address']?></option>
	<?php
	}
	?>      
    
</select>

        <span class="u-frm__lbl-txt">
        الخدمة المطلوبة
        </span>

</label>   
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__model">
<label class="u-frm__lbl u-frm__sel-arrow  u-frm__lbl--required">
            
<select id="ddlcurrency" name="ddlcurrency" type="text" placeholder="العملة" class="u-frm__el u-frm__el--sel placeholder">
    
        <option selected="selected" value="" disabled="disabled">العملة</option>
	<?php
	$SelectSystem=mysql_query(" Select * from currency order by appearance asc  ");
	while($result=mysql_fetch_array($SelectSystem))
	{
	?>
	<option value='<?=$result['ID']?>'><?=$result['address']?></option>
	<?php
	}
	?>    
    
</select>

        <span class="u-frm__lbl-txt">
        العملة
        </span>

</label>   
</div>

</div>
</div>

<div class="u-r">
<div class="u-c u-c--12o12">
        		
<div class="d-paa__price">
<label class="u-frm__lbl u-frm__lbl--required">

<input id="txtprice" name="txtprice" type="text" placeholder="السعر" class="u-frm__el u-frm__el--txt" value="">
      
        <span class="u-frm__lbl-txt">
        السعر
        </span>
        
        <span class="u-frm__tooltip">السعر الحقيقي مهم عشان تبيع أسرع، تعرف إن الإعلانات إللي فيها أسعار حقيقية بيوصلها 85% مشترين أكتر</span>
                
</label>
</div>

</div>
</div>




                

                <div class="u-paa__overlay-layer"></div>
            </div>
            <div class="u-r">
                <div class="u-c u-c--12o12 field-wrapper submit-wrapper">
                    
                <div class="u-alert-wrapper hide-in-mobile-app">
                        <div class="u-alert u-icon u-alert--info">
                            <span class="u-alert__msg">
                                <i class="u-icon u-icon u-icon--info"></i>
                                قيامك بنشر إعلانك، يعني أنك قد وافقت على 
				<a href="rouls.php" target="_blank">الشروط والأحكام</a> و 
				<a href="policy.php" target="_blank">سياسة الخصوصية</a>
				للموقع
                                
                            </span>
                        </div>
                </div>
		
                    <center>
                        <button id="paa-submit" type="submit" onclick="return btnsave_Click()" class="u-btn u-btn--first-action d-paa__submit" data-uno-moda="overall-progress" data-uno-modal-theme="light">
                            <span id="no-loader">يلا...انشر اعلاني!</span>
                        </button>
                    </center>
                </div>
            </div>
        </form>
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
