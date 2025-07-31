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
    }
    // instance
    $product1 = new Product("Milo <br>", "12 <br>", "50 <br>");
    $product2 = new Product("Ovaltine <br>", "10 <br>", "100 <br>");
    print_r($product1);
    print_r($product2)
    ?>

</body>

</html>