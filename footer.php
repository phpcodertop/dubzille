<div id="footer" class="d-footer hide-in-mobile-app">
    <div class="wrapper">
        <ul class="d-footer__list">
            <li class="first"><a title="من نحن" href="aboutus.php" class="u-link">من نحن</a></li>|
            <li><a title="الشروط والاحكام" href="rouls.php" class="u-link">الشروط والاحكام</a></li>|
            <li><a title="سياسة الخصوصية" href="policy.php" class="u-link">سياسة الخصوصية</a></li>|
	    <li><a title="اتصل بنا" href="contactus.php" class="u-link">اتصل بنا</a></li>|
	    <li><a title="الاسئلة الشائعه والمتكررة" href="faq.php" class="u-link">الاسئلة الشائعه والمتكررة</a></li>|
	    <li class="last"><a title="اعلن معنا" href="advrtise.php" class="u-link">اعلن معنا</a></li>
        </ul>
			
	
        <div class="d-footer__copyright-material">
<?php
$dedc=mysql_query('select * from copyright order by ID asc limit 0,1 ');
while($result=mysql_fetch_array($dedc))
{
echo $result['copyright'] ;
}
?>	
        </div>
	
    </div>
    
    <div class="footer-categories">
        


<ul>
<?php
$dedc=mysql_query('select * from  newpage order by ID  asc limit 0,7 ');
while($result=mysql_fetch_array($dedc))
{
?>	
    <li> <a href="newpage.php?page_id=<?=$result['ID'];?>" class="u-link"><?=$result['address']?></a></li>
    <span class="separator">&nbsp;</span>
<?php
}
?>     
</ul>

    </div>
</div>