<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/memberspage.css">
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
            <a href="../index.php" >Kezdőlap</a>
            <a href="#" class="active">Tagok</a>
            <a href="./concerts.php">Koncertek</a>
            <a href="./discography.php">Diszkográfia</a>
            <a href="./contact.php">Kapcsolat</a>
            <a href="./webshop.php">Webshop</a>
            <?php
            session_start(); 
            if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){ ?>
                <a href="./profile/myprofile.php">Fiókom</a>
                <?php
            }
            else{?>
                <a href="./login.php">Bejelentkezés</a>
                <?php } ?>
    </div>
    <hr>
</header>
<div id="content-container">
    <div class="flexbox">
        <img src="../resources/profiles/David.jpg" alt="David - dobos" class="photo">
        <table class="info-table">
            <caption>Zsoldos Dávid</caption>
            <tr>
                <th>Foglalkozása:</th>
                <th>Operatőr, Fényképész, Dobos</th>
            </tr>
            <tr>
                <th>Hobbi:</th>
                <th>Analóg fotózás</th>
            </tr>
            <tr>
                <th>Funfact:</th>
                <th>Gyűjti a csipkés cintányért</th>
            </tr>
            <tr>
                <th  colspan="2">
                    <a href="https://www.instagram.com/zslds_david/" target=”_blank”>
                        <img src="../resources/logos/instagram_logo.png" alt="instagram" class="icon-for-social-media">
                    </a>
                    <a href="https://www.youtube.com/channel/UCme5X3OWjICUCd-MWTeuYIA" target=”_blank”>
                        <img src="../resources/logos/youtube_logo.png" alt="youtube" class="icon-for-social-media">
                    </a>
                </th>
            </tr>
        </table>
    </div>
    <div class="flexbox">
        <table class="info-table">
            <caption>Czink Zsombor</caption>
            <tr>
                <th>Foglalkozása:</th>
                <th>Lovasoktató, basszusgitáros</th>
            </tr>
            <tr>
                <th>Hobbi:</th>
                <th>Lovaglás, Gitározás</th>
            </tr>
            <tr>
                <th>Funfact:</th>
                <th>Hedonista</th>
            </tr>
            <tr>
                <th  colspan="2">
                    <a href="https://www.instagram.com/zsomborczink/" target=”_blank”>
                        <img src="../resources/logos/instagram_logo.png" alt="instagram" class="icon-for-social-media">
                    </a>
                </th>
            </tr>
        </table>
        <img src="../resources/profiles/Zsombi.jpg" alt="Zsombi - basszusgitar" class="photo">
    </div>
    <div class="flexbox">
        <img src="../resources/profiles/Robi.jpg" alt="Robi - gitar" class="photo">
        <table class="info-table">
            <caption>Császár Róbert</caption>
            <tr>
                <th>Foglalkozása:</th>
                <th>Operatőr, Vágó, Gitáros</th>
            </tr>
            <tr>
                <th>Hobbi:</th>
                <th>VFX</th>
            </tr>
            <tr>
                <th>Funfact:</th>
                <th>Tudáséhes utómunka terén</th>
            </tr>
            <tr>
                <th  colspan="2">
                    <a href="https://www.instagram.com/robertcsaszar/" target=”_blank”>
                        <img src="../resources/logos/instagram_logo.png" alt="instagram" class="icon-for-social-media">
                    </a>
                    <a href="https://www.youtube.com/channel/UCOMdnUfX42_duI56fk3zDwg" target=”_blank”>
                        <img src="../resources/logos/youtube_logo.png" alt="youtube" class="icon-for-social-media">
                    </a>
                </th>
            </tr>
        </table>
    </div>
    <div class="flexbox">
        <table class="info-table">
            <caption>Diószegi Kiki</caption>
            <tr>
                <th>Foglalkozása:</th>
                <th>Ének, vocal producing</th>
            </tr>
            <tr>
                <th>Hobbi:</th>
                <th>Edzés, Stúdiózás</th>
            </tr>
            <tr>
                <th>Funfact:</th>
                <th>Színpad- és adrenalin függő</th>
            </tr>
            <tr>
                <th  colspan="2">
                    <a href="https://www.instagram.com/kiki_dioszegi/" target=”_blank”>
                        <img src="../resources/logos/instagram_logo.png" alt="instagram" class="icon-for-social-media">
                    </a>
                    <a href="https://www.youtube.com/c/KikiDi%C3%B3szegi" target=”_blank”>
                        <img src="../resources/logos/youtube_logo.png" alt="youtube" class="icon-for-social-media">
                    </a>
                </th>
            </tr>
        </table>
        <img src="../resources/profiles/Kiki.jpg" alt="Kiki - enek" class="photo">
    </div>
</div>
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