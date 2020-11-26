<html lang="pt-br">

<head>
    <title>Sistema de controle de estoque</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    <link rel="stylesheet" href="<?php echo ASSETS ?>js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="js/datatables/css/style_dataTable.css">

    <link rel="stylesheet" href="<?php echo ASSETS ?>css/grade.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/auxiliar.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/style-m.css">

</head>

<body>
    <div class="site">
        <div class="base-topo">
            <?php include_once("header.php") ?>
        </div>


        <div class="conteudo">
            <?php
            $this->load($view, $viewData);
            ?>
        </div>
    </div>


    <script src="<?php echo ASSETS ?>js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/9480317a2f.js"></script>
    <script src="<?php echo ASSETS ?>js/js.js"></script>
    <script src="<?php echo ASSETS ?>js//componentes/js_modal.js"></script>
    <script src="<?php echo ASSETS ?>js/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo ASSETS ?>js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo ASSETS ?>js/componentes/js_data_table.js"></script>

</body>

</html>