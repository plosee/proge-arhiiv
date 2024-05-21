<?php include ("config.php"); session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

    <body>
        <div class="container">
            <a href="login.php">login</a><br>
            <a href="uudised.php">uudisedf</a>
            <h1>avalhet</h1>
            <br>
            <h2>Tagasiside</h2>
            <form action="#" method="get">
                <label for="nimi">nimi:</label><br>
                <input type="text" name="nimi" id="nimi"><br>
                <label for="email">email:</label><br>
                <input type="text" name="email" id="email"><br>
                <label for="sonum">s2num:</label><br>
                <textarea cols="30" rows="10" name="sonum" id="sonum"></textarea><br>
                <img src="kypsised.php"><br>
                <label for="kood">kaptcha pane kood pildilt pildi mitte thanedab ja kirjuta lihtsalt:</label><br>
                <input type="text" name="kood" id="kood"><br>
                <input type="submit" class="btn" value="saada">
            </form>
        <?php
        if(!empty($_GET['nimi']) && !empty($_GET['email']) && !empty($_GET['sonum'])){
            $nimi = $_GET['nimi']; 
            $email = $_GET['email'];
            $sonum = $_GET['sonum'];

            $kuhu = 'martenn@gmail.com@gmail.com'; 
            $pealkrii = 'tagasia7';
            $sisu = '123123123 lorem ipsum'
            $kust = 'kustm: '.$nimi.' '.$email.; 

            if ($_GET['kood'] == $_SESSION['captchatext']){
                if(mail($kuhu, $pealkrii, $sisu, $kust)){ 
                    echo "email saadtetu"; 
                    echo "<meta http-equiv=\"refresh\" content=\"2;URL='index.php'\">"; 
                    exit(); 
                } else { 
                    echo "ei saadetud haha"; 
                }
            }
        }
        ?>
        <?php $yhendus -> close();?>   
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
