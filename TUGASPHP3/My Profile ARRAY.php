<?php
    require "Variabel.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile Website</title>
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- home/tampilan awal -->
    <section id="home" class="home">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#profile">PROFILE</a></li>
                <li><a href="#portofolio">PORTOFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        
        <div class="hi">
            <h1>Hallo</h1>
            <h1>I'M <?php echo $name["depan"] ?><span><?php echo $name["belakang"] ?></span></h1>
            <p>This is my official Profile website <br>UPNVJT student's in informatics study program.</p>
            <p><?php echo $umur ?></p>
        </div>
        <div class="images">
            <img src="images/shape.png">
            <img src="images/rozy.png">
        </div>
    </section>

    <!-- Tampilan Profile -->
    <section id="profile" class="profile">
        <div class="main">
            <img src="images/rozy2.jpeg" alt="">
            <div class="profil">
            <h2>ABOUT <span> ME </span></h2>
            <table>
                    <?php foreach ($Biodata as $key) : ?>
                    <tr>
                        <td><b>Nama</b></td>
                        <td>: <?php echo $key['nama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tempat Lahir</b></td>
                        <td>: <?php echo $key['tempatLahir']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Lahir</b></td>
                        <td>: <?php echo $key['tanggalLahir']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>: <?php echo $key['jenisKelamin']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Agama</b></td>
                        <td>: <?php echo $key['agama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Hobby</b></td>
                        <td>: <?php echo $key['hobby']; ?></td>
                    </tr>
                    <?php endforeach ?>
            </table>     
            </div> 
        </div>
    </section>

    <!-- tampilan portofolio -->
    <section id="portofolio" class="portofolio">
        <div class="ptf">
            <h2>PORTO<span>FOLIO</span></h2>
            <img src="images/portofolio-min.jpg" alt="">
            <a href=<?php echo $portofolio["link"]; ?>>Download Portofolio</a>
        </div>
    </section>

    <!-- tampilan contact -->
    <section id="contact" class="contact">
        <div class="ct">
            <h2>CONTACT<span>ME:</span></h2>
            <div class="social">
                <a href=<?php echo $link["twitter"] ?>><i class="fab fa-twitter"></i></a>
                <a href=<?php echo $link["instagram"] ?>><i class="fab fa-instagram"></i></a>
                <a href=<?php echo $link["whatsapp"] ?>><i class="fab fa-whatsapp"></i></a>
                <a href=<?php echo $link["tiktok"] ?>><i class="fab fa-tiktok"></i></a>
             </div>
        </div>
    </section>
</body>
</html>