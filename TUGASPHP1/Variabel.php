<?php 
// tampilan home
    $name = [
        "depan" => "Achmad",
        "belakang" => "Rozy"];

    $sekarang = new DateTime();
    $lahir = new DateTime('2002-06-19');
    $umur = $sekarang->diff($lahir)->format('%y Years old');

// tampilan journey
    $journey =[
        "nama" => "Achmad Rozy Priambodo",
        "desk" => "I'm a student at the informatics study program UPNVJT. 
        I aspire to become a ui/ux designer, to realize these ideals, I chose this study program to explore web creation & design. 
        I have a hobby of photography, editing photos and playing games. I have also worked as a content creator in a food and beverage company. 
        In the esports scene, I have represented UPNVJT several times and won various national-level esports tournaments."];

// tampilan portofolio
    $portofolio=[
        "link" => "https://drive.google.com/file/d/1V3k9yWVnv18AdteVHhNA568tr5-QeasD/view?usp=drivesdk"
    ];

// tampilan contact
    $link = [
        "twitter" => "https://twitter.com/rozyyyya?s=21&t=r7sQNxOmLAodiyIL_5UmRQ",
        "instagram" => "https://instagram.com/rozyyyya?igshid=YmMyMTA2M2Y=",
        "whatsapp" => "https://wa.me/6285852909079",
        "tiktok" => "https://www.tiktok.com/@rozyyyya?_t=8a2AW2iuuck&_r=1"];
?>