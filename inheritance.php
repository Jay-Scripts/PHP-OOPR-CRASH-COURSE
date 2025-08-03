<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="flex flex-col justify-center items-center h-screen">
    <?php
    class Product
    {
        private $name;
        private $price;
        private $category;

        public function __construct($name, $price, $category)
        {
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
        }

        public function productDetails()
        {
            return "
                <div class='bg-white shadow-lg rounded-lg p-6 mb-4 max-w-xs'>
                    <h2 class='text-xl font-bold mb-2'>$this->name</h2>
                    <p class='text-gray-700 mb-1'><span class='font-semibold'>Price:</span> ₱$this->price</p>
                    <p class='text-gray-600'><span class='font-semibold'>Category:</span> $this->category</p>
                </div>
            ";
        }
    }

    class Milktea extends Product {}
    class Frappe extends Product {}
    class YakultDrink extends Product {}

    class User
    {
        private $name;
        private $role;

        public function __construct($name, $role)
        {
            $this->name = $name;
            $this->role = $role;
        }
        public function staffDetails()
        {
            return "
                <div class='bg-blue-100 shadow-md rounded-lg p-4 mb-4 max-w-xs'>
                    <h3 class='text-lg font-semibold mb-1'>Staff Details</h3>
                    <p class='text-gray-800'><span class='font-medium'>Name:</span> $this->name</p>
                    <p class='text-gray-700'><span class='font-medium'>Role:</span> $this->role</p>
                </div>
            ";
        }
    }
    class Manager extends User
    {
        public function makeReport()
        {
            return "Hi I will make your work here feels like hell! <br>";
        }
    }
    class Cashier extends User
    {

        public function takeOrder() {}
    }

    // 2 sub class that inherit the parent Class properties and methods
    $drink1 = new Frappe("Mango", 100, "Regular");
    echo  $drink1->productDetails();

    $drink2 = new YakultDrink("Yakult", 150, "Promo");
    echo $drink2->productDetails();


    $staff1 = new Manager("Joyce", "Head Recuiter");
    echo $staff1->staffDetails();
    echo $staff1->makeReport();

    $staff2 = new Cashier("Jay-r", "Service Crew");
    echo $staff2->staffDetails();
    ?>




</body>

</html>