<?php
class Employee {
    public $id;
    public $name;
    public $workingHoursPerDay  = "8";
    public $hourlyRate  = "15";
    public $totalLeaveTaken;
    public $totalDays;

    public function __construct($name,$totalLeaveTaken, $totalDays)
    {
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
        $this->totalDays = $totalDays;
    }
    public function getSalaryAmount()
    {
        $salary = ($this->totalDays - $this->totalLeaveTaken) * $this->workingHoursPerDay * $this->hourlyRate;

        return $this->name." has worked for ".($this->totalDays - $this->totalLeaveTaken)." days and taken ".$this->totalLeaveTaken." leaves, ".$this->name." salary is ".$salary;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php
    $employee = new Employee('lang','10','30');
    echo $employee->getSalaryAmount();
    ?>
</body>
</html>