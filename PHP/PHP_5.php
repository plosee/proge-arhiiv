<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <?php
                /*
                    05 - PHP - Massiivid
                    Marten Laane
                    01.02.2024
                */

                // tydrukud 1
                echo "<h3>Tüdrukud</h3><br>";
                $tydrukud = array("Mari", "Kati", "Liisa", "Kertu", "Kadri", "Taana", "Paana", "Maana");
                sort($tydrukud);
                foreach($tydrukud as $tydruk){
                    echo "$tydruk<br>";
                }
                echo "<br>";

                // tydrukud 2
                // tydrukud esimesed 3
                echo "<h3>Tüdrukud esimesed 3</h3><br>";
                for($i = 0; $i < 2; $i++){
                    echo "$tydrukud[$i]<br>";
                }
                echo "<br>";
                // tydrukud viimane
                echo "<h3>Tüdrukud viimane</h3><br>";
                echo end($tydrukud)."<br>";
                echo "<br>";
                // tydrukud juhuslik
                echo "<h3>Tüdrukud juhuslik</h3><br>";
                $juhuslik = rand(0, count($tydrukud)-1);
                echo "$tydrukud[$juhuslik]<br>";
                echo "<br>";
                // autod
                $automargid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
                "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
                "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
                "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
                "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
                "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");

                $VIN = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
                "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
                "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
                "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
                "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
                "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
                "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
                "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
                "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
                "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
                "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
                "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
                "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
                "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
                "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

                echo "<h3>Autod arv</h3><br>";
                echo count($automargid)."<br>";
                if (count($automargid) == count($VIN)){
                    echo ("VIN koodide arv on sama mis automarkide arv");
                } else {
                    echo ("VIN koodide arv ei ole sama mis automarkide arv");
                }
                echo "<br><br>";

                echo "<h3>Audid ja Toyotad</h3><br>";
                $audiyota = array();
                for ($i = 0; $i < count($automargid); $i++){
                    if ($automargid[$i] == "Audi" || $automargid[$i] == "Toyota"){
                        array_push($audiyota, $automargid[$i]);
                    }
                }
                print_r($audiyota);
                echo "<br><br>";
                // vin alla 17
                echo "<h3>VIN alla 17</h3><br>";
                for ($i = 0; $i < count($VIN); $i++){
                    if (strlen($VIN[$i]) < 17){
                        echo $VIN[$i]."<br>";
                    }
                }
                echo "<br><br>";

                // keskmised palgad
                echo "<h3>Keskmised palgad</h3><br>";
                $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
                $keskmine = array_sum($palgad) / count($palgad);
                echo "Keskmine palk on $keskmine<br>";
                echo "<br><br>";

                // firmad
                echo "<h3>Firmad</h3><br>";
                $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
                foreach($firmad as $firma){
                    echo "$firma<br>";
                }

                // kustutame
                echo "<form action='#' method='get'> kustuta firma <input type='text' name='kustuta' id='kustuta'> <input type='submit' value='Saada'> </form>";
                $kustutaget = $_GET['kustuta'];
                if(!empty($_GET["kustuta"])){
                    if(in_array($kustutaget, $firmad)){
                        $key = array_search($kustutaget, $firmad);
                        unset($firmad[$key]);
                        echo "Kustutasin firma $kustutaget ";
                        foreach($firmad as $firma){
                            echo "$firma<br>";
                        }
                    } else {
                        echo "Sellist firmat pole";
                    }
                }
                echo "<br><br>";

                // riigid
                echo "<h3>Riigid</h3><br>";
                $riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
                "Philippines","Canada","Philippines","South Sudan","Brazil",
                "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
                "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
                "Kazakhstan","Cuba","Portugal","Czech Republic");
                $len = array_map('strlen', $riigid);
                $index = array_search(max($len), $len);
                echo $riigid[$index]; 
                echo "<br>";
                echo max($len);
                echo "<br><br>";

                echo "<h3>ching chong</h3><br>";
                $ching = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
                "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
                "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");
                sort($ching);
                echo $ching[0];
                echo "<br>";
                echo $ching[count($ching)-1];
                echo "<br><br>";

                echo "<h3>Google</h3><br>";
                $google = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
                Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
                "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
                "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
                "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
                echo '<form action="#" method="get"> <input type="text" name="google" id="google"> <input type="submit" value="Saada"> </form>';
                $googleget = $_GET['google'];
                if(!empty($_GET["google"])){
                    if(in_array($googleget, $google)){
                        $key = array_search($googleget, $google);
                        echo "<div class=\"alert alert=primary\" role=\"alert\">Otsisid $googleget ja leidsin $google[$key]</div>";
                    } else {
                        echo "<div class=\"alert alert=warninga\" role=\"alert\">ei leidnud</div>";
                    }
                }
                echo "<br><br>";

                echo "<h3>Pildid</h3><br>";
                $pildid = array("prentice.webp","freeland.webp","peterus.webp","devlin.webp","gabriel.webp","pete.webp");
                
                echo "<img src=\"img/$pildid[2]\" alt=\"\" width=\"100px\">";
                echo '<div class="row">';
                foreach($pildid as $pilt){
                    
                    echo "<div class='col-sm-2'><img src='img/$pilt' alt='' width='100px'></div>";

                }
                echo '</div>';

            ?>
        </div>
        <header>
            <!-- place navbar here -->
        </header>

        <main></main>

        <footer>
            <!-- place footer here -->
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
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
