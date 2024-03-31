<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <h1>
                Библиотека
            </h1>
        </a>
        <div>
            <? if ($currentUser): ?>
                <a href="user-profile.php" class="navbar-brand">Профиль</a>
                <a href="logout.php" class="navbar-brand">Выйти</a>
            <? else: ?>
                <a href="auth.php" class="navbar-brand">Войти</a>
            <? endif ?>
        </div>
    </div>
</nav>