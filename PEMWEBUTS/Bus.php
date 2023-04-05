<?php
    include('koneksi.php');
    include('Styles.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TRANS UPN</title>

  <script>
    function filterData() {
      var status = document.getElementById("status").value;
      var url = "Bus.php?status=" + status;
      window.location.href = url;
    }
  </script>
<style> 
table {
  border-collapse: collapse;
  border-radius: 10px; /* memberikan border radius pada tabel */
}

th, td {
  padding: 10px; /* memberikan jarak padding pada setiap kolom */
}
</style>
</head>
<body> 
  <nav>
    <h2><b>TABEL BUS</b></h2>
    <div>
      <a href="Bus.php"><b>Bus</b></a>
      <a href="Kondektur.php"><b>Kondektur</b></a>
      <a href="Driver.php"><b>Driver</b></a>
      <a href="Transupn.php"><b>Trans UPN</b></a>
      <a href="Addbus.php"><b>Insert</b></a>
    </div>
  </nav>

  <div class="ctr">
  <!-- konten -->
  <form method="get">
    <select name="status" onchange="filterData()">
      <option value="all">Semua</option>
      <option value="1">Aktif</option>
      <option value="2">Tidak Aktif</option>
      <option value="0">Sedang Perawatan</option>
    </select>

    <?php
      if (isset($_GET['status']) && $_GET['status'] != 'all') {
        $status = $_GET['status'];
        $query = "SELECT * FROM bus WHERE status='$status'";
      } else {
        $query = "SELECT * FROM bus";
      }
    ?>

    <button type="submit">Filter</button>
  </form>

  <table border="1" align="center">
    <thead>
      <tr>
        <th>ID Bus</th>
        <th>Plat</th>
        <th>Status</th>
        <th>Total KM</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $result = mysqli_query(connection(), $query);
        while($data = mysqli_fetch_array($result)): 
      ?>
      <tr>
        <td>
          <?php echo $data['id_bus']; ?>
        </td>
        <td>
          <?php echo $data['plat']; ?>
        </td>
        <td>
          <?php 
            if ($data["status"] == 1) {
              $warna = "green";
            } elseif ($data["status"] == 2) {
              $warna = "yellow";
            } elseif ($data["status"] == 0) {
              $warna = "red";
            }
            $status=$data["status"];
            echo "<button style ='background-color:$warna;'>$status</button>"
          ?>
        </td>
        <td>
          <?php
            $query_km = "SELECT SUM(jumlah_km) as total_km FROM trans_upn WHERE id_bus=".$data['id_bus'];
            $result_km = mysqli_query(connection(), $query_km);
            $data_km = mysqli_fetch_array($result_km);
            echo $data_km['total_km'];
          ?>
        </td>
        <td>
            <a href="<?php echo "Updatebus.php?id_bus=" .$data["id_bus"]; ?>" class="update-button">Update</a>
            <a href="<?php echo "Deletebus.php?id_bus=" .$data["id_bus"]; ?>" class="delete-button">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <h6>copyright@2023 - Achmad Rozy</h6>
</div>
</body>
</html> 