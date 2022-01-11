<?php
    //echo 'ola mundo';
    
?>

<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link  rel="stylesheet" href="css/bootstrap.css" >
    <style>
        #tamanhocontainer{
            width: 500px;
            margin-top:40px;
            color: #ffffff;
        }
        #formulario{
            margin-top: 20px;
        }
        #botao{
            background-color: #FF1168;
            color: #ffffff;
        }
        body{
            background-color: rgb(44, 34, 34);
        }
    </style>

</head>
<body>
    <div class="container" id="tamanhocontainer" >
    <h4>Formulário de Cadastro</h4>
    <form id="formulario" action="inserir_produto.php" method="POST">
        <div class="mb-3">
            <label >Nro produto</label>
            <input type="number" class="form-control" name="nroproduto" autocomplete="off" placeholder="Insira o numero do produto">
        </div>
        <div class="mb-3">
            <label >Nome produto</label>
            <input type="text" class="form-control" name="nomeproduto" autocomplete="off" placeholder="Insira o nome do produto">
        </div>
        <div class="mb-3">
            <label>Categorias</label>
            <select class="form-select" autocomplete="off" name="categoria" >
                <option>one</option>
                <option>two</option>
                <option>three</option>
                <option>four</option>
            </select>
        </div>
        <div class="mb-3">
            <label >Quantidade</label>
            <input type="number" class="form-control" name="quantidade" autocomplete="off" placeholder="Insira a quantidade">
        </div>
        <div class="mb-3">
            <label>Fornecedor</label>
            <select class="form-select" autocomplete="off" name="fornecedor" >
                <option>one</option>
                <option>two</option>
                <option>three</option>
                <option>four</option>
            </select>
        </div>
        <div style="text-align: right;">
            <button type="submit" id="botao" class="btn" >Cadastrar</button>
        </div>
    </form>
    </div>
    <script type="text" src="js/bootstrap.js"></script>
</body>
</html>