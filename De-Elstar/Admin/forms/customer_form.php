<fieldset>
    <div class="form-group">
        <label for="voornaam">Voornaam *</label>
        <input type="text" name="voornaam" value="<?php echo htmlspecialchars($edit ? $customer['voornaam'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Voornaam" class="form-control" required="required" id="voornaam">
    </div>

    <div class="form-group">
        <label for="tussenvoegsel">Tussenvoegsel</label>
        <input type="text" name="tussenvoegsel" value="<?php echo htmlspecialchars($edit ? $customer['tussenvoegsel'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Tussenvoegsel" class="form-control" id="tussenvoegsel">
    </div>

    <div class="form-group">
        <label for="achternaam">Achternaam *</label>
        <input type="text" name="achternaam" value="<?php echo htmlspecialchars($edit ? $customer['achternaam'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Achternaam" class="form-control" required="required" id="achternaam">
    </div>

    <div class="form-group">
        <label>Geslacht *</label>
        <label class="radio-inline">
            <input type="radio" name="geslacht" value="man" <?php echo ($edit && $customer['geslacht'] == 'man') ? "checked" : ""; ?> required="required" id="man" /> Man
        </label>
        <label class="radio-inline">
            <input type="radio" name="geslacht" value="vrouw" <?php echo ($edit && $customer['geslacht'] == 'vrouw') ? "checked" : ""; ?> required="required" id="vrouw" /> Vrouw
        </label>
        <label class="radio-inline">
            <input type="radio" name="geslacht" value="anders" <?php echo ($edit && $customer['geslacht'] == 'anders') ? "checked" : ""; ?> required="required" id="Anders" /> Anders
        </label>
    </div>

    <div class="form-group">
        <label for="adres">Adres *</label>
        <textarea name="adres" placeholder="Adres" class="form-control" required id="adres"><?php echo htmlspecialchars(($edit) ? $customer['adres'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group">
        <label for="postcode">Postcode *</label>
        <input type="postcode" name="postcode" required value="<?php echo htmlspecialchars($edit ? $customer['postcode'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Postcode" class="form-control" id="postcode">
    </div>

    <div class="form-group">
        <label for="plaats">Plaats *</label>
        <input type="plaats" name="plaats" required value="<?php echo htmlspecialchars($edit ? $customer['plaats'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Plaats" class="form-control" id="plaats">
    </div>

    <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" name="email" required value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="E-mailadres" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="telefoon">Telefoon nummer</label>
        <input type="number" name="telefoon" value="<?php echo htmlspecialchars($edit ? $customer['telefoon'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Telefoonnummer" class="form-control" type="text" id="telefoon">
    </div>

    <div class="form-group">
        <label>Geboortedatum *</label>
        <input name="geboortedatum" required value="<?php echo htmlspecialchars($edit ? $customer['geboortedatum'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Geboortedatum" class="form-control" type="date">
    </div>

    <div class="form-group">
        <label>Gebruikersnaam</label>
        <div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control" required="" value="">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Wachtwoord</label>
        <div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" placeholder="Wachtwoord" class="form-control" required="" value="" autocomplete="false">
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Opslaan <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>