<?php session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

    <body>
        <div class="container">
            <a href="logout.php">logii valaj</a>
            <h1>admin paneel</h1>
            <hr>
        <h2>registreer</h2>        
        <form action="#" method="get">
            <label for="username">usrname:</label>
            <input type="text" name="username" id="username" required><br>
            <label for="parool">parool:</label>
            <input type="password" name="parool" id="parool" required><br>
            <button type='button' value='registreerie'>registtreeri</button>
        </form>

        <?php
        if(!empty($_GET['username']) && !empty($_GET['parool'])){
            $username = htmlspecialchars($_GET["username"]);
            $parool = htmlspecialchars($_GET["parool"]);

            $kyismus = "SELECT COUNT(*) as count FROM kasutajad WHERE kasutaja = '$username'";
            $vastys = $yhendus -> query($kyismus);
            $kasutajakopgu = $result -> fetch_assoc()["count"];

            if ($kasutajakopgu > 0) {
                echo "kasutaja olemas";
            } else {
                if (strlen($parool) < 8) {
                    echo "8 marki ainult aitah";
                } else {
                    $hashed = password_hash($parool, PASSWORD_DEFAULT);
                    $paring = "INSERT INTO kasutajad (kasutaja, parool) VALUES ('$username', '$hashed')";
                    $stmt = $yhendus -> prepare($paring);

                    if(password_verify($parool, $hashed)){
                        if ($yhendus -> query($paring) === TRUE) {
                            header("Location: admin.php");
                            exit;
                        }
                    }  
                }
            }
        }
        ?>

        <?php $yhendus->close();?>   
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
