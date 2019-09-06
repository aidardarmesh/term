<?php
	if( copy($_POST["url"], "file.pdf") )
	{
		echo "ok";
		exec("print.exe file.pdf");
	} else {
		echo "no";
	}