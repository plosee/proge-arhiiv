<?php
include ("config.php");
session_start();
?>

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
            <h1>uudised</h1>
            <hr>
        
            <?php
            $uudiseid_lehel = 4;
            $uudiseid_kokku_paring = "SELECT COUNT('id') FROM uudised";
            $lehtede_vastus = mysqli_query($yhendus, $uudiseid_kokku_paring);
            $uudiseid_kokku = mysqli_fetch_array($lehtede_vastus);
            $lehti_kokku = $uudiseid_kokku[0];
            $lehti_kokku = ceil($lehti_kokku/$uudiseid_lehel);
        // oh sa jeesus mitu muuutijat
            echo 'Lehekülgi kokku: ' . $lehti_kokku . '<br>';
            echo 'Uudiseid lehel: ' . $uudiseid_lehel . '<br>';

            if (isset($_GET['leht'])) {
                $leht = $_GET['leht'];
            } else {
                $leht = 1;
            }

            $start = ($leht-1) * $uudiseid_lehel;
            $paring = "SELECT * FROM uudised LIMIT $start, $uudiseid_lehel";
            $vastus = mysqli_query($yhendus, $paring);

            while ($rida = mysqli_fetch_assoc($vastus)){
                echo '<h3>'.$rida['pealkiri'].'</h3>';
                echo '<p>'.$rida['uudis'].'</p>';
            }

            $eelmine = $leht - 1;
            $jargmine = $leht + 1;

            if ($leht>1) {
                echo "<a href=\"?leht=$eelmine\">Eelmine</a> ";
            }
            if ($lehti_kokku >= 1) {
                for ($i=1; $i<=$lehti_kokku ; $i++) { 
                    if ($i==$leht) {
                        echo "<b><a href=\"?leht=$i\">$i</a></b> ";
                    } else {
                        echo "<a href=\"?leht=$i\">$i</a> ";
                    }
                    
                }
            }
            if ($leht<$lehti_kokku) {
            echo "<a href=\"?leht=$jargmine\">Järgmine</a> ";
            }
            ?>
        <?php
        $yhendus->close();
        ?>   
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