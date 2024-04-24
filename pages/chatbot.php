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
    <link rel="stylesheet" href="../styles/chatbotpage.css">
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
            <a href="./discography.php">Diszkográfia</a>
            <a href="./contact.php">Kapcsolat</a>
            <a href="./webshop.php">Webshop</a>
            <a href="#" class="active">Chatbot</a>
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
    <div id="chat-area">
        <div id="info-area">
            <p>A chatbot számára a következő szavakat tudod megadni: koncertek, elérhetőség, tagok, webshop, termékek, fiók, zenekar.
                A tanítása folyamatban van, egyelőre csak ezekre tud választ adni, ilyen formában.</p>
        </div>
        <hr>
        <div class="messages-area">
            <?php 
                $responses = json_decode(file_get_contents("../data/responsemessages.json"), true);
            ?>
              <div class="message">
                <p><?php 
                    if(isset($_GET['message'])){
                        echo $responses[$_GET['message']];
                    }
                    else if(isset($_GET['message'])){
                        echo $responses['botdefault'];
                    }
                    else{
                        echo "Üdvözöllek! Miben segíthetek?";
                    }
                    ?></p>
              </div>
        </div>
        <hr>
        <div id="input-area">
            <a href="./chatbot.php&message=%22botconcerts%22">Koncertek</a>
            <a href="./chatbot.php&message=%22botcontact%22">Elérhetőség</a>
            <a href="./chatbot.php&message=%22botmembers%22">Tagok</a>
            <a href="./chatbot.php&message=%22botwebshop%22">Webshop</a>
            <a href="./chatbot.php&message=%22botarticle%22">Termékek</a>
            <a href="./chatbot.php&message=%22botaccount%22">Fiók</a>
            <a href="./chatbot.php&message=%22botband%22">Zenekar</a>
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