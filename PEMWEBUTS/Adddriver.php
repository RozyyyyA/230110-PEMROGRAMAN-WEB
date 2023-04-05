<?php 
    include ('koneksi.php');
    include ('Styles.css');

    $status = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_driver= $_POST['id_driver'];
        $nama = $_POST['nama'];
        $no_sim = $_POST['no_sim'];
        $id_alamat= $_POST['alamat'];
      
        //query SQL
        $query = "INSERT INTO driver (id_driver, nama, no_sim, alamat) 
        VALUES('$id_driver', '$nama', '$no_sim', '$alamat')"; 
  
        //eksekusi query
        $result = mysqli_query(connection(),$query);
        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ADD DRIVER TRANS UPN</title>
</head>
<body>
<nav>
        <h2><b>INSERT DRIVER</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Adddriver.php"><b>Insert</b></a>
        </div>
    </nav>    
<div class = "ctr" >
                    <td colspan="3">
                      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                      <h2 style="margin: 30px 0 30px 0;">FORM ADD DRIVER</h2>
                      <form action="Adddriver.php" method="POST">
                      <div class="form-group">
                        <label>id_driver</label>
                        <input type="text" class="form-control" placeholder="id_driver" name="id_driver" required="required">
                      </div>
                      <div class="form-group">
                        <label>nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama" required="required">
                      </div>
                      <div class="form-group">
                        <label>no_sim</label>
                        <input type="text" class="form-control" placeholder="no_sim" name="no_sim" required="required">
                      </div>
                      <div class="form-group">
                        <label>alamat</label>
                        <input type="text" class="form-control" placeholder="alamat" name="alamat" required="required">
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </main>
                    </td>
                </tr>
            </table>
     <h6>copyright@2023 - Achmad Rozy</h6>
    </div>
</body>
</html>