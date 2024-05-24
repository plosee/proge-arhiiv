<?php
include (".../KT/config.php");
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}
?>
<!-- siin enamus on pm sama mis peamises index lehes niiet maj hakka ko0mmenteerima -->
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
    >
</head>
<body>
    <div class="container">
        <h1>sookida niminekiri</h1>
        <hr>
        <a href="logout.php">logi valja</a>

        <form method="get">
            <label for="otsi">otsi kohta: </label>
            <input type="text" name="otsi" id="otsi">
            <input type="submit" class="btn btn-primary my-2" value="Otsi">
        </form>

        <a href="addmaja.php">lisa koht</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">nimi <a href="?sort=nimi&order=asc">↑ </a> / <a href="?sort=nimi&order=desc">↓</a></th>
                    <th scope="col">asukoht <a href="?sort=asukoht&order=asc">↑ </a> / <a href="?sort=asukoht&order=desc">↓</a></th>
                    <th scope="col">keskmine hinne <a href="?sort=keskmine_hinne&order=asc">↑ </a> / <a href="?sort=keskmine_hinne&order=desc">↓</a></th>
                    <th scope="col">hinnanute arv <a href="?sort=hinnanute_arv&order=asc">↑ </a> / <a href="?sort=hinnanute_arv&order=desc">↓</a></th>
                    <th scope="col">admin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $lehekyljeSuurus = 10;
                if (isset($_GET['lehekylg'])) {
                    $lehekylg = $_GET['lehekylg'];
                } else {
                    $lehekylg = 1;
                }

                $start = ($lehekylg-1) * $lehekyljeSuurus;
                $sort = isset($_GET['sort']) ? $_GET['sort'] : 'nimi';
                $order = isset($_GET['order']) ? $_GET['order'] : 'asc';

                $otsi = isset($_GET['otsi']) ? $_GET['otsi'] : '';
                $sql_otsi = $otsi ? "WHERE nimi LIKE '%$otsi%'" : '';

                $sql_kohad = "SELECT * FROM kohad $sql_otsi ORDER BY $sort $order LIMIT $start, $lehekyljeSuurus";
                $result = $yhendus -> query($sql_kohad);                     

                if ($result->num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        $id = $row['id'];

                        $hinnanutearvquery = "SELECT COUNT(*) as hinnanute_arv FROM hinnangud WHERE id_koht = '$id'";
                        $hinnanutevastus = $yhendus -> query($hinnanutearvquery);
                        $hinnanutearvfetch = $hinnanutevastus -> fetch_assoc()['hinnanute_arv'];

                        $keskminehinnequery = "SELECT AVG(hinnang) as keskmine_hinne FROM hinnangud WHERE id_koht = '$id'";
                        $keskminehinnevastus = $yhendus -> query($keskminehinnequery);
                        $keskminehinnefetch = $keskmineHinneResult -> fetch_assoc()['keskmine_hinne'];
                        $keskminehinneumarda = round($keskminehinnefetch,1);

                        $lisamiseupdate = "UPDATE kohad SET keskmine_hinne = '$keskminehinneumarda', hinnanute_arv = '$hinnanutearvfetch' WHERE id = '$id'";
                        $lisamisevastus = $yhendus -> query($lisamiseParing);

                        $leiakoikhinnangud = "SELECT * FROM hinnangud";
                        $hinnangudtulemus = $yhendus -> query($leiakoikhinnangud);
                        ?>

                        <tr>
                            <td> <a href="lisahinnang.php?koht=<?php echo urlencode($id); ?> "> <?php echo $row["nimi"]; ?></a></td>
                            <td> <?php echo $row["asukoht"]; ?> </td>
                            <td> <?php echo round($keskmineHinne, 1);?> </td>
                            <td> <?php echo $hinnanuteArv; ?> </td>
                            <td><a href="muudahoone.php?koht= <?php echo urlencode($id); ?> ">muuda</a><a> / </a> <?php echo "<a href='kustutahoone.php?koht=" . $id . "'>kustuta</a>"; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <?php
        $eelminelehekylg = $lehekylg - 1;
        $jargminelehekylg = $lehekylg + 1;

        if ($eelminelehekylg > 0) {
            echo "<a href='?lehekylg=$eelminelehekylg'>&lt; Eelmised</a>";
        }
        if ($result -> num_rows == $lehekyljeSuurus) {
            echo "<a href='?lehekylg=$jargminelehekylg'> Järgmised &gt;</a>";
        }
        ?>
        <br>

        <?php $yhendus->close(); ?>   
    </div>
    </body>
</html> 
