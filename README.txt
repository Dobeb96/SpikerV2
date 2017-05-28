Spiker.pl
centrum wymiany materiałami do zajęć,
UEK
informatyka stosowana

W pliku index.php między tagami <section> skrypt php wyszukuje wszystkie foldery w bieżącym katalogu. Każdy taki folder zamyka w znacznik <a> kierujący do pliku przedmiot.php i przekazujący mu poprzez zmienną $_GET identyfikator przedmiotu $id.
        
Plik przedmiot.php pobiera zapisany w zmiennej $_GET identyfikator i na tej podstawie odnajduje odpowiedni folder, otwiera go i wyświetla wszystkie pliki znajdujące się w nim (oprócz name.txt). Plik przedmiot.php dołącza też dwa 'widgety', czyli przedmiot_akcje_grupowe.php i przedmiot_upload.php odpowiadające za dodatkową użytecznośc na stronie