<?php
// Incluir a lógica do CN_cadastro_operador.php
include('cfg/CN_cadastro_operador.php');
include('cfg/ST_config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Operadores</title>
    <link rel="stylesheet" href="assets/css/operador_style.css">
</head>
<body>

    <!-- Topo -->
    <?php include('cfg/ST_topo.php'); ?>

    <!-- Formulário de Cadastro de Operadores -->
    <div class="formulario-cadastro">
        <h2>Cadastro de Operadores</h2>
        <?php if (isset($_GET['success'])): ?>
            <p class="mensagem-sucesso">Operador cadastrado com sucesso!</p>
        <?php endif; ?>
        <form method="POST" action="cadastro_operador.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="funcao">Função:</label>
                <select id="funcao" name="funcao" required>
                    <option value="ADMINISTRADOR">Administrador</option>
                    <option value="ADMINISTRATIVO">Administrativo</option>
                    <option value="GERENTE">Gerente</option>
                    <option value="VENDEDOR">Vendedor</option>
                    <option value="SUPERVISOR">Supervisor</option>
                    <option value="INVENTARIO">Inventário</option>
					<option value="REPOSITOR">Repositor</option>
                    <option value="TEMPORARIO">Temporário</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <button type="submit" class="btn-salvar">Cadastrar Operador</button> <a href="dashboard.php" class="btn-voltar">Voltar para o Dashboard</a>
        </form>
    </div>

    <!-- Rodapé -->
    <?php include('cfg/ST_rodape.php'); ?>

</body>
</html>