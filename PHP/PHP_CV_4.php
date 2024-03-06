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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <script src="https://kit.fontawesome.com/5f11feec13.js" crossorigin="anonymous"></script>

        <style>
            *{
                margin:0;
                padding: 0;
            }
            .btn{
                background-color: #7d03ff !important;
                color:#ffffff !important;
                height: 60px !important;
            }
            .row{
                margin-top: 75px;
            }
            .jalg{
                height: 250px;
                background-color: #7d03ff !important;
                color: #ffffff !important;
                margin: 0;
                padding: 0;
                
            }
        </style>

    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="#"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand" href='#'>
                            laane.ee
                        </a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="PHP_CV_4.php">Avaleht</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tehtud.php?leht=tehtud">Tehtud Tiid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="oskused.php?leht=oskused">Oskused</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="konntakt.php?leht=konntakt">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php?leht=admin">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
                $kontroll = in_array($leht, array("portfoolio", "kontakt", "kaart"));
                if (!empty($_GET["leht"])) {
                    include($_GET["leht"].".php");
                }
                if ($kontroll == true) {
                    include ($leht.".php");
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Sellist lehte ei eksisteeri</div>";
                }
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <?php
                            // tekstid.txt
                            // 0-5 rida on teksti
                            // 6-7 rida on pildi asukoht
                                $allikas = "tekstid.txt";
                                $fail = fopen($allikas, "r");
                                $tekst = fread($fail, filesize($allikas));
                                if ($fail) {
                                    $tekstimassiiv = explode("\n", fread($fp, filesize($filename)));
                                }
                                echo "<h1 class='display-4 fw-bold'>".$tekstimassiv[0]."</h1>
                                <h3 class='card-title text-muted'>".$tekstimassiv[1]."</h3>
                                <p class='card-text mb-4 mt-3 text-muted h5'>".$tekstimassiv[2]."</p>";
                            ?>
                            <button type="button" class='btn'>osta mind <i class="fa-regular fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <img src=<?php echo "'".$tekstimassiiv[6]."'";?> class="object-fit-contain rounded-circle img-fluid">
                </div>
            </div>

            <div class="row text-center">
                <h1>
                    <?php
                    echo $tekstimassiiv[3];
                    ?>
                </h1>
                <p class="text-muted"><?php echo $tekstimassiiv[4]; ?></p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <img src=<?php echo "'".$tekstimassiiv[6]."'"; ?> class="img-fluid">
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="card-text mb-4 mt-3 text-muted h5"><?php echo $tekstimassiiv[5]; ?></p>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <span class="kogemus">
                                        <h3>3+</h3>
                                    </span>
                                    <p class='text-muted'>aastat<br>kogemust</p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <span class="projekt">
                                        <h3>2+</h3>
                                    </span>
                                    <p class='text-muted'>projekti<br>tehtud</p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <span class="ettevote">
                                        <h3>0+</h3>
                                    </span>
                                    <p class='text-muted'>ettevottes<br>tootanud</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <button class=btn>lae alla profesionaalne viirus <i class="fa-solid fa-download"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>  
        </div>
        <div class="jalg">
            <div class="row align-items-center h-100">
                <p class="small text-center text-light"><i class="fa-solid fa-copyright"></i> laane</p>
            </div>
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
