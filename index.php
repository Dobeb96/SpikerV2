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
        </div> <!-- END container -->
        
        <footer>
        <br>serwer opłacony do 4 czerwca 2018<br>
            <span class="underline">admin@spiker.com.pl</span>
        </footer>
        
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