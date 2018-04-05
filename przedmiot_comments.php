<?php
$month_pl = array(1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

if (isset($_POST["nickname"])) {
    file_put_contents($files[0],
        "<b>".$_POST["nickname"]."</b>", FILE_APPEND);
    file_put_contents($files[0],
        " dnia <b>".date('d-'), FILE_APPEND);
    file_put_contents($files[0], $month_pl[date('n')], FILE_APPEND);
    file_put_contents($files[0],
        date('-y')."</b>", FILE_APPEND);
    file_put_contents($files[0], " napisał: <br><i>".$_POST["comment_content"]."</i><br><br>", FILE_APPEND);
    unset($_POST["nickname"]);
    unset($_POST["comment_content"]);
}

print "<h3 class='border-top'>Komentarze</h3>";
if (file_get_contents($files[0]) == "") {
    print "<p class='gray big'>Pusto tu, może dodasz komentarz?</p>";
} else {
    print "<section class='comments'>";
    readfile($files[0]);
    print "</section>";
}
?>

<h3>Napisz komentarz</h3>
<form action="przedmiot.php" method="post">
    <p>Nickname: <input type="text" name="nickname" required /></p>

    <textarea id="comment_content" name="comment_content" rows="4" cols="35" placeholder="Napisz coś o wykładowcy, o przedmiocie lub o plikach umieszczonych na tym spikerze..." required></textarea><br>

    <?php 
    print "<input type='hidden' name='count_lectures' value='".count($files)."' />";
    print "<input type='hidden' name='id' value='".$id."' />";
    print "<input type='hidden' name='path' value='".$directories[$id]."' />";
    ?>
    <input type="submit" value="Prześlij" />
</form>