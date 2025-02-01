<?php
// Incluir a lógica do CN_dados.php
include('cfg/CN_dados.php');
include('cfg/ST_config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link rel="stylesheet" href="assets/css/dados_style.css">
	<?php include('cfg/ST_topo.php'); ?>
</head>
<body>

    <!-- Formulário de Alteração de Dados -->
    <div class="formulario-dados">
        <h2>Alterar Dados da Loja</h2>
        <?php if (isset($_GET['success'])): ?>
            <p class="mensagem-sucesso">Dados atualizados com sucesso!</p>
        <?php endif; ?>
        <form method="POST" action="alterar_dados.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($dados['NOME']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($dados['CPF']); ?>" required>
            </div>
            <div class="form-group">
                <label for="nome_juridico">Nome Jurídico:</label>
                <input type="text" id="nome_juridico" name="nome_juridico" value="<?php echo htmlspecialchars($dados['NOME_JURIDICO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="nome_fantasia">Nome Fantasia:</label>
                <input type="text" id="nome_fantasia" name="nome_fantasia" value="<?php echo htmlspecialchars($dados['NOME_FANTASIA']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" value="<?php echo htmlspecialchars($dados['CNPJ']); ?>" required>
            </div>
            <div class="form-group">
                <label for="ie">IE:</label>
                <input type="text" id="ie" name="ie" value="<?php echo htmlspecialchars($dados['IE']); ?>" required>
            </div>
            <div class="form-group">
                <label for="rua">Rua:</label>
                <input type="text" id="rua" name="rua" value="<?php echo htmlspecialchars($dados['RUA']); ?>" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" id="numero" name="numero" value="<?php echo htmlspecialchars($dados['NUMERO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" value="<?php echo htmlspecialchars($dados['BAIRRO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" value="<?php echo htmlspecialchars($dados['CIDADE']); ?>" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo htmlspecialchars($dados['ESTADO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" value="<?php echo htmlspecialchars($dados['CEP']); ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($dados['TELEFONE']); ?>" required>
            </div>
            <div class="form-group">
                <label for="banco">Banco:</label>
                <input type="text" id="banco" name="banco" value="<?php echo htmlspecialchars($dados['BANCO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="nome_favorecido">Nome do Favorecido:</label>
                <input type="text" id="nome_favorecido" name="nome_favorecido" value="<?php echo htmlspecialchars($dados['NOME_FAVORECIDO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cpf_favorecido">CPF do Favorecido:</label>
                <input type="text" id="cpf_favorecido" name="cpf_favorecido" value="<?php echo htmlspecialchars($dados['CPF_FAVORECIDO']); ?>" required>
            </div>
            <div class="form-group">
                <label for="agencia">Agência:</label>
                <input type="text" id="agencia" name="agencia" value="<?php echo htmlspecialchars($dados['AGENCIA']); ?>" required>
            </div>
            <div class="form-group">
                <label for="conta">Conta:</label>
                <input type="text" id="conta" name="conta" value="<?php echo htmlspecialchars($dados['CONTA']); ?>" required>
            </div>
            <div class="form-group">
                <label for="chave_pix">Chave PIX:</label>
                <input type="text" id="chave_pix" name="chave_pix" value="<?php echo htmlspecialchars($dados['CHAVE_PIX']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email da Loja:</label>
                <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($dados['EMAIL']); ?>" required>
            </div>
            <div class="form-group">
                <label for="politica">Link de Políticas da Empresa:</label>
                <input type="text" id="politica" name="politica" value="<?php echo htmlspecialchars($dados['POLITICA']); ?>">
            </div>
            <div class="form-group">
                <label for="tela_login">Link Para Tela de Login:</label>
                <input type="text" id="tela_login" name="tela_login" value="<?php echo htmlspecialchars($dados['TELA_LOGIN']); ?>">
            </div>
            <div class="form-group">
                <label for="loja_ecommerce">Link da Loja E-commerce:</label>
                <input type="text" id="loja_ecommerce" name="loja_ecommerce" value="<?php echo htmlspecialchars($dados['LOJA_ECOMMERCE']); ?>">
            </div>
            <div class="form-group">
                <label for="whatsapp">WhatsApp:</label>
                <input type="text" id="whatsapp" name="whatsapp" value="<?php echo htmlspecialchars($dados['WHATSAPP']); ?>" required>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" id="instagram" name="instagram" value="<?php echo htmlspecialchars($dados['INSTAGRAM']); ?>">
            </div>
            <button type="submit" class="btn-salvar">Salvar Alterações</button> <a href="dashboard.php" class="btn-voltar">Voltar para o Dashboard</a>
        </form>
    </div>
    <!-- Rodapé -->
    <?php include('cfg/ST_rodape.php'); ?>

</body>
</html>