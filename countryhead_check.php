<?
if($_SESSION['country_id'] =='')
{

$descountry=mysql_query("select * from country_default order by ID desc limit 0,1 ");
	$res_country=mysql_fetch_array($descountry);
	$country_id=$res_country['country_id'];

}
?>