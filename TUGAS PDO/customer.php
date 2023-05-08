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
            <li><a href="#">Customers</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="insert customer.php">Insert</a></li>
        </ul>
    </nav>

    <div class="tabel-wrapper">
        <h3>CUSTOMERS TABLE</h3>
        <table>
            <thead>
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Employee Number</th>
                    <th>Credit Limit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = $conn->query($query);

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['customerNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['postalCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>
                            <td>
                                <?php echo $row['salesRepEmployeeNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['creditLimit']; ?>
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