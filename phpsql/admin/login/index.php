    <?php include ("C:/xampp/htdocs/KT/config.php"); session_start();?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loigin</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

        <body>
            <div class="container">
            <h2>admin looogin</h2>   
            <hr>     
            <form method="post">
                <label for="username">kasutajanimi: </label>
                <input type="text" name="username" id="username" required><br>
                <label for="parool">parool: </label>
                <input type="password" name="parool" id="parool" required><br>
                <input type="submit" class="btn" value="Login">
            </form>

            <?php
            if(!empty($_POST['parool']) && !empty($_POST['username'])){
                $kasutaja = htmlspecialchars($_POST["username"]);
                $parool = htmlspecialchars($_POST["parool"]);

                $sql = "SELECT parool FROM kasutajad WHERE kasutaja = '$kasutaja'";     
                $result = $yhendus->query($sql);

                if($result -> num_rows > 0){
                    $row = $result -> fetch_assoc();
                    $hashed = $row['parool'];

                    if(password_verify($parool, $hashed)){
                        $_SESSION['logged_in'] = true;
                        header("Location: /KT/admin");
                        exit;
                    } else {
                        echo "vale parool!";
                    }
                
                } else {
                    echo "kasutajat poole";
                }   
            }
            ?>

            <?php $yhendus -> close(); ?>   
            </div>
        </body>
    </html>
