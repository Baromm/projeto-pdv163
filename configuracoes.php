<?php
// Incluir a conexão com o banco de dados
include_once 'cfg/conexao.php';

// Iniciar a sessão
session_start();

// Verificar se o usuário está logado e se é um administrador
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_funcao'] != 'ADMIN') {
    // Se não estiver logado ou não for admin, redireciona para a página de login
    header('Location: login.php');
    exit();
}

// Obter a versão do produto
include_once '8b/versao.php'; // Supondo que o arquivo versao.php contenha a versão
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Adapte para seu arquivo CSS -->
</head>
<body>
    <!-- Menu de navegação das abas -->
    <div class="container">
        <h2>Configurações da Loja</h2>
        <ul class="nav-tabs">
            <li><a href="#dados_loja" class="active">Dados da Loja</a></li>
            <li><a href="#cadastro_operadores">Cadastro de Operadores</a></li>
            <li><a href="#config_cupom">Configuração do Cupom</a></li>
            <li><a href="#config_etiquetas">Configuração das Etiquetas</a></li>
            <li><a href="#layout_loja">Layout da Loja</a></li>
            <li><a href="#versao_programa">Versão do Programa</a></li>
        </ul>

        <!-- Conteúdo das abas -->
        <div class="tab-content">
            <!-- Aba Dados da Loja -->
            <div id="dados_loja" class="tab-pane active">
                <h3>Dados da Loja</h3>
                <form action="cfg/CN_dados_loja.php" method="POST">
                    <!-- Campos para dados da loja -->
                    <input type="text" name="nome_loja" placeholder="Nome da Loja">
                    <input type="text" name="cnpj" placeholder="CNPJ">
                    <input type="text" name="endereco" placeholder="Endereço">
                    <input type="text" name="telefone" placeholder="Telefone">
                    <button type="submit">Salvar Dados</button>
                </form>
            </div>

            <!-- Aba Cadastro de Operadores -->
            <div id="cadastro_operadores" class="tab-pane">
                <h3>Cadastro de Operadores</h3>
                <form action="cfg/CN_cadastro_operadores.php" method="POST">
                    <!-- Campos para cadastro de operadores -->
                    <input type="text" name="nome_operador" placeholder="Nome do Operador">
                    <input type="email" name="email_operador" placeholder="Email">
                    <input type="password" name="senha_operador" placeholder="Senha">
                    <button type="submit">Cadastrar Operador</button>
                </form>
            </div>

            <!-- Aba Configuração do Cupom -->
            <div id="config_cupom" class="tab-pane">
                <h3>Configuração do Cupom</h3>
                <form action="cfg/CN_config_cupom.php" method="POST">
                    <!-- Campos para configuração do cupom -->
                    <label for="modo_cupom">Modo de Geração do Cupom</label>
                    <select name="modo_cupom">
                        <option value="automático">Automático</option>
                        <option value="manual">Manual</option>
                    </select>
                    <label for="impressao_cupom">Configuração de Impressão</label>
                    <select name="impressao_cupom">
                        <option value="térmica">Impressão Térmica</option>
                        <option value="matricial">Impressão Matricial</option>
                    </select>
                    <button type="submit">Salvar Configurações do Cupom</button>
                </form>
            </div>

            <!-- Aba Configuração das Etiquetas -->
            <div id="config_etiquetas" class="tab-pane">
                <h3>Configuração das Etiquetas</h3>
                <form action="cfg/CN_config_etiquetas.php" method="POST">
                    <!-- Campos para configuração das etiquetas -->
                    <input type="file" name="logo_etiqueta" placeholder="Logo da Etiqueta">
                    <select name="modo_impressao_etiqueta">
                        <option value="automático">Impressão Automática</option>
                        <option value="manual">Impressão Manual</option>
                    </select>
                    <button type="submit">Salvar Configurações das Etiquetas</button>
                </form>
            </div>

            <!-- Aba Layout da Loja -->
            <div id="layout_loja" class="tab-pane">
                <h3>Layout da Loja</h3>
                <form action="cfg/CN_layout_loja.php" method="POST">
                    <!-- Campos para configuração do layout -->
                    <input type="color" name="cor_fundo" placeholder="Cor de Fundo">
                    <input type="color" name="cor_borda" placeholder="Cor das Bordas">
                    <input type="file" name="logo_loja" placeholder="Logo da Loja">
                    <button type="submit">Salvar Layout</button>
                </form>
            </div>

            <!-- Aba Versão do Programa -->
            <div id="versao_programa" class="tab-pane">
                <h3>Versão do Programa</h3>
                <p>Versão do Produto: <?php echo $versao; ?></p>
                <p>Suporte: <a href="mailto:suporte@8bits.tec.br">suporte@8bits.tec.br</a></p>
                <p>WhatsApp: <a href="https://wa.me/5511993056787" target="_blank">55(11)993056787</a></p>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script> <!-- Adapte para seu arquivo JS -->
</body>
</html>
