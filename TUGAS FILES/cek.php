<?php

$file = "dataNovel.txt"; // Menentukan nama file yang akan dibaca
$read = file($file); // Membaca isi file dan menyimpannya dalam array $read

foreach ($read as $data) { // Melakukan loop untuk setiap baris dalam array $read
    echo $data . "<br>"; // Menampilkan setiap baris data dan menambahkan tag <br> untuk baris baru
}

echo "<br> <a href='submit.php'><button>Back</button></a>"; // Menampilkan tombol "Back" dengan link ke halaman submit.php

?>
