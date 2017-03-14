    <div class="d-nav__logo u-helper--hide-t hide-in-mobile-app">

<?php
$dedc=mysql_query("select * from   logomobile  order by ID desc limit 0,1   ");
while($result=mysql_fetch_array($dedc))
{		
?>     
<a class="d-nav__logo-inner u-helper--hide-m" href="index.php">
<img class="d-nav__logo-img" src="<?=$result['ImagePath']?>" title="<?=$result['address']?>" alt="<?=$result['address']?>" />
</a>
<?php
}
?>
<?php
$dedc=mysql_query("select * from   logomobile  order by ID desc limit 0,1   ");
while($result=mysql_fetch_array($dedc))
{		
?> 	
<a class="d-nav__logo-inner u-helper--hide-t u-helper--no-margin" href="index.php">
<img class="d-nav__logo-img" src="<?=$result['ImagePath']?>" title="<?=$result['address']?>" alt="<?=$result['address']?>" />
</a>
<?php
}
?> 	
        <a class="d-nav__back"  href="#">
            <i class="d-nav__back__icon u-icon d-details__icon--navigate-back--rtl"></i>
        </a>
    </div>