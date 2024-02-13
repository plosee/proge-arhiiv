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
                    09 - PHP - Tekstifunktsioonid
                    Marten Laane
                    07.02.2024
                */
                // nimi suure algustähega
                echo "<form action='#' method='get'>
                    <input type='text' name='nimi' id='nimi' value='nimi' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['nimi'])){
                    echo "Tere, ".ucfirst(strtolower($_GET['nimi']));
                }
                // tekst punktidega
                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='tekst' id='tekst' value='tekst' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['tekst'])){
                    for ($i = 0; $i < strlen($_GET['tekst']); $i++){
                        echo $_GET['tekst'][$i].".";
                    }
                }
                // roppude sonade asendamine
                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='ropp' id='ropp' value='ropp' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['ropp'])){
                    $ropp = $_GET['ropp'];
                    $asendus = array('perse', 'kurat', 'tatt');
                    $asendatud = str_replace($asendus, '****', $ropp);
                    echo $asendatud;
                }
                // nimi emailiks
                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='nimi' id='nimi' value='nimi' />
                    <input type='text' name='perenimi' id='perenimi' value='perenimi' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['nimi']) && isset($_GET['perenimi'])){
                    $eestitahed = array('ä', 'ö', 'ü', 'õ', 'š', 'ž');
                    $asendus2 = array('a', 'o', 'u', 'o', 's', 'z');
                    $nimi = str_replace($eestitahed, $asendus2, $_GET['nimi']);
                    $perenimi = str_replace($eestitahed, $asendus2, $_GET['perenimi']);
                    echo $nimi.".".$perenimi."@hkhk.ee";
                }
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
