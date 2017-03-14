    <div class="d-layout__side">
        <div  class="d-layout__side-inner" id="page-header-wrapper">
	
<?
include_once("logo.php");
?>
            
            <div class="d-side__content">
                
               
<?
include_once("search_right.php");
?>


<ul class="d-nav__cat d-nav__cat--first-level d-nav__cat--opened">


    
        
        <li class="d-nav__item d-nav__item--cars d-nav__item--first-level  d-nav__item--selected" id="nav-cars" >

            <ul class="d-nav__cat d-nav__cat--show">
                <li class="d-nav__item d-nav__item--back">
                    <a href="index.php" class="d-nav__name d-nav__name--with-icon">
                        <span class="d-nav__txt u-link">
                            <i class="u-icon u-icon--navigate-right d-nav__icon"></i>
                            الرجوع للرئيسية
                        </span>
                    </a>
                </li>
                <li class="d-nav__item d-nav__item--all">
                    <a href="category.php?cat_id=<?=$cata_id?>" class="d-nav__name">
                        <span class="d-nav__txt">
			(الكل)
<?php
$dedc=mysql_query(" select * from  ads_cat  where ID=$cata_id  limit 0,1");
while($result=mysql_fetch_array($dedc))
{
?>		
<?=$result['address']?>		
<?php
}
?> 			
			</span>
                        <span class="d-nav__count">
			(
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where cata_id='$cata_id' and  country_id='$country_id' and  status='موافقة' ");
$rescount=mysql_fetch_array($deecount);
$ads_count=$rescount['ads_count'];
echo $ads_count ;
?>
			)
			</span>
                    </a>
                </li>

<?php
$dedc=mysql_query(" select * from ads_catb where cat_id='$cata_id' order by appearance asc    ");
while($result=mysql_fetch_array($dedc))
{
$catb_id_check=$result['ID'] ;
?>

	<?
	if($catb_id_check==$catb_id)
	{
	?>
		
                <li class="d-nav__item d-nav__item--select">
                        <a class="d-nav__name" href="supcategory.php?catb_id=<?=$result['ID']?>">
                            <span class="d-nav__path"><i class="u-icon u-icon--motors d-nav__icon"></i></span>
                            <span class="d-nav__txt"><?=$result['address']?></span>
                            <span class="d-nav__count">
			    (
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where catb_id='$catb_id_check' and  country_id='$country_id' and  status='موافقة'  ");
$rescount=mysql_fetch_array($deecount);
$ads_count=$rescount['ads_count'];
echo $ads_count ;
?>
			    )
			    </span>
                        </a>
                </li>
	<?	 
        }
	else
	{
	?>
	
                <li class="d-nav__item d-nav__item">
                        <a class="d-nav__name" href="supcategory.php?catb_id=<?=$result['ID']?>">
                            <span class="d-nav__path"><i class="u-icon u-icon--motors d-nav__icon"></i></span>
                            <span class="d-nav__txt"><?=$result['address']?></span>
                            <span class="d-nav__count">
			    (
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where catb_id='$catb_id_check' and  country_id='$country_id' and  status='موافقة'  ");
$rescount=mysql_fetch_array($deecount);
$ads_count=$rescount['ads_count'];
echo $ads_count ;
?>
			    )
			    </span>
                        </a>
                </li>	
	<?
	}
	?>
	
		
<?php
}
?>                 
            </ul>
        </li>
    
    
</ul>

            </div>
            

        </div>
        <div class="d-side__gradient d-side__gradient--top"></div>
        <div class="d-side__gradient d-side__gradient--bottom"></div>
    </div>