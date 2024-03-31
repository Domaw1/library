<?php require_once "connection.php";
$currentUser = $_SESSION["user_email"] ?? null;

$select_query = mysqli_query($conn, "SELECT * FROM books");
$books = mysqli_fetch_all($select_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Library</title>
</head>

<body>
    <? require "navbar.php"; ?>

    <div class="d-flex ms-2 p-2 flex-wrap gap-5">
        <? foreach ($books as $book): ?>
            <div class="col-2">
                <div class="card h-100">
                    <img src="<?= 'https://fkniga.ru/media/product/04/KA-00471461.jpg' ?>"
                        class="card-img-top h-40" alt="...">
                    <div class="card-body flex-column">
                        <h5 class="card-title">
                            <?= $book[1] ?>
                        </h5>
                        <p class="card-text">
                            <?= $book[2] ?>
                        </p>
                        <p class="card-text">
                            <?= $book[3] ?>₽
                        </p>
                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        <? endforeach ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>