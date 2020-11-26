<div class="conteudo d-flex justify-content-space-between">
    <a href="" class="logo"><img src="<?php echo ASSETS ?>img/logo.png"></a> <a href="" class="mobmenu"><i class="fas fa-bars"></i></a>
    <ul class="menu">
        <li><a href="<?php echo URL_BASE ?>"><i class="fas fa-home"></i> Home</a></li>
        <li class="sub"><a href="" rel="sub"><i class="fas fa-arrow-circle-right"></i> Cadastros</a>
            <ul>
                <li><a href="<?php echo URL_BASE . "cliente/lst_cliente" ?>">Cliente</a></li>
                <li><a href="<?php echo URL_BASE . "produto/lst_produto" ?>">Produto</a></li>

            </ul>
        </li>
        <li class="sub"><a href="" rel="sub"><i class="fas fa-boxes"></i> Estoque</a>
            <ul>
                <li><a href="<?php echo URL_BASE . "produto/entrada" ?>">Entrada de produtos</a></li>
                <li><a href="<?php echo URL_BASE . "produto/saida" ?>">Saida de produto</a></li>
            </ul>
        </li>
        <li><a href="<?php echo URL_BASE . "vendas" ?>"><i class="fas fa-arrow-circle-right"></i> Vendas</a></li>

        <li class="sub"><a href="" rel="sub"><i class="fas fa-arrow-circle-right"></i> Consultas</a>
            <ul>
                <li><a href="<?php echo URL_BASE . "consulta/entrada" ?>">Entradas</a></li>
                <li><a href="<?php echo URL_BASE . "consulta/saida" ?>">Saídas</a></li>
                <li><a href="<?php echo URL_BASE . "consulta/movimentacao" ?>">Movimentações</a></li>
                <li><a href="<?php echo URL_BASE . "vendas" ?>">Vendas</a></li>
            </ul>
        </li>

        <li><a href=""><i class="fas fa-sign-out-alt"></i> Sair</a></li>
    </ul>
</div>