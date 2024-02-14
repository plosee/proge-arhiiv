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
                echo '<form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="minu_fail"><br>
                <input type="submit" value="Lae üles!">
                </form>';

                if (isset($_FILES['minu_fail'])){
                    $failinimi = $_FILES['minu_fail']['name'];
                    $faili_tuup = $_FILES['minu_fail']['type'];
                    $faili_suurus = $_FILES['minu_fail']['size'];
                    $faili_ajutine_nimi = $_FILES['minu_fail']['tmp_name'];
                    $faili_veakood = $_FILES['minu_fail']['error'];
                    $lubatud_tuubid = array('image/jpeg', 'image/jpg');
                    if (in_array($faili_tuup, $lubatud_tuubid)){
                        if ($faili_veakood === 0){
                            if ($faili_suurus <= 1000000){
                                $faili_nimi = uniqid('', true).'.'.$failinimi;
                                $faili_sihtkoht = 'pildid/'.$faili_nimi;
                                move_uploaded_file($faili_ajutine_nimi, $faili_sihtkoht);
                                echo "Faili üleslaadimine õnnestus!";
                                echo "<a href='".$faili_sihtkoht."'><img src='".$faili_sihtkoht."' class='img-fluid'/></a>";
                            } else {
                                echo "Fail on liiga suur!";
                            }
                        } else {
                            echo "Tekkis viga faili üleslaadimisel!";
                        }
                    } else {
                        echo "Vale failitüüp!";
                    }
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
