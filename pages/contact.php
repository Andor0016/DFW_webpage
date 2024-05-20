<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/contactpage.css">
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
            <a href="./members.php">Tagok</a>
            <a href="./concerts.php">Koncertek</a>
            <a href="./discography.php">Diszkográfia</a>
            <a href="#" class="active">Kapcsolat</a>
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
<main>
    <?php
    if(isset($_SESSION['isLogged']) && $_SESSION['role'] == "admin"){ 
        $messages = json_decode(file_get_contents("../data/messagesforband.json"), true);
        ?>
        <table id="admin-table">
            <tr>
                <th>Név</th>
                <th>E-mail cím</th>
                <th>Telefonszám</th>
                <th>Üzenet</th>
                <th>Státusz</th>
                <th>Gombocska</th>
            </tr>
            <?php
            foreach($messages as $message){ ?>
                <tr>
                    <td><?php echo $message["name"]; ?></td>
                    <td><?php echo $message["mail"]; ?></td>
                    <td><?php echo $message["mob"]; ?></td>
                    <td><?php echo $message["message"]; ?></td>
                    <td><?php if($message['isAnswered']){ echo "Megválaszolt";} else{echo "Nincs válasz";} ?></td>
                    <td><a href="../php/changeStatus.php&id=<?php echo $message["id"];?>"> Megválaszolom </a></td>
                </tr>
            <?php } ?>
        </table>
    <?php }
    else{ ?>
    <div class="flexbox">
        <img src="../resources/DFW_contact.jpg" alt="Zenekari pacsi" id="contact-image">
        <form method="POST" id="mssg-form-base" action="../php/addmessage.php">
            <label for="nev">Név:</label><br>
            <input type="text" name="nev" id="nev" placeholder="Példa János"><br>
            <label for="mail">E-mail cím:</label><br>
            <input type="email" name="mail" id="mail" placeholder="pelda.janos@dfw.com"><br>
            <label for="tszam">Telefonszám:</label><br>
            <input type="text" name="tszam" id="tszam" placeholder="06200000000"><br>
            <label for="mssg">Üzenet:</label><br>
            <textarea name="mssg" id="mssg" maxlength="1000" placeholder="Ide írd az üzeneted"></textarea><br>
            <input type="submit" value="Küldés" class="mssg-form-button">
        </form>
    </div>
    <div id="contact-social-buttons">
        <button onClick="window.location.href='http://www.instagram.com/downforwhateverofficial';">
            Instagram oldalunk
        </button>
        <button onClick="window.location.href='http://www.facebook.com/downforwhateverofficial';">
            Facebook oldalunk
        </button>
        <button onClick="window.location.href='https://www.facebook.com/groups/512450672212444';">
            Facebook csoportunk(Brotherhood)
        </button>
    </div>
    <?php } ?>
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