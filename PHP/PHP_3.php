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

            <form method="get" action="#">
                <div class="col-sm-8">
                Trapetsi alus <input type="number" name="alus1" id="alus1"/><br>
                Trapetsi teine alus <input type="number" name="alus2" id="alus2"/><br>
                Trapetsi kõrgus <input type="number" name="korgus" id="korgus"/><br>
                    <input type="submit" value="Arvuta"/>
                </div>
                <div class="col-sm-4">
                Rombi külg <input type="number" name="kulg" id="kulg"/><br>
                    <input type="submit" value="Arvuta"/>
                </div>
                </div>
                
            </form>
            <?php
                /*
                    03 - PHP - HTML vormid
                    Marten Laane
                    01.02.2024

                    Küsi kasutajalt vajalikud parameetrid ning leia:
                    trapetsi pindala,
                    rombi ümbermõõt
                    Väljasta andmed täislausega ja ümarda 1 komakoht
                    Väljakontroll HTML vormile
                */

                // trapets
                $alus1 = $_GET['alus1'];
                $alus2 = $_GET['alus2'];
                $korgus = $_GET['korgus'];
                $pindala = ($alus1 + $alus2) / 2 * $korgus;
                $vormindatudP = sprintf('%0.1f', $pindala);
                echo "Trapetsi pindala on $vormindatudP cm2<br>";
                // romb
                $kulg = $_GET['kulg'];
                $umbermoot = $kulg * 4;
                $vormindatudU = sprintf('%0.1f', $umbermoot);
                echo "Rombi ümbermõõt on $vormindatudU cm<br>";
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
