<?php
class db{
	private $dbhost;
	private $dbuser;
	private $dbpass;
	private $dbname;
	private $conn;
	
	function __construct(){
		$this->dbhost	= "localhost";
		$this->dbuser	= "root";
		$this->dbpass	= "";
		$this->dbname 	= "tk_link";
		$this->conn		= mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		
		if(!$this->conn){
			die("Koneksi dengan database gagal");
		}
		return true;
	}
	
	protected function query($query){
		$result	= mysqli_query($this->conn, $query);
		return $result;
	}

	protected function multiquery($query){
		$result	= mysqli_multi_query($this->conn, $query);
		return $result;
	}

	protected function escapestring($query){
		$result	= mysqli_escape_string($this->conn, $query);
		return $result;
	}
}
