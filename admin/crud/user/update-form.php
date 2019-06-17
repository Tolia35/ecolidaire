<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];
$users = getAllRows("user");


require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modifier les informations d'un utilisateur</h1>

    <form method="post" action="update-query.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pseudo</label>
            <input type="text" name="label" maxlength="255" value="<?= $user["pseudo"]; ?>" class="form-control" placeholder="Pseudo" required>
        </div>
        <input type="hidden" name="id" value="<?= $user["id"]; ?>">
        <div class="form-group">
            <label>Email</label>
            <select name="email" class="form-control">
                <?php foreach ($users as $user) : ?>
                    <option value="<?= $user["id"]; ?>">
                        <?= $user["email"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>