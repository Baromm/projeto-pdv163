<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login_style.css">
</head>
<body>
    <!-- Container do formulário de login -->
    <div class="login-container">
        <!-- Logo da loja -->
        <img src="assets/img/logo.png" alt="Logo" class="logo">

        <h1>Login</h1>

        <!-- Exibição de mensagem de sucesso (senha redefinida) -->
        <?php if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'senha_redefinida'): ?>
            <div class="success-message">
                Senha redefinida com sucesso! Agora, você pode fazer login com sua nova senha.
            </div>
        <?php endif; ?>

        <!-- Exibição de erro caso as credenciais sejam incorretas -->
        <?php if (isset($_GET['erro'])): ?>
            <div class="error-message">
                <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php endif; ?>

        <form action="cfg/CN_login.php" method="POST">
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" id="entrar">Entrar</button>
        </form>

        <!-- Link de recuperação de senha como um botão estilizado -->
        <a href="recuperar_senha.php" id="reset_password">Esqueci minha senha</a>
    </div>
    <script src="assets/js/login_script.js"></script>
</body>
</html>
