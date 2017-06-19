<?php
date_default_timezone_set("Asia/Jakarta");

require_once "db.php";

trait common_control{
	
	//connecting to database
	public function db($query, $multi_query = false){
		$db				= new db;
		
		if($multi_query)
			$this->result	= $db->multiquery($query);
		else
		 	$this->result	= $db->query($query);

		$db 			= null;
		return $this->result;
	}

	
}
