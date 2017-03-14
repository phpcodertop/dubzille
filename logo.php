            <div class="d-side__header">
                <div class="d-nav__logo u-helper--hide-m u-helper--show-d">
                    <a class="d-nav__logo-inner" href="index.php">
<?php
$dedc=mysql_query("select * from   logo  order by ID desc limit 0,1   ");
while($result=mysql_fetch_array($dedc))
{		
?> 		    
<img class="d-nav__logo-img" src="<?=$result['ImagePath']?>" title="<?=$result['address']?>" alt="<?=$result['address']?>" />
<?php
}
?>                    
		    </a>
                </div>
                
                <div class="d-nav__paa u-helper--hide-m u-helper--show-t">
                    <div class="u-r">
                        <div class="u-c u-c--12o12">
                            <a href="add_ads.php" class="u-helper--no-js-hide u-btn u-btn--first-action u-btn--animated u-helper--no-margin d-nav__paa-btn">
                                <i class="u-icon u-icon--place-an-ad u-btn__icon"></i>
                                <span class="u-btn__text">
<?php
	$Selectword=mysql_query(" Select * from word_buttom    ");
	while($result_word=mysql_fetch_array($Selectword))
	{
?>
<?=$result_word['address']?>
<?php
	}
?>
                                </span>
                            </a>
                            <noscript>
                                 <a href="add_ads.php" class="u-btn u-btn--first-action u-helper--no-margin">
                                    <i class="u-icon u-icon--place-an-ad u-btn__icon"></i>
                                    <span class="u-btn__text">
<?php
	$Selectword=mysql_query(" Select * from word_buttom    ");
	while($result_word=mysql_fetch_array($Selectword))
	{
?>
<?=$result_word['address']?>
<?php
	}
?>
                                    </span>
                                </a>
                            </noscript>
                        </div>
                    </div>
                </div>
            </div>
	    
	    
<?
$dedc=mysql_query(" select * from  site_counter  ");
while($result=mysql_fetch_array($dedc))
{
$counter_final=$result['counter'] + 1 ;
mysql_query("update site_counter set counter='$counter_final' ");	
}
?>	    