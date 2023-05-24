<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Memeriksa apakah metode permintaan adalah POST

    $file = "dataNovel.txt";
    // Menentukan nama file

    if (file_exists($file) && filesize($file) > 0) {
        // Memeriksa apakah file ada dan tidak kosong

        $getContent = file_get_contents($file);
        // Membaca isi file

        if (preg_match_all('/Kode Buku: (\d+)/', $getContent, $matches)) {
            // Mencocokkan pola dengan regex pada isi file untuk mencari kode buku

            $kode = $matches[1];
            $kodeAkhir = max($kode);
            $kodeBuku = $kodeAkhir + 1;
            // Menentukan kode buku berikutnya
        }
    } else {
        $kodeBuku = 1;
        // Jika file tidak ada atau kosong, kode buku akan menjadi 1
    }

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $halaman = $_POST['halaman'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];
    // Mendapatkan data yang dikirim melalui metode POST

    $dataBuku = "Kode Buku: $kodeBuku" . PHP_EOL;
    $dataBuku .= "Judul Buku: $judul" . PHP_EOL;
    $dataBuku .= "Pengarang Buku: $pengarang" . PHP_EOL;
    $dataBuku .= "Tahun Terbit Buku: $tahunTerbit" . PHP_EOL;
    $dataBuku .= "Halaman Buku: $halaman" . PHP_EOL;
    $dataBuku .= "Penerbit Buku: $penerbit" . PHP_EOL;
    $dataBuku .= "Kategori Buku: $kategori" . PHP_EOL;
    // Membentuk string data buku dengan informasi yang diberikan

    if ($_FILES['cover']['error'] === UPLOAD_ERR_OK) {
        // Memeriksa apakah tidak ada kesalahan pada unggahan file

        $ekstensiFile = strtolower(pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION));
        // Mendapatkan ekstensi file yang diunggah

        $namaFile = $kodeBuku . "_" . $pengarang . "_" . $judul . "." . $ekstensiFile;
        // Menentukan nama file baru berdasarkan kode buku, pengarang, dan judul

        $namaSementara = $_FILES['cover']['tmp_name'];
        // Mendapatkan nama sementara file yang diunggah

        $lokasiFile = 'covernovel/' . $namaFile;
        // Menentukan lokasi penyimpanan file

        move_uploaded_file($namaSementara, $lokasiFile);
        // Memindahkan file yang diunggah ke lokasi yang ditentukan
    }

    $dataBuku .= "Cover Buku: $lokasiFile" . PHP_EOL . PHP_EOL;
    // Menambahkan informasi lokasi file cover dalam data buku

    if (file_put_contents($file, $dataBuku, FILE_APPEND) > 0){
        echo "<p> Data Berhasil Ditulis </p>";
    }else{
        echo "<p> Data Gagal Ditulis </p>";
    }
    // Menampilkan pesan sukses atau gagal saat menulis data ke file

    $fileIndiv = "$kodeBuku - $judul - $pengarang.txt";

    if (file_put_contents($fileIndiv, $dataBuku) > 0){
        echo "<p> $fileIndiv Berhasil Ditulis </p>";
    }else{
        echo "<p> Data Gagal Ditulis </p>";
    }
    // Menulis data buku ke file individu dengan nama yang disesuaikan

}

echo "<br> <a href='submit.php'><button>Back</button></a>";
echo "<br> <a href='cek.php'><button>Cek Data</button></a>";
// Menampilkan tombol "Back" dan "Cek Data" dengan link ke halaman yang sesuai
?>