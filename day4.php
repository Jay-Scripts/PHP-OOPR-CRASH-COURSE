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

    class POSProduct
    {
        // this will pe the properties of this class by default they we're null i just initialized them no value yet
        private $productName;
        private $price;
        protected $isAvailable;
        private $orderedBy;

        // this will be the constructor that accepts the arguements once the class has been envoked or instanciated
        public function __construct($productName, $price, $isAvailable = true, $orderedBy = "")
        {
            $this->productName = $productName;
            $this->price = $price;
            $this->isAvailable = $isAvailable;
            $this->orderedBy = $orderedBy;
        }

        public function getProductInfo()
        {
            // getting the values from the arguements that was sent by the user or client



            return  $productInfo = "Product Name : $this->productName | Product Price : $this->price <br>
                            Product Status :  $this->isAvailable <br>
                            Ordered By : $this->orderedBy<br>
                            ";
        }

        public function placeOrder($name)
        {
            if ($this->isAvailable == true) {
                $this->isAvailable = false;
                return "Ordered successfully by $name";
            } else {
                return "Sorry, already ordered by X";
            }
        }

        public function markAsAvailable()
        {

            $this->isAvailable = true; // sets it to true
            $this->orderedBy = ""; // clears the ordered by

        }

        public function getOrderStatus()
        {
            if ($this->isAvailable) {
                return $this->isAvailable = "Available";
            } else {
                $this->isAvailable = "Not Available";
                return "Ordered by : $this->orderedBy";
            }
        }
        // public function getOrderStatus()
        // {
        //     return $this->isAvailable
        //         ? "Available"
        //         : "Ordered by: $this->orderedBy";
        // }
    }
    $name = "Joyce";
    $order = new POSProduct("Cheesecake Milk Tea", 120, "", $name);
    $order->placeOrder($name); // pass the name value into the arguements
    echo   $order->getOrderStatus(); // instead of bool redeclare as message Notx Availaable
    echo $order->getProductInfo() . "<br>";

    $order2 = new POSProduct("Wintermelon", 120, false);
    $order2->markAsAvailable(); // sets it as avalable
    echo  $order2->getOrderStatus(); // instead of bool redeclare as message Availaable
    echo $order2->getProductInfo();
    ?>



</body>

</html>