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
    <link rel="stylesheet" href="../styles/concertspage.css">
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
        <a href="#" class="active">Koncertek</a>
        <a href="./discography.php">Diszkográfia</a>
        <a href="./contact.html">Kapcsolat</a>
        <a href="./webshop.php">Webshop</a>
        <a href="./chatbot.html">Chatbot</a>
        <a href="./login.html">Bejelentkezés</a>
    </div>
    <hr>
</header>
<main>
    <h1 id="upper-text" >Hol találkozunk?</h1>
    <div class="flexbox">
        <table>
            <?php
                $concerts_data = json_decode(file_get_contents("../data/concerts.json"), true);
                
                foreach ($concerts_data as $concert) {
                    if($concert["date"] >= date("Y-m-d"))
                    { ?>
                    <tr>
                    <td> <?php echo $concert["date"]; ?> </td>
                    <td> <?php echo $concert["town"]; ?> </td>
                    <td> <?php echo$concert["place"]; ?> </td>
                    <td><a href="./article.php?id=0">Jegyvásárlás</a></td>
                    </tr>
                    <?php 
                    }
                } 
            ?>
        </table>
        <img src="../resources/DFW_koncert.jpg" alt="koncert hangulatfoto" id="band-on-stage">
    </div>
    <h2 id="bottom-text">További dátumok hamarosan...</h2>
    <div class="admin-panel-concerts">
        <h3>Koncert hozzáadása:</h3>
        <form action="../php/addconcert.php" method="post">
            <label for="date">Dátum:</label>
            <input type="date" id="date" name="date" required>
            <label for="town">Város:</label>
            <input type="text" id="town" name="town" required>
            <label for="place">Helyszín:</label>
            <input type="text" id="place" name="place" required>
            <input type="submit" value="Koncert hozzáadása">
        </form>
        <h3>
            <?php
                $mssg = json_decode(file_get_contents("../data/responsemessages.json"), true);
                if(isset($_GET["response"]))
                {
                    echo $mssg[$_GET["response"]];
                }
            ?>
        </h3>
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