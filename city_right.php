    <div class="d-layout__side">
        <div  class="d-layout__side-inner" id="page-header-wrapper">
	
<?
include_once("logo.php");
?>
            
            <div class="d-side__content">
                
                


<form action="https://egypt.dubizzle.com/ar/alexandria/search/" method="get" class="u-frm d-nav__search-inner">

    <div class="u-r">
        <div class="u-c u-c--12o12">
            <label class="u-frm__lbl u-frm__lbl--medium u-helper--no-margin">
                <input type="text" autocapitalize="off" autocorrect="off" autocomplete="off" id="search-input" name="keywords" placeholder="إبحث" value="" class="u-frm__el u-frm__el--txt d-nav__search-input" />
                <i class="u-icon u-icon--search d-nav__search-icon"></i>
            </label>
        </div>
    </div>

    <button type="submit" class="d-nav__search-submit">
        <i class="u-icon u-icon--click d-nav__key-icon"></i> إضغط للبحث "<span class="d-nav__search-key"></span>"
    </button>

    <input  style="display: none" class="checkbox" type="checkbox" id="id_language"  name="language" value="ar"/>
    <label  style="display: none" for="id_language">
        أظهر فقط الإعلانات المضافة بعربي
    </label>
    
    <input  style="display: none" type="hidden" name="is_search" value="1"/>
</form>



                




<ul class="d-nav__cat d-nav__cat--first-level d-nav__cat--opened">
    <p class="d-nav__cat-helper">
        أو اختر فئة 
    </p>

    
        
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
                    <a href="allcity.php?country_id=<?=$country_id?>" class="d-nav__name">
                        <span class="d-nav__txt">
			(الكل)
<?php
$dedc=mysql_query(" select * from  country  where ID=$country_id  limit 0,1");
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
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where country_id='$country_id' and  status='موافقة' ");
$rescount=mysql_fetch_array($deecount);
$ads_count=$rescount['ads_count'];
echo $ads_count ;
?>
			)
			</span>
                    </a>
                </li>

