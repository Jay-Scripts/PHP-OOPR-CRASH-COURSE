<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="flex justify-center items-center h-screen">
    <?php
    class Employee
    {
        // setting the properties
        private $name;
        private $position;
        protected $dailyRate;
        private $daysWork;


        // setting a constructor for Employee Class
        public function __construct($name, $position, $dailyRate, $daysWork)
        {
            $this->name = $name;
            $this->position = $position;
            $this->dailyRate = $dailyRate;
            $this->daysWork = $daysWork;
        }

        // making a methods to retrun a formatted output
        public function getEmployeeInfo($name, $position)
        {
            $this->name = $name;
            $this->position = $position;

            return $message = "Name : $name | Position : $position";
        }

        // method for computing the salary not accessible outside
        protected function computeSalary($dailyRate, $daysWork)
        {
            return  $this->dailyRate * $this->daysWork;
        }
        public function getSalary($dailyRate, $daysWork)
        {
            $totalSalary = $this->computeSalary($dailyRate, $daysWork);
            return "Total Salary : " . $totalSalary;
        }
    }

    $days = 10;
    $rate = 583;
    $employee1 = new Employee("Jay", "Manager", $rate,  $days);
    echo $employee1->getEmployeeInfo("Joyce", "Manager");
    $salary = $employee1->getSalary(20, $days);
    echo "<br>" . $salary . "<br>";

    $employee2 = new Employee("Joyuce", "Chef", $rate, $days);
    echo $employee2->getEmployeeInfo("Jayce", "Barista");
    $salary = $employee1->getSalary(20, $days);
    echo "<br>" . $salary . "<br>";
    ?>



</body>

</html>