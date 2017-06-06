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
                $directories = glob("./*", GLOB_ONLYDIR);
                
                $id = 0;
                foreach ($directories as $dir) {                

                    if ($dir == "./cgi-bin") { $id++; continue; }
                    if( $file = fopen($dir."/name.txt", "r") ) {

                        print "<a href='./przedmiot.php?id=".$id++."'>";

                        print fgets($file);
                        print "</a><br>";

                        fclose($file);   
                    }
                }
            ?>
            </section>
            
            <!-- STOPKA WITRYNY --> 

            <footer class="footer">

            </footer>
            
        </div> <!-- END container -->
    </body>
</html>