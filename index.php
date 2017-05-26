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
            <header class="header">
                <h1 class="main_logo">Spiker</h1>
                <p class="sub_logo">Twoje centrum wymiany notatek</p>
            </header> 

            <!-- CONTENT POBIERANY Z SERWERA -->
            <section>
            <?php
                // glob() przeszuka pliki na serwerze w poszukiwaniu podanego patternu ("./*") i zwroci je jako tablica; drugi parametr oznacza znajdowanie tylko katalogow
                $directories = glob("./*", GLOB_ONLYDIR);
                
                $id = 0;
                foreach ($directories as $dir) {                

                    if( $file = fopen($dir."/name.txt", "r") ) {

                        print "<a href='./przedmiot.php?id=".$id++."'>";
                        // wydrukuj zawartosc pliku
                        print fgets($file);
                        print "</a><br>";

                        fclose($file);   
                    }
                }
            ?>
            </section>
            
            <!-- STOPKA WITRYNY -->
            <div id="leftnav">
                test
            </div>

            <div id="rightnav">
                test2
            </div>    

            <footer class="footer">
                <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
                test3
            </footer>
            
        </div> <!-- END container -->
    </body>
</html>