<?php
        session_start();
        if(!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] !== true){
            header("location: ../../index.php");
            exit;
        }
 ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor - C8PJ6K">
    <meta name="author" content="Szili Dominik - AUK2C8">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="../../styles/base.css">
    <link rel="stylesheet" href="../../styles/profile.css">
    <link rel="icon" type="image/x-icon" href="../../resources/DFW_Logo.ico">
</head>
<body>
<header>
    <div class="LinkToSocialMedia">
        <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
            <img src="../../resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
        </a>
        <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
            <img src="../../resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
        </a>
    </div>
    <a href="../../index.php" class="HeaderPicture">
        <img src="../../resources/logos/DFW_LOGO_WHT.png" alt="Down For Whatever" title="Down For Whatever" id="band-logo-header">
    </a>
    <div class="Navigationbar">
    <a href="../../index.php">Kezdőlap</a>
            <a href="../members.php">Tagok</a>
            <a href="../concerts.php">Koncertek</a>
            <a href="../discography.php">Diszkográfia</a>
            <a href="../contact.php">Kapcsolat</a>
            <a href="../webshop.php">Webshop</a>
            <a href="../chatbot.php">Chatbot</a>
            <a href="#" class="active">Fiókom</a>
    </div>
    <hr>
</header>
<main>
    <div class="flexbox">
        <div id="user-data">
            <p class="data-type">Név: <?php echo $_SESSION['user']['name']; ?></p>
            <p class="data-type">E-mail cím: <?php echo $_SESSION['user']['email']; ?></p>
            <p class="data-type">Telefonszám: <?php echo $_SESSION['user']['phone']; ?></p>
            <p class="data-type">Posta cím(opcionális): <?php echo $_SESSION['user']['address']; ?></p>
            <div id="button">
                <a href="./modifyprofile.php">Adatok módosítása</a><br>
                <a href="../../php/deleteUser.php">Fiók törlése</a><br>
                <a href="../../php/logout.php">Kijelentkezés</a>
            </div>
        </div>
    </div>
</main>
<footer>
    <hr>
    <div class="Links">
        <div class="footer-navigationbar">
            <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
                <img src="../../resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://www.youtube.com/downforwhateverofficial" target=”_blank”>
                <img src="../../resources/logos/youtube_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
                <img src="../../resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://open.spotify.com/artist/6YbTZWEYHU5DcbuCya4KnU?si=94Nj8CS0QFeZjh0FYs-fsA&nd=1" target=”_blank”>
                <img src="../../resources/logos/spotify_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
        </div>
    </div>
    <p class="Watermark">© 2024 DOWN FOR WHATEVER</p>
</footer>
</body>

</html>