<div class="frame">
    <h3>Akcje grupowe</h3>
        <input type="submit" value="Pobierz zaznaczone"/>
        <label>Zaznacz wszystkie<input type="checkbox" name="select_all" onClick="selectAllCheckboxes(this)"></label>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <input type="hidden" name="path" value="<?php print $directories[$id]; ?>" />
</div>

<script>
    function selectAllCheckboxes(source) {
        
        var mainCheckboxes = document.getElementsByName('select_all');
        for (var i = 0, n = mainCheckboxes.length; i < n; i++) {
            mainCheckboxes[i].checked = source.checked;
        }
        
        var checkboxes = document.getElementsByTagName('input');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }   
    }
</script>