<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Báló Andor">
    <meta name="description" content="Webterv projekt, a Down For Whatever zenekar általunk újragondolt változata.">
    <meta name="keywords" content="Down For Whatever, DFW, zenekar, Mondd el">
    <title>Down For Whatever</title>
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/webshoppage.css">
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
            <a href="#" class="active">Webshop</a>
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
<div id="basket_row">
        <a href="./basket.php">
            <img src="../resources/logos/basket_icon.png" alt="Kosár" class="icon-for-basket">
        </a>
    </div>
    <div class="flexbox">
        <?php 
            $webshop_data = json_decode(file_get_contents("../data/webshop.json"), true);

        foreach($webshop_data as $article) 
        { ?>
            <div class="article-on-page">
                <img src= <?php echo $article['img']; ?> alt= <?php echo $article['alt']; ?>>
                <h2><?php echo $article['name']; ?></h2>
                <h3><?php echo $article['price'] ?> HUF</h3>
                <h5><?php echo substr($article['description'],0,30); ?>...</h5>
                <a href="./article.php?id=<?php echo $article['id'] ?>"> Részletek</a><br>
            </div>
        <?php
        }
        if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){ ?>
            <div class="article-on-page">
                <img src="../resources/logos/add_plus_icon.png" alt="Elem hozzáadása">
                <h2>Termék hozzáadása</h2>
                <a href="./addarticle.php">Részletek</a><br>
            </div>
        <?php } ?>
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