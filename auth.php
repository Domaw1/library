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
    <title>Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div style="height: 100dvh" class="d-flex justify-content-center align-items-center" class="needs-validation">
        <form class="w-50 needs-validation" action="auth-db.php" method="post" novalidate>
            <div class="mb-4">
                <label for="email" class="form-label">Пароль</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">
                    Отлично!
                </div>
                <div class="invalid-feedback">
                    Введите корректную почту.
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Почта</label>
                <input type="text" class="form-control" id="password" name="password" required>
                <div class="valid-feedback">
                    Отлично!
                </div>
                <div class="invalid-feedback">
                    Введите пароль.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
                <div>
                    <a href="reg.php">Регистрация...</a>
                </div>
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
                }, false)

                form.addEventListener('focusout', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false);
            })
        })()
    </script>
</body>

</html>