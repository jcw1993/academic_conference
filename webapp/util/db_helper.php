<?php 
class DBHelper{
	private $host;
	private $port;
	private $user;
	private $password;
	private $database;

	private $connection;

	function __construct($host, $port, $user, $password, $database) {
		$this->host = $host;
		$this->port = $port;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;

		$this->connect();
	}

	function connect() {
		$this->connection = mysql_connect($this->host, $this->user, $this->password);
		if(!$this->connection) {
			die('could not connect: ' . mysql_error());
		}
		mysql_select_db($this->database, $this->connection);
		mysql_query("set names utf8");
	}

	function select_database($database) {
		$this->database = $database;
		if($this->connection) {
			mysql_select_db($this->database, $this->connection);
		}
	}	

	function close_connection() {
		if($this->connection) {
			mysql_close($this->connection);	
		}
	}

	function execute_query($sql) {
		if($this->connection) {
			return mysql_query($sql, $this->connection);
		}
	}

}

function DBHelperInstance() {
	$mysql_config = parse_ini_file(dirname(dirname(__FILE__))."/config/db_config.ini");
	$host = $mysql_config["host"];
	$port = $mysql_config["port"];
	$user = $mysql_config["user"];
	$password = $mysql_config["password"];
	$database = $mysql_config["database"];
	// $host = "127.0.0.1";
	// $port = 3306;
	// $user = "devuser";
	// $password = "qyff2011";
	// $database = "recc";
	$dbHelper = new DBHelper($host, $port, $user, $password, $database);
	return $dbHelper;
}

?>