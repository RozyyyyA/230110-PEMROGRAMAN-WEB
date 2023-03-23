<?php
include('koneksi.php');

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert customer.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert product.php';
            </script> 
    ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>TUGAS INSERT</title>
    <link rel="stylesheet" href="stylesphp4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="Navbar">
        <div class="kiri">
            <h1>INSERT CUSTOMER</h1>
        </div>
        <div class="kanan">
            <a href="product.php" id="#product">Product</a>
            <a href="customer.php" id="#customer">Customers</a>
        </div>
    </div>

    <form action="" method="post">
        <ul>
            <li>
                <label for="customerNumber">Customer Number : </label>
                <input type="text" name="customerNumber" id="customerNumber">
            </li>
            <li>
                <label for="customerName">Customer Name : </label>
                <input type="text" name="customerName" id="customerName">
            </li>
            <li>
                <label for="contactLastName">Customer Last Name : </label>
                <input type="text" name="contactLastName" id="contactLastName">
            </li>
            <li>
                <label for="contactFirstName">Customer First Name : </label>
                <input type="text" name="contactFirstName" id="contactFirstName">
            </li>
            <li>
                <label for="phone">Phone : </label>
                <input type="text" name="phone" id="phone">
            </li>
            <li>
                <label for="addressLine1">Address Line 1 : </label>
                <input type="text" name="addressLine1" id="addressLine1">
            </li>
            <li>
                <label for="addressLine2">Address Line 2 : </label>
                <input type="text" name="addressLine2" id="addressLine2">
            </li>
            <li>
                <label for="city">City : </label>
                <input type="text" name="city" id="city">
            </li>
            <li>
                <label for="state">State : </label>
                <input type="text" name="state" id="state">
            </li>
            <li>
                <label for="postalCode">Postal Code : </label>
                <input type="text" name="postalCode" id="postalCode">
            </li>
            <li>
                <label for="country">Country : </label>
                <input type="text" name="country" id="country">
            </li>
            <li>
                <label for="salesRepEmployeeNumber">Sales Rep Employee Number : </label>
                <select id="salesRepEmployeeNumber" name="salesRepEmployeeNumber">
                    <option value="1002">1002 - Murphy</option>
                    <option value="1056">1056 - Patterson</option>
                    <option value="1076">1076 - Firrelli</option>
                    <option value="1088">1088 - Patterson</option>
                    <option value="1102">1102 - Bondur</option>
                    <option value="1143">1143 - Bow</option>
                    <option value="1165">1165 - Jennings</option>
                    <option value="1166">1166 - Thompson</option>
                    <option value="1188">1188 - Firrelli</option>
                    <option value="1286">1286 - Tseng</option>
                    <option value="1323">1323 - Vanauf</option>
                    <option value="1337">1337 - Bondur</option>
                    <option value="1370">1370 - Hernandez</option>
                    <option value="1401">1401 - Castillo</option>
                    <option value="1501">1501 - Bott</option>
                    <option value="1504">1504 - Jones</option>
                    <option value="1611">1611 - Fixter</option>
                    <option value="1612">1612 - Marsh</option>
                    <option value="1619">1619 - King</option>
                    <option value="1621">1621 - Nishi</option>
                    <option value="1625">1625 - Kato</option>
                    <option value="1702">1702 - Gerard</option>
                </select>
            </li>
            <li>
                <label for="creditLimit">Credit Limit : </label>
                <input type="text" name="creditLimit" id="creditLimit">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
    <h6>copyright@2023 - Achmad Rozy</h6>
</body>
</html>