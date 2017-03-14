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
$cat_id=$_GET['cat_id'];
$dedc=mysql_query(" select * from  ads_cat  where ID=$cat_id  limit 0,1");
while($result=mysql_fetch_array($dedc))
{
?>		
<?=$result['address']?>		
<?php
}
?> 
فى
<?php
$Selectcuntry=mysql_query(" Select * from country  where ID=$country_id ");
while($result_cuntry=mysql_fetch_array($Selectcuntry))
{
?>
<?=$result_cuntry['address']?>
<?php
}
?>
</title>

<?
include_once("metatag.php");
?>


<?
include_once("category_head.php");
?> 

<?
include_once("dropmenue.php");
?>         
  
<link href="pagination.css" rel="stylesheet" type="text/css">

<body class="listing  ">


<?
include_once("head.php");
?>         
    
<?
include_once("logo_mobile.php");
?> 
   
<?
include_once("category_right.php");
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
        
        
    




<div class="u-r">
    <div class="u-c u-c--12o12">
        <ul class="u-breadcrumb">
            <li>
                <a class="u-link" href="index.php">                    
                الصفحة الرئيسية                   
                </a>
            </li>
                           
            <li>
<?php
$dedc=mysql_query(" select * from  ads_cat  where ID=$cat_id  limit 0,1");
while($result=mysql_fetch_array($dedc))
{
?>		
<?=$result['address']?>		
<?php
}
?> 
            </li>
            
            
        </ul>
    </div>
</div>


        
    

<div class="u-r ">
<div id="page-title" class="u-c u-c--12o12">
<h1>
<?php
$dedc=mysql_query(" select * from  ads_cat  where ID=$cat_id  limit 0,1");
while($result=mysql_fetch_array($dedc))
{
?>		
<?=$result['address']?>		
<?php
}
?> 
فى
<?php
$Selectcuntry=mysql_query(" Select * from country  where ID=$country_id ");
while($result_cuntry=mysql_fetch_array($Selectcuntry))
{
?>
<?=$result_cuntry['address']?>
<?php
}
?>   
</h1>
<div class="u-helper--margin-v-large"></div>
</div>
</div>
        
<div class="items-wrapper u-r">
            
<div class="u-c u-c--12o12">
<div class="u-option-bar">
وجدنا
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where cata_id='$cat_id' and  country_id='$country_id' and  status='موافقة' ");
$rescount=mysql_fetch_array($deecount);
$ads_count=$rescount['ads_count'];
echo $ads_count ;
?>		    
اعلان
</div>
</div>                  
</div>
       

    <div class="d-listing d-listing--property1">
        
	
	<?php
		/*
		Place code to connect to your DB here.
	*/
	include('admin/connection.php');	// include your code to connect to DB.

	$tbl_name="ads";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 1;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$cat_id=$_GET['cat_id'];
	$query = "SELECT COUNT(*) as num FROM ads where cata_id=$cat_id and  country_id='$country_id' and  status='موافقة' ";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "category.php?cat_id=$cat_id"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page  
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
	$sql = "SELECT * FROM ads where cata_id=$cat_id and  country_id='$country_id' and  status='موافقة' order by ID desc LIMIT $start,$limit ";
	$result = mysql_query($sql); 
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	?>	

        <?php
        while($row = mysql_fetch_array($result))
	{             	 
	?>	
	
            <div class="d-listing__item">
                
                    <div class="u-c u-c--5o12 u-c--t3o12 u-c--d2o12 u-helper--no-padding">
                        <div class="u-r d-listing__photo">
                            <a href="ads.php?ads_id=<?=$row['ID']?>">
                            <img width="100%" class="u-img__img" src="<?=$row['ImagePath']?>">
                            </a>
                        </div>
                    </div>
                    <div class="u-c u-c--7o12 u-c--t9o12 u-c--d10o12">
                        <div class="u-r">
                            <div class="u-c u-c--12o12 u-helper--no-padding-trailing u-helper--no-padding-leading">
                                <a class="d-listing__name u-helper--no-margin" title="<?=$row['address']?>" href="ads.php?ads_id=<?=$row['ID']?>">
                                <?=$row['address']?>
                                </a>
                                <h2 class="d-listing__cat">
                                                                                                                 
                                <span class="value">
				<?=$row['descrip']?>
				</span>
                                                                           
                                </h2>
                                <div class="d-listing__detail">
                                    
                                        <div class="d-listing__amount ">                                                                                         
                                        <?=$row['price']?>
                                        <span class="d-listing__currency">
                                        <?=$row['currency_address']?>
                                         </span>
                                                
                                            
                                        </div>
                                    
                                        <div class="d-listing__meta">                                      
                                        عدد المشاهدات  (<?=$row['show_number']?>)
                                       </div>
                                </div>
                            </div>
                            <div class="u-c u-c--2o12 u-c--t12o12 d-listing__actions u-helper--no-padding">
                                <span class="d-listing__date u-helper--hide-m u-helper--show-t">
                                تاريخ الاضافة : <?=$row['ads_date']?>
                                </span>
                            </div>
                        </div>
                    </div>
                
            </div>

        <?php
	}
	?> 	    
        
    </div>


