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
            <div id='adcheck'></div>
            <?php 
            if (isset ($_POST['id'])) {
                $id = $_POST['id'];
                $directories = glob("./*", GLOB_ONLYDIR);
                print "<a href='./index.php'>Powrót</a>";
                print "/";
                print "<a href='./przedmiot.php?id=".$id."'>".substr($directories[$id], 2)."</a>";
            }
            ?>
            
            <table class="ad_table" id="ad_table_id1">
            <tr>
                <td>
                    <!-- REKLAMA -->
                    <div class="ad_container" onClick="ad_clicked(this)">
                        <a href="https://www.ceneo.pl/Laptopy_i_komputery#pid=14418&crid=120963&cid=22167" rel="nofollow" target="_blank"><img src="https://image2.ceneo.pl/data/banners/banner_373.jpg" /></a>
                    </div>
                </td>
            </tr>
              <div id="bottom"></div>
            <tr>                
                <td>
                    <div class="download_button_active" id="up" style="width: 625px;"><p>Pobierz</p></div>

                    <?php
                    if (isset($_POST['id'])) $id = $_POST['id'];
                    if ($_POST['path']) $path = $_POST['path'];
                    
                    print "<form action='./pobierz.php' method='post'>";
                    if (isset($_POST['subject'])) {
                        for ($i = 0, $len = $_POST['count_lectures']; $i < $len; $i++) {
                            if (isset($_POST['subject'][$i])) {
                                print "<input type='hidden' name='file_id[$i]' value='$i'>";
                            }
                        }
                    }
                    
                    print "<input type='hidden' name='id' value='".$id."' />";
                    print "<input type='hidden' name='path' value='".$path."' />";
                    print "<input type='submit' name='download' id='down' style='font-family: Consolas;' value='Pobierz' class='download_button_inactive' />";
                    print "</form>";
                    ?>
                </td>
            </tr>
            </table>
            
            <!-- SPRAWDZ ADBLOCKA -->
            <script src="./ads.js" type="text/javascript"></script>
            <script>
            if(document.getElementById('XNPIiaZmxEev')){
              var doNothing = true;
            } else {
                document.getElementById('ad_table_id1').innerHTML = "";
                document.getElementById('ad_table_id1').innerHTML = "<br><br><font color='red'>Używasz adblocka, proszę rozważ wyłączenie go dla tej strony, bo reklamy to jedyne źródło opłacenia naszego serwera</font>";
                document.getElementById('bottom').setAttribute("class", "download_button_inactive");
            }
            </script>
            
            <script>
            function ad_clicked(source) {
                document.getElementById('up').setAttribute("class", "download_button_inactive");
                document.getElementById('down').setAttribute("class", "download_button_active");
            }
            </script>
            
        </div> <!-- END container -->
    </body>
</html>