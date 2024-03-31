<?php require_once "connection.php";;

$email = trim($_POST['email']);
$login = trim($_POST['login']);
$password = trim($_POST['password']);

$currentUser = $_SESSION["user_email"];

$query = $conn->prepare("UPDATE users SET email = ?, login = ?, password = ? WHERE email = ?");

$query->bind_param("ssss", $email, $login, $password, $currentUser);
$query->execute();

// setcookie("currentUser", $email, time() + 3600);
$_SESSION["user_email"] = $email;

echo "<script>alert('Профиль изменен!');
    window.location='user-profile.php'</script>";

$query -> close();