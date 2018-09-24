<?php
// class for database connection
class DbService
{
	public $mysql_db_hostname = "";
	public $mysql_db_user = "";
	public $mysql_db_password = "";
	public $mysql_db_database = "";
	public $db = '';
	function __construct($host, $uesr, $password, $dbname)
	 {
		$this->mysql_db_hostname = $host;
		$this->mysql_db_user = $uesr;
		$this->mysql_db_password = $password;
		$this->mysql_db_database = $dbname;
		try {
			
			$this->db = new PDO ( "mysql:host={$this->mysql_db_hostname};dbname={$this->mysql_db_database}", $this->mysql_db_user, $this->mysql_db_password );
		} catch ( Exception $e ) {
			exit ( "Error connecting to database: " . $e->getMessage () );
		}
	}
}