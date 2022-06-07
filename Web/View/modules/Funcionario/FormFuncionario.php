<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/funcionario/save" method="post">
        <fieldset>
            <legend style=" color:#94ba65">Cadastro de Funcionário</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />
    <br>
            <label for="nome" style="color: #94ba65;">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style="background:#484d50; color:white" />
    <br>
            <label for="rg" style="color: #94ba65;">RG:</label>
            <input name="rg" id="rg" type="number" value="<?= $model->rg ?>" style="background:#484d50; color:white" />
    <br>
            <label for="cpf" style="color: #94ba65;">CPF:</label>
            <input name="cpf" id="cpf" type="number" value="<?= $model->cpf ?>" style="background:#484d50; color:white" />
    <br>
            <label for="data_nascimento" style="color: #94ba65;">Data Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" type="date" value="<?= $model->data_nascimento ?>" style="background:#484d50; color:white" />
    <br>
            <label for="email" style="color: #94ba65;">E-mail:</label>
            <input name="email" id="email" type="email" value="<?= $model->email ?>" style="background:#484d50; color:white" />
    <br>
            <label for="telefone" style="color: #94ba65;">Telefone:</label>
            <input name="telefone" id="telefone" type="tel" value="<?= $model->telefone ?>" style="background:#484d50; color:white" />
    <br>
            <label for="endereco" style="color: #94ba65;">Endereço:</label>
            <input name="endereco" id="endereco" type="text" value="<?= $model->endereco ?>" style="background:#484d50; color:white"/>
    <br>
            <button type="submit" style="background-color:#2790b0 ;">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/funcionario"><button style="height: 85px; width:350px; font-size:25px; background-color:#2790b0;border: 1 solid black;" >Ver listagem de funcionários</button></a></center>

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