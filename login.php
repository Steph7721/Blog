<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/user.php";
require_once __DIR__ . "/template/_header.php";

$errors = [];
$messages = [];

if (isset($_POST["loginUser"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = verifyUserLoginPassword($pdo, $email, $password);
    if ($user) {
        session_regenerate_id(true);
        $_SESSION["user"] = $user;
        if ($user["role"] === "user") {
            header("location: index.php");
        } elseif ($user["role"] === "admin") {
            header("location: admin/index.php");
        }

    } else {
        $errors[] = "Email ou mot de passe incorrect";
    }
}

?>

<h1>Login</h1>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message; ?>
    </div>
<?php } ?>
<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php } ?>
<form method="POST">
    <div class="mb-3">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <input type="submit" name="loginUser" class="btn btn-primary" value="Enregistrer">

</form>

<?php require_once __DIR__ . "/template/_footer.php"; ?>