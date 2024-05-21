<?php include ("C:/xampp/htdocs/KT/config.php"); session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

$hoonetyybid = "SELECT tyyp FROM tyybid";
$hoonetyybidparis = $yhendus -> query($hoonetyybid);
$tyybid = [];
while ($tyyp = $hoonetyybidparis -> fetch_assoc()) {
    $tyybid[] = $tyyp['tyyp'];
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lisa hoonbe</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
    >
</head>
<body>
    <div class="container">
        <h1> lisa asututs</h1>
        <hr>
        <a href="/KT/admin">siit tagasi</a>
        <br>
        <br>
        <form method="post">
            <label for="nimi">nimi </label>
            <input type="text" name="nimi" id="nimi" required><br>

            <label for="aadress">aadreess</label>
            <input type="text" name="aadress" id="aadress" required><br>

            <label for="tyyp">tyyp</label>
            <select name="tyyp" id="tyyp" required>
                <?php foreach ($tyybid as $tyyp) { ?>
                    <option value="<?php echo $tyyp; ?>"><?php echo $tyyp; ?></option>
                <?php } ?>
            </select><br>         

            <input type="submit" class="btn" value="salvesta">
        </form>
        <?php
        if(!empty($_POST['nimi']) && !empty($_POST['aadress']) && !empty($_POST['tyyp'])){
            $nimi = $_POST['nimi'];
            $aadress = $_POST['aadress'];
            $tyyp = $_POST['tyyp'];

            $lisahoone = "INSERT INTO kohad (nimi, asukoht, tyyp) VALUES ('$nimi', '$aadress', '$tyyp')";
            if ($yhendus -> query($lisahoone) === TRUE){
                echo "hoone lisatud";
                header("Location: /KT/admin/");
                exit;
            }
        }
        ?>

        <?php $yhendus->close(); ?>   
    </div>
    </body>
</html>
