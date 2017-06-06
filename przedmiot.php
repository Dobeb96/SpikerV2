<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Lato&effect=anaglyph">
    </head>
    <body>
        <div id="container">
            
            <!-- LOGO WITRYNY -->
            <header class="header">
                <h1 class="font-effect-anaglyph">Spiker<sub>v2</sub></h1>
            </header> 
            
                <!-- CONTENT POBIERANY Z SERWERA -->
            <section>
            <?php
            
            if (isset ($_GET['id'])) {
                $id = $_GET['id'];

            $directories = glob("./*", GLOB_ONLYDIR);
            print "<a href='./index.php'>Powrót</a>";
            print substr($directories[$id], 1);
            }
                
            $files = glob($directories[$id]."/*");
                
            print "<form action='ad.php' method='post'>";
            print "<input type='hidden' name='count_lectures' value='".count($files)."' />";
            print "<input type='hidden' name='id' value='$id' />";
            print "<input type='hidden' name='path' value='$directories[$id]' />";
            include "przedmiot_akcje_grupowe.php";
            
            print "<h3>Przesłane pliki</h3>";
            $counter = 0;
                
            if (count($files) == 1)
                print "<p><font color='silver'>Pusto tu, dodaj jakieś pliki</font></p>";
                
            foreach ($files as $f) {
                $char = strpos($f, '/', 2);
                $fs = substr($f, $char+1);
                
                if ($f == $directories[$id]."/name.txt") { $counter++; continue; }
                print "<input type='checkbox' name='subject[$counter]' id='$counter' />";
                print "<label for='$counter'>$fs</label>";
                print "<a href='".$f."' class='download' download='"."$fs"."'>Pobierz</a>";
//                print "<a href='tobecontinued' class='change'>Zmień</a>";
                print "<br>";
                $counter++;
            }
                
            include "przedmiot_akcje_grupowe.php";
            print "</form>";
            include "przedmiot_upload.php";
            ?>
            </section>

            <!-- STOPKA WITRYNY -->
            <footer>

            </footer>
            
        </div> <!-- END container -->
    </body>
</html>