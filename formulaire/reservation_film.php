<?php
include '../include/header.php';
?>
<html>
<body>
<form action="" method="post" class="container" style="padding-top: 150px">
    <div class="form-group">
        <label for="enfant">Nombre de place enfant</label>
        <select name="nb_enfant" id="enfant" class="form-control">
            <?php for ($i = 0; $i < 30; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nb_16">Nombre de place +16 ans</label>
        <select name="nb_16" id="nb_16" class="form-control">
            <?php for ($i = 0; $i < 30; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nb_adulte">Nombre de place adulte (18 ans et plus)</label>
        <select name="nb_adulte" id="nb_adulte" class="form-control">
            <?php for ($i = 0; $i < 30; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="hidden" name="id_utilisateur" value="<?php $_GET['id_utilisateur']; ?>">
        <input type="hidden" name="id_film" value="<?php $_GET['id_film']; ?>">
        <input type="submit" name="Valider" class="btn btn-success">
    </div>
</form>
</body>
</html>