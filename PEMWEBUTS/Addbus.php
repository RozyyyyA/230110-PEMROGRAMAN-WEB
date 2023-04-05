<?php 
    include ('koneksi.php');
    include ('Styles.css');

    $status = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_bus= $_POST['id_bus'];
        $plat = $_POST['plat'];
        $status = $_POST['status'];
      
        //query SQL
        $query = "INSERT INTO bus (id_bus, plat, status) 
        VALUES(id_bus, '$plat', '$status')"; 
  
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

    <title>ADD BUS TRANS UPN</title>
</head>
<body>
<nav>
        <h2><b>INSERT BUS</b></h2>
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
                      <h2 style="margin: 30px 0 30px 0;">FORMULIR ADD BUS</h2>
                      <form action="Addbus.php" method="POST">
                      <div class="form-group"> 
                        <label>id_bus</label>
                        <input type="text" class="form-control" placeholder="id_bus" name="id_bus" required="required">
                      </div>
                      <div class="form-group">
                        <label>plat</label>
                        <input type="text" class="form-control" placeholder="plat" name="plat" required="required">
                      </div>
                      <div class="form-group">
                        <label>status</label>
                        <input type="text" class="form-control" placeholder="status" name="status" required="required">
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