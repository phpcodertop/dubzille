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
<?php
$ads_id=$_GET['ads_id'];
$dedc=mysql_query(" select * from  ads  where ID=$ads_id  ");
while($result=mysql_fetch_array($dedc))
{
$catb_id=$result['catb_id'];
$cata_id=$result['cata_id'];
$ads_email=$result['email'];
?>
<?=$result['cata_address']?>
|
<?=$result['catb_address']?>
|
<?=$result['address']?>
<?php
}
?>
</title>

<?
include_once("metatag.php");
?>
    
<?
include_once("pag3_head.php");
?>

<?
include_once("dropmenue.php");
?>

</head>
    <body class="details  ">
        <script type="text/javascript">
  (function() {
    var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
    em.src = ('https:' == document.location.protocol ? 'https://me-ssl' : 'http://me-cdn') + '.effectivemeasure.net/em.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
  })();
</script>
<noscript>
    <img src="http://me.effectivemeasure.net/em_image" alt="" style="position:absolute; left:-5px;" />
</noscript>

        
        
<script>
    dataLayer = [{
      
        'category': 'items-for-sale',
      
        'city': '',
      
        'subCategory': 'mobile-phones-accessories',
      
        'language': 'ar',
      
        'country': 'Egypt',
      
        'page': 'listings_details',
      
    }];
</script>

<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-N8MMWX"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N8MMWX');
</script>


        
<?
include_once("head.php");
?> 
    
<?
include_once("logo_mobile.php");
?>
    
<?
include_once("pag3_right.php");
?> 
        
<?
include_once("account_div.php");
?>

        <div class="d-layout">
            

            
            <div id="container" data-action-nav-hide data-action-account-hide data-action="hideNav" class="d-layout__content">
                <div id="container-inner" class="d-layout__container">
                    


                    
    <div class="d-layout__page-content">
        
        
    




<div class="u-r">
    <div class="u-c u-c--12o12">
        <ul class="u-breadcrumb">
            <li><a class="u-link" href="index.php">الصفحة الرئيسية</a></li>
<?php
$ads_id=$_GET['ads_id'];
$dedc=mysql_query(" select * from  ads  where ID=$ads_id  ");
while($result=mysql_fetch_array($dedc))
{
?>	    
            <li><a class="u-link" href="category.php?cat_id=<?=$result['cata_id']?>"><?=$result['cata_address']?></a></li>
            <li><a class="u-link" href="supcategory.php?cat_id=<?=$result['catb_id']?>"><?=$result['catb_address']?></a></li>
            <li><?=$result['address']?></li>
<?php
 }
?>            
        </ul>
    </div>
</div>


        
        <div class="u-r ">
        <div id="page-title" class="u-c u-c--12o12">
<?php
$ads_id=$_GET['ads_id'];
$dedc=mysql_query(" select * from  ads  where ID=$ads_id  ");
while($result=mysql_fetch_array($dedc))
{
?>	
        <h1><span class="u-c u-c--12o12"><?=$result['address']?></span></h1>
	<br/><br/>
<?php
 }
?>	
        <div class="u-helper--margin-v-large"></div>
        </div>
        </div>
        

<div class="u-c u-c--12o12">
    <div class="u-r">
 

