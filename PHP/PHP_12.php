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
                    12 - PHP - CSV
                    Marten Laane
                    07.02.2024
                */
                // mingi string asi
                echo "<form action='#' method='get'>
                    <input type='text' name='start' id='start' />
                    <input type='text' name='lopp' id='lopp' />
                    <input type='submit' value='Saada' />
                    </form>";

                if (isset($_GET['start']) && isset($_GET['lopp'])){
                    if (strlen($_GET['start']) == 5 && $_GET['start'][3] == ':' && str_contains($_GET['lopp'], ':') && $_GET['start'][3] == ':' && strlen($_GET['lopp']) == 5){
                        $ex1 = explode(":", $_GET['start']);
                        $ex2 = explode(":", $_GET['lopp']);
                        echo $ex1[0]-$ex2[0]."tundi ja ".$ex1[1]-$ex2[1]."minutit";
                    }
                }
                // csv asi
                echo '<br>';
                $fail = 'tootajad.csv';
                $mp = 0;
                $np = 0;
                $ma = 0;
                $na = 0;
                $maxm = 0;
                $maxn = 0;

                $csv = fopen($fail, 'r') or die('Ei saa avada');
                while(!feof($csv)){
                    $rida = fgetcsv($csv, 0, ';');
                    if ($rida[1] == 'm'){
                        $mp += $rida[2];
                        $ma ++;
                        $maxm = max($maxm, $rida[2]);
                    }
                    if ($rida[1] == 'n'){
                        $np += $rida[2];
                        $na ++;
                        $maxn = max($maxn, $rida[2]);
                    }
                }
                fclose($csv);
                $keskm = $ma > 0 ? round($mp / $ma) : 0;
                $keskn = $na > 0 ? round($np / $na) : 0;
                echo "Meeskonnas on ".$ma." meest keskmine palk on ".$keskm." suurim palk on ".$maxm."<br>";
                echo "Meeskonnas on ".$na." naist keskmine palk on ".$keskn." suurim palk on ".$maxn;
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
