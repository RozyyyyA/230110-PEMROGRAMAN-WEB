<?php
    include('koneksi.php');
    include('Styles.css');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TRANS UPN</title>
    <style>
        table {
            border-collapse: collapse;
            border-radius: 10px;
            width: 100%;  
            min-width: 900px;
            margin: 30px auto;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        thead tr {;
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <h2><b>TABEL TRANS UPN</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Addtransupn.php"><b>Insert</b></a>
        </div>
    </nav>
    <div class="ctr">    
        <table border="3" align="center">
            <thead>
                <tr>
                    <th>id_trans_upn</th>
                    <th>id_kondektur</th>
                    <th>id_bus</th>
                    <th>id_driver</th>
                    <th>jumlah_km</th>
                    <th>tanggal</th>
                    <th>opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM trans_upn";
                $result = mysqli_query(connection(),$query);
                ?>

                <?php while($data = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td>
                            <?php echo $data['id_trans_upn']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_kondektur']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_bus']; ?>
                        </td>
                        <td>
                            <?php echo $data['id_driver']; ?>
                        </td>
                        <td>
                            <?php echo $data['jumlah_km']; ?>
                        </td>
                        <td>
                            <?php echo $data['tanggal']; ?>
                        </td>
                        <td>
                            <a href="<?php echo "Updatetransupn.php?id_trans_upn=".$data['id_trans_upn']; ?>">Update</a>
                            &nbsp;&nbsp;
                            <a href="<?php echo "Deletetransupn.php?id_trans_upn=".$data['id_trans_upn']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <h6>copyright@2023 - Achmad Rozy</h6>
    </div>
</body>
</html>
