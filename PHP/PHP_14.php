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
            <div class="row">
                <?php
                $pildid = array(
                    array("src" => "pildid/nameless1.jpg", "alt" => "nimetu 1"),
                    array("src" => "pildid/nameless2.jpg", "alt" => "nimetu 2"),
                    array("src" => "pildid/nameless3.jpg", "alt" => "nimetu 3"),
                    array("src" => "pildid/nameless4.jpg", "alt" => "nimetu 4"),
                    array("src" => "pildid/nameless5.jpg", "alt" => "nimetu 5"),
                    array("src" => "pildid/nameless6.jpg", "alt" => "nimetu 6"),
                );

                for ($i = 0; $i < 3; $i++) {
                    echo '<div class="col-2">';
                    echo '<img src="' . $pildid[$i]["src"] . '" alt="' . $pildid[$i]["alt"] . '" class="img-fluid" />';
                    echo '</div>';
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
