<div class="form-group">
    <label class="col-md-4 control-label">Gebruikersnaam</label>
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="user_name" placeholder="Gebruikersnaam" class="form-control" required="" value="<?php echo ($edit) ? $admin_account['user_name'] : ''; ?>" autocomplete="off">
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Wachtwoord</label>
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" name="password" placeholder="Wachtwoord" class="form-control" required="" autocomplete="off">
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Gebruiker type</label>
    <div class="col-md-4">
        <div class="radio">
            <label>
                <?php //echo $admin_account['admin_type'] 
                ?>
                <input type="radio" name="admin_type" value="super" required="" <?php echo ($edit && $admin_account['admin_type'] == 'super') ? "checked" : ""; ?> /> Super admin
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="admin_type" value="admin" required="" <?php echo ($edit && $admin_account['admin_type'] == 'admin') ? "checked" : ""; ?> /> Admin
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
        <button type="submit" class="btn btn-warning">Opslaan <i class="glyphicon glyphicon-send"></i></button>
    </div>
</div>