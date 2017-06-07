<div class="frame">
    <h3>Wgraj nowy plik</h3>
    <form enctype="multipart/form-data" action="#" method="post">
        <!-- <input type="text" placeholder="Wprowadź dodatkowe informacje o pliku, np. co zawiera" size="50" /> <br> -->
        <input type="file" size="1" name="uploaded_file" id="file1" />
        <br>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <input type="hidden" name="path" value="<?php print $directories[$id]; ?>" />
        <input type="submit" value="Prześlij" id="submit_file"/>
        <span id="file_info"></span>
    </form>
</div>

<?php
if (isset($_FILES['uploaded_file'])) {
    // zarzadaj odswiezenia strony po udanym submicie pliku przez uzytkownika
    echo "<meta http-equiv='refresh' content='0'>";
    $file_tmp = $_FILES['uploaded_file']['tmp_name'];
    if (is_uploaded_file($file_tmp))
        move_uploaded_file($file_tmp, $_POST['path']."/".$_FILES['uploaded_file']['name']);
}
?>

<!-- Sprawdz rozmiar pliku (JQuery) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('#file1').change(function() {
    var maxFileSize = 4;
    var text = document.getElementById('file_info');
    if (this.files[0].size/1024/1024 > maxFileSize) {
        text.innerHTML = "Zbyt duży plik, max " + maxFileSize + "MB";
        document.getElementById('submit_file').setAttribute("class", "download_button_inactive");
    } else {
        text.innerHTML = "";
        document.getElementById('submit_file').setAttribute("class", "");
    }
});
    function refreshPage() {
        setTimeout(location.reload(), 500);
    }
</script>