<?php
$ads_id=$_GET['ads_id'];
$dedc=mysql_query(" select * from  ads  where ID=$ads_id  ");
while($result=mysql_fetch_array($dedc))
{
?> 

        <div class="u-c u-c--12o12 u-c--t8o12 u-c--d8o12">
            <div class="u-r">
	    
                <div class="u-c u-c--12o12">

                     <h4 class="d-details__price u-helper--hide-t" style="text-align:center;color:#ca0008;font-size:2rem">     
                        <span class="d-details-listing-price"><?=$result['price']?></span>
                         <small class="d-details-listing-currency" style="font-size:75%;"> <?=$result['currency_address']?></small>                         
                     </h4>
		     
                </div>
		
		
		<div class="u-c u-c--12o12 d-details__gallery">
                <div id="gallery-single">
                                       
                <img class="rsImg" src="<?=$result['ImagePath']?>" alt="<?=$result['address']?>" style="height:auto;max-width:800px;width:100%">
                            
                </div>
                </div>
		
		
                <div class="u-c u-c--12o12 u-helper--margin-v-larg">
                    <div data-expander data-expander-link-text="اظهر كل البيانات">
                        <h4 class="d-details__details-head">بيانات الاعلان</h4>
                        <dl class="u-ml">
			
        <dt class="u-ml__lbl">نُشر بتاريخ</dt><dd class="u-ml__val"><?=$result['ads_date']?></dd>                           
        <dt class="u-ml__lbl">الدولة</dt><dd class="u-ml__val"><?=$result['country_address']?></dd>                           
        <dt class="u-ml__lbl">المدينة</dt><dd class="u-ml__val"><?=$result['city_address']?></dd>
        <dt class="u-ml__lbl">الغرض</dt><dd class="u-ml__val"><?=$result['objective_address']?></dd>
        <?	
	$dedc2=mysql_query(" select * from  newfiled  where ads_id='$ads_id'  limit 0,10");
	while($result2=mysql_fetch_array($dedc2))
	{	
	?>	
        <dt class="u-ml__lbl"><?=$result2['filed_address']?></dt><dd class="u-ml__val"><?=$result2['filed_value']?></dd>
        <?
	}
        ?>	
        <dt class="u-ml__lbl">المالك</dt><dd class="u-ml__val"><?=$result['owner']?></dd>  
        <dt class="u-ml__lbl">الجوال</dt><dd class="u-ml__val"><?=$result['mobil']?></dd>
        <dt class="u-ml__lbl">الهاتف</dt><dd class="u-ml__val"><?=$result['tel']?></dd>	
				
                        </dl>
                    </div>
                </div>

                <div class="u-c u-c--12o12 u-helper--margin-v-large">
                    <div  data-expander data-expander-link-text="ارني المزيد">
                        <h4 class="d-details__description-head">تفاصيل الاعلان</h4>                       
                        <p>			
<pre STYLE="white-space:pre-wrap;font-family:tahoma,arial,sans-serif;font-size:1.8rem;font-weight:200;width:475">
<?=$result['details']?>
</pre>			
			</p>
                    </div>
                </div>

                

                <div class="u-c u-c--12o12">
                    <div class="u-r" style="float:left;">
                        <div class="u-c u-c--6o12  u-c--t8o12" style="width:100%">

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_16x16_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d08b1b42e20f99"></script>
<!-- AddThis Button END -->
			
                        </div>

                    </div>
                </div>
		
		

                <div class="u-c u-c--12o12 u-alert-wrapper u-helper--margin-v-small">
                    <div class="u-alert u-alert--info d-details__tips">
                        <span class="u-alert__msg d-details__alert-head">
                            <i class="u-icon u-icon--info"></i>
                            <span>
<?php
	$Selectword=mysql_query(" Select * from tips_address    ");
	while($result_word=mysql_fetch_array($Selectword))
	{
?>
<?=$result_word['address']?>
<?php
	}
?>
			    </span>
                        </span>
                        <div class="d-details__tips-btn u-alert__controls">
                            <button data-role="show-alert" href="#" class="u-btn u-btn--secondary d-details__tips-btn--open">
                                <span class="u-btn__text">
                                    أظهر
                                </span>
                            </button>
                        </div>
                        <div class="u-r" >
                            <div class="u-c u-c--12o12" >
                                
<div class="d-details__slider-alert u-helper--hide">
    <ul>
	<?php
	$Select=mysql_query(" Select * from tips_details order by appearance asc  ");
	while($result=mysql_fetch_array($Select))
	{
	?>    
        <li><?=$result['address']?></li>
	<?php
	}
	?>
    </ul>
    <div class="d-details__tips-btn u-alert__controls">
        <button data-role="hide-alert" class="u-btn u-btn--secondary u-btn--no-margin-left d-details__tips-btn--close">
            <span class="u-btn__text">
                إغلاق
            </span>
        </button>
    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>

                
                <div id="reply-form" class="u-helper--hide"></div>
            </div>
        </div>
	
<?php
 }
?>	
	
        <div class="u-c u-c--12o12 u-c--t4o12 u-c--d4o12">
           <div class="d-details__sidebar--fixed d-details__bottom--fixed">
<?php
$ads_id=$_GET['ads_id'];
$dedc=mysql_query(" select * from  ads  where ID=$ads_id  ");
while($result=mysql_fetch_array($dedc))
{
?>                
                <div class="u-c u-c--12o12 u-helper--hide-m">
                    <h3 class="d-details__price " style="text-align:center;color:#ca0008;font-size:2rem">                           
                    <span class="d-details-listing-price"><?=$result['price']?></span>
                    <small class="d-details-listing-currency" style="font-size:75%;"><?=$result['currency_address']?></small>                           
                    </h3>
                </div>
                
                <div class="u-c u-c--6o12 u-c--t12o12 u-c--d12o12 u-helper--no-padding  d-details__btn-call" style="margin-bottom:5px;width:100%">
                    <a href="#" style="background-color:#005F96;border-bottom:solid 3px #00446B;color:#fff;display:block;text-align:center;">
                        <i class="u-icon u-icon--phone u-btn__icon"></i>
                        <span ><?=$result['mobil']?></span>
                    </a>
                </div>
                
                <div class="u-c u-c--6o12 u-c--t12o12 u-c--d12o12 u-helper--no-padding  d-details__btn-reply" style="width:100%">
                    <a href="#" style="background-color:#005F96;border-bottom:solid 3px #00446B;color:#fff;display:block;text-align:center;">
                        <i class="u-icon u-icon--email u-btn__icon"></i>
                        <span ><?=$result['email']?></span>
                    </a>
                </div>
<?php
 }
?>
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
include_once("pag3_footer.php");
?>

</html>
