<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">   
        <h2>Lisa uus album:</h2>
        <form action="#" method="get">
            <label for="artist">Artist:</label>
            <input type="text" name="artist" id="artist"><br>

            <label for="album">Album:</label>
            <input type="text" name="album" id="album"><br>

            <label for="aasta">Aasta:</label>
            <input type="number" name="aasta" id="aasta"><br>

            <label for="hind">Hind:</label>
            <input type="number" name="hind" id="hind"><br>
            <input type="submit" class="btn btn-success my-2" value="Lisa">
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

            $lisasql = "INSERT INTO tooted (artist, album, aasta, hind) VALUES ('$artist', '$album', '$aasta', '$hind')";
            if ($yhendus->query($lisasql) === TRUE) {
                echo "Lisatud";
            }
        }

        if(isset($_GET['action']) && $_GET['action'] == 'kustuta' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $kustutasql = "DELETE FROM tooted WHERE id=$id";
            if ($yhendus->query($kustutasql) === TRUE) {
                echo "ksututaed";
            }
        }

        if(isset($_GET['action']) && $_GET['action'] == 'muuda' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $muudasql = "SELECT * FROM tooted WHERE id = $id";
            $muuda_t = $yhendus->query($muudasql);

            if ($muuda_t->num_rows > 0) {
                $muuda_rida = $muuda_t->fetch_assoc();
                $muuda_artist = $muuda_rida["artist"];
                $muuda_album = $muuda_rida["album"];
                $muuda_aasta = $muuda_rida["aasta"];
                $muuda_hind = $muuda_rida["hind"];
                ?>
                <h2>Muuda albumit:</h2>
                <form action='#' method='get'>
                    <input type='hidden' name='action' value='salvesta_muudatus'>
                    <input type='hidden' name='id' value='$id'>

                    <label for='artist'>Artist:</label>
                    <input type='text' name='artist' id='artist' value='<?php echo $muuda_artist; ?>'><br>

                    <label for='album'>Album:</label>
                    <input type='text' name='album' id='album' value='<?php echo $muuda_album; ?>'><br>

                    <label for='aasta'>Aasta:</label>
                    <input type='text' name='aasta' id='aasta' value='<?php echo $muuda_aasta; ?>'><br>

                    <label for='hind'>Hind:</label>
                    <input type='text' name='hind' id='hind' value='<?php echo $muuda_hind; ?>'><br>
                    <input type='submit' class='btn btn-success my-2' value='Muuda'>
                </form>
                <?php
            } else {
                echo "ei toota";
            }
        }
                
        $sql = "SELECT * FROM tooted";
        $result = $yhendus->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<h2>Kõik tooted:</h2>";
            while($row = $result->fetch_assoc()) {
                echo "<p>";
                echo "Artist: " . $row["artist"] . " - Album: " . $row["album"] . " - Aasta: " . $row["aasta"] . " - Hind: " . $row["hind"] . "€";
                echo " <a href='?action=muuda&id=" . $row["id"] . "'>Muuda</a>";
                echo " <a href='?action=kustuta&id=" . $row["id"] . "' onclick=\"return confirm('Kindel v?');\">Kustuta</a>";
                echo "</p>";
            }
        }
        ?>

        <h2><br>Ylesanne 4</h2>
        
        <?php
        $sql = "SELECT kliendid.eesnimi, kliendid.perenimi, arved.kogus, tooted.album FROM kliendid INNER JOIN arved ON arved.kliendid_id = kliendid.id INNER JOIN tooted ON arved.tooted_id = tooted.id;";
        $result = $yhendus->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Klient: " . $row["eesnimi"] . " " . $row["perenimi"] . " | Album: " . $row["album"] . " | Kogus: " . $row["kogus"] . "<br>";
            }
        }
        ?>
        <?php $yhendus->close();?>   
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</body>
</html>