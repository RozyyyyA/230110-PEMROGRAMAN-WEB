<?php
  include ('koneksi.php');
  include ('Styles.css');


  $status = "";
   $result = "";
   if ($_SERVER["REQUEST_METHOD"] === "GET") {
       if (isset($_GET["id_bus"])) {
           //query SQL
           $id_bus_upd = $_GET["id_bus"];
           $query = "SELECT * FROM bus WHERE id_bus = '$id_bus_upd'";
   
           //eksekusi query
           $result = mysqli_query(connection(), $query);
       }
   }
   
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $id_bus = $_POST["id_bus"];
       $plat = $_POST["plat"];
       $status = $_POST["status"];
       //query SQL
       $sql = "UPDATE bus SET  plat='$plat', status='$status' WHERE id_bus='$id_bus'";
   
       //eksekusi query
       $result = mysqli_query(connection(), $sql);
       if ($result) {
           $status = "ok";
       } else {
           $status = "err";
       }
   
       //redirect ke halaman lain
       header("Location: Bus.php");
   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>UPDATE BUS</title>
</head>

<body>
<nav>
        <h2><b>Update Bus</b></h2>
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
    <div class="ctr">
      <h2 style="margin: 30px 0 30px 0;">Update Data Bus</h2>
      <form action="Updatebus.php" method="POST">
        <?php while($data = mysqli_fetch_array($result)): ?>
          <div class="form-group">
            <label for="id_bus">id_bus</label>
            <input type="text" class="form-control" id="id_bus" name="id_bus" value="<?php echo $data['id_bus'];  ?>" required readonly>
          </div>
          <div class="form-group">
            <label for="plat">plat</label>
            <input type="text" class="form-control" id="plat" name="plat" value="<?php echo $data['plat'];  ?>" required>
          </div>
          <div class="form-group">
            <label for="status">status</label>
            <select class="form-control" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="1" <?php if ($data['status'] == 1) echo "selected"; ?>>Aktif</option>
              <option value="2" <?php if ($data['status'] == 2) echo "selected"; ?>>Tidak Aktif</option>
              <option value="0" <?php if ($data['status'] == 0) echo "selected"; ?>>Sedang Perawatan</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        <?php endwhile; ?>
      </form>
    </div>
  </td>
  </tr>
  <h6>copyright@2023 - Achmad Rozy</h6>
</div>
</body>
</html>