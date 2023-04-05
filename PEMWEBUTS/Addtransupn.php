<?php
include ('koneksi.php');
include ('Styles.css');

$status = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    // Check if the foreign key values exist in their respective tables
    $konduktor_result = mysqli_query(connection(), "SELECT * FROM kondektur WHERE id_kondektur='$id_kondektur'");
    $bus_result = mysqli_query(connection(), "SELECT * FROM bus WHERE id_bus='$id_bus'");
    $driver_result = mysqli_query(connection(), "SELECT * FROM driver WHERE id_driver='$id_driver'");

    if (mysqli_num_rows($konduktor_result) > 0 && mysqli_num_rows($bus_result) > 0 && mysqli_num_rows($driver_result) > 0) {
        $query = "INSERT INTO trans_upn (id_trans_upn, id_kondektur, id_bus, id_driver, jumlah_km, tanggal)
                  VALUES ('$id_trans_upn', '$id_kondektur', '$id_bus', '$id_driver', '$jumlah_km', '$tanggal')";
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $status = 'ok';
        } else {
            $status = 'err';
        }
    } else {
        $status = 'fk_err';
    }
    header('Location: trans_upn.php?status=' . $status);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ADD TRANS UPN</title>
    <style>
    /* Salin CSS Form di sini */
label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

input[type="text"], select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #e8c4c4;
  color: white;
  font-weight: bold;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #f2e5e5;
}

  </style>
</head>
<body>
<nav>
        <h2><b>INSERT TRANS UPN</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Addtransupn.php"><b>Insert</b></a>
        </div>
    </nav>
    <div class="ctr">      
    <tr class="akhir">
        <td colspan="3"><main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
    <div class="content">
    <form action="Addtransupn.php" method="POST">

        <label>Id Trans UPN:</label>
        <input type="text" placeholder="id_trans_upn" name="id_trans_upn" required="required">

        <label>Id Kondektur:</label>
        <select name="id_kondektur">
            <?php
                 $query_kondektur = "SELECT * FROM kondektur";
                 $result_kondektur = mysqli_query(connection(), $query_kondektur);
                 while($data_kondektur = mysqli_fetch_array($result_kondektur)) {
                     echo "<option value='".$data_kondektur['id_kondektur']."'>".$data_kondektur['nama']."</option>";
                 }
             ?>
        </select>

        <label>Id Bus:</label>
        <select name="id_bus">
            <?php
                 $query_bus = "SELECT * FROM bus";
                 $result_bus = mysqli_query(connection(), $query_bus);
                 while($data_bus = mysqli_fetch_array($result_bus)) {
                     echo "<option value='".$data_bus['id_bus']."'>".$data_bus['plat']."</option>";
                 }
             ?>
        </select>

        <label>Id driver:</label>
        <select name="id_driver">
            <?php
                 $query_driver = "SELECT * FROM driver";
                 $result_driver = mysqli_query(connection(), $query_driver);
                 while($data_driver = mysqli_fetch_array($result_driver)) {
                     echo "<option value='".$data_driver['id_driver']."'>".$data_driver['nama']."</option>";
                 }
             ?>
        </select>

        <label>Jumlah Km:</label>
        <input type="text" placeholder="jumlah_km" name="jumlah_km" required="required">

        <label>Tanggal:</label>
        <input type="text" placeholder="tanggal" name="tanggal" required="required">

        <input type="submit" name="submit" value="Simpan">
    </form>
    <h6>copyright@2023 - Achmad Rozy</h6>
</div>
            </body>
            </html>