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
        </section>
        
        <!-- STOPKA WITRYNY -->
        <footer>
            <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
        </footer>
    </body>
</html>