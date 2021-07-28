<?php
$dischi =[
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => '1988',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
    ],
    [
        'title' => 'Beauty Behind the Madness',
        'author' => 'the weekend',
        'year' => ' 2015',
        'poster' => 'https://www.bhphotovideo.com/images/images750x750/hal_leonard_152158_the_weeknd_songbook_beauty_1332569.jpg'
    ],
    [
        'title' => 'Bulletproof',
        'author' => 'rage against the machine',
        'year' => '1994',
        'poster' => 'https://img.discogs.com/oPB1uft8pjpka_IUGECIkADQC3k=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-4453338-1365287101-8484.jpeg.jpg'
    ],
    [
        'title' => 'reaper',
        'author' => 'nothing,nowhere',
        'year' => '2017',
        'poster' => 'https://static.qobuz.com/images/covers/27/69/0075679886927_600.jpg'
    ],
    [
        'title' => '4 Your Eyez Only',
        'author' => 'j cole',
        'year' => '2016',
        'poster' => 'https://www.debaser.it/files/%2Fopera%2F1363856_u_13572187.jpg'
    ],
    [
        'title' => 'mesmerize',
        'author' => 'System of a Down',
        'year' => '2005',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71%2B2qVy7g5L._AC_SL1500_.jpg'
    ],
    [
        'title' => 'Ori and the Will of the Wisps (Original Soundtrack Recording)',
        'author' => 'gareth coker',
        'year' => '2020',
        'poster' => 'https://i.ytimg.com/vi/yYjzVEIdY2A/maxresdefault.jpg'
    ],
    [
        'title' => 'At. Long. Last. ASAP',
        'author' => 'A$AP Rocky',
        'year' => '2015',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/8184%2BzjMJ0L._AC_SX522_.jpg'
    ],
    [
        'title' => 'Post Human: Survival Horror',
        'author' => 'bring me the horizon',
        'year' => '2020',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81%2B0CgQxC6L._AC_SY355_.jpg'
    ],
    [
        'title' => 'Sol-fa',
        'author' => 'asian kung-fu generation',
        'year' => '2004',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61slqdDtpUL._AC_SX425_.jpg'
    ],

]


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disconiiii</title>
</head>
<body>
    <div>
    <?php for($i = 0; $i < count($dischi); $i++) { ?>
            <p>titolo:<?php echo $dischi [$i] ['title'] ?></p>
            <p>autore:<?php echo $dischi [$i] ['author'] ?></p>
            <p>anno:<?php echo $dischi [$i] ['year'] ?></p>
            <img src="<?php echo $dischi [$i] ['poster'] ?>" alt="">
       <?php } ?>
    </div>
</body>
</html>