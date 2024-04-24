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
        <form method="POST" class="modify-profile-data" action="../../php/updateprofile.php">
            <h2>Adat módosítás: *</h2>
            <label for="nev">Név:</label><br>
            <input type="text" name="nev" id="nev" value="<?php echo $_SESSION['user']['name']; ?>"><br>
            <label for="mail">E-mail cím:</label><br>
            <input type="email" name="mail" id="mail" value="<?php echo $_SESSION['user']['email']; ?>"><br>
            <label for="tszam">Telefonszám(opcionális):</label><br>
            <input type="text" name="tszam" id="tszam" value="<?php echo $_SESSION['user']['phone']; ?>"><br>
            <label for="adress">Posta cím(opcionális):</label><br>
            <input type="text" name="adress" id="adress" value="<?php echo $_SESSION['user']['address']; ?>"><br>
            <h3>Jelszó módosítása:</h3>
            <label for="old-pass">Aktuális jelszó:</label><br>
                <input type="password" name="old-pass" id="old-pass"><br>
            <label for="pass">Új jelszó:</label><br>
            <input type="password" name="pass" id="pass"><br>
            <label for="pass-confirm">Új jelszó megerősítése:</label><br>
            <input type="password" name="pass-confirm" id="pass-confirm"><br>
            <div class="button-outer-area">
                <input type="submit" value="Modosítás" class="modify-button"><br>
            </div>

        </form>

    </div>
    <p>* Az adatok módosítására csak akkor kerül sor, ha megváltoztatod a beviteli mezők értékét!</p>
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