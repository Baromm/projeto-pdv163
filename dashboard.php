<?php
// Incluir a lógica do dashboard e as informações do topo e style
include('cfg/CN_dashboard.php');
include('cfg/ST_config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <!-- Topo -->
    <?php include('cfg/ST_topo.php'); ?>

    <!-- Conteúdo Principal -->
    <div class="conteudo">
        <!-- Informações financeiras -->
        <div class="informacoes">
            <div class="caixa vendas-mes">
                <h3>Total de Vendas do Mês</h3>
                <p>R$ <?php echo number_format($totalVendasMes, 2, ',', '.'); ?></p>
            </div>
            <div class="caixa vendas-semana">
                <h3>Total de Vendas da Semana</h3>
                <p>R$ <?php echo number_format($totalVendasSemana, 2, ',', '.'); ?></p>
            </div>
            <div class="caixa vendas-dia">
                <h3>Total de Vendas do Dia</h3>
                <p>R$ <?php echo number_format($totalVendasDia, 2, ',', '.'); ?></p>
            </div>
            <div class="caixa quantidade-dia">
                <h3>Quantidade de Vendas no Dia</h3>
                <p><?php echo $quantidadeVendasDia; ?> Vendas</p>
            </div>
            <div class="caixa quantidade-mes">
                <h3>Quantidade de Vendas no Mês</h3>
                <p><?php echo $quantidadeVendasMes; ?> Vendas</p>
            </div>
        </div>

        <!-- Botões -->
        <div class="botoes">
            <div class="botao">
                <a href="vendas.php">PDV</a>
                <a href="crediario.php">Crediário</a>
            </div>
            <div class="botao">
                <a href="fechar_caixa.php">Fechar Caixa</a>
                <a href="relatorios.php">Relatórios</a>
            </div>
            <div class="botao">
                <a href="despesas.php">Despesas</a>
                <a href="cadastro_clientes.php">Cadastro de Clientes</a>
            </div>
            <div class="botao">
                <a href="imprimir_etiqueta.php">Devoluções Trocas e Vouchers</a>
                <a href="cadastro_operador.php">Cadastro de Operadores</a>
            </div>
            <div class="botao">
                <a href="etiqueta_entrega.php">Impressão de Etiquetas, Cupons e Vouchers</a>
                <a href="alterar_dados.php">Alterar Dados da Loja</a>
            </div>
            <div class="botao">
                <a href="etiqueta_entrega.php">Estoque de Produtos</a>
                <a href="alterar_dados.php">Configurações</a>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <?php include('cfg/ST_rodape.php'); ?>
</body>
</html>