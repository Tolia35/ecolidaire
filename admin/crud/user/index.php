<?php
require_once __DIR__ . "/../../../model/database.php";

$users = getAllRows("user");

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Gestion des utilisateurs</h1>

    <hr>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user["pseudo"]; ?></td>
                <td><?= $user["email"]; ?></td>
                <td>
                    <div>
                        <input type="checkbox" id="scales" name="scales"
                               checked>
                        <label for="scales"></label>
                    </div>
                </td>
                <td class="actions">
                    <div class="d-flex justify-content-around"><a href="update-form.php?id=<?= $user["id"]; ?>" class="btn btn-warning">
                            <i class="fa fa-edit"></i>
                            Modifier
                        </a>
                        <form method="post" action="delete-query.php">
                            <input type="hidden" name="id" value="<?= $user["id"]; ?>">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>