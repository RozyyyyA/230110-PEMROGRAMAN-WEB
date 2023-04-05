<?php
   include ('koneksi.php');
   include ('Styles.css');
   
   $status = "";
   $result = "";
   
   if ($_SERVER["REQUEST_METHOD"] === "GET") {
       if (isset($_GET["id_kondektur"])) {
           //query SQL
           $id_kondektur_upd = $_GET["id_kondektur"];
           $query = "SELECT * FROM kondektur WHERE id_kondektur = '$id_kondektur_upd'";
   
           //eksekusi query
           $result = mysqli_query(connection(), $query);
       }
   }
   
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $id_kondektur = $_POST["id_kondektur"];
       $nama = $_POST["nama"];
       
       //query SQL
       $sql = "UPDATE kondektur SET id_kondektur='$id_kondektur', nama='$nama' WHERE id_kondektur='$id_kondektur'";
   
       //eksekusi query
       $result = mysqli_query(connection(), $sql);
       
       if ($result) {
           $status = "ok";
       } else {
           $status = "err";
       }
   
       //redirect ke halaman lain
       header("Location: Kondektur.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>UPDATE KONDEKTUR</title>

</head>
<body>
<nav>
        <h2><b>Update Kondektur</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Addbus.php"><b>Insert</b></a>
        </div>
    </nav>
    <div class="content">
    <div class="ctr">      
                <tr class="akhir">
  <td colspan="3">
    <div class="ctr">
        <h2 style="margin: 30px 0 30px 0;">Update Data Kondektur</h2>
        <form action="Updatekondektur.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <label>id_kondektur</label>
                <input type="text" class="form-control" placeholder="id_kondektur" name="id_kondektur" value="<?php echo $data['id_kondektur'];  ?>" required="required" readonly > 
                <label>nama</label>
                <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
                <button type="submit" class="btn btn-primary">Update</button>
            <?php endwhile; ?>
        </form>
        <h6>copyright@2023 - Achmad Rozy</h6>
</div>
</body>
</html>