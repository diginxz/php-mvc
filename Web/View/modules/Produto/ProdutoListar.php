<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>
<body>

<br>
<h1 align="center" style="color:#94ba65" >LISTAGEM DE PRODUTOS</h1>
<table id="tabela" width="100%" border="solid" bgcolor="gainsboro">
    <tr>
        <th style="color:#94ba65; font-size:15px">EXCLUIR</th>
        <th style="color:#94ba65">ID</th>
        <th style="color:#94ba65">NOME & EDITAR</th>
        <th style="color:#94ba65">DESCRIÇÃO</th>
        <th style="color:#94ba65">PREÇO</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a style="color:red; text-decoration: none;" href="/produto/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td style="color:white"><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:aqua;" href="/produto/form?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td style="color:white"><?= $item['descricao'] ?></td>
        <td style="color:white">R$<?= $item['preco'] ?></td>
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
            <br>
            <br>
            <td colspan="10"><b style="font-size: 20px; color:#94ba65">Nada aqui.</b></td>
            </tr>
        <?php endif ?>

</table>

<br>
<br>
<center><a href="/produto/form"><button style="height: 85px; width:350px; font-size:25px; background-color:#2790b0;border: 1 solid black;" >Adicionar mais produtos</button></a></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#2790b0;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;" >Voltar à página inicial</button></a>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        background-color: #484d50;
        
        
        
        
        
    }
    h1{
        font-size: 35;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-color: #2e2e2e;
        
    }
</style>
</body>
</html>