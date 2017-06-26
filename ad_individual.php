<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Spiker</title>
        <meta charset="UTF-8" />
        <link href="mainstyle.css?v=1.0.6.6" rel="stylesheet" type="text/css">
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
            
            <center>
            Cieszymy się, że możemy Ci pomóc przed sesją. Jeśli możemy Cię o to prosić, kliknij w poniższą reklamę<br />
                <sub>(jeśli nie widzisz reklamy możesz rozważyć wyłączenie adblocka dla spiker.com.pl)</sub>
            </center>
            
            <!-- REKLAMA -->
            <div class="ad_container" id="ad_1" onclick="ad_clicked()">
                <script type="text/javascript" src="http://www.adfreestyle.pl/show/dKR66fWbuZY"></script>
            </div>
        </div> <!-- END container -->
        
        <!-- COOKIES -->
        <script src="./cookies.js"></script>
        <script>
        function ad_clicked() {
            var daily = Number(1) + Number(readCookie("ad_daily_counter"));
            createCookie("ad_current_counter", 0, 1);
            createCookie("ad_daily_counter", daily, 1);
            window.open("./przedmiot.php?id=<?php echo $_GET['id'] ?>", "_self");
        }
        </script>
        
        <!-- GOOGLE ANALYTICS -->
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