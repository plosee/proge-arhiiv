<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pepuli</title>
</head>
    <body>
        <div class="container">
        <?php
        class auto{
            var $varv;
            var $tootja;
            var $kiirus = 0;

            function vroom(){
                while ($this -> kiirus < 100) {
                    $this -> kiirus += 10;
                    if ($this -> kiirus >= 100) {
                        echo "kiirus 100 km/h<br>";
                        break;
                    }
                    echo "kiirus " . $this -> kiirus . " km/h<br>";
                }
            }
        }

        $auto1 = new Auto;
        echo $auto1 -> varv='kollane'.'<br>';
        echo $auto1 -> tootja='banaan'.'<br>';
        $auto1 -> vroom();
        ?>
        </div>
    </body>
</html>
