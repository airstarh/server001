<style>
    select[data-chosen='1']~.stuff-1 {
        display: block !important;
    }

    select:not([data-chosen='1'])~.stuff-1 {
        display: none;
    }

    select[data-chosen='2']~.stuff-2 {
        display: block !important;
    }

    select[data-chosen='3']~.stuff-3 {
        display: block !important;
    }
</style>

<select name="number-of-stuffs" data-chosen="1" onchange="this.dataset.chosen = this.value;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
<div class="stuff-1">
    <span> I am stuff-1!</span>
    <input type="text" name="stuff-1-detail">
    <input type="text" name="stuff-1-detail2">
</div>
<div class="stuff-2" style="display:none">
    <span> I am stuff-2!</span>
    <input type="text" name="stuff-2-detail">
    <input type="text" name="stuff-2-detail2">
</div>
<div class="stuff-3" style="display:none">
    <span> I am stuff-3!</span>
    <input type="text" name="stuff-3-detail">
    <input type="text" name="stuff-4-detail2">
</div>