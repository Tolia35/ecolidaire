<?php


require_once __DIR__."/../../../model/database.php";

$id = $_GET["id"];
$member = getOneRow("member", $id);


 require_once __DIR__ . "/../../layout/header.php"; ?>

    <h1>Modifier un membre</h1>

    <form method="post" action="update-query.php">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" name="firstname" value="<?= $member["firstname"]; ?>" class="form-control" placeholder="Libellé" required>
        </div>
        <input type="hidden" name="id" value="<?= $member["id"]; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>