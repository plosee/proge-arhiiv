<?php include ("C:/xampp/htdocs/KT/config.php"); session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

if(isset($_GET['koht'])) {
    $valitudkohtid = $_GET['koht'];
    $kohtparing = "SELECT * FROM kohad WHERE id = '$valitudkohtid'";
    $valitudkoht = $yhendus -> query($kohtparing);
    $row = mysqli_fetch_assoc($valitudkoht);

    // lol head muutujanimes
    $tyybidd = "SELECT tyyp FROM tyybid";
    $tyybiddd = $yhendus -> query($tyybidd);
    $tyybid = [];
    while ($tyyp = $tyybiddd -> fetch_assoc()) {
        $tyybid[] = $tyyp['tyyp'];
    }
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muuda asutust</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
    >
</head>
<body>
    <div class="container">
        <h1>muuda maja <?php echo $row['nimi']; ?>i</h1>
        <hr>
        <a href="/KT/admin">siit saad tahagsi</a>
        <br>
        <br>
        <form method="post">
            <label for="nimi">nimi</label>
            <input type="text" name="nimi" id="nimi" value="<?php echo $row['nimi']; ?>" required><br>

            <label for="aadress">aadress</label>
            <input type="text" name="aadress" id="aadress" value="<?php echo $row['asukoht']; ?>" required><br>

            <label for="tyyp">tyyp</label>
            <select name="tyyp" id="tyyp" required>
                <?php foreach ($tyybid as $tyyp) { ?>
                    <option value="<?php echo $tyyp; ?>" <?php if ($tyyp === $row['tyyp']) echo 'selected'; ?>><?php echo $tyyp; ?></option>
                <?php } ?>
            </select><br>         

            <input type="submit" class="btn" value="Salvesta">
        </form>
        <?php
        if(!empty($_POST['nimi']) && !empty($_POST['aadress']) && !empty($_POST['tyyp'])){
            $nimi = $_POST['nimi'];
            $aadress = $_POST['aadress'];
            $tyyp = $_POST['tyyp'];

            $muudamaja = "UPDATE kohad SET nimi='$nimi', asukoht='$aadress', tyyp='$tyyp' WHERE id = '$valitudkohtid'";
            if ($yhendus -> query($muudamaja) === TRUE){
                echo "hoone muudatud";
                header("Location: /KT/admin/");
                exit;
            }
        }
        ?>
        <?php $yhendus->close(); ?>   
    </div>
    </body>
</html>
