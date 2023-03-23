<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tugasphp';
    $conn = mysqli_connect($host, $user, $pass);

    if(! $conn){
        die('koneksi gagal: '. mysqli_error($conn));
    }

    mysqli_select_db($conn,$db);

    return $conn;
    
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
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
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
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
