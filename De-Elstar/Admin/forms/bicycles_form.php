<fieldset>
    <div class="form-group">
        <label for="fietsnummer">Fietsnummer *</label>
        <input type="number" name="fietsnummer" value="<?php echo htmlspecialchars($edit ? $bikes['fietsnummer'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Fietsnummer" class="form-control" required="required" id="fietsnummer">
    </div>

    <div class="form-group">
        <label for="merk">Merk *</label>
        <input type="text" name="merk" value="<?php echo htmlspecialchars($edit ? $bikes['merk'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="merk" class="form-control" id="merk">
    </div>

    <div class="form-group">
        <label for="model">Model *</label>
        <input type="text" name="model" value="<?php echo htmlspecialchars($edit ? $bikes['model'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="model" class="form-control" required="required" id="model">
    </div>

    <div class="form-group">
        <label>Grootte *</label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="10-inch" <?php echo ($edit && $bikes['grootte'] == '10-inch') ? "checked" : ""; ?> required="required" id="10-inch" /> 10-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="12-inch" <?php echo ($edit && $bikes['grootte'] == '12-inch') ? "checked" : ""; ?> required="required" id="12-inch" /> 12-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="14-inch" <?php echo ($edit && $bikes['grootte'] == '14-inch') ? "checked" : ""; ?> required="required" id="14-inch" /> 14-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="16-inch" <?php echo ($edit && $bikes['grootte'] == '16-inch') ? "checked" : ""; ?> required="required" id="16-inch" /> 16-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="18-inch" <?php echo ($edit && $bikes['grootte'] == '18-inch') ? "checked" : ""; ?> required="required" id="18-inch" /> 18-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="20-inch" <?php echo ($edit && $bikes['grootte'] == '20-inch') ? "checked" : ""; ?> required="required" id="20-inch" /> 20-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="22-inch" <?php echo ($edit && $bikes['grootte'] == '22-inch') ? "checked" : ""; ?> required="required" id="22-inch" /> 22-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="24-inch" <?php echo ($edit && $bikes['grootte'] == '24-inch') ? "checked" : ""; ?> required="required" id="24-inch" /> 24-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="26-inch" <?php echo ($edit && $bikes['grootte'] == '26-inch') ? "checked" : ""; ?> required="required" id="26-inch" /> 26-inch
        </label>
        <label class="radio-inline">
            <input type="radio" name="grootte" value="28-inch" <?php echo ($edit && $bikes['grootte'] == '28-inch') ? "checked" : ""; ?> required="required" id="28-inch" /> 28-inch
        </label>
    </div>

    <div class="form-group">
        <label>Type *</label>
        <label class="radio-inline">
            <input type="radio" name="type" value="e-bike" <?php echo ($edit && $bikes['type'] == 'e-bike') ? "checked" : ""; ?> required="required" id="e-bike" /> e-bike
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="speedbike/speed-pedelec" <?php echo ($edit && $bikes['type'] == 'speedbike/speed-pedelec') ? "checked" : ""; ?> required="required" id="speedbike/speed-pedelec" /> speedbike/speed-pedelec
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="hybride" <?php echo ($edit && $bikes['type'] == 'hybride') ? "checked" : ""; ?> required="required" id="hybride" /> hybride
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="stadsfiets" <?php echo ($edit && $bikes['type'] == 'stadsfiets') ? "checked" : ""; ?> required="required" id="stadsfiets" /> stadsfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="racefiets" <?php echo ($edit && $bikes['type'] == 'racefiets') ? "checked" : ""; ?> required="required" id="racefiets" /> racefiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="mountainbike" <?php echo ($edit && $bikes['type'] == 'mountainbike') ? "checked" : ""; ?> required="required" id="mountainbike" /> mountainbike
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="vouwfiets" <?php echo ($edit && $bikes['type'] == 'vouwfiets') ? "checked" : ""; ?> required="required" id="vouwfiets" /> vouwfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="bakfiets" <?php echo ($edit && $bikes['type'] == 'bakfiets') ? "checked" : ""; ?> required="required" id="bakfiets" /> bakfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="crossfiets" <?php echo ($edit && $bikes['type'] == 'crossfiets') ? "checked" : ""; ?> required="required" id="crossfiets" /> crossfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="sportfiets" <?php echo ($edit && $bikes['type'] == 'sportfiets') ? "checked" : ""; ?> required="required" id="sportfiets" /> sportfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="triatlon" <?php echo ($edit && $bikes['type'] == 'triatlon') ? "checked" : ""; ?> required="required" id="triatlon" /> triatlon
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="kinderfiets" <?php echo ($edit && $bikes['type'] == 'kinderfiets') ? "checked" : ""; ?> required="required" id="kinderfiets" /> kinderfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="herenfiets" <?php echo ($edit && $bikes['type'] == 'herenfiets') ? "checked" : ""; ?> required="required" id="herenfiets" /> herenfiets
        </label>
        <label class="radio-inline">
            <input type="radio" name="type" value="damesfiets" <?php echo ($edit && $bikes['type'] == 'damesfiets') ? "checked" : ""; ?> required="required" id="damesfiets" /> damesfiets
        </label>
    </div>

    <div class="form-group">
        <label>Conditie *</label>
        <label class="radio-inline">
            <input type="radio" name="conditie" value="goed" <?php echo ($edit && $bikes['type'] == 'goed') ? "checked" : ""; ?> required="required" id="goed" /> goed
        </label>
        <label class="radio-inline">
            <input type="radio" name="conditie" value="licht beschadigd" <?php echo ($edit && $bikes['type'] == 'licht beschadigd') ? "checked" : ""; ?> required="required" id="licht beschadigd" /> licht beschadigd
        </label>
        </label>
        <label class="radio-inline">
            <input type="radio" name="conditie" value="slecht" <?php echo ($edit && $bikes['type'] == 'slecht') ? "checked" : ""; ?> required="required" id="slecht" /> slecht
        </label>
    </div>

    <div class="form-group">
        <label for="prijs">Prijs *</label>
        <input type="number" step="0.01" name="prijs" required value="<?php echo htmlspecialchars($edit ? $customer['prijs'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Prijs" class="form-control" id="prijs">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Opslaan <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>