<?php
// Incluir o arquivo de configuração que processa o formulário
require_once __DIR__ . '/cfg/CN_redefinir_senha.php'; // Apenas incluir a lógica de processamento da redefinição

// Obter token da URL
$token = $_GET['token'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="./assets/css/redefinir_senha_style.css"> <!-- Caminho correto do CSS -->
</head>
<body>
    <div class="login-container">
        <img src="assets/img/logo.png" alt="Logo" class="logo">

        <!-- Exibir mensagem de erro se houver -->
        <?php if ($erro): ?>
            <div class="error-message">
                <?php echo $erro; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="redefinir_senha.php?token=<?php echo $token; ?>"> <!-- Passar o token via URL -->
            <label for="nova_senha">Nova Senha:</label>
            <input type="password" id="nova_senha" name="nova_senha" required>

            <label for="confirma_senha">Confirme a Senha:</label>
            <input type="password" id="confirma_senha" name="confirma_senha" required>

            <button type="submit">Redefinir Senha</button>
        </form>

        <!-- Barra de força da senha -->
		<!-- Container da barra de força -->
			<div id="password-strength-container">
				<div id="password-strength-bar"></div>
			</div>

				<!-- Texto abaixo da barra de força -->
				<div id="password-strength-text"> </div>

    </div>

    <script src="assets/js/redefinir_senha.js"></script> <!-- Caminho correto do JS -->
</body>
</html>
