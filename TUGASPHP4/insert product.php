<?php
require('koneksi.php');

if (isset($_POST["submit"])) {
    if (tambahproduct($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert product.php';
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
            <h1>INSERT PRODUCT</h1>
        </div>
        <div class="kanan">
            <a href="products.php" id="#product">Product</a>
            <a href="customer.php" id="#customer">Customer</a>
        </div>
    </div>

    <form action="" method="post">
            <ul>
                <li>
                <label for="productCode">Product Code : </label>
                <input type="text" name="productCode" id="productCode">
                </li>
            
            
                <li>
                <label for="productName">Product Name : </label>
                <input type="text" name="productName" id="productName">
                </li>
            
            
                <li>
                    <label for="productLine">Product Line : </label>
                    <select class="formsize" id="productLine" name="productLine">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="ulains">ulains</option>
                        <option value="ulucks and Buses">ulucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
                    </select>
                </li>
            
            
                <li>
                    <label for="productScale">Product Scale : </label>
                    <input type="text" name="productScale" id="productScale">
                </li>
            
            
                <li>
                    <label for="productVendor">Product Vendor : </label>
                    <input type="text" name="productVendor" id="productVendor">
                </li>
            
            
                <li>
                    <label for="productDescription">Product Description : </label>
                <li><input type="text" name="productDescription" id="productDescription"></li>
            
            
                <li>
                    <label for="quantityInStock">Quantity in Stock : </label>
                    <input type="text" name="quantityInStock" id="quantityInStock">
                </li>
            
            
                <li>
                    <label for="buyPrice">Buy Price : </label>
                    <input type="text" name="buyPrice" id="buyPrice">
                </li>
                <li>
                    <label for="MRSP">MRSP : </label>
                    <input type="text" name="MRSP" id="MRSP">
                </li>
            <li>
               <button type="submit" name="submit">Submit</button>
            </li>
        </ul>   
    </form>
    <h6>copyright@2023 - Achmad Rozy</h6>
</body>
</html>