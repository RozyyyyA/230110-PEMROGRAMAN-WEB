<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TUGAS INSERT</title>
    <link rel="stylesheet" href="stylesphp4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <h2>CLASSIC MODEL DATABASE</h2>
        <ul>
            <li><a href="customer.php">Customers</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="insert product.php">Insert</a></li>
        </ul>
    </nav>

    <div class="tabel-wrapper">
        <h3>PRODUCTS TABLE</h3>
        <table>
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Quantity In Stock</th>
                    <th>Buy Price</th>
                    <th>MSRP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM products";
                $result = $conn->query($query);
                    
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['productCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['productLine']; ?>
                            </td>
                            <td>
                                <?php echo $row['productScale']; ?>
                            </td>
                            <td>
                                <?php echo $row['productVendor']; ?>
                            </td>
                            <td>
                                <?php echo $row['productDescription']; ?>
                            </td>
                            <td>
                                <?php echo $row['quantityInStock']; ?>
                            </td>
                            <td>
                                <?php echo $row['buyPrice']; ?>
                            </td>
                            <td>
                                <?php echo $row['MSRP']; ?>
                            </td>
                            <?php
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <h6>copyright@2023 - Achmad Rozy</h6>
    </div>
</body>

</html>