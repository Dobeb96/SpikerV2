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
        if (isset ($_GET['id']))
            $id = $_GET['id'];

        $directories = glob("./*", GLOB_ONLYDIR);

        print $directories[$id];

        ?> 
        </section>
        
        <!-- STOPKA WITRYNY -->
        <footer>
            <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
        </footer>
    </body>
</html>