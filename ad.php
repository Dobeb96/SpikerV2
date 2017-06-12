<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="mainstyle.css?v=1.0.3" rel="stylesheet" type="text/css">
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
                <td align="center">
                    <!-- REKLAMA -->
                        <script type="text/javascript">
                          ( function() {
                            if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
                            var unit = {"calltype":"async[2]","publisher":"doberman96","width":300,"height":250,"sid":"Chitika Default"};
                            var placement_id = window.CHITIKA.units.length;
                            window.CHITIKA.units.push(unit);
                            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
                        }());
                        </script>
                        <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="bottom"></div>
                </td>    
            </tr>
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
            
            <script src="./ads.js" type="text/javascript"></script>
            <script>
            // SPRAWDZ ADBLOCKA
            if(document.getElementById('XNPIiaZmxEev')){
              var doNothing = true;
            } else {
                document.getElementById('ad_table_id1').innerHTML = "";
                document.getElementById('ad_table_id1').innerHTML = "<br><br><font color='red'>Używasz adblocka, proszę rozważ wyłączenie go dla tej strony, bo reklamy to jedyne źródło opłacenia naszego serwera</font>";
                document.getElementById('bottom').setAttribute("class", "download_button_inactive");
            }
            
            // IFRAME CLICK MONITORING
            var monitor = setInterval(function(){
                var elem = document.activeElement;
                if(elem && elem.tagName == 'IFRAME'){
                    ad_clicked();
                    clearInterval(monitor);
                }
            }, 100);
            // END IFRAME
                
            function ad_clicked() {
                document.getElementById('up').setAttribute("class", "download_button_inactive");
                document.getElementById('down').setAttribute("class", "download_button_active");
            }
            </script>
            
        </div> <!-- END container -->
        
        <!-- GOOGLE ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-86627205-2', 'auto');
          ga('send', 'pageview');
        </script>
        <!-- END GOOGLE ANALYTICS -->
    </body>
</html>