<div class="u-pager">
    
<div class="pagination">

				
<?php
				/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div  style='padding-top:4px;' >";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage&page=$prev\"> السابق »</a>";
		else
			$pagination.= "<span class=\"disabled\"> السابق »</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage&page=$next\">« التالى </a>";
		else
			$pagination.= "<span class=\"disabled\">« التالى </span>";
		$pagination.= "</div>\n";		
	}
?>
<?=$pagination?>
				
					
                    
</div>
    
</div>

    <!-- end timer template.egypt.node.render_search time: 0.0768132209778 -->

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
        
        <script type="text/javascript">
            var LANGUAGE_CODE = "ar" || 'en',
                DEBUG_STATUS = "False" || 'false',
                STATIC_URL = "https://cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/";
        </script>
        
        
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/min/init.min.js"></script>
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/min/navigation.min.js"></script>
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/min/filters.min.js"></script>
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/min/analytics.min.js"></script>
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/uno/js/scripts.min.js"></script>
        
        <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/lib/cookie.js"></script>
        
        <script type="text/javascript">
            $(function() {
                Modernizr.load([
                    {
                        test: Modernizr.placholder,
                        nope: 'https://cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/lib/placeholder.js',
                        complete: function() {
                            if (!Modernizr.input.placeholder) {
                                $('#search-input').placeholder();
                            }
                        }
                    },
                    
                    
                ]);
            });
        </script>
        
        
        
    <script type="text/javascript" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/min/listings.min.js"></script>
    

        
        
        
        
            <script type="text/javascript"> 
    /* <![CDATA[ */ 
    var google_conversion_id = 996054638; 
    var google_conversion_label = "ymHzCKqhjAQQ7qz62gM"; 
    var google_custom_params = window.google_tag_params; 
    var google_remarketing_only = true; 
    /* ]]> */ 
</script> 
<script type="text/javascript" src="../../../../www.googleadservices.com/pagead/f.txt"></script> 
<noscript> 
    <div style="display:inline;"> 
        <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/996054638/?value=0&amp;label=ymHzCKqhjAQQ7qz62gM&amp;guid=ON&amp;script=0"/> 
    </div> 
</noscript>
        
        
    


    <script type="text/javascript">
        <!--
            xtnv = document;
            xtsd = "https://logs1274/";
            xtsite = "509261";

            if (getCookie('crmtoken')) {
                window.xtparam += "&at=" + getCookie('crmtoken');
            }

            xt_tags = "";
            xtcustom = {
                
                    subsubsection: "", 
                
                    city: "alexandria", 
                
                    keyword: "", 
                
                    language: "arabic", 
                
                    section: "cars", 
                
                    nb_action: "1", 
                
                    nb_results: "3520", 
                
                    subsubsubsection: "", 
                
                    page_name: "listing_list", 
                
                    funnel_page: "", 
                
                    action_type: "", 
                
                    neighbourhood: "Abu Qir", 
                
                    subsection: ""
                
            };
            //do not modify below
            if (window.xtparam != null) {
                window.xtparam += "&tag="+xt_tags;
            } else {
                window.xtparam = "&tag="+xt_tags;
            };
        //-->
    </script>
    <script type="text/javascript" async="true" src="cb35358940351f30f971-ea214fde041e13ffffcd0a9e4a11be98.ssl.cf3.rackcdn.com/v/7/116/scripts/lib/ati/xtcore.js"></script>



        <div class="dfp_onebyone_slot">
    <div id="dfp-onebyone" class="dfp_slot" style="display:none">
        <script type="text/javascript">
            googletag.cmd.push(function() { googletag.display('dfp-onebyone'); });
        </script>
    </div>

</div>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","queueTime":0,"licenseKey":"1a633b2797","agent":"js-agent.newrelic.com/nr-536.min.js","transactionName":"YVEEZUIHChFYUkEKVlgbIEReBRALVl8aEFxXRgVZHhANB05CDzBcU18DQx4BARY=","applicationID":"2518106","errorBeacon":"bam.nr-data.net","applicationTime":1414}</script></body>


</html>
