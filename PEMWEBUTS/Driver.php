<?php
    include('koneksi.php');
    include('Styles.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TRANS UPN</title>
</head>
<body> 
<nav>
    <h2><b>TABEL DRIVER</b></h2>
    <div>
        <a href="Bus.php"><b>Bus</b></a>
        <a href="Kondektur.php"><b>Kondektur</b></a>
        <a href="Driver.php"><b>Driver</b></a>
        <a href="Transupn.php"><b>Trans UPN</b></a>
        <a href="Adddriver.php"><b>Insert</b></a>
        <a href="Pendapatandriver.php"><b>Data</b></a>
    </div>
</nav>
    <div class="ctr">    
    <style>
        table {
            border-collapse: collapse;
            border-radius: 10px;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        thead tr {
            background-color: black;
            color: white;
        }
    </style>
 
    <tr class="akhir">
        <td colspan="6">
            <table border="1" align="center" >
                <thead>
                        <tr>
                            <th>id_driver</th>
                            <th>nama</th>
                            <th>no_sim</th>
                            <th>alamat</th>
                            <th>opsi</th>
                        </tr>
                </thead>
                <tbody>
                        <?php 
                            $query = "SELECT * FROM driver";
                            $result = mysqli_query(connection(),$query);
                        ?>

                        <?php 
                            while($data = mysqli_fetch_array($result)): 
                        ?>
                        <tr>
                            <td>
                                <?php echo $data['id_driver']; ?>
                            </td>
                            <td>
                                <?php echo $data['nama']; ?>
                            </td>
                            <td>
                                <?php echo $data['no_sim']; ?>
                                </td>
                                <td>
                                <?php echo $data['alamat']; ?>
                                </td>
                                <td>
                                    <a href="<?php echo "Updatedriver.php?id_driver=".$data['id_driver']; ?>" > Update</a> &nbsp;&nbsp;
                                    <a href="<?php echo "Deletedriver.php?id_driver=".$data['id_driver']; ?>"> Delete</a>
                                </td>
                                </tr>            
                        <?php endwhile ?>
                </tbody>                
        </td>
    </tr>
    </table>
    <h6>copyright@2023 - Achmad Rozy</h6>
    </div>       
</body>
</html> 