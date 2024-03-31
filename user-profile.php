<?php require_once "connection.php";
$currentUser = $_SESSION["user_email"];

$select_query = $conn->prepare("SELECT * FROM users WHERE email = ?");
$select_query->bind_param("s", $currentUser);
$select_query->execute();

$user = $select_query->get_result()->fetch_assoc();

$select_query -> close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    <? require "navbar.php" ?>

    <div class="ms-2">
        <h1>Профиль</h1>
        <form action="update-profile.php" method="post" class="w-50">
            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" class="form-control" id="email" 
                       name="email" value="<?= $user["email"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login" 
                       name="login" value="<?= $user["login"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="text" class="form-control" id="password" 
                       name="password" value="<?= $user["password"] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать профиль</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>