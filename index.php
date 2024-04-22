<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor - C8PJ6K">
    <meta name="author" content="Szili Dominik - AUK2C8">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/landingpage.css">
    <link rel="icon" type="image/x-icon" href="resources/DFW_Logo.ico">
</head>
<body>
    <header>
        <div class="LinkToSocialMedia">
            <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
                <img src="./resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
                <img src="./resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
        </div>
        <a href="#" class="HeaderPicture">
            <img src="./resources/logos/DFW_LOGO_WHT.png" alt="Down For Whatever" title="Down For Whatever" id="band-logo-header">
        </a>
        <div class="Navigationbar">
            <a href="#" class="active">Kezdőlap</a>
            <a href="pages/members.php">Tagok</a>
            <a href="pages/concerts.php">Koncertek</a>
            <a href="pages/discography.php">Diszkográfia</a>
            <a href="pages/contact.php">Kapcsolat</a>
            <a href="pages/webshop.php">Webshop</a>
            <a href="pages/chatbot.php">Chatbot</a>
            <?php
            session_start(); 
            if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){ ?>
                <a href="pages/profile/myprofile.php">Fiókom</a>
                <?php
            }
            else{?>
                <a href="pages/login.php">Bejelentkezés</a>
                <?php } ?>
        </div>
        <hr>
    </header>
    <div id="new-album-check">
        <h1>MONDD EL</h1>
        <img src="./resources/DFW_Mondd_El_Web.jpg" alt="Down For Whatever - Mondd el albumcover">
        <h3>Új album!</h3>
        <a href="https://open.spotify.com/album/1QmiIZjjIVNJjrUXJmnAkb?si=GeCeTzEGRwK2o_0pxWULQA" target=”_blank”>Megnyitás</a>
    </div>
    <div id="check-new-clips">
        <h1>Hallgass bele!</h1>
        <h4>Mi sem szoktunk tétlenkedni, nézd meg a négy legfrissebb klippünk:</h4>
        <div id="check-our-new-clips">
            <iframe src="https://www.youtube.com/embed/pPLUVgkU3So?si=ffkTVbpIxCqhyhDv"
                    title="YouTube video player" allow="encrypted-media; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/CEedrHMkcfw?si=8LRMCzO-ipQLg-K9"
                    title="YouTube video player" allow="encrypted-media; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/KuXD0drrLUM?si=dwcNUve_MXPFXGbh"
                    title="YouTube video player" allow="encrypted-media;picture-in-picture; web-share"
                    allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/DKgX_RJuoHE?si=RTl6FK6-IaxI4pKZ"
                    title="YouTube video player" allow="encrypted-media; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
    </div>
    <div id="next-few-concert">
        <h1>Koncertek</h1>
        <h4>Hol találkozunk?</h4>
        <table>
            <tbody>
            <?php

                $concerts_data = json_decode(file_get_contents("./data/concerts.json"), true);
                $i = 0;
                foreach ($concerts_data as $concert) {
                    if($concert["date"] >= date("Y-m-d") && $i < 3)
                    { ?>
                    <tr>
                    <td> <?php echo $concert["date"]; ?> </td>
                    <td> <?php echo $concert["town"]; ?> </td>
                    <td> <?php echo$concert["place"]; ?> </td>
                    <td><a href="./pages/article.php?id=0">Jegyvásárlás</a></td>
                    </tr>
                    <?php 
                    $i++ ;
                    }
                } 
                ?>
            </tbody>
        </table>
        <a href="./pages/concerts.php" >További koncertek</a>
    </div>
    <footer>
        <hr>
        <div class="Links">
            <div class="footer-navigationbar">
                <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
                    <img src="./resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
                </a>
                <a href="https://www.youtube.com/downforwhateverofficial" target=”_blank”>
                    <img src="./resources/logos/youtube_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
                </a>
                <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
                    <img src="./resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
                </a>
                <a href="https://open.spotify.com/artist/6YbTZWEYHU5DcbuCya4KnU?si=94Nj8CS0QFeZjh0FYs-fsA&nd=1" target=”_blank”>
                    <img src="./resources/logos/spotify_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
                </a>
            </div>
        </div>
        <p class="Watermark"><a href="https://www.youtube.com/watch?v=5wb5HWVh6Fs">©</a> 2024 DOWN FOR WHATEVER</p>
    </footer>
</body>

</html>