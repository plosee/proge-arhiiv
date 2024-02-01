<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
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
                    02 - PHP - Matemaatika
                    Marten Laane
                    01.02.2024
                */
                $x = 7;
                $y = 5;
                $liitmine = $x + $y;
                $lahutamine = $x - $y;
                $korrutamine = $x * $y;
                $jagamine = $x / $y;
                echo "$x + $y = $liitmine<br>";
                echo "$x - $y = $lahutamine<br>";
                echo "$x * $y = $korrutamine<br>";
                echo "$x / $y = $jagamine<br>";
                echo "<br>";

                $mm = 275;
                $sentimeetriteks = $mm / 10;
                $meetriteks = $mm / 1000;
                $vormindatudS = sprintf('%0.2f', $sentimeetriteks);
                $vormindatudM = sprintf('%0.2f', $meetriteks);
                echo "Millimeetrid sentimeetriteks: $mm / 10 = $vormindatudS<br>";
                echo "Millimeetrid meetriteks: $mm / 1000 = $vormindatudM<br>";
                echo "<br>";

                $a = 5;
                $b = 10;
                $c = 15;
                $umbermoot = $a + $b + $c;
                $pindala = $a * $b;
                $vormindatudU = sprintf('%0.0f', $umbermoot);
                $vormindatudP = sprintf('%0.0f', $pindala);
                echo "Taisnurkse kolmnurga umbermoot: $a + $b + $c = $vormindatudU<br>";
                echo "Taisnurkse kolmnurga pindala: $a * $b = $pindala<br>";
            ?>
        </div>
        <header>
            <!-- place navbar here -->
        </header>

        <main></main>

        <footer>
            <!-- place footer here -->
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
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
