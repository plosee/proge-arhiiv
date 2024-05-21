<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spsps</title>
</head>

<body>
    <div class="container">   
        <h2>lisa siia asjad:</h2>
        <form action="#" method="get">
            <label for="artist">artist: </label>
            <input type="text" name="artist" id="artist"><br>

            <label for="album">album: </label>
            <input type="text" name="album" id="album"><br>

            <label for="aasta">aasta: </label>
            <input type="number" name="aasta" id="aasta"><br>

            <label for="hind">hind: </label>
            <input type="number" name="hind" id="hind"><br>
            <button type="button">lisa</button>
        </form>

        <?php        
        if(!empty($_GET['artist']) && !empty($_GET['album']) && !empty($_GET['aasta']) && !empty($_GET['hind'])){
            $artist = $_GET["artist"];
            $album = $_GET["album"];
            $aasta = $_GET["aasta"];
            $hind = $_GET["hind"];

            $artist = mysqli_real_escape_string($yhendus, $artist);
            $album = mysqli_real_escape_string($yhendus, $album);
            $aasta = mysqli_real_escape_string($yhendus, $aasta);
            $hind = mysqli_real_escape_string($yhendus, $hind);

            $lisaasjad = "INSERT INTO tooted (artist, album, aasta, hind) VALUES ('$artist', '$album', '$aasta', '$hind')";
            if ($yhendus -> query($lisaasjad) === TRUE) {
                echo "tehtud";
            }
        }

        if(isset($_GET['action']) && $_GET['action'] == 'kustuta' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $kustuta = "DELETE FROM tooted WHERE id=$id";
            if ($yhendus -> query($kustuta) === TRUE) {
                echo "ksututaed";
            }
        }

        if(isset($_GET['action']) && $_GET['action'] == 'muuda' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $muuda1 = "SELECT * FROM tooted WHERE id = $id";
            $muudavastus = $yhendus -> query($muuda1);

            if ($muuda_t -> num_rows > 0) {
                $muudarida = $muuda_t -> fetch_assoc();
                $muudaartist = $muuda_rida["artist"];
                $muudaalbum = $muuda_rida["album"];
                $muudaaasta = $muuda_rida["aasta"];
                $muudahind = $muuda_rida["hind"];
                ?>
                <h2>muuda albumit</h2>
                <form action='#' method='get'>
                    <input type='hidden' name='action' value='salvestamuudatus'>
                    <input type='hidden' name='id' value='$id'>

                    <label for='artist'>artist:</label>
                    <input type='text' name='artist' id='artist' value='<?php echo $muudaartist; ?>'>
                    <br>

                    <label for='album'>album:</label>
                    <input type='text' name='album' id='album' value='<?php echo $muudaalbum; ?>'>
                    <br>

                    <label for='aasta'>aasta:</label>
                    <input type='text' name='aasta' id='aasta' value='<?php echo $muudaaasta; ?>'>
                    <br>

                    <label for='hind'>hind:</label>
                    <input type='text' name='hind' id='hind' value='<?php echo $muudahind; ?>'>
                    <br>
                    <button type='button' value='muuda'>muuda</button> 
                </form>
                <?php
            } else {
                echo "ei toota";
            }
        }
                
        $sql = "SELECT * FROM tooted";
        $result = $yhendus -> query($sql);
        
        if ($result -> num_rows > 0) {
            echo "<h2>koik asjad</h2>";
            while($row = $result -> fetch_assoc()) {
                echo "<p>";
                echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . " - Aasta: " . $row["aasta"] . " - Hind: " . $row["hind"] . "€";
                echo " <a href='?action=muuda&id=" . $row["id"] . "'>muuda</a>";
                echo " <a href='?action=kustuta&id=" . $row["id"] . "' onclick=\"return confirm('Kkindel?');\">kustutta</a>";
                echo "</p>";
            }
        }
        ?>

        <h2><br>ylesane 4</h2>
        
        <?php
        $andmebaasidyhendus = "SELECT kliendid.eesnimi, kliendid.perenimi, arved.kogus, tooted.album FROM kliendid INNER JOIN arved ON arved.kliendid_id = kliendid.id INNER JOIN tooted ON arved.tooted_id = tooted.id;";
        $result = $yhendus -> query($andmebaasidyhendus);

        if ($result -> num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "inimeene  " . $row["eesnimi"] . " " . $row["perenimi"] . " <br> album:  " . $row["album"] . " <br> kogus: " . $row["kogus"] . "<br>";
            }
        }
        ?>
        <?php $yhendus -> close();?>   
    </div>
</body>
</html>
