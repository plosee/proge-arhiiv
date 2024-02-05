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
                    07 - PHP - Funktsioonid
                    Marten Laane
                    01.02.2024
                */
                // Tervitus
                function Tervitus(){
                    echo "tere paiksekesekene!";
                }
                Tervitus();
                echo "<br><br>";
                // Liitu uudiskirjaga
                function Uudiskiri(){
                    echo "<div class='form-group'>
                        <label for='exampleInputEmail1'>Email aadress</label>
                        <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Sisesta email'>
                        <small id='emailHelp' class='form-text text-muted'>ei jaga sinu emaili lapsuke.</small>
                        <button type='submit' class='btn btn-primary'>Liitu</button></div>";
                }
                Uudiskiri();
                echo "<br><br>";
                // Kasutajanimi ja email
                function Kasutaja($kasutaja){
                    echo strtolower($kasutaja)."@hkhk.edu.ee";
                    echo "<br>";
                    echo substr(sha1(mt_rand()),5,7);
                }
                Kasutaja("munandivahk");
                echo "<br><br>";
                // Arvud
                function Arvud(){
                    echo "<form action='#' method='get'>
                        <input type='number' name='min' id='min' value='min' />
                        <input type='number' name='max' id='max' value='max' />
                        <input type='number' name='step' id='step' value='step' />
                        <input type='submit' value='Saada' />
                        </form>";
                    if (isset($_GET['min']) && isset($_GET['max']) && isset($_GET['step'])){
                        for ($i = $_GET['min']; $i <= $_GET['max']; $i+=$_GET['step']) {
                            echo $i." ";
                        }
                    }
                }
                Arvud();
                echo "<br><br>";
                // Ristkuliku pindala
                function Pindala($kylg1, $kylg2){
                    echo "Ristkyliku pindala on ".$kylg1 * $kylg2;
                }
                echo "<form action='#' method='get'>
                    <input type='number' name='kylg1' id='kylg1' value='kylg1' />
                    <input type='number' name='kylg2' id='kylg2' value='kylg2' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['kylg1']) && isset($_GET['kylg2'])){
                    Pindala($_GET['kylg1'], $_GET['kylg2']);
                }
                echo "<br><br>";
                // isikukood
                function isikukood(){
                    echo "<form action='#' method='get'>
                        <input type='number' name='isikukood' id='isikukood' value='isikukood' />
                        <input type='submit' value='Saada' />
                        </form>";
                    if (isset($_GET['isikukood'])){
                        if (strlen($_GET['isikukood']) == 11){
                            echo "Isikukood on korrektne";
                        } else {
                            echo "Isikukood on vale";
                        }
                        switch (substr($_GET['isikukood'], 0, 1)){
                            case 1:
                                $aasta = "18";
                                $sugu = "mees";
                                break;
                            case 2:
                                $aasta = "18";
                                $sugu = "naine";
                                break;
                            case 3:
                                $aasta = "19";
                                $sugu = "mees";
                                break;
                            case 4:
                                $aasta = "19";
                                $sugu = "naine";
                                break;
                            case 5:
                                $aasta = "20";
                                $sugu = "mees";
                                break;
                            case 6:
                                $aasta = "20";
                                $sugu = "naine";
                                break;
                            default:
                                echo "Vale isikukood";
                                break;
                        }
                        echo "<br> Sugu: ".$sugu;
                        echo "<br> Sünd: ".$aasta.substr($_GET['isikukood'], 1, 2);
                    }
                }
                isikukood();
                echo "<br><br>";
                // Head motted
                function Motted(){
                    $alus = array("maja", "auto", "kool");
                    $oeldis = array("on", "ei ole", "võib olla");
                    $sihitis = array("armas", "suur", "ilus");
                    echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];
                }
                Motted();
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
