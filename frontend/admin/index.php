<?php if (isset($_GET['erro'])): ?>
    <div class="error">Email ou senha inválidos</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-box">
    <h2>Administrador</h2>

    <?php if (isset($_GET['erro'])) echo "<p class='error'>Login inválido</p>"; ?>

    <form action="login.php" method="POST">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button type="submit">LOGIN</button>
    </form>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>
