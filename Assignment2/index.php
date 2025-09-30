<?php
    require_once "config.php";
    require_once "database.php";
    require_once "order.php";

    $db = new Database();
    $pdo = $db->getConnection();
    $orderModel = new Order($pdo);
    $success = false;
    $error = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $customer_name = trim($_POST["customer_name"] ?? "");
        $customer_address = trim($_POST["customer_address"] ?? "");
        $postalcode = trim($_POST["postalcode"] ?? "");
        $phone = trim($_POST["phone"] ?? "");
        $number_pizza = trim($_POST["number_pizza"] ?? "");
        $pizza_size = trim($_POST["pizza_size"] ?? "");
        $toppingsArray = $_POST["toppings"] ?? [];
        $toppings = implode(",", $toppingsArray);
        $sauces = trim($_POST["sauces"] ?? "" );
        $beverages = trim($_POST["beverages"] ?? "");
        $special_instructions = trim($_POST["special_instructions"] ?? "");
        $pickuptime = trim($_POST["pickuptime"] ?? "");
        $deliverymethod = trim($_POST["deliverymethod"] ?? "");

        try{
            $orderModel->create($customer_name, $customer_address, $postalcode, $phone, $number_pizza, $pizza_size, $toppings, $sauces, $beverages, $special_instructions,$pickuptime, $deliverymethod);
            $success = true;
        }catch(Exception $e){
            $error = "Could not save order. " . $e->getMessage();
        }
    }

    include "templates/header.php";
    include "menu.php";
    include "templates/footer.php";
?>
