<?php require_once "connection.php";
$currentUser = $_SESSION["user_email"] ?? null;

if ($currentUser) {
    header("Location: index.php");
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div style="height: 100dvh" class="d-flex justify-content-center align-items-center">
        <form action="reg-db.php" method="post" class="w-50 needs-validation">
            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">
                    Отлично!
                </div>
                <div class="invalid-feedback">
                    Введите корректную почту.
                </div>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login" name="login" required>
                <div class="valid-feedback">
                    Отлично!
                </div>
                <div class="invalid-feedback">
                    Введите логин.
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="valid-feedback">
                    Отлично!
                </div>
                <div class="invalid-feedback">
                    Введите пароль.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <div>
                <a href="auth.php">Авторизация...</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                })

                form.addEventListener('focusout', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                });
            })
        })();
    </script>
</body>

</html>