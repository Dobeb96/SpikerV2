<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css?v=1.0.6.4" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Lato&effect=anaglyph">
                
        <!-- ICONS AND COLORS -->
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#0055f2">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#0055f2">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#0055f2">
        <!-- Default phone zoom -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            
        </div> <!-- END container -->
        
        <!--        GOOGLE ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-86627205-2', 'auto');
          ga('send', 'pageview');
        </script>
    </body>
</html>