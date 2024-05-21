<?php
include ("C:/xampp/htdocs/KT/config.php");
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

if(isset($_GET['koht'])) {
    $valitudkohtid = $_GET['koht'];
    $valitudkohtparing = "SELECT nimi FROM kohad WHERE id = '$valitudKohtId'";
    $valitudkohtfetch = $yhendus -> query($valitudkohtparing);
    $row = mysqli_fetch_assoc($valitudkohtfetch);
} else {
    header("Location: /KT/admin/");
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .star [type="radio"]{
	        appearance: none;
        }

        .star label:has(~ :checked){
	            color: orange;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>hinda <?php echo $row['nimi']; ?>i</h1>
        <hr>
        <a href="/KT/admin/">siit tagasi</a>
        <br>
        <form method="post">
            <label for="nimi">nimi:</label>
            <input type="text" name="nimi" id="nimi" required><br>
                
            <label for="kommentaar">kommentaar:</label>
            <textarea name="kommentaar" id="kommentaar" rows="4" required></textarea><br>
            
            <p class="star">Hinnang (1-10):<br>
                <label for="hinnang1"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang1" value="1" required>
                <label for="hinnang2"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang2" value="2">
                <label for="hinnang3"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang3" value="3">
                <label for="hinnang4"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang4" value="4">
                <label for="hinnang5"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang5" value="5">
                <label for="hinnang6"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang6" value="6">
                <label for="hinnang7"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang7" value="7">
                <label for="hinnang8"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang8" value="8">
                <label for="hinnang9"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang9" value="9">
                <label for="hinnang10"><i class="fa fa-star"></i></label>
                <input type="radio" name="hinnang" id="hinnang10" value="10">
            </p>
            <input type="submit" class="btn" value="ppostita">
        </form>
        <?php
        if(!empty($_POST['nimi']) && !empty($_POST['kommentaar']) && !empty($_POST['hinnang'])){
            $nimi = $_POST['nimi'];
            $kommentaar = $_POST['kommentaar'];
            $hinnang = $_POST['hinnang'];

            $lisahinnang = "INSERT INTO hinnangud (nimi, kommentaar, hinnang, id_koht) VALUES ('$nimi', '$kommentaar', '$hinnang', '$valitudKohtId')";

            if ($yhendus->query($lisahinnang) === TRUE){
                echo "hinnang lisatud";
                header("Location: /KT/admin/");
                exit;
            } else {
                echo "vigaaaa: " . $lisahinnang . "<br>" . $yhendus -> error;
            }
        }
        ?>

        <hr>
        <h2>teised hjinnangud</h2>
        <?php
        $hinnangudparing = "SELECT * FROM hinnangud WHERE id_koht='$valitudkohtid'";
        $hinnangudvastus = $yhendus -> query($hinnangudparing);
        $_SESSION['id'] = $valitudkohtid;

        if ($result_hinnangud -> num_rows > 0) {
            while($row = $result_hinnangud -> fetch_assoc()) {
                echo "<b>" . $row["nimi"] . " " . $row["hinnang"] . "/10" . "<a href='kustutahinnang.php?kommentaar=" . $row["kommentaar"] . "'> X </a>" . "</b><br>" . $row["kommentaar"] . "<br> ";
            }
        } else {
            echo "njetu hinnangud";
        }?>
        <?php $yhendus -> close(); ?>
    </div>
    </body>
</html>
