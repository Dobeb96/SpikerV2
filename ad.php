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
            <h3 class="spiker_info" align="center">Przed pobieraniem daj klika w reklamę</h3>
            
            <div class="ad_container" id="ad1" onClick="ad_clicked(this)"></div>

            <?php
            print "<form action='pobierz.php' method='post'>";
            print "<input type='hidden' name='id' value='".$_POST['id']." />";
            print "<input type='hidden' name='path' value='".$_POST['path']."' />";
            print "<input type='submit' name='download' id='down' value='Pobierz' class='download_button' />";
            print "</form>";
            ?>
            
            <script>
            function ad_clicked(source) {
                document.getElementById('down').setAttribute("class", "download_button_visible");
            }
            </script>
                              
            <!-- STOPKA WITRYNY -->
            <footer>
                <!-- tutaj dodatkowe informacje np. zrzeczenie sie praw autorskich czy inne -->
                test3
            </footer>
            
        </div> <!-- END container -->
    </body>
</html>