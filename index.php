<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker!</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <!-- LOGO WITRYNY -->
        <header>
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
        <footer>
            <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
        </footer>
    </body>
=======
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
        <div id="header">
            <h1 class="main_logo">Spiker</h1>
            <p class="sub_logo">Twoje centrum wymiany notatek</p>
        </div>        
        <!-- CONTENT POBIERANY Z SERWERA -->
         <div id="section">
            <?php
            // glob() przeszuka pliki na serwerze w poszukiwaniu podanego patternu ("./*") i zwroci je jako tablica; drugi parametr oznacza znajdowanie tylko katalogow
            $directories = glob("./*", GLOB_ONLYDIR);
                
            foreach ($directories as $dir) {                
                // dla kazdego katalogu wejdz do niego i otworz plik name.txt do odczytu ("r")
                // w pliku name.txt znajduja sie nazwy przedmiotow z duzej litery i bez podkreslnikow
                if( $file = fopen($dir."/name.txt", "r") ) {
                    // wydrukuj zawartosc pliku
                    print fgets($file)."<br>";
                    fclose($file);   
                }
                else print $dir."<br>";
            }
            ?>
        </div>
            
        <div id="leftnav">
            test
        </div>
        
        <div id="rightnav">
            test2
        </div>    
            
        <div id="footer">
            test3
            <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
        </div>
        </div>
    </body>
</html>