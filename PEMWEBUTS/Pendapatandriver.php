<?php
include ('koneksi.php');
include ('Styles.css');

if(isset($_POST['submit'])){
    $bulan = $_POST['bulan'];
    $conn = mysqli_connect("localhost","root","","transupn");

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "SELECT trans_upn.id_trans_upn, trans_upn.id_driver, trans_upn.jumlah_km, driver.nama, driver.no_sim, driver.alamat, COUNT(trans_upn.id_trans_upn) AS total_perjalanan, SUM(trans_upn.jumlah_km) AS total_km 
    FROM trans_upn 
    INNER JOIN driver ON trans_upn.id_driver = driver.id_driver 
    WHERE MONTH(tanggal) = '$bulan' 
    GROUP BY trans_upn.id_driver";
    $result = mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Trans UPN</title>
    <style> 
table {
  border-collapse: collapse;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* memberikan shadow pada tabel */
  border-radius: 10px; /* memberikan border radius pada tabel */
}

th, td {
  padding: 10px; /* memberikan jarak padding pada setiap kolom */
}
</style>
</head>
<body>
<nav>
        <h2><b>Pendapatan Driver</b></h2>
        <div>
            <a href="Bus.php"><b>Bus</b></a>
            <a href="Kondektur.php"><b>Kondektur</b></a>
            <a href="Driver.php"><b>Driver</b></a>
            <a href="Transupn.php"><b>Trans UPN</b></a>
            <a href="Addbus.php"><b>Insert</b></a>
            <a href="Pendapatandriver.php"><b>Data</b></a>
        </div>
    </nav>
<div class="ctr">
    <form method="POST">
        <label for="bulan">Bulan :</label>
        <select name="bulan" id="bulan">
        <?php
    $bulan_array = array(
        1 => "Januari",
        2 => "Februari",
        3 => "Maret",
        4 => "April",
        5 => "Mei",
        6 => "Juni",
        7 => "Juli",
        8 => "Agustus",
        9 => "September",
        10 => "Oktober",
        11 => "November",
        12 => "Desember"
    );
    for($i = 1; $i <= 12; $i++){
        if($i >= 4 && $i <= 10) {
            $nama_bulan = $bulan_array[$i];
            echo "<option value='$i' ";
            if(isset($bulan) && $bulan == $i) echo "selected";
            echo ">$i ($nama_bulan)</option>";
        }
    }
?>
        </select>
        <button type="submit" name="submit">Tampilkan</button>
    </form>
            <?php
if(isset($result) && mysqli_num_rows($result) > 0): ?>
    <table class="rwd-table">
        <thead>
            <tr>
                <th>ID Driver</th>
                <th>Nama Driver</th>
                <th>NO SIM</th>
                <th>Alamat</th>
                <th>Total Perjalanan</th>
                <th>Total KM</th>
                <th>Total Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_pendapatan = 0;
            while($row = mysqli_fetch_assoc($result)){
                $id_driver = $row['id_driver'];
                $nama = $row['nama'];
                $no_sim = $row['no_sim'];
                $alamat = $row['alamat'];
                $total_perjalanan = $row['total_perjalanan'];
                $total_km = $row['total_km'];
                $total_pendapatan_per_driver = $total_km * 3000;
                $total_pendapatan += $total_pendapatan_per_driver;?>
                <tr>
                <td data-th="ID Driver"><?php echo $row['id_driver']; ?></td>
                <td data-th="Nama Driver"><?php echo $nama; ?></td>
                <td data-th="NO SIM"><?php echo $no_sim; ?></td>
                <td data-th="Alamat"><?php echo $alamat; ?></td>
                <td data-th="Total Perjalanan"><?php echo $total_perjalanan; ?></td>
                <td data-th="Total KM"><?php echo $total_km; ?></td>
                <td data-th="Total Pendapatan">Rp. <?php echo number_format($total_pendapatan_per_driver, 0, ',', '.'); ?></td>
                </tr>
            <?php } ?>
            <tr>
            <td colspan="6" style="text-align: right; font-weight: bold;">Total Pendapatan</td>
            <td>Rp. <?php echo number_format($total_pendapatan, 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>
<?php elseif(isset($result)): ?>
    <p>Tidak ada data untuk bulan ini</p>
<?php endif; ?>
<h6>copyright@2023 - Achmad Rozy</h6>
</div>
</body>
</html>