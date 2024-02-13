<h2>Kontakt</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos omnis corporis nobis quis rem voluptates quisquam eum odit tenetur amet aliquam, molestiae ullam officiis eligendi debitis eveniet delectus reprehenderit nisi?</p>  
<menu>
    <li><a href="index.php">Avaleht</a></li>
    <li><a href="portfolio.php?leht=portfoolio">Portfoolio</a></li>
    <li><a href="kontakt.php?leht=kontakt">Kontakt</a></li>
    <li><a href="kaart.php?leht=kontakt">Kaart</a></li>
</menu>
<?php
    if (!empty($_GET["leht"])) {
        $leht = htmlspecialchars($_GET["leht"]);
        $kontroll = in_array($leht, array("portfoolio", "kontakt", "kaart"));
        if ($leht == "portfoolio") {
            include("portfolio.php");
        } else if ($leht == "kontakt") {
            include("kontakt.php");
        } else if ($leht == "kaart") {
            include("kaart.php");
        }
        if ($kontroll == true) {
            include ($leht.".php");
        } else {
            echo "lehte pole!!!";
        }
    }
?>