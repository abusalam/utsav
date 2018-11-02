<?php
if (file_exists(__DIR__ . '/../config.inc.php')) {
    require_once __DIR__ . '/../config.inc.php';
} else {
    require_once __DIR__ . '/../config.sample.inc.php';
}
class config 
{
 function dblink() 
    {
		//echo "start";
		$this->dbhost=DB_HOST;
		$this->dbuser=DB_USER;
		$this->dbpass=DB_PASS;
		$this->dbname=DB_NAME;
				$link = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
				mysql_select_db($this->dbname) or die('Unable to select database '. mysql_error());
			   // mysql_query("set names 'utf8'");
			   // mysql_query("set character set utf8");
		//echo "last";
 	}
	
}

$obLink= new config();
$obLink->dblink();