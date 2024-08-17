<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucro_empresa" class="form-label">Informe o lucro da empresa: </label>
            <input type="text" name="lucro_empresa" id="lucro_empresa" class="form-control" />
        </div>
        <div class="col">
            <label for="nome_funcionario" class="form-label">Informe o nome do Funcionario: </label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
    </div>
    <div>
        <div class ="form-group">
            <label class="form-label"> Escala </label>
            <div class ="col-sm-8">
                <input type="radio" name="escala" value="0.01" checked>
                <label for="1">1</label>
                <input type="radio" name="escala" value="0.03">
                <label for="2">2</label>
                <input type="radio" name="escala" value="0.04">
                <label for="3">3</label>
                <input type="radio" name="escala" value="0.05">
                <label for="4">4</label>
                <input type="radio" name="escala" value="0.07">
                <label for="5">5</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php

    if ($_POST){
        $lucro_empresa = $_POST['lucro_empresa'];
        $nome_funcionario = $_POST['nome_funcionario'];
        $escala = $_POST['escala'];
        echo CalcularBonusAnual($lucro_empresa, $nome_funcionario, $escala);
    }

    require_once("rodape.php");