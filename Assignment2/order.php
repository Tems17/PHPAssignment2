<?php
    class Order{
        private $pdo;
        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function create($customer_name, $customer_address, $postalcode, $phone, $number_pizza, $pizza_size, $toppings, $sauces, $beverages, $special_instructions, $pickuptime, $deliverymethod){
        $sql = "INSERT INTO orders (customer_name, customer_address, postalcode, phone, number_pizza, pizza_size, toppings, sauces, beverages, special_instructions, pickuptime, deliverymethod) VALUES (:customer_name, :customer_address, :postalcode, :phone, :number_pizza, :pizza_size, :toppings, :sauces,:beverages, :special_instructions, :pickuptime, :deliverymethod)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":customer_name" => $customer_name,
            ":customer_address" => $customer_address, 
            ":postalcode" => $postalcode,
            ":phone" => $phone,
            ":number_pizza" => $number_pizza,
            ":pizza_size" => $pizza_size,
            ":toppings" => $toppings,
            ":sauces" => $sauces,
            ":beverages" => $beverages,
            ":special_instructions" => $special_instructions,
            ":pickuptime" => $pickuptime,
            ":deliverymethod" => $deliverymethod
        ]);
    }
    }
?>