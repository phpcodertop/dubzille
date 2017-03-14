<?

		$desemail=mysql_query("select * from  site_sitting  order by ID desc  ");
	    $resemail=mysql_fetch_array($desemail);
	    $email=$resemail['email'];  
		$sitename=$resemail['sitename']; 
		$link=$resemail['link']; 
		$other_email=$resemail['other_email'];	
		
		$login_link= $link .'/customer_login.php' ;
        $add_ads_link= $link .'/add_ads.php' ;	
        $rouls_link= $link .'/rouls.php' ;			

			$ads_owner=$_POST[txtowner] ;
            $ads_status=$_POST[ddlstatus] ;
			$ads_address=$_POST[txtaddress] ;
			$ads_descrip=$_POST[txtdescrip] ;
			$ads_email=$_POST[txtemail] ;
			
        if($ads_status == "موافقة")
		{
		
	   $email_to = $ads_email ;
       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $headers .= 'From: '.$sitename.' <'.$other_email.'>' . "\r\n";		
       $subject= ' تم الموافقة على نشر اعلانك -   '.$sitename.' ';	   
	   $message ='
	   
<html>
<head>
  <title>'.$sitename.'</title>
  <style>
  table
{
border:1px solid #666666;
width: 700px;
}
  </style>
</head>
<body>
  <center>
  <table align="center" dir="rtl">
  <tr><td><font size="5" color="#b80007">'.$sitename.' &nbsp;&nbsp; (تم الموافقة على نشر اعلانك) </font></td></tr>
  <tr><td><br/><br/></td></tr>
  <tr><td> مرحبا  '.$ads_owner.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <b >
  نود ان نفيدك انه قد تم نشر اعلانك على
  '.$sitename.'
  ,
  ونتمنى ان نعمل سويا لتحقيق الفائدة من نشر اعلانك 
  </b></td></tr>
  <tr><td><br/></td></tr>
  <tr><td>تفاصيل اعلانك</td></tr>
  <tr><td><br/></td></tr>
  <tr><td>  '.$ads_address.'  </td></tr>
  <tr><td>  '.$ads_descrip.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td>
  هل لديك شى اخر تود بيعه , 
  الاف الفرص تراقب
  '.$sitename.'
  كل لحظة !
  فى انتظار اعلانك
  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$add_ads_link.'"> اضف اعلان مجانا </a> </td></tr>
  

  <tr><td><br/><br/></td></tr>
  <tr><td><font size="4">لمزيد من المعلومات زوروا موقعنا </font> <a href="'.$link.'"> '.$sitename.' </a></td></tr>
  
  </table>
  </center>
</body>
</html>
       ' ;
	   
	   

      
mail($email_to, $subject, $message, $headers);
	   
	   
		}
		else if ($ads_status == "رفض")
		{
		
	   $email_to = $ads_email ;
       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $headers .= 'From: '.$sitename.' <'.$other_email.'>' . "\r\n";		
       $subject= ' تم رفض نشر اعلانك -   '.$sitename.' ';	   
	   $message ='
	   
<html>
<head>
  <title>'.$sitename.'</title>
  <style>
  table
{
border:1px solid #666666;
width: 700px;
}
  </style>
</head>
<body>
  <center>
  <table align="center" dir="rtl">
  <tr><td><font size="5" color="#07b4da">'.$sitename.' &nbsp;&nbsp; (تم رفض نشر اعلانك) </font></td></tr>
  <tr><td><br/><br/></td></tr>
  <tr><td> مرحبا  '.$ads_owner.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <b >
  نود ان نفيدك انه قد تم رفض نشر اعلانك على
  '.$sitename.'
  ,
  لانه يخالف شروط واحكام الموقع
  </b></td></tr>  
  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$rouls_link.'"> الشروك والاحكام </a> </td></tr> 
  <tr><td><br/></td></tr>
  <tr><td>تفاصيل اعلانك</td></tr>
  <tr><td><br/></td></tr>
  <tr><td>  '.$ads_address.'  </td></tr>
  <tr><td>  '.$ads_descrip.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td>
  هل لديك شى اخر تود بيعه , 
  الاف الفرص تراقب
  '.$sitename.'
  كل لحظة !
  فى انتظار اعلانك
  </td></tr>  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$add_ads_link.'"> اضف اعلان مجانا </a> </td></tr>
  

  <tr><td><br/><br/></td></tr>
  <tr><td><font size="4">لمزيد من المعلومات زوروا موقعنا </font> <a href="'.$link.'"> '.$sitename.' </a></td></tr>
  
  </table>
  </center>
</body>
</html>
       ' ;
	   
	   
mail($email_to, $subject, $message, $headers);	
		
		
		}
		else if ($ads_status == "تعليق")
		{
		
	   $email_to = $ads_email ;
       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $headers .= 'From: '.$sitename.' <'.$other_email.'>' . "\r\n";		
       $subject= ' تم تعليق نشر اعلانك -   '.$sitename.' ';	   
	   $message ='
	   
<html>
<head>
  <title>'.$sitename.'</title>
  <style>
  table
{
border:1px solid #666666;
width: 700px;
}
  </style>
</head>
<body>
  <center>
  <table align="center" dir="rtl">
  <tr><td><font size="5" color="#07b4da">'.$sitename.' &nbsp;&nbsp; (تم تعليق نشر اعلانك) </font></td></tr>
  <tr><td><br/><br/></td></tr>
  <tr><td> مرحبا  '.$ads_owner.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <b >
  نود ان نفيدك انه قد تم تم تعليق نشر اعلانك على
  '.$sitename.'
  ,
  لانه يخالف شروط واحكام الموقع
  </b></td></tr>  
  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$rouls_link.'"> الشروك والاحكام </a> </td></tr> 
  <tr><td><br/></td></tr>
  <tr><td>تفاصيل اعلانك</td></tr>
  <tr><td><br/></td></tr>
  <tr><td>  '.$ads_address.'  </td></tr>
  <tr><td>  '.$ads_descrip.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td>
  هل لديك شى اخر تود بيعه , 
  الاف الفرص تراقب
  '.$sitename.'
  كل لحظة !
  فى انتظار اعلانك
  </td></tr>  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$add_ads_link.'"> اضف اعلان مجانا </a> </td></tr>
  

  <tr><td><br/><br/></td></tr>
  <tr><td><font size="4">لمزيد من المعلومات زوروا موقعنا </font> <a href="'.$link.'"> '.$sitename.' </a></td></tr>
  
  </table>
  </center>
</body>
</html>
       ' ;
	   
	   
mail($email_to, $subject, $message, $headers);			
		
		}
		
		
		else if ($ads_status == "تثبيت")
		{

	   $email_to = $ads_email ;
       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $headers .= 'From: '.$sitename.' <'.$other_email.'>' . "\r\n";		
       $subject= ' تم تثبيت اعلانك -   '.$sitename.' ';	   
	   $message ='
	   
<html>
<head>
  <title>'.$sitename.'</title>
  <style>
  table
{
border:1px solid #666666;
width: 700px;
}
  </style>
</head>
<body>
  <center>
  <table align="center" dir="rtl">
  <tr><td><font size="5" color="#07b4da">'.$sitename.' &nbsp;&nbsp; (تم تثبيت اعلانك) </font></td></tr>
  <tr><td><br/><br/></td></tr>
  <tr><td> مرحبا  '.$ads_owner.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <b >
  نود ان نفيدك انه قد تم تثبيت اعلانك على
  '.$sitename.'
  ,
  ونتمنى ان نعمل سويا لتحقيق الفائدة من نشر اعلانك 
  </b></td></tr>
  <tr><td><br/></td></tr>
  <tr><td>تفاصيل اعلانك</td></tr>
  <tr><td><br/></td></tr>
  <tr><td>  '.$ads_address.'  </td></tr>
  <tr><td>  '.$ads_descrip.'  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td>
  هل لديك شى اخر تود بيعه , 
  الاف الفرص تراقب
  '.$sitename.'
  كل لحظة !
  فى انتظار اعلانك
  </td></tr>
  <tr><td><br/></td></tr>
  <tr><td> <a href="'.$add_ads_link.'"> اضف اعلان مجانا </a> </td></tr>
  

  <tr><td><br/><br/></td></tr>
  <tr><td><font size="4">لمزيد من المعلومات زوروا موقعنا </font> <a href="'.$link.'"> '.$sitename.' </a></td></tr>
  
  </table>
  </center>
</body>
</html>
       ' ;
	   
	   

      
mail($email_to, $subject, $message, $headers);
	   
	   
		
		}
		
		else
		{
		}
		
?>		