<?php
    require "Variabel.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile Website</title>
    <link rel="stylesheet" href="stylesprofil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- home/tampilan awal -->
    <section id="home" class="home">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#journey">JOURNEY</a></li>
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

    <!-- Tampilan Journey -->
    <section id="journey" class="journey">
        <div class="main">
            <img src="images/rozy2.jpeg" alt="">
            <div class="about-text">
                <h2>MY <span>JOURNEY</span></h2>
                <h5><?php echo $journey["nama"]; ?></h5>
                <p><?php echo $journey["desk"]; ?></p>
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