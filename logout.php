<?php
session_start(); 
		 
		foreach($_SESSION as $k=>$v)
		{
			unset($_SESSION[$k]);
		}
		session_destroy();
		echo '<script type="text/javascript" language="javascript">window.location="index.php";</script>';
		
?>

