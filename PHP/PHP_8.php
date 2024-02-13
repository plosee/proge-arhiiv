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
                    08 - PHP - Ajafunktsioonid 
                    Marten Laane
                    01.02.2024
                */
                echo date('d.m.Y G:i', time());
                echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='number' name='aasta' id='aasta' value='aasta' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['aasta'])){
                    echo $_GET['aasta'] - date('Y')." aastat vana";
                }
                echo "<br>";
                // mitu paeva veel
                $koolilopp = date_create('2024-06-01');
                $tana = date_create('now');
                $diff = date_diff($tana, $koolilopp);
                echo "kooliaasta lõpuni on veel ".$diff->format('%R%a')." paeva";
                // aastaaeg
                echo "<br>";
                
                if (date('n') >= 3 && date('n') <= 5){
                    echo "<img src='<img src='https://picsum.photos/id/684/600/400' alt='talv' width='300' height='300'>";
                } else if (date('n') >= 6 && date('n') <= 8){
                    echo "<img src='<img src='https://picsum.photos/id/684/600/400' alt='talv' width='300' height='300'> suvi";
                } else if (date('n') >= 9 && date('n') <= 11){
                    echo "<<img src='<img src='https://picsum.photos/id/684/600/400' alt='talv' width='300' height='300'> talv";
                } else {
                    echo "<img src='<img src='https://picsum.photos/id/684/600/400' alt='talv' width='300' height='300'> talv";
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
