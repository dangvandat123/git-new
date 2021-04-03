<?php
	abstract class Database {
		public $connection;
		public $connectStatus;

		abstract public function setConnection($dbName);
		abstract public function getConnection();
	}

	class ConnectDB extends Database
	{
		function __construct($connection, $connectStatus)
		{
			$this->connection = $connection;
			$this->connectStatus = $connectStatus;
		}

		public function setConnection($dbName)
		{
			$this->connectStatus = true;
		}
		public function getConnection()
		{
			if ($this->connectStatus == true) {
				echo "{$this->connection} success!!";
			} else {
				echo "{$this->connection} failure!!";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
</head>
<body>
    <?php
    $db=new ConnectDB("findJobs",true);
    $db->getConnection();
    echo "<br>";
    $db1=new ConnectDB("findJobs",false);
    $db1->getConnection();
    ?>
</body>
</html>