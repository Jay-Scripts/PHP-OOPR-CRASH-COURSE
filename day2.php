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
    class Product
    {
        // objects
        private $productName;
        private $price;
        private $stockQuantity;

        // constructor
        public function __construct($productName, $price, $stockQuantity)
        {
            $this->productName = $productName;
            $this->price = $price;
            $this->stockQuantity = $stockQuantity;
        }

        public function GetInfo() // this will be accessible outside the class because the access modifiers for this method was set as public then it can access the private properties because it was encapsulated inside the class
        {
            echo "Product : $this->productName <br>
                   Price : $this->price <br>
                   Quantity : $this->stockQuantity ";
        }


        public function GetProductName() // using this GET to get the value of a private properties of a class
        {
            return $this->productName;
        }
        public function SetProductName($productName) // using this SET to Set a new value of a private properties of a class
        {
            return $this->productName = $productName;
        }
    }
    // instance
    $product1 = new Product("Milo <br>", "12 <br>", "50 <br>");
    $product2 = new Product("Ovaltine <br>", "10 <br>", "100 <br>");
    // print_r($product1);
    // print_r($product2)

    // ACCESSING THE PROPERTIES IT WAS SET AS PUBLIC
    // echo " Product  : $product1->productName <br> 
    //        Price    : $product1->price <br>
    //        Quantity : $product1->stockQuantity";
    // 

    // ACCESING THE PRIVATE PROPERTIES USING METHODS THAT HAS PUBLIC ACCESS MODIFIERS
    // echo $product1->GetInfo();

    // ACCESING THE PRIVATE PROPERTIES USING GET METHODS THAT HAS PUBLIC ACCESS MODIFIERS
    echo $product1->GetProductName(); // by using this we can access the private properties of the class

    echo $product1->SetProductName("Jollibee");; // by using this we can set the private properties of the class
    ?>



</body>

</html>