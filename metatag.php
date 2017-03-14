 <?
 include_once("admin/connection.php");
 ?>
 
<meta name="description" content="

        <?php
	    $dedc=mysql_query('select * from site_sitting order by ID desc  ');
		    while($result=mysql_fetch_array($dedc))
		{
	    ?>
		<?=$result['descrip']?>		        
		<?php
	    }
	    ?>
		
" />

<meta name="keywords" content="

        <?php
	    $dedc=mysql_query('select * from site_sitting order by ID desc  ');
		    while($result=mysql_fetch_array($dedc))
		{
	    ?>
		<?=$result['meta']?>		        
		<?php
	    }
	    ?>

" />