<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tugasphp';

    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $conn->query("SET FOREIGN_KEY_CHECKS=0;");
    

    //input customer
    function tambah($data)
    {
    global $conn;

    $customerNumber =  $data["customerNumber"];
    $customerName =  $data["customerName"];
    $contactLastName =  $data["contactLastName"];
    $contactFirstName =  $data["contactFirstName"];
    $phone =  $data["phone"];
    $addressLine1 =  $data["addressLine1"];
    $addressLine2 =  $data["addressLine2"];
    $city =  $data["city"];
    $state =  $data["state"];
    $postalCode =  $data["postalCode"];
    $country =  $data["country"];
    $salesRepEmployeeNumber =  $data["salesRepEmployeeNumber"];
    $creditLimit =  $data["creditLimit"];

    $query = "INSERT INTO  customers VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit')";
    $result = $conn->query($query);

    return $result;
    }

//input product
    function tambahproduct($data)
    {
    global $conn;

    $productCode =  $data["productCode"];
    $productName =  $data["productName"];
    $productLine =  $data["productLine"];
    $productScale =  $data["productScale"];
    $productVendor =  $data["productVendor"];
    $productDescription =  $data["productDescription"];
    $quantityInStock =  $data["quantityInStock"];
    $buyPrice =  $data["buyPrice"];
    $MRSP =  $data["MRSP"];

    $query = "INSERT INTO  products VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MRSP')";
    $result = $conn->query($query);

    return $result;
    } 