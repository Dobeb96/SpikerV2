<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css?v=1.0.6.4" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  href="//fonts.googleapis.com/css?family=Lato&effect=anaglyph">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
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
            
<!--
            <table class="ad_table" id="ad_table_id1">
            <tr>
                <td align="center">
-->
                    <!-- REKLAMA -->
<!--                    <a onclick="ad_clicked()" target="_blank" href="http://ad.zanox.com/ppc/?42887195C1993562246T"><img src="http://ad.zanox.com/ppv/?42887195C1993562246" align="bottom" width="300" height="250" border="0" hspace="1" alt="summersale 2017 he Image Banner 300 x 250"></a>-->
                    <!-- END REKLAMA -->
<!--
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
-->

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
                    print "<input type='submit' name='download' id='down' style='font-family: Consolas;' value='Pobierz' class='download_button_active' />";
                    print "</form>";
                    ?>
<!--
                </td>
            </tr>
            </table>
-->
            
            <script>
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