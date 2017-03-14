<?
	   $desEdit=mysql_query("select * from customer where ID='$customer_ID' ");
	   $res=mysql_fetch_array($desEdit);
	   $customer_name22=$res['customer_name'];
	   $customer_email22=$res['customer_email'];
       $customer_pass22=$res['customer_pass'];
	   $customer_mobile22=$res['customer_mobile'];
	   $customer_tel22=$res['customer_tel'];
?>    
    
    <div class="d-top-links u-helper--hide-m">
        <div class="d-top-links__inner">
            <div class="u-r">
                <div class="u-c u-c--12o12">
                    
                    <div class="dbz-app">
                        <a href="index.php"> 
<?php
$dedc=mysql_query('select * from site_sitting order by ID desc  ');
while($result=mysql_fetch_array($dedc))
{
?>
<?=$result['sitename']?>		        
<?php
}
?>
                            <i class="u-icon u-icon--navigate-left">&nbsp;</i>
                        </a>
                    </div>
                    
                    <ul class="d-top-links__list">
<?php
if ($customer_ID ==''){
?>		    
                        <li class="d-top-links__item">
                            <a class="d-top-links__link" href="registration.php">
                                <i class="d-user-links__icon u-icon u-icon--user-setting"></i> التسجيل
                            </a>
                        </li>
                        <li class="d-top-links__item">
                            <a class="d-top-links__link" href="customer_login.php">
                                <i class="d-user-links__icon u-icon u-icon--user-setting"></i> تسجيل الدخول
                            </a>
                        </li>
<?
}			
else
{
?>
                        <li class="d-top-links__item">
                            <a class="d-top-links__link" href="customer_allads.php">
                                <i class="d-user-links__icon u-icon u-icon--user-setting"></i>
			مرحبا :
		        <?
		        echo $customer_name22 ;
		        ?>
                        &nbsp;
                        اعلاناتى		
                            </a>
                        </li>
			
                        <li class="d-top-links__item">
                            <a class="d-top-links__link" href="logout.php">
                                <i class="d-user-links__icon u-icon u-icon--user-setting"></i>  خروج
                            </a>
                        </li>			
<?
}
?>			
                        <li class="d-top-links__item" >
                        <a  href="index.php" class="anchorclass" rel="submenu1" style="color:#fff;font-size:13px;line-height:32px;padding:0 10px;display:block">
<?php
$SelectSystem=mysql_query(" Select * from country  where ID=$country_id ");
while($result=mysql_fetch_array($SelectSystem))
{
$country_images=$result['ImagePath'] ;
?>			
مدن
<?=$result['address']?> 
<?php
	}
?>			
                        </a>
    
			
                        </li>

<div id="submenu1" class="anylinkcss" >
<ul>
<?php
$dedc=mysql_query(" select * from city  where country_id=$country_id order by appearance asc ");
while($result=mysql_fetch_array($dedc))
{
?>
<li><a href="city.php?city_id=<?=$result['ID']?>"><?=$result['address']?></a></li>
<?php
}
?> 
</ul>
</div>			
			
                    </ul>
                </div>
            </div>
        </div>
    </div>