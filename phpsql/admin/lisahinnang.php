<?php
include ("C:/xampp/htdocs/KThindakogemust/config.php");
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

if(isset($_GET['koht'])) {
    $valitudKohtId = $_GET['koht'];
    $sqlValitud_koht = "SELECT nimi FROM kohad WHERE id = '$valitudKohtId'";
    $valitud_koht = $yhendus->query($sqlValitud_koht);
    $row = mysqli_fetch_assoc($valitud_koht);
} else {
    header("Location: /KThindakogemust/admin/");
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KThindakogemust</title>

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
        <h1>-Hinda kohta > <?php echo $row['nimi']; ?>-</h1>
        <hr>
        <a href="/KThindakogemust/admin/"><--Tagasi</a>
        <br>
        <br>
        <form method="post">
            <label for="nimi">Nimi:</label>
            <input type="text" name="nimi" id="nimi" required><br>
                
            <label for="kommentaar">Kommentaar:</label>
            <textarea name="kommentaar" id="kommentaar" rows="4" required></textarea><br>
            
            <p class="star">Hinnang (1-10):<br>
                <label for="hinnang1"><i class="fa fa-star"></i>1</label>
                <input type="radio" name="hinnang" id="hinnang1" value="1" required>
                <label for="hinnang2"><i class="fa fa-star"></i>2</label>
                <input type="radio" name="hinnang" id="hinnang2" value="2">
                <label for="hinnang3"><i class="fa fa-star"></i>3</label>
                <input type="radio" name="hinnang" id="hinnang3" value="3">
                <label for="hinnang4"><i class="fa fa-star"></i>4</label>
                <input type="radio" name="hinnang" id="hinnang4" value="4">
                <label for="hinnang5"><i class="fa fa-star"></i>5</label>
                <input type="radio" name="hinnang" id="hinnang5" value="5">
                <label for="hinnang6"><i class="fa fa-star"></i>6</label>
                <input type="radio" name="hinnang" id="hinnang6" value="6">
                <label for="hinnang7"><i class="fa fa-star"></i>7</label>
                <input type="radio" name="hinnang" id="hinnang7" value="7">
                <label for="hinnang8"><i class="fa fa-star"></i>8</label>
                <input type="radio" name="hinnang" id="hinnang8" value="8">
                <label for="hinnang9"><i class="fa fa-star"></i>9</label>
                <input type="radio" name="hinnang" id="hinnang9" value="9">
                <label for="hinnang10"><i class="fa fa-star"></i>10</label>
                <input type="radio" name="hinnang" id="hinnang10" value="10">
            </p>

            <input type="submit" class="btn btn-primary my-2" value="Postita">
        </form>
        <?php
        if(!empty($_POST['nimi']) && !empty($_POST['kommentaar']) && !empty($_POST['hinnang'])){
            $nimi = $_POST['nimi'];
            $kommentaar = $_POST['kommentaar'];
            $hinnang = $_POST['hinnang'];

            $sql_lisa_hinnang = "INSERT INTO hinnangud (nimi, kommentaar, hinnang, id_koht) VALUES ('$nimi', '$kommentaar', '$hinnang', '$valitudKohtId')";

            if ($yhendus->query($sql_lisa_hinnang) === TRUE){
                echo "Hinnang on edukalt lisatud.";
                header("Location: /KThindakogemust/admin/");
                exit;
            } else {
                echo "Error: " . $sql_lisa_hinnang . "<br>" . $yhendus->error;
            }
        }
        ?>

        <hr>
        <h2>-Teiste hinnangud-</h2>
        <?php
        $sql_hinnangud = "SELECT * FROM hinnangud WHERE id_koht='$valitudKohtId'";
        $result_hinnangud = $yhendus->query($sql_hinnangud);
        $_SESSION['id'] = $valitudKohtId;

        if ($result_hinnangud->num_rows > 0) {
            while($row = $result_hinnangud->fetch_assoc()) {
                echo "<b>" . $row["nimi"] . " " . $row["hinnang"] . "/10" . "<a href='kustutahinnang.php?kommentaar=" . $row["kommentaar"] . "'> X </a>" . "</b><br>" . $row["kommentaar"] . "<br><br> ";
            }
        } else {
            echo "Hinnanguid ei leitud.";
        }
        ?>




        <?php
        $yhendus->close();
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