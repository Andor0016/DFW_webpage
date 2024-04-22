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
    <link rel="stylesheet" href="../styles/discographypage.css">
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
            <a href="./members.php">Tagok</a>
            <a href="./concerts.php">Koncertek</a>
            <a href="#" class="active">Diszkográfia</a>
            <a href="./contact.php">Kapcsolat</a>
            <a href="./webshop.php">Webshop</a>
            <a href="./chatbot.php">Chatbot</a>
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
<main>
    <div id="table-outer-div">
        <table>
            <tr class="name-of-column">
                <td>Album borító:</td>
                <td>Név:</td>
                <td>Kiadás éve:</td>
                <td>Infó:</td>
            </tr>
            <tr>
                <td colspan="4" class="name-of-section">Albumok:</td>
            </tr>
            <?php
                $album_data = json_decode(file_get_contents("../data/discography/albums.json"), true);
                foreach($album_data as $album)
                { ?>
                    <tr>
                    <td>
                        <a href="<?php echo $album["spotify"]; ?>" target=”_blank”>
                            <img src="<?php echo $album["img"]; ?>" alt="<?php echo $album["alt"]; ?>" >
                        </a>
                    </td>
                    <td> <?php echo $album["name"]; ?> </td>
                    <td> <?php echo $album["year"]; ?> </td>
                    <td> <?php echo $album["numOfSong"]; ?> </td>
                    </tr>
                    <?php
                }
            ?>
            <tr>
                <td colspan="4" class="name-of-section">Singlek:</td>
            </tr>
            <?php 
                $single_data = json_decode(file_get_contents("../data/discography/singles.json"), true);
                foreach($single_data as $single)
                { ?>
                    <tr>
                    <td>
                        <a href="<?php echo $single["spotify"]; ?>" target=”_blank”>
                            <img src="<?php echo $single["img"]; ?>" alt="<?php echo $single["alt"]; ?>" >
                        </a>
                    </td>
                    <td> <?php echo $single["name"]; ?></td>
                    <td> <?php echo $single["year"]; ?></td>
                    <td>single</td>
                    </tr>
                    <?php
                }
            ?>
        </table>
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