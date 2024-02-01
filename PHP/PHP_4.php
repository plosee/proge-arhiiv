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
        <!--
            04 - PHP - Tingimuslaused
            Marten Laane
            01.02.2024
        -->
        <div class="container">
            <form action="#" method="get">
                
                <h2>Jagamine</h2>
                Number 1: <input type="number" name="number1" id="number1" /><br>
                Number 2: <input type="number" name="number2" id="number2" /><br>
                <input type="submit" value="Saada" />
                <?php
                    
                    error_reporting(E_ALL ^ E_WARNING);
                    $number1 = $_GET['number1'];
                    $number2 = $_GET['number2'];
                    $jagamine = $number1 / $number2;
                    if(!empty($_GET["number1"]) && !empty($_GET["number2"])){
                        if($jagamine == 0){
                            echo "Proovid jagada 0-ga, sa tead kyll mis juhtub";
                        } else {
                            echo "Jagamise tulemus on ".$number1 / $number2;
                        }
                    } else {echo "Sisesta andmed";}
                ?>

                <h2>Kumb on vanem?</h2>
                Vanus 1: <input type="number" name="vanus1" id="vanus1" /><br>
                Vanus 2: <input type="number" name="vanus2" id="vanus2" /><br>
                <input type="submit" value="Saada" />
                <?php
                    $vanus1 = $_GET['vanus1'];
                    $vanus2 = $_GET['vanus2'];
                    if(!empty($_GET["vanus1"]) && !empty($_GET["vanus2"])){
                        if($vanus1 > $vanus2){
                            echo "Vanus 1 on vanem";
                        } else if($vanus1 < $vanus2){
                            echo "Vanus 2 on vanem";
                        } else {
                            echo "Vanused on vordsed";
                        }
                    } else {echo "Sisesta andmed";}
                ?>

                <h2>Ristkylik voi ruut</h2>
                Kylg 1: <input type="number" name="kylg1" id="kylg1" /><br>
                Kylg 2: <input type="number" name="kylg2" id="kylg2" /><br>
                <input type="submit" value="Saada" />
                <?php
                    $kylg1 = $_GET['kylg1'];
                    $kylg2 = $_GET['kylg2'];

                    if(!empty($_GET["kylg1"]) && !empty($_GET["kylg2"])){

                        if($kylg1 == $kylg2){
                            echo "Tegemist on ruuduga";
                        } else {
                            echo "Tegemist on ristkylikuga";
                        }
                    } else {echo "Sisesta andmed";}
                ?>

                <h2>Ristkylik voi ruut 2</h2>
                    <?php
                    if($kylg1 == $kylg2){
                        
                        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/SquareDefinition.svg/1024px-SquareDefinition.svg.png'>";
                    } else {
                        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Rectangle_Geometry_Vector.svg/1280px-Rectangle_Geometry_Vector.svg.png'>";
                    }
                    ?>

                <h2>Juubel</h2>
                Synniaasta: <input type="number" name="synniaasta" id="synniaasta" /><br>
                <input type="submit" value="Saada" />
                <?php
                    $synniaasta = $_GET['synniaasta'];
                    if(!empty($_GET["synniaasta"])){
                        if($synniaasta % 5 == 0){
                            echo "Juubel";
                        } else {
                            echo "Ei ole juubel";
                        }
                    } else {echo "Sisesta andmed";}
                ?>

                <h2>Hinne</h2>
                Punktid: <input type="number" name="punktid" id="punktid" /><br>
                <input type="submit" value="Saada" />
                <?php
                    $punktid = $_GET['punktid'];
                    if(!empty($_GET["punktid"])){
                        switch($punktid){
                            case ($punktid < 5):
                                echo "KASIN!";
                                break;
                            case ($punktid >= 5 && $punktid < 10):
                                echo "TEHTUD!";
                                break;
                            case ($punktid == 10):
                                echo "SUPER!";
                                break;
                        }
                    } else {echo "Sisesta andmed";}
                ?>

            </form>
        </div>

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
