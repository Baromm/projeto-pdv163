<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="assets/css/recuperar_senha_style.css">
</head>
<body>
    <div class="recuperar-container">
	<img src="assets/img/logo.png" alt="Logo" class="logo">
        <h1>Recuperar Senha</h1>
        <!-- Mensagem de erro ou sucesso -->
        <?php if (isset($_GET['status']) && $_GET['status'] === 'sucesso'): ?>
            <div class="success-message">Um e-mail de recuperação foi enviado.</div>
        <?php elseif (isset($_GET['status']) && $_GET['status'] === 'erro'): ?>
            <div class="error-message">E-mail não encontrado. Por favor, tente novamente.</div>
        <?php endif; ?>

        <!-- Formulário de recuperação de senha -->
        <form action="cfg/CN_recuperar_senha.php" method="POST">
            <label for="email">Digite seu e-mail cadastrado:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Enviar</button>
		</form>
		<div><br>
    <a href="./login.php">
        <button id="reset_password">Cancelar</button>
    </a>
</div>
    </div>
	
</body>
</html>