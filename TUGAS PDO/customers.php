<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TUGAS PDO</title>
    <link rel="stylesheet" href="stylesphp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <h2>Classic Model Database</h2>
        <ul>
            <li><a href="#">Customers</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
    </nav>
    <div class="container">
        <table class="rwd-table">
            <tbody>
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line1</th>
                    <th>Address Line2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Employee Number</th>
                    <th>Credit Limit</th>
                    <th>Action</th>
                </tr>
                <button class="cssbuttons-io-button" onclick="location.href='insert customer.php'">Insert</button>
                <?php
                    $query = "SELECT * FROM customers";
                    $result = $conn->query($query);
                    $i = 1; ?>
                    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr>
                            <td><?php echo $row["customerNumber"] ?></td>
                            <td><?php echo $row["customerName"] ?></td>
                            <td><?php echo $row["contactLastName"] ?></td>
                            <td><?php echo $row["contactFirstName"] ?></td>
                            <td><?php echo $row["phone"] ?></td>
                            <td><?php echo $row["addressLine1"] ?></td>
                            <td><?php echo $row["addressLine2"] ?></td>
                            <td><?php echo $row["city"] ?></td>
                            <td><?php echo $row["state"] ?></td>
                            <td><?php echo $row["postalCode"] ?></td>
                            <td><?php echo $row["country"] ?></td>
                            <td><?php echo $row["salesRepEmployeeNumber"] ?></td>
                            <td><?php echo $row["creditLimit"] ?></td>
                            <td>
                            <a href="update customer.php?customerNumber=<?php echo $row["customerNumber"]; ?>" class="update-button">Update</a>
                            <a href="delete customer.php?customerNumber=<?php echo $row['customerNumber']; ?>" class="delete-button">Delete</a>
                            </td>
                        </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>