<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <h1>Harjutus</h1>
            <?php
                /*
                    06 - PHP - Tsuklid
                    Marten Laane
                    05.02.2024
                */

                // Genereeri arvud 1-100
                for ($i = 1; $i <= 100; $i++) {
                    echo $i;
                    if ($i % 10){
                        echo ". ";
                    } else {
                        echo "<br><br>";
                    }
                }
                // Rida
                for ($i = 1; $i <= 10; $i++) {
                    echo "*";
                }
                // Rida 2
                for ($i = 1; $i <= 10; $i++) {
                    echo "<br>*";
                }
                // Ruut
                echo "<br>";
                echo '<form action="#" method="get"> <input type="number" name="ruut" id="ruut"> <input type="submit" value="ruudusta"> </form>';
                for ($i = 1; $i <= $_GET['ruut']; $i++) {
                    echo "<br>";
                    for ($k = 1; $k <= $_GET['ruut']; $k++) {
                        echo "* ";
                    }
                    
                }
                // Kahanev
                for ($i = 10; $i >= 1; $i--) {
                    if ($i % 2 == 0) {
                        echo "<br>".$i;
                    }
                }
                echo "<br> <br>";
                // Kolmega jagunevad
                for ($i = 3; $i <= 100; $i += 3) {
                    echo " ".$i;
                }
                echo "<br><br>";
                // Massiivid ja tsuklid
                $poisid = array("jaanus", "jaak", "madis");
                $tydrukud = array("kati", "kertu", "kaisa");
                for ($i = 0; $i < count($poisid); $i++) {
                    echo $poisid[$i]." ".$tydrukud[$i]."<br>"; 
                }
                echo "<br><br>";
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
