<?php
  include ('koneksi.php');
  include ('Styles.css'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_driver'])) {
          //query SQL
          $id_driver_upd = $_GET['id_driver'];
          $query = "SELECT * FROM driver WHERE id_driver = '$id_driver_upd'";
         
          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_driver= $_POST['id_driver'];
        $nama = $_POST['nama'];
        $no_sim = $_POST['no_sim'];
        $alamat = $_POST['alamat'];
    //query SQL
    $sql = "UPDATE driver SET  nama='$nama', no_sim='$no_sim', alamat='$alamat' WHERE id_driver='$id_driver'";

    //eksekusi query
    $result = mysqli_query(connection(),$sql);
    if ($result) {
      $status = 'ok';

        }
    else{
      $status = 'err';
    }

    //redirect ke halaman lain
    header('Location: Driver.php?status='.$status);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Update Driver</title>
</head>
<body>
<nav>
        <h2><b>Update Driver</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Adddriver.php"><b>Insert</b></a>
        </div>
    </nav>
    <div class="content">
    <div class="ctr">      
                <tr class="akhir">
                    <td colspan="3">
                    
                        <h2 style="margin: 30px 0 30px 0;">Update Data driver</h2>
                        <form action="Updatedriver.php" method="POST">
                        <?php while($data = mysqli_fetch_array($result)): ?>
                          <div class="form-group">
                            <label>id_driver</label>
                            <input type="text" class="form-control" placeholder="id_driver" name="id_driver" value="<?php echo $data['id_driver'];  ?>" required="required" readonly>
                          </div>
                          <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
                          </div>
                          <div class="form-group">
                            <label>no_sim</label>
                            <input type="text" class="form-control" placeholder="no_sim" name="no_sim" value="<?php echo $data['no_sim'];  ?>" required="required" >
                          </div>
                          <div class="form-group">
                            <label>alamat</label>
                            <input type="text" class="form-control" placeholder="alamat" name="alamat" value="<?php echo $data['alamat'];  ?>" required="required">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                          <?php endwhile; ?>
                        </form>
                    </div>
                  </div>
                    </td>
                </tr>
            </table>
            <h6>copyright@2023 - Achmad Rozy</h6>
    </div>
</body>
</html>