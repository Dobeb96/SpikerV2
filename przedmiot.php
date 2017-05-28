<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css" rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
    </head>
    <body>
        <div id="container">
            
            <!-- LOGO WITRYNY -->
            <header>
                <h1 class="main_logo">Spiker</h1>
                <p class="sub_logo">Twoje centrum wymiany notatek</p>
            </header> 
            
            <!-- CONTENT POBIERANY Z SERWERA -->
            <section>
            <?php
            
            if (isset ($_GET['id'])) {
                $id = $_GET['id'];

            $directories = glob("./*", GLOB_ONLYDIR);
            print "<a href='./index.php'>Powrót</a>";
            print $directories[$id];
            }
                
            include "przedmiot_akcje_grupowe.php";
            
            print "<h3>Przesłane pliki</h3>";
            $counter = 0;
            $files = glob($directories[$id]."/*");
            foreach ($files as $f) {
                print "<input type='checkbox' id='$counter' />";
                print "<label for='$counter'>$f</label>";
                print "<a href='".$f."' class='download' download='".$f."'>Pobierz</a>";
                print "<a href='tobecontinued' class='change'>Zmień</a>";
                print "<br>";
                $counter++;
            }
                
            include "przedmiot_akcje_grupowe.php";
            include "przedmiot_upload.php";
            ?> 
            </section>
            
            <!-- STOPKA WITRYNY -->
            <footer>
                <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
                test3
            </footer>
            
        </div> <!-- END container -->
    </body>
</html>