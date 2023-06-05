<?php include 'bootstrap.php'; ?>
<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Airlangga | Daftar Mobil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  

<style>
.page-header {
    background-image: url("daftarmobil.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    border: 0 none;
    margin: 0 auto;
    padding: 0;
    position: relative;
  }
  .page-header_wrap {
    padding:60px 0;
    position:relative;	
    text-align:center;
  }
  .page-heading {
    z-index:1;
    position:relative;
  }
  .page-heading h2, .page-heading h1 {
    font-size:40px;
    color: #ffffff;
    margin: 0 auto;
  }
  
</style>

</head>
<body>
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Daftar Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

    <?php
    $sql = "SELECT * FROM mobil";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $idMobil = $row["id_mobil"];
            $merk = $row["merk"];
            $noPlat = $row["no_plat"];
            $stok = $row["stok"];

            echo "<div class='car-container'>";
            echo "    <h3>$merk</h3>";
            echo "    <p>No. Plat: $noPlat</p>";
            echo "    <p>Stok: $stok</p>";
            echo "    <a href='detail_mobil.php?id_mobil=$idMobil'>Detail</a>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "Tidak ada data mobil.";
    }

    $conn->close();
    ?>
</body>
</html>
<?php include 'footer.php'; ?>