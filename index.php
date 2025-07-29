<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="flex justify-center items-center h-screen">
    <div class="bg-green-500 text-white p-4 rounded">
        <?php

        // Gumawa ng klase para sa mga estudyante
        class Students
        {
            // Private na access modifier, ibig sabihin dito lang sa loob ng class pwedeng ma-access
            private $name;
            private $studentID;
            private $isPresent = false;

            // Constructor, nag-iinitialize ng object properties
            public function __construct($initialName = "", $initialStudentID = "", $initialIsPresent = false)
            {
                // I-set ang mga property base sa mga initial value na ipapasa
                $this->name = $initialName;
                $this->studentID = $initialStudentID;
                $this->isPresent = $initialIsPresent;
            }

            // Setter para sa pangalan
            public function setName($initialName)
            {
                // I-assign ang pangalan sa property
                $this->name = $initialName;
                return $this->name;
            }

            // Getter para sa pangalan
            public function getName()
            {
                // Ibalik ang pangalan ng estudyante
                return $this->name;
            }

            // Setter para sa student ID
            public function setStudentID($initialStudentID)
            {
                // I-assign ang student ID sa property
                $this->studentID = $initialStudentID;
                return $this->studentID;
            }

            // Getter para sa student ID
            public function getStudentID()
            {
                // Ibalik ang student ID ng estudyante
                return $this->studentID;
            }

            // Method para markahan na present ang estudyante
            public function markPresent()
            {
                // I-set ang status na present
                $this->isPresent = true;
            }

            // Method para markahan na absent ang estudyante
            public function markAbsent()
            {
                // I-set ang status na absent
                $this->isPresent = false;
            }

            // Setter para sa status ng attendance
            public function setStatus($initialIsPresent)
            {
                // I-set ang status ng attendance (present/absent)
                $this->isPresent = $initialIsPresent;
                return $this->isPresent;
            }

            // Getter para sa status ng attendance
            public function getStatus()
            {
                // Ibalik ang status kung present o absent
                return $this->isPresent ? "Present" : "Absent";
            }

            // Method para kunin ang impormasyon ng estudyante
            public function getStudentInfo()
            {
                // Ibalik ang lahat ng impormasyon ng estudyante sa string format
                return "Name: " . $this->name . "<br>" .
                    "Student ID: " . $this->studentID . "<br>" .
                    "Status: " . $this->getStatus();
            }
        }

        // Gumawa ng object ng Students
        $students = new Students(); // Gumawa ng bagong estudyante
        $students->setStudentID("21"); // I-set ang student ID
        $students->setName("Jay"); // I-set ang pangalan
        $students->setStatus(true); // I-set ang status na present

        // I-display ang impormasyon ng estudyante
        echo "<h2>Student Information:</h2>";
        echo $students->getStudentInfo();
        ?>
    </div>
</body>

</html>