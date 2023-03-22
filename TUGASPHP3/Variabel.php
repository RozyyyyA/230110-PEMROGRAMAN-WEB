<?php 
// tampilan home
    $name = [
        "depan" => "Achmad",
        "belakang" => "Rozy"];

    $sekarang = new DateTime();
    $lahir = new DateTime('2002-06-19');
    $umur = $sekarang->diff($lahir)->format('%y Years old');

// tampilan journey
    $Biodata = (array(
    array(
        'nama' => 'Achmad Rozy Priambodo',
        'tempatLahir' => 'Sidoarjo',
        'tanggalLahir' => '19 Juni 2002',
        'jenisKelamin' => 'Laki-laki',
        'agama' => 'Islam',
        'hobby' => 'Bermain Game',),
    )
    );

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