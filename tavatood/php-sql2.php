<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yl2</title>
</head>
<body>
    <?php include('config.php'); ?>
    <h1>Väljasta kogu ‘albumid’ sisu ridade kaupa (10 rida)</h1>
    <?php
    $paring = 'SELECT * FROM albumid limit 10';
    $valjund = mysqli_query($yhendus, $paring);
    while ($row = mysqli_fetch_array($valjund)) {
        echo $row['artist'].' - '.$row['album'].' - '.$row['aasta'].' - '.$row['hind'].'<br>';
    }
    echo '<br>';
    ?>
    <h1>Väljasta tabelist ainult artist ja album read, kusjuures sorteeri kasvavalt artisti järgi (10 rida)</h1>
    <?php
    $paring2 = 'SELECT artist, album FROM albumid ORDER BY artist LIMIT 10';
    $valjund2 = mysqli_query($yhendus, $paring2);
    while ($row = mysqli_fetch_array($valjund2)){
        echo $row['artist'].' - '.$row['album'].'<br>';
    }
    echo '<br>';
    ?>
    <h1>Väljasta tabelist ainult artist ja album read, mille aasta on 2010 ja uuemad</h1>
    <?php
    $paring3 = 'SELECT artist, album FROM albumid WHERE aasta >= 2010';
    $valjund3 = mysqli_query($yhendus, $paring3);
    while ($row = mysqli_fetch_array($valjund3)){
        echo $row['artist'].' - '.$row['album'].'<br>';
    }
    ?>
    <br>
    <h1>Väljasta kui palju erinevaid albumeid on andmebaasis, mis on nende keskmine hind ja koguväärtus (summa)</h1>
    <?php
    $paring4 = 'SELECT COUNT(DISTINCT album) AS "albumeid kokku", AVG(hind) AS "keskmine hind", SUM(hind) AS "koguväärtus" FROM albumid';
    $valjund4 = mysqli_query($yhendus, $paring4);
    while ($row = mysqli_fetch_array($valjund4)){
        echo 'albumeid kokku: '.$row['albumeid kokku'].' - kesmine hind: '.$row['keskmine hind'].' -  koguvaartus: '.$row['koguväärtus'].'<br>';
    }
    ?>
    <br>
    <h1>Väljasta kõige vanema albumi nimed</h1>
    <?php
    $paring5 = 'SELECT album FROM albumid ORDER BY aasta LIMIT 1';
    $valjund5 = mysqli_query($yhendus, $paring5);
    while ($row = mysqli_fetch_array($valjund5)){
        echo $row['album'];
    }
    ?>
    <br>
    <h1>Väljasta albumid, mille hind on kogu keskmisest suurem</h1>
    <?php
    $paring6 = 'select * from albumid where hind > (select avg(hind) from albumid)';
    $valjund6 = mysqli_query($yhendus, $paring6);
    while ($row = mysqli_fetch_array($valjund6)){
        echo $row['album'].'<br>';
    }
    ?>
    <br>
    <h1>Loo otsingukast, mis lubab valida, kas otsing toimub artistide või albumite veerust.</h1>
    <form action="yl2.php" method="get">
        <input type="text" name="otsi">
        <select name="otsi_mida">
            <option value="artist">Artist</option>
            <option value="album">Album</option>
        </select>
        <input type="submit" value="otsi">
    </form>
    <?php
    $paring7 = 'SELECT * FROM albumid WHERE '.$_GET['otsi_mida'].' LIKE "%'.$_GET['otsi'].'%"';
    $valjund7 = mysqli_query($yhendus, $paring7);
    while ($row = mysqli_fetch_array($valjund7)){
        echo $row['artist'].' - '.$row['album'].' - '.$row['aasta'].' - '.$row['hind'].'<br>';
    }
    ?>
</body>
</html>