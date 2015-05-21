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
		$this->connection = mysql_connect("127.0.0.1", "devuser", "qyff2011");
		// $this->connection = mysql_connect($this->host, $this->user, $this->password);
		if(!$this->connection) {
			die('could not connect: ' . mysql_error());
		}
		mysql_select_db($this->database, $this->connection);
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

function test() {
	echo "start test\n";
	$dbHelper = new DBHelper("127.0.0.1", 3306, "devuser", "qyff2011", "dev_test");
	$result = $dbHelper->execute_query("select * from user");

	while($row = mysql_fetch_array($result)) {
	  	echo $row['id'] . " " . $row['name'];
		echo "<br />";
	}

	echo "end test\n";

}

test();

?>