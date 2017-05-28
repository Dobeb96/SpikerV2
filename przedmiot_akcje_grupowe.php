<div class="frame">
    <h3>Akcje grupowe</h3>
    <form action="pobierz.php" method="get">
        <input type="submit" value="Pobierz zaznaczone"/>
        <label>Zaznacz wszystkie<input type="checkbox" id="select_all"></label>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
    </form>
</div>