<?php
$city_id=$_GET['city_id'];
$dedc=mysql_query(" select * from city where country_id='$country_id' order by appearance asc    ");
while($result=mysql_fetch_array($dedc))
{
$cityhere_id=$result['ID'] ;
?>

	<?
	if($city_id==$cityhere_id)
	{
	?>
		
                <li class="d-nav__item d-nav__item--select">
                        <a class="d-nav__name" href="city.php?city_id=<?=$result['ID']?>">
                            <span class="d-nav__path"><i class="u-icon u-icon--motors d-nav__icon"></i></span>
                            <span class="d-nav__txt"><?=$result['address']?></span>
                            <span class="d-nav__count">
			    (
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where city_id='$cityhere_id' and   status='موافقة'  ");
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
                        <a class="d-nav__name" href="city.php?city_id=<?=$result['ID']?>">
                            <span class="d-nav__path"><i class="u-icon u-icon--motors d-nav__icon"></i></span>
                            <span class="d-nav__txt"><?=$result['address']?></span>
                            <span class="d-nav__count">
			    (
<?
$deecount=mysql_query("select COUNT(ID) as ads_count FROM  ads where city_id='$cityhere_id' and   status='موافقة'  ");
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
            
            <div class="d-side__footer u-helper--show-t">
                
                <ul class="d-user-links">
                    <li class="d-user-links__item d-user-links__item--filters">
                        <div class="u-r">
                            <div class="u-c u-c--12o12">
                                <button data-action="show-filters" class="u-btn u-btn--third-action d-user-links__filter-btn">
                                    <span class="u-btn__text">
                                        <i class="u-icon u-icon--filter u-btn__icon"></i> خيارات البحث
                                    </span>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-side__filters d-filters">
                






    <form action="https://egypt.dubizzle.com/ar/alexandria/cars/search/" method="get"  class="u-r" data-floating-labels>
        

        
            
                
            
        

        
        
        	
	            <div><center><span><b>السعر</b></span></center></div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin ">
	                        
	                        <input id="id_price__gte" type="text" placeholder="من" class="u-frm__el u-frm__el--txt" name="price__gte" />
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                من
	                            </span>
	                        
	                    </label>
	                </div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin ">
	                        
	                        <input id="id_price__lte" type="text" placeholder="إلى" class="u-frm__el u-frm__el--txt" name="price__lte" />
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                إلى
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>السنة</b></span></center></div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_year__gte" placeholder="من" class="u-frm__el u-frm__el--sel" name="year__gte">
<option value="" selected="selected"></option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                من
	                            </span>
	                        
	                    </label>
	                </div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_year__lte" placeholder="إلى" class="u-frm__el u-frm__el--sel" name="year__lte">
<option value="" selected="selected"></option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                إلى
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>كيلومترات</b></span></center></div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin ">
	                        
	                        <input id="id_kilometers__gte" type="text" placeholder="من" class="u-frm__el u-frm__el--txt" name="kilometers__gte" />
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                من
	                            </span>
	                        
	                    </label>
	                </div>
	            
	                
	                <div class="u-c u-c--6o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin ">
	                        
	                        <input id="id_kilometers__lte" type="text" placeholder="إلى" class="u-frm__el u-frm__el--txt" name="kilometers__lte" />
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                إلى
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>سعة المحرك (سي سي)</b></span></center></div>
	            
	                
	                <div class="u-c u-c--12o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_engine_size" placeholder="سعة المحرك (سي سي)" class="u-frm__el u-frm__el--sel" name="engine_size">
<option value="" selected="selected"></option>
<option value="5">اقل من 1000 سى سى</option>
<option value="6">1001 - 1100 سى سى</option>
<option value="7">1101 - 1200 سى سى</option>
<option value="8">1201 - 1300 سى سى</option>
<option value="9">1301 - 1400 سى سى</option>
<option value="10">1401 - 1500 سى سى</option>
<option value="1">1501 - 1600 سى سى</option>
<option value="11">1601 - 1700 سى سى</option>
<option value="12">1701 - 1800 سى سى</option>
<option value="13">1801 - 1900 سى سى</option>
<option value="14">1901 - 2000 سى سى</option>
<option value="15">2001 - 2100 سى سى</option>
<option value="16">2101 - 2200 سى سى</option>
<option value="17">2201 - 2300 سى سى</option>
<option value="18">2301 - 2400 سى سى</option>
<option value="19">2401 - 2500 سى سى</option>
<option value="2">2501 - 2600 سى سى</option>
<option value="20">2601 - 2700 سى سى</option>
<option value="21">2701 - 2800 سى سى</option>
<option value="22">2801 - 2900 سى سى</option>
<option value="23">2901 - 3000 سى سى</option>
<option value="24">3001 - 3100 سى سى</option>
<option value="25">3101 - 3200 سى سى</option>
<option value="26">3201 - 3300 سى سى</option>
<option value="27">3301 - 3400 سى سى</option>
<option value="28">3401 - 3500 سى سى</option>
<option value="3">3501 - 3600 سى سى</option>
<option value="29">3601 - 3700 سى سى</option>
<option value="30">3701 - 3800 سى سى</option>
<option value="31">3801 - 3900 سى سى</option>
<option value="32">3901 - 4000 سى سى</option>
<option value="4">اكثر من 4000 سى سى</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                سعة المحرك (سي سي)
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>ناقل الحركة</b></span></center></div>
	            
	                
	                <div class="u-c u-c--12o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_transmission_type" placeholder="ناقل الحركة" class="u-frm__el u-frm__el--sel" name="transmission_type">
<option value="" selected="selected"></option>
<option value="1">يدوي/عادي</option>
<option value="2">اوتوماتيك</option>
<option value="3">ستيبترونيك</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                ناقل الحركة
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>هيكل السيارة</b></span></center></div>
	            
	                
	                <div class="u-c u-c--12o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_body_type" placeholder="هيكل السيارة" class="u-frm__el u-frm__el--sel" name="body_type">
<option value="" selected="selected"></option>
<option value="1">4x4</option>
<option value="2">كوبيه</option>
<option value="3">كروس اوفر</option>
<option value="4">سيارة مكشوفة</option>
<option value="5">هاتشباك</option>
<option value="6">بيك أب/نصف نقل</option>
<option value="7">سيدان</option>
<option value="8">سيارة رياضية</option>
<option value="9">SUV</option>
<option value="10">ستيشن</option>
<option value="11">نقل ثقيل</option>
<option value="12">فان</option>
<option value="13">مينى باص</option>
<option value="14">نوع آخر</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                هيكل السيارة
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>عدد الابواب</b></span></center></div>
	            
	                
	                <div class="u-c u-c--12o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_no_of_doors" placeholder="عدد الابواب" class="u-frm__el u-frm__el--sel" name="no_of_doors">
<option value="" selected="selected"></option>
<option value="1">2 باب</option>
<option value="2">3 أبواب</option>
<option value="3">4 أبواب</option>
<option value="4">5+ أبواب</option>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                عدد الابواب
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        
        	
	            <div><center><span><b>المنطقة</b></span></center></div>
	            
	                
	                <div class="u-c u-c--12o12 d-filters__column">
	                    <label class="u-frm__lbl u-helper--no-padding u-helper--no-margin u-frm__sel-arrow">
	                        
	                        <select id="id_neighbourhood" class="u-frm__el u-frm__el--sel" name="neighbourhood">
<optgroup label="">
<option value="">اختر مدينتك</option>
<option value="">مصر بالكامل</option>
</optgroup>
<optgroup label="أسوان">
<option value="c-56">أسوان بالكامل</option>
<option value="n-7057">ابو الريش</option>
<option value="n-7058">ابو سمبل</option>
<option value="n-7061">ادفو</option>
<option value="n-7062">البصيلية</option>
<option value="n-7064">الرديسية</option>
<option value="n-7069">السباعية</option>
<option value="n-7059">دراو</option>
<option value="n-7075">صحارى</option>
<option value="n-7071">كلابشة</option>
<option value="n-7072">كوم امبو</option>
<option value="n-7060">مدينة أسوان</option>
<option value="n-7074">نصر النوبة</option>
</optgroup>
<optgroup label="أسيوط">
<option value="c-55">أسيوط بالكامل</option>
<option value="n-7047">أبنوب</option>
<option value="n-7048">أبو تيج</option>
<option value="n-7050">البدارى</option>
<option value="n-7052">الغنايم</option>
<option value="n-7051">الفتح</option>
<option value="n-7054">القوصيه</option>
<option value="n-7049">ديروط</option>
<option value="n-7055">ساحل سليم</option>
<option value="n-7056">صدفا</option>
<option value="n-60549">مدينة أسيوط</option>
<option value="n-7053">منفلوط</option>
</optgroup>
<optgroup label="الأقصر">
<option value="c-54">الأقصر بالكامل</option>
<option value="n-7044">أرمنت</option>
<option value="n-7046">إسنا</option>
<option value="n-7045">البياضية</option>
<option value="n-60602">الزينية</option>
<option value="n-60604">الطود</option>
<option value="n-60603">القرنه</option>
<option value="n-60601">مدينة الأقصر</option>
</optgroup>
<optgroup label="الإسكندرية">
<option value="c-6">الإسكندرية بالكامل</option>
<option value="n-60041" selected="selected">أبو قير</option>
<option value="n-60513">الأزاريطة</option>
<option value="n-60013">الإسكندرية</option>
<option value="n-60525">الجمرك</option>
<option value="n-60357">الحضرة</option>
<option value="n-60083">الدخيلة</option>
<option value="n-60049">السيوف</option>
<option value="n-60514">الصالحية </option>
<option value="n-60515">الظاهرية</option>
<option value="n-60516">العامرية</option>
<option value="n-60517">العصافرة</option>
<option value="n-60518">العطارين</option>
<option value="n-60526">العوايد</option>
<option value="n-60541">القباري</option>
<option value="n-60519">اللبان</option>
<option value="n-60044">المعمورة</option>
<option value="n-60356">المكس</option>
<option value="n-60045">المنتزه</option>
<option value="n-60047">المندرة</option>
<option value="n-60520">المنشية</option>
<option value="n-60530">النخيل</option>
<option value="n-60542">النزهة</option>
<option value="n-60512">الورديان</option>
<option value="n-60521">باكوس</option>
<option value="n-60058">بحرى والأنفوشى</option>
<option value="n-60164">برج العرب</option>
<option value="n-60522">بولكلي</option>
<option value="n-60523">جليم</option>
<option value="n-60524">جناكليس</option>
<option value="n-60527">رأس التين</option>
<option value="n-60528">زيزينيا</option>
<option value="n-60529">سابا باشا </option>
<option value="n-60050">سان ستيفانو</option>
<option value="n-60543">سبورتنج</option>
<option value="n-60051">ستانلي</option>
<option value="n-60054">سموحة</option>
<option value="n-60048">سيدي بشر</option>
<option value="n-60052">سيدي جابر</option>
<option value="n-60055">شاطبي</option>
<option value="n-60531">شدس</option>
<option value="n-60043">طوسون</option>
<option value="n-60131">عجمي</option>
<option value="n-60532">فلمنج</option>
<option value="n-60539">فيكتوريا</option>
<option value="n-60533">كامب شيزار</option>
<option value="n-60534">كرموز</option>
<option value="n-60053">كفر عبدو</option>
<option value="n-60544">كليوباترا</option>
<option value="n-60535">كوم الدكة</option>
<option value="n-60536">لوران</option>
<option value="n-60057">محرّم بيك</option>
<option value="n-60056">محطة الرمل</option>
<option value="n-60046">ميامي</option>
<option value="n-60538">مينا البصل</option>
</optgroup>
<optgroup label="الإسماعيلية">
<option value="c-67">الإسماعيلية بالكامل</option>
<option value="n-60509">أبوصوير</option>
<option value="n-60505">التل الكبير</option>
<option value="n-60510">القصاصين</option>
<option value="n-60507">القنطرة شرق</option>
<option value="n-60508">القنطرة غرب</option>
<option value="n-60506">فايد</option>
<option value="n-60595">مدينة الإسماعيلية</option>
</optgroup>
<optgroup label="البحر الأحمر">
<option value="c-70">البحر الأحمر بالكامل</option>
<option value="n-60613">الغردقة</option>
<option value="n-60615">القصير</option>
<option value="n-60614">رأس غارب</option>
<option value="n-60616">سفاجا</option>
<option value="n-60618">شلاتين</option>
<option value="n-60617">مرسى علم</option>
</optgroup>
<optgroup label="البحيرة">
<option value="c-58">البحيرة بالكامل</option>
<option value="n-60415">أبو المطامير</option>
<option value="n-60416">أبو حمص</option>
<option value="n-60423">إدكو</option>
<option value="n-60417">الدلنجات</option>
<option value="n-60419">الرحمانية</option>
<option value="n-60418">المحمودية</option>
<option value="n-60550">النوبارية الجديدة</option>
<option value="n-60424">ايتاي البارود</option>
<option value="n-60420">بدر</option>
<option value="n-60422">حوش عيسى</option>
<option value="n-60421">دمنهور</option>
<option value="n-60427">رشيد</option>
<option value="n-60428">شبراخيت</option>
<option value="n-60425">كفر الدوار</option>
<option value="n-60426">كوم حمادة</option>
<option value="n-60429">وادي النطرون</option>
</optgroup>
<optgroup label="الجيزة">
<option value="c-68">الجيزة بالكامل</option>
<option value="n-60639"> الشيخ زايد</option>
<option value="n-60651">6 أكتوبر</option>
<option value="n-60635">أبو رواش</option>
<option value="n-60637">أوسيم</option>
<option value="n-60631">إمبابة</option>
<option value="n-60661">البدرشين </option>
<option value="n-60634">البراجيل</option>
<option value="n-60657">الحرانية</option>
<option value="n-60658">الحوامدية</option>
<option value="n-60644">الدقى </option>
<option value="n-60665">الرماية</option>
<option value="n-60666">الصحفيين</option>
<option value="n-60663">الصف</option>
<option value="n-60629">العجوزة</option>
<option value="n-60659">العزيزية</option>
<option value="n-60648">العمرانية</option>
<option value="n-60654">القرية الفرعونية</option>
<option value="n-60630">الكيت كات</option>
<option value="n-60638">المنصورية</option>
<option value="n-60655">المنيب</option>
<option value="n-60628">المهندسين</option>
<option value="n-60646">الهرم</option>
<option value="n-60632">الوراق</option>
<option value="n-60633">بشتيل</option>
<option value="n-60642">بولاق الدكرور</option>
<option value="n-60656">ترسا</option>
<option value="n-60653">جزيرة الدهب وكولدير</option>
<option value="n-60664">حدائق الاهرام</option>
<option value="n-60645">حى الجيزة</option>
<option value="n-60662">دهشور</option>
<option value="n-60652">ساقية مكى</option>
<option value="n-60660">سقارة</option>
<option value="n-60650">سوق الأحد</option>
<option value="n-60641">صفط</option>
<option value="n-60647">فيصل</option>
<option value="n-60636">كرداسة</option>
<option value="n-60649">كفر طهرمس</option>
<option value="n-60667">مركز الجيزة</option>
<option value="n-60643">ميت عقبة</option>
<option value="n-60640">ناهيا</option>
</optgroup>
<optgroup label="الدقهلية">
<option value="c-57">الدقهلية بالكامل</option>
<option value="n-60400">أجا</option>
<option value="n-60590">أخطاب</option>
<option value="n-60401">الجمالية</option>
<option value="n-60405">السنبلاوين</option>
<option value="n-60404">المطرية</option>
<option value="n-60403">المنزلة</option>
<option value="n-60402">المنصورة</option>
<option value="n-60407">بلقاس</option>
<option value="n-60406">بني عبيد</option>
<option value="n-60589">تمى الامديد</option>
<option value="n-60591">جمصه</option>
<option value="n-60408">دكرنس</option>
<option value="n-60413">شربين</option>
<option value="n-60414">طلخا</option>
<option value="n-60409">منية النصر</option>
<option value="n-60411">ميت سلسيل</option>
<option value="n-60410">ميت غمر</option>
<option value="n-60412">نبروه</option>
</optgroup>
<optgroup label="السويس">
<option value="c-65">السويس بالكامل</option>
<option value="n-60496">العين السخنة</option>
<option value="n-60495">حى الجناين</option>
<option value="n-60511">حي الأربعين</option>
<option value="n-60599">حي السويس</option>
<option value="n-60494">حي عتاقة</option>
<option value="n-60600">فيصل</option>
</optgroup>
<optgroup label="الشرقية">
<option value="c-60">الشرقية بالكامل</option>
<option value="n-60441">أبو حماد</option>
<option value="n-60442">أبو كبير</option>
<option value="n-60448">أولاد صقر</option>
<option value="n-60444">الإبراهيمية</option>
<option value="n-60443">الحسينية</option>
<option value="n-60449">الزقازيق</option>
<option value="n-60447">الصالحية الجديدة</option>
<option value="n-60455">العاشر من رمضان</option>
<option value="n-60446">القرين</option>
<option value="n-60445">القنايات</option>
<option value="n-60450">بلبيس</option>
<option value="n-60451">ديرب نجم</option>
<option value="n-60452">فاقوس</option>
<option value="n-60454">كفر صقر</option>
<option value="n-60456">مشتول السوق</option>
<option value="n-60457">منيا القمح</option>
<option value="n-60453">ههيا</option>
</optgroup>
<optgroup label="الغربية">
<option value="c-66">الغربية بالكامل</option>
<option value="n-60500">السنطة</option>
<option value="n-60504">المحلة الكبرى</option>
<option value="n-60502">بسيون</option>
<option value="n-60501">زفتى</option>
<option value="n-60498">سمنود</option>
<option value="n-60497">طنطا</option>
<option value="n-60499">قطور</option>
<option value="n-60503">كفر الزيات</option>
</optgroup>
<optgroup label="الفيوم">
<option value="c-64">الفيوم بالكامل</option>
<option value="n-60489">أطسا</option>
<option value="n-60488">إبشواي</option>
<option value="n-60592">الفيوم الجديدة</option>
<option value="n-60491">سنورس</option>
<option value="n-60492">طامية</option>
<option value="n-60490">مدينة الفيوم</option>
<option value="n-60593">يوسف الصديق</option>
</optgroup>
<optgroup label="القاهرة">
<option value="c-5">القاهرة بالكامل</option>
<option value="n-60566">البساتين</option>
<option value="n-60569">التبين</option>
<option value="n-60579">التجمع الخامس</option>
<option value="n-60577">الجمالية</option>
<option value="n-7081">الحلمية</option>
<option value="n-60576">الحلمية الجديدة</option>
<option value="n-60571">الخليفة</option>
<option value="n-60578">الدراسة</option>
<option value="n-60574">الدرب الأحمر</option>
<option value="n-60308">الروضة</option>
<option value="n-60559">الزاوية الحمراء</option>
<option value="n-60305">الزمالك</option>
<option value="n-60563">الزيتون</option>
<option value="n-60558">الساحل</option>
<option value="n-60573">السيدة زينب</option>
<option value="n-60560">الشرابية</option>
<option value="n-60242">العاشر من رمضان </option>
<option value="n-60310">العباسية</option>
<option value="n-60175">العبور</option>
<option value="n-60575">العتبة</option>
<option value="n-60001">القاهرة</option>
<option value="n-60298">القاهرة الجديدة</option>
<option value="n-60296">القطامية</option>
<option value="n-60554">المرج</option>
<option value="n-60555">المطرية</option>
<option value="n-60240">المعادي</option>
<option value="n-60568">المعصره</option>
<option value="n-60293">المقطم</option>
<option value="n-60564">المنيرة الجديدة</option>
<option value="n-60570">الموسكي</option>
<option value="n-60291">النزهة</option>
<option value="n-60553">الوايلي</option>
<option value="n-60572">باب الشعرية</option>
<option value="n-60551">بولاق</option>
<option value="n-60552">جاردن سيتي</option>
<option value="n-60562">حدائق القبة</option>
<option value="n-60239">حلوان</option>
<option value="n-60567">دار السلام</option>
<option value="n-60294">رمسيس و امتداد رمسيس</option>
<option value="n-60561">روض الفرج</option>
<option value="n-60557">شبرا</option>
<option value="n-60241">طرة</option>
<option value="n-7080">عين شمس</option>
<option value="n-60307">قصر النيل</option>
<option value="n-60297">مدينة الرحاب</option>
<option value="n-60556">مدينة السلام</option>
<option value="n-60201">مدينة الشروق</option>
<option value="n-60286">مدينة نصر</option>
<option value="n-60292">مصر الجديدة</option>
<option value="n-60565">مصر القديمة</option>
<option value="n-60010">وسط القاهرة</option>
</optgroup>
<optgroup label="القليوبية">
<option value="c-59">القليوبية بالكامل</option>
<option value="n-60430">الخانكة</option>
<option value="n-60431">الخصوص</option>
<option value="n-60433">العبور</option>
<option value="n-60432">القناطر الخيرية</option>
<option value="n-60434">بنها</option>
<option value="n-60598">بهتيم</option>
<option value="n-60438">شبرا الخيمة</option>
<option value="n-60439">شبين القناطر</option>
<option value="n-60440">طوخ</option>
<option value="n-60437">قليوب</option>
<option value="n-60436">قها</option>
<option value="n-60435">كفر شكر</option>
</optgroup>
<optgroup label="المنوفية">
<option value="c-62">المنوفية بالكامل</option>
<option value="n-60468">أشمون</option>
<option value="n-60469">الباجور</option>
<option value="n-60472">السادات</option>
<option value="n-60476">الشهداء</option>
<option value="n-60470">بركة السبع</option>
<option value="n-60475">تلا</option>
<option value="n-60473">سرس الليان</option>
<option value="n-60477">شبين الكوم</option>
<option value="n-60478">قويسنا</option>
<option value="n-60471">منوف</option>
</optgroup>
<optgroup label="المنيا">
<option value="c-61">المنيا بالكامل</option>
<option value="n-60467">أبو قرقاص</option>
<option value="n-60461">العدوة</option>
<option value="n-60466">المنيا الجديدة</option>
<option value="n-60458">بني مزار</option>
<option value="n-60459">دير مواس</option>
<option value="n-60460">سمالوط</option>
<option value="n-60465">مدينة المنيا</option>
<option value="n-60462">مطاي</option>
<option value="n-60463">مغاغة</option>
<option value="n-60464">ملوي</option>
</optgroup>
<optgroup label="الوادي الجديد">
<option value="c-74">الوادي الجديد بالكامل</option>
<option value="n-60687">الخارجة</option>
<option value="n-60688">الداخلة</option>
<option value="n-60692">الفرافرة</option>
<option value="n-60689">باريس</option>
<option value="n-60691">بلاط</option>
<option value="n-60690">مدينة موط</option>
</optgroup>
<optgroup label="بني سويف">
<option value="c-72">بني سويف بالكامل</option>
<option value="n-60671">إهناسيا</option>
<option value="n-60674">الفشن</option>
<option value="n-60668">الواسطى</option>
<option value="n-60672">ببا</option>
<option value="n-60675">بني سويف الجديدة</option>
<option value="n-60673">سمسطا</option>
<option value="n-60669">مدينة بني سويف</option>
<option value="n-60670">ناصر</option>
</optgroup>
<optgroup label="بورسعيد">
<option value="c-50">بورسعيد بالكامل</option>
<option value="n-7001">حي الجنوب</option>
<option value="n-7002">حي الزهور</option>
<option value="n-7004">حي الشرق</option>
<option value="n-7003">حي الضواحي</option>
<option value="n-7006">حي العرب</option>
<option value="n-7005">حي المناخ</option>
<option value="n-7007">مدينة بورفؤاد</option>
</optgroup>
<optgroup label="جنوب سيناء">
<option value="c-69">جنوب سيناء بالكامل</option>
<option value="n-60627">أبو رديس</option>
<option value="n-60626">أبو زنيمة</option>
<option value="n-60621">دهب</option>
<option value="n-60622">رأس سدر</option>
<option value="n-60624">سانت كاترين</option>
<option value="n-60623">شرم الشيخ</option>
<option value="n-60619">طابا</option>
<option value="n-60625">طور سيناء</option>
<option value="n-60620">نويبع</option>
</optgroup>
<optgroup label="دمياط">
<option value="c-73">دمياط بالكامل</option>
<option value="n-60684">الروضة</option>
<option value="n-60685">الزرقا</option>
<option value="n-60686">السرو</option>
<option value="n-60679">دمياط الجديدة</option>
<option value="n-60677">رأس البر</option>
<option value="n-60678">عزبة البرج</option>
<option value="n-60683">فارسكور</option>
<option value="n-60681">كفر البطيخ</option>
<option value="n-60680">كفر سعد</option>
<option value="n-60676">مدينة دمياط</option>
<option value="n-60682">ميت أبوغالب</option>
</optgroup>
<optgroup label="سوهاج">
<option value="c-77">سوهاج بالكامل</option>
<option value="n-60709">أخميم</option>
<option value="n-60710">البلينا</option>
<option value="n-60719">العسيرات</option>
<option value="n-60717">المراغة</option>
<option value="n-60718">المنشاة</option>
<option value="n-60711">جرجا</option>
<option value="n-60713">جهينة</option>
<option value="n-60712">دارالسلام</option>
<option value="n-60714">ساقلتة</option>
<option value="n-60715">طما</option>
<option value="n-60716">طهطا</option>
<option value="n-60708">مدينة سوهاج</option>
</optgroup>
<optgroup label="شمال سيناء">
<option value="c-75">شمال سيناء بالكامل</option>
<option value="n-60696">الحسنة</option>
<option value="n-60697">الشيخ زويد</option>
<option value="n-60693">العريش</option>
<option value="n-60694">بئر العبد</option>
<option value="n-60698">رفح</option>
<option value="n-60695">نخل</option>
</optgroup>
<optgroup label="قنا">
<option value="c-76">قنا بالكامل</option>
<option value="n-60700">أبو تشت</option>
<option value="n-60703">الوقف</option>
<option value="n-60704">شنا</option>
<option value="n-60701">فرشوط</option>
<option value="n-60705">قفط</option>
<option value="n-60706">قوص</option>
<option value="n-60699">مدينة قنا</option>
<option value="n-60702">نجع حمادي</option>
<option value="n-60707">نقادة</option>
</optgroup>
<optgroup label="كفر الشيخ">
<option value="c-63">كفر الشيخ بالكامل</option>
<option value="n-60484">البرلس</option>
<option value="n-60483">الحامول</option>
<option value="n-60486">الرياض</option>
<option value="n-60480">بيلا</option>
<option value="n-60479">دسوق</option>
<option value="n-60485">سيدى سالم</option>
<option value="n-60487">فوه</option>
<option value="n-60481">قلين</option>
<option value="n-60596">مدينة كفر الشيخ</option>
<option value="n-60482">مطوبس</option>
</optgroup>
<optgroup label="مطروح">
<option value="c-71">مطروح بالكامل</option>
<option value="n-60605">الحمام</option>
<option value="n-60611">السلوم</option>
<option value="n-60607">الضبعة</option>
<option value="n-60606">العلمين</option>
<option value="n-60609">النجيلة</option>
<option value="n-60610">براني</option>
<option value="n-60612">سيوة</option>
<option value="n-60608">مرسى مطروح</option>
</optgroup>
</select>
	                        
	                        
	                            <span class="u-frm__lbl-txt">
	                                المنطقة
	                            </span>
	                        
	                    </label>
	                </div>
	            
            
        

        

        <div class="u-c u-c--12o12 d-filters__column">
            <label class="u-frm__lbl u-frm__lbl--bool">
                <input type="checkbox" class="u-frm__el--bool"  name="language" value="ar">
                <span class="u-frm__lbl-txt--bool u-frm__lbl-txt--bool--check">
                    أظهر فقط الإعلانات المضافة بعربي
                </span>
            </label>
        </div>

        
            <div class="u-c u-c--12o12 d-filters__column">
                <label class="u-frm__lbl u-frm__lbl--bool">
                    <input id="id_photos_count__gte" type="checkbox" class="u-frm__el--bool" value="1" name="photos_count__gte" />
                    <span class="u-frm__lbl-txt--bool u-frm__lbl-txt--bool--check">
                        أظهر الإعلانات التي معها صور
                    </span>
                </label>
            </div>
        

        
        <input type="hidden" name="is_search" value="1"/>
        <div class="u-c u-c--12o12 d-filters__column u-helper--no-padding u-helper--no-margin ">
            <input class="u-btn u-btn--second-action u-btn--no-margin-left" type="submit" value="تصفية البحث" />
        </div>
    </form>


                <div class="u-r">
                    <div class="u-c u-c--6o12 d-filters__column">
                        <button data-action="hide-filters" class="u-helper--no-margin u-btn u-btn--subtle">
                            <span class="u-btn__text">
                                إغلاق
                            </span>
                        </button>
                    </div>
                    <div class="u-c u-c--6o12 d-filters__column">
                        <button data-action="reset-filters" data-action="doReset" type="reset" class="u-btn u-btn--subtle u-helper--no-margin ">
                            <span class="u-btn__text">
                                إعادة ضبط
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-side__gradient d-side__gradient--top"></div>
        <div class="d-side__gradient d-side__gradient--bottom"></div>
    </div>