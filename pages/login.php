<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor - C8PJ6K">
    <meta name="author" content="Szili Dominik - AUK2C8">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/loginpage.css">
    <link rel="icon" type="image/x-icon" href="../resources/DFW_Logo.ico">
</head>
<body>
<header>
    <div class="LinkToSocialMedia">
        <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
            <img src="../resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
        </a>
        <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
            <img src="../resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
        </a>
    </div>
    <a href="../index.php" class="HeaderPicture">
        <img src="../resources/logos/DFW_LOGO_WHT.png" alt="Down For Whatever" title="Down For Whatever" id="band-logo-header">
    </a>
    <div class="Navigationbar">
        <a href="../index.php">Kezdőlap</a>
        <a href="./members.html">Tagok</a>
        <a href="./concerts.php">Koncertek</a>
        <a href="./discography.php">Diszkográfia</a>
        <a href="./contact.html">Kapcsolat</a>
        <a href="./webshop.php">Webshop</a>
        <a href="./chatbot.html">Chatbot</a>
        <a href="#" class="active">Bejelentkezés</a>
    </div>
    <hr>
</header>
<main>
    <div class="flexbox">
        <div id="register-box">
            <form method="POST" class="login-register-base" action="../php/adduser.php">
                <h2>Regisztráció:</h2>
                <label for="nev">Név:</label><br>
                <input type="text" name="nev" id="nev" placeholder="Példa János"><br>
                <label for="mail">E-mail cím:</label><br>
                <input type="email" name="mail" id="mail" placeholder="pelda.janos@dfw.com"><br>
                <label for="pass">Jelszó:</label><br>
                <input type="password" name="pass" id="pass"><br>
                <label for="pass-confirm">Jelszó megerősítése:</label><br>
                <input type="password" name="pass-confirm" id="pass-confirm"><br>
                <div class="button-outer-area">
                    <input type="submit" value="Regisztráció" class="login-register-button">
                </div>
            </form>
        </div>
        <div id="login-box">
            <form method="POST" class="login-register-base" action="../php/logintoaccount.php">
                <h2>Bejelentkezés:</h2>
                <label for="mail-login">E-mail cím:</label><br>
                <input type="email" name="mail-login" id="mail-login" placeholder="pelda.janos@dfw.com"><br>
                <label for="pass-login">Jelszó:</label><br>
                <input type="password" name="pass" id="pass-login"><br>
                <div class="button-outer-area">
                <input type="submit" value="Bejelentkezés" class="login-register-button">
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <hr>
    <div class="Links">
        <div class="footer-navigationbar">
            <a href="https://www.facebook.com/downforwhateverofficial" target=”_blank”>
                <img src="../resources/logos/facebook_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://www.youtube.com/downforwhateverofficial" target=”_blank”>
                <img src="../resources/logos/youtube_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://www.instagram.com/downforwhateverofficial/" target=”_blank”>
                <img src="../resources/logos/instagram_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
            <a href="https://open.spotify.com/artist/6YbTZWEYHU5DcbuCya4KnU?si=94Nj8CS0QFeZjh0FYs-fsA&nd=1" target=”_blank”>
                <img src="../resources/logos/spotify_logo.png" alt="Down For Whatever" title="Down For Whatever" class="icon-for-social-media">
            </a>
        </div>
    </div>
    <p class="Watermark">© 2024 DOWN FOR WHATEVER</p>
</footer>
</body>

</html>