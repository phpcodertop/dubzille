    <div class="d-layout__account">
        <div class="u-r u-helper--no-padding u-helper--no-margin">
            <div class="u-c u-c--12o12 u-helper--no-padding u-helper--no-margin">
                <ul  class="d-user-menu">
                    <li class="d-user-menu__item d-user-menu__item--back u-helper--hide-m">
                        <a class="d-user-menu__link" href="index.html">
                            <i class="u-icon d-user-menu__icon u-icon--navigate-right"></i>
                            <i class=""></i>
                            <span class="u-link">الرجوع إلى صفحة دوبيزل</span>
                        </a>
                    </li>
                    
                    <li data-loggedin-hide class="d-user-menu__item">
                        <a class="d-user-menu__link" href="index.php">
                        الرئيسية
                        </a>
                    </li>
<?php
if ($customer_ID ==''){
?>
                    <li class="d-user-menu__item u-helper--hide-t">
                        
                            <a class="d-user-menu__link" href="registration.php">
                                التسجيل
                            </a>
                        
                    </li>

                    <li class="d-user-menu__item u-helper--hide-t">
                        
                            <a class="d-user-menu__link" href="customer_login.php">
                                تسجيل الدخول
                            </a>
                        
                    </li>

<?
}			
else
{
?>		    

                    <li class="d-user-menu__item u-helper--hide-t">
                        
                            <a class="d-user-menu__link" href="customer_allads.php">
                        مرحبا :
		        <?
		        echo $customer_name22 ;
		        ?>
                        &nbsp;
                        اعلاناتى		
                            </a>
                        
                    </li>
		    
                    <li class="d-user-menu__item u-helper--hide-t">
                        
                            <a class="d-user-menu__link" href="logout.php">
                              خروج
                            </a>
                        
                    </li>		    
		    
<?
}
?>

                    <li data-loggedin-hide class="d-user-menu__item">
                        

                        <a  href="index.php" class="anchorclass" rel="submenu1" style="color:#3b4245;font-size:1.6rem;display:block">
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
			
                    </li>

		    
                </ul>
            </div>
        </div>
    </div>