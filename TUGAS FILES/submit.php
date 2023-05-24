<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBMIT DATA NOVEL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: black;
        }

        /* Styling untuk form dan tabel */
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* button submit & cek data*/
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Submit Data Novel</h1>
    <form method="POST" action="simpan.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label>Judul Buku:</label>
                </td>
                <td>
                    <input type="text" name="judul" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pengarang:</label>
                </td>
                <td>
                    <input type="text" name="pengarang" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tahun Terbit:</label>
                </td>
                <td>
                    <input type="number" name="tahunTerbit" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Halaman:</label>
                </td>
                <td>
                    <input type="number" name="halaman" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Penerbit:</label>
                </td>
                <td>
                    <input type="text" name="penerbit" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Kategori:</label>
                </td>
                <td>
                    <input type="text" name="kategori" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Cover:</label>
                </td>
                <td>
                    <input type="file" name="cover" accept="image/*" required>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
    <br>
    <a href='cek.php'><button>Cek Data</button></a>
    </br>
</body>
</html>