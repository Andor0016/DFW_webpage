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
    <a href="../index.html" class="HeaderPicture">
        <img src="../resources/logos/DFW_LOGO_WHT.png" alt="Down For Whatever" title="Down For Whatever" id="band-logo-header">
    </a>
    <div class="Navigationbar">
        <a href="../index.html">Kezdőlap</a>
        <a href="./members.html">Tagok</a>
        <a href="./concerts.php">Koncertek</a>
        <a href="#" class="active">Diszkográfia</a>
        <a href="./contact.html">Kapcsolat</a>
        <a href="./webshop.html">Webshop</a>
        <a href="./chatbot.html">Chatbot</a>
        <a href="./login.html">Bejelentkezés</a>
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
                {
                    echo "<tr>";
                    echo "<td>";
                    echo "<a href=\"" . $album["spotify"] . "\" target=”_blank”>";
                    echo "<img src=\"" . $album["img"] . "\" alt=\"" . $album["alt"] . " borító\">";
                    echo "</a>";
                    echo "</td>";
                    echo "<td>" . $album["name"] . "</td>";
                    echo "<td>" . $album["year"] . "</td>";
                    echo "<td>" . $album["numOfSong"] . "</td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <td colspan="4" class="name-of-section">Singlek:</td>
            </tr>
            <?php 
                $single_data = json_decode(file_get_contents("../data/discography/singles.json"), true);
                foreach($single_data as $single)
                {
                    echo "<tr>";
                    echo "<td>";
                    echo "<a href=\"" . $single["spotify"] . "\" target=”_blank”>";
                    echo "<img src=\"" . $single["img"] . "\" alt=\"" . $single["alt"] . " borító\">";
                    echo "</a>";
                    echo "</td>";
                    echo "<td>" . $single["name"] . "</td>";
                    echo "<td>" . $single["year"] . "</td>";
                    echo "<td>single</td>";
                    echo "</tr>";
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