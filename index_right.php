   <div class="d-layout__side">
        <div  class="d-layout__side-inner" id="page-header-wrapper">
	
<?
include_once("logo.php");
?>
            
            <div class="d-side__content">
                
<?
include_once("search_right.php");
?>


<ul class="d-nav__cat d-nav__cat--first-level ">


    
<?php
$dedc=mysql_query('select * from  ads_cat order by appearance asc   ');
while($result=mysql_fetch_array($dedc))
{
$cat_id=$result['ID'] ;
?>        
        <li class="d-nav__item d-nav__item--cars d-nav__item--first-level  " id="nav-cars" >
            <a href="category.php?cat_id=<?=$result['ID']?>" class="d-nav__name d-nav__name--with-icon d-nav__name--cars ">
                <span class="d-nav__txt">                   
                <i class="u-icon u-icon--motors d-nav__icon d-nav__icon--motors" style="content:url('<?=$result['ImagePath']?>')"></i>                   
                &nbsp;<?=$result['address']?>
                </span>
                <span class="d-nav__count">
		<?
		$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where cata_id='$cat_id' and  country_id='$country_id' and  status='موافقة' ");
	        $rescount=mysql_fetch_array($deecount);
	        $ads_count=$rescount['ads_count'];
		echo  '(' . $ads_count .')' ;
		?>		
		</span>
            </a>

        </li>
<?php
}
?>     
    

    
</ul>

            </div>
            

        </div>
	
	
        <div class="d-side__gradient d-side__gradient--top"></div>
        <div class="d-side__gradient d-side__gradient--bottom"></div>
    </div>