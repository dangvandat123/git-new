<?php
class bank{
    private $accNo;
    public $name;
    public $balance=0;
    public function __construct($name){
        $this->name=$name;
    }
    public function depositAmount($amount){
        $this->balance += $amount;
    }
    public function deductAmount($amount){
        if($this->balance <= 0){
            return "No balance in account";
        }elseif($this->balance <$amount){
            return "Requested amount is greater than balance";
        }else{
            $this->balance -= $amount;
        }

    }
    public function checkBalance(){
        return $this->name." have ". $this->balance;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php
    $bank= new Bank("lang");
    echo $bank->deductAmount(100) ."<br>";
    echo $bank->depositAmount(2000)."<br>";
    echo $bank->deductAmount(100)."<br>";
    echo $bank->checkBalance();
    ?>
</body>
</html>