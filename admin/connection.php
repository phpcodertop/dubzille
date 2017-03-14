<?php

    if(!mysql_connect("localhost","greenscr_dubizzl","dubizzl123")){
		echo mysql_error();
		exit; 
	}

	mysql_select_db('greenscr_dubizzle');

?>