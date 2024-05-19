<?php include ("config.php"); session_start(); ?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resotrani kt</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
    >
</head>

<body>
    <div class="container">
        <h1>soogikohad</h1>
        <br>

        <form method="get">
            <label for="otsi">otsi soogikohta</label>
            <input type="text" name="otsi" id="otsi">
            <input type="submit" class="btn btn-primary my-2" value="otsi">
        </form>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">nimi <a href="?sort=nimi&order=asc">↑</a> / <a href="?sort=nimi&order=desc">↓</a></th>
                    <th scope="col">asukoht <a href="?sort=asukoht&order=asc">↑</a> / <a href="?sort=asukoht&order=desc">↓</a></th>
                    <th scope="col">keskmine hinne <a href="?sort=keskmine_hinne&order=asc">↑</a> / <a href="?sort=keskmine_hinne&order=desc">↓</a></th>
                    <th scope="col">hinnanute arv <a href="?sort=hinnanute_arv&order=asc">↑</a> / <a href="?sort=hinnanute_arv&order=desc">↓</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // mitu lehekylge
                $lehesuur = 10;
                if (isset($_GET['lehekylg'])) {
                    $lehekylg = $_GET['lehekylg'];
                } else {
                    $lehekylg = 1;
                }

                // kust alustada
                // $start naitab mitu rida tuleb naidata
                $start = ($lehekylg-1) * $lehesuur;
                // sen see sorteerimis asi
                $sort = isset($_GET['sort']) ? $_GET['sort'] : 'nimi';
                $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
                
                // otsing
                $otsi = isset($_GET['otsi']) ? $_GET['otsi'] : '';
                $otsisql = $otsi ? "WHERE nimi LIKE '%$otsi%'" : '';
                
                $sqlparing1 = "SELECT * FROM kohad $otsisql ORDER BY $sort $order LIMIT $start, $lehesuur";
                $result = $yhendus -> query($sqlparing1);

                // hunnik paringuid mis annavand tabelile infot
                if ($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        $koht = $row['nimi'];
                        $id = $row['id'];

                        $hinnanutearvparing = "SELECT COUNT(*) as hinnanute_arv FROM hinnangud WHERE id_koht = '$id'";
                        $Hvastus = $yhendus -> query($hinnanutearvparing);
                        $hinnanuteArv = $Hvastus -> fetch_assoc()['hinnanute_arv'];

                        $Khinneparing = "SELECT AVG(hinnang) as keskmine_hinne FROM hinnangud WHERE id_koht = '$id'";
                        $Khinnevastus = $yhendus ->  query($Khinneparing);
                        $Khinne = $Khinnevastus -> fetch_assoc()['keskmine_hinne'];
                        $Khinneymardavms = round($Khinne,1);

                        $lisamiseparing = "UPDATE kohad SET keskmine_hinne = '$Khinneymardavms', hinnanute_arv = '$hinnanuteArv' WHERE id = '$id'";
                        $lisamisetulemus = $yhendus -> query($lisamiseparing);
                        ?>
                        <tr>
                            <!-- paneb need asjad tabelisse -->
                            <td><a href="lisahinnang.php?koht= <?php echo urlencode($id); ?> "> <?php echo $row["nimi"]; ?> </a></td>
                            <td> <?php echo $row["asukoht"]; ?> </td>
                            <td> <?php echo round($Khinne, 1);?> </td>
                            <td> <?php echo $hinnanuteArv; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <?php
        // lehekylgede vahetamine
        $eelminelehekylg = $lehekylg - 1;
        $jargminelehekylg = $lehekylg + 1;

        if ($eelminelehekylg > 0) {
            echo "<a href='?lehekylg=$eelminelehekylg'>&lt; eelmie lk</a>";
        }
        if ($result->num_rows == $lehesuur) {
            echo "<a href='?lehekylg=$jargminelehekylg'><br> jargmine lk &gt;</a>";
        }
        ?>
        <?php $yhendus->close();?>   

    </div>
        </script>
    </body>
</html> 