<?php
	interface Phone {
		public function makeCall($number);
		public function sendMessage($message);
	}

	class SmartPhone implements Phone
	{
		public $number;
		public $message;
	
		public function makeCall($number)
		{
			echo "The phone number is: $number <br>";
		}
		public function sendMessage($message)
		{
			echo "The message is: $message";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    <?php
    $htcOne=new SmartPhone();
    $htcOne->makeCall("0373004977");
    echo "<br>";
    $htcOne->sendMessage("Hello and fighting!");
    ?>
</body>
</html>