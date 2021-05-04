<?php
error_reporting(1);
session_start();
class Connect {
	private $connect;
	private $host = "localhost";
	private $user = "root";
	private $passwd = "";
	private $db ="real_estate";
	
	
	public function __construct(){
		$this->connect = new mysqli($this->host,$this->user,$this->passwd,$this->db);
		$this->connect->set_charset("utf8mb4");
		if($this->connect->connect_errno){
			die('connection failed');
		}else{
			//die( 'success' );
		}
	}
	
	public function connection(){
		return $this->connect;
	}
	
	
	
public function local_connect(){
	$con =  mysqli_connect($this->host,$this->user,$this->passwd,$this->db);
	mysqli_set_charset($con,"utf8mb4");
	return $con;
}
	
}

//return $query->error;
?>