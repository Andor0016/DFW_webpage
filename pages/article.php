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
    <link rel="stylesheet" href="../styles/articlepage.css">
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
        <a href="members.html">Tagok</a>
        <a href="concerts.php">Koncertek</a>
        <a href="discography.php">Diszkográfia</a>
        <a href="contact.html">Kapcsolat</a>
        <a href="webshop.php" class="active">Webshop</a>
        <a href="login.html">Bejelentkezés</a>
    </div>
    <hr>
</header>
<main>
    <div id="basket_row">
        <a href="./basket.php">
            <img src="../resources/logos/basket_icon.png" alt="Kosár" class="icon-for-basket">
        </a>
    </div>
    <?php
    $webshop_data = json_decode(file_get_contents("../data/webshop.json"), true);
    foreach($webshop_data as $article) 
    {
        if($article['id'] == $_GET['id'])
        {
            $article_name = $article['name'];
            $article_price = $article['price'];
            $article_description = $article['description'];
            $article_img = $article['img'];
            $article_alt = $article['alt'];
            $article_options = $article['options'];
            break;
        }
    }

    $article_options = explode(",", $article_options);

    ?>
    <div class="flexbox">
        <img src=<?php echo $article_img; ?> alt= <?php echo $article_alt; ?> id="article-picture">
        <div class="description-for-article">
            <h1><?php echo $article_name; ?></h1>
            <p id="article-infobox"><?php echo $article_description; ?></p>
            <h3><?php echo $article_price; ?> HUF</h3>
            <form method="get" id="article-data-form">
                <label for="polo-meret">Válaszd ki a póló méretét:</label><br>
                <select name="polo-meret" id="polo-meret">
                    <?php
                        if($_GET['id'] == 0)
                        {
                            $concert_data = json_decode(file_get_contents("../data/concerts.json"), true);
                            foreach($concert_data as $concert)
                            {
                                if($concert["date"] >= date("Y-m-d"))
                                {
                                ?>
                                    <option value=<?php echo $concert['date'] . " " . $concert['town']; ?>><?php echo $concert['date'] . " " . $concert['town']; ?></option>
                                <?php
                                }
                            }
                        }
                        else
                        {
                            foreach($article_options as $option)
                            {
                            ?>
                                <option value=<?php echo $option; ?>><?php echo $option; ?></option>";
                            <?php
                            }
                        }
                        ?>
                        </select> <br>
                <label for="mennyiseg">Mennyiség:</label><br>
                <input type="number" name="mennyiseg" id="mennyiseg" min="1"> <br>
                <input type="submit" value="Kosárba teszem" class="to-basket-button">
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