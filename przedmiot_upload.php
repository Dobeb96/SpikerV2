<div class="frame">
    <h3>Wgraj nowy plik</h3>
    <form enctype="multipart/form-data" action="#" method="post">
        <input type="text" placeholder="Wprowadź dodatkowe informacje o pliku, np. co zawiera" size="50" />
        <br>
        <input type="file" size="1" name="uploaded_file" />
        <br>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <input type="hidden" name="path" value="<?php print $directories[$id]; ?>" />
        <input type="submit" value="Prześlij" />
    </form>
</div>

<?php
if (isset($_FILES['uploaded_file'])) {
    $file_tmp = $_FILES['uploaded_file']['tmp_name'];
    if (is_uploaded_file($file_tmp))
        move_uploaded_file($file_tmp, $_POST['path']."/".$_FILES['uploaded_file']['name']);
}
?>