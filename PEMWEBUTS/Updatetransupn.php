<?php
  include ('koneksi.php');
  include ('Styles.css');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_trans_upn'])) {
          //query SQL
          $id_trans_upn_upd = $_GET['id_trans_upn'];
          $query = "SELECT * FROM trans_upn WHERE id_trans_upn = '$id_trans_upn_upd'";
         
          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    //query SQL
    $sql = "UPDATE trans_upn SET id_kondektur='$id_kondektur', id_bus='$id_bus', id_driver='$id_driver', jumlah_km='$jumlah_km', tanggal='$tanggal' WHERE id_trans_upn='$id_trans_upn'";

    //eksekusi query
    $result = mysqli_query(connection(), $sql);

    if ($result) {
      $status = 'ok';
    } else {
      $status = 'err';
    }

    //redirect ke halaman lain
    header('Location: Transupn.php?status=' . $status);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>UPDATE TRANS UPN</title>
    <style>
      body {
  font-family: Arial, sans-serif;
  margin: 0;
}

nav {
  font-weight: bold;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #2B3A55;
  color: #e8c4c4;
  padding: 0px 20px;
  margin-left: 0px;
  border-radius: 10px;
}

nav a {
  background-color: #2B3A55;
  color: #e8c4c4;
  font-size: 20;
  text-decoration: none;
  margin: 0 0px;
}

nav h2 {
  font-family: sans-serif;
  font-weight: bold;
  font size: 30px;
}

nav a:hover {
  color: white;
}

.ctr {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

form label {
  display: block;
  margin-top: 10px;
}

form input[type="text"],
form select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

form input[type="submit"] {
  background-color: #e8c4c4;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #f2e5e5;
}
</style>
</head>
<body>
<nav>
  <h2><b>Update Trans UPN</b></h2>
  <div>
    <a href="Bus.php"><b>Bus</b></a>
    <a href="Kondektur.php"><b>Kondektur</b></a>
    <a href="Driver.php"><b>Driver</b></a>
    <a href="Transupn.php"><b>Trans UPN</b></a>
    <a href="Addbus.php"><b>Insert</b></a>
  </div>
</nav>

<div class="ctr">      
    <tr class="akhir">
  <td colspan="3">
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  
  <div class="content">
    <form action="Updatetransupn.php" method="POST">
        <?php while($data = mysqli_fetch_array($result)): ?>
            <label>id_trans_upn</label>
            <input type="text" class="form-control" placeholder="id_trans_upn" name="id_trans_upn" value="<?php echo $data['id_trans_upn'];  ?>" required="required" readonly>

            <label>Id Kondektur:</label>
            <select name="id_kondektur">
                <?php
                    $query_kondektur = "SELECT * FROM kondektur";
                    $result_kondektur = mysqli_query(connection(), $query_kondektur);
                    while($data_kondektur = mysqli_fetch_array($result_kondektur)) {
                        $selected = ($data['id_kondektur'] == $data_kondektur['id_kondektur']) ? 'selected' : '';
                        echo "<option value='".$data_kondektur['id_kondektur']."' ".$selected.">".$data_kondektur['nama']."</option>";
                    }
                ?>
            </select>

            <label>Id Bus:</label>
            <select name="id_bus">
                <?php
                    $query_bus = "SELECT * FROM bus";
                    $result_bus = mysqli_query(connection(), $query_bus);
                    while($data_bus = mysqli_fetch_array($result_bus)) {
                        $selected = ($data['id_bus'] == $data_bus['id_bus']) ? 'selected' : '';
                        echo "<option value='".$data_bus['id_bus']."' ".$selected.">".$data_bus['plat']."</option>";
                    }
                ?>
            </select>

            <label>Id driver:</label>
            <select name="id_driver">
                <?php
                    $query_driver = "SELECT * FROM driver";
                    $result_driver = mysqli_query(connection(), $query_driver);
                    while($data_driver = mysqli_fetch_array($result_driver)) {
                        $selected = ($data['id_driver'] == $data_driver['id_driver']) ? 'selected' : '';
                        echo "<option value='".$data_driver['id_driver']."' ".$selected.">".$data_driver['nama']."</option>";
                    }
                ?>
            </select>

            <label>jumlah_km</label>
            <input type="text" class="form-control" placeholder="jumlah_km" name="jumlah_km" value="<?php echo $data['jumlah_km'];  ?>" required="required">

            <label>Tanggal:</label>
            <input type="text" class="form-control" placeholder="tanggal" name="tanggal" value="<?php echo $data['tanggal'];  ?>" required="required">

            <input type="submit" name="submit" value="Update">
        <?php endwhile; ?>
    </form>
    <h6>copyright@2023 - Achmad Rozy</h6>
</div>

</body>
</html>