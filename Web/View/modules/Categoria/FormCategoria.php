<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/categoria/save" method="post">
        <fieldset>
            <legend style="color: #94ba65;">Cadastro de Categoria</legend>
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />

<br>
            <label for="descricao" style="color: #94ba65    ;">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:#484d50; color:white"/>

            <br>
            <button type="submit" style="background-color:#2790b0 ;">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/categoria"><button style="height: 85px; width:350px; font-size:25px; background-color:#2790b0;border: 1 solid black;" >Ver listagem de categorias</button></a></center>

    <a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#2790b0;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;" >Voltar para página inicial</button></a>

<style>
        body{
            background-color: #2e2e2e;
        }
        


    </style>

</body>
</html>