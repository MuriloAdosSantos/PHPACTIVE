<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cálculo de Média</title>
</head>

<body>
    <style>
        body {
            background-color: rgb(255, 74, 74);
        }

        div#interface {
            width: 950px;
            background-color: #ffffff;
            margin: -80px auto 0px auto;
            box-shadow: 0px 0px 10px black;
            padding: 90px;
        }

        header#cabecalho h1 {
            font-size: 35pt;
            color: #000000;
            padding: 0px;
            margin-bottom: 0px;
        }

        .form-nome {
            height: 30px;
            padding-bottom: 15px;
        }

        .form-n1 {
            height: 30px;
            padding-bottom: 15px;
        }

        .form-n2 {
            height: 30px;
            padding-bottom: 15px;
        }

        .btn {
            margin-top: 5px;
        }

        input {
            width: 180px;
        }

        button {
            background-color: blue;
            border: 1px solid blue;
            border-radius: 30px;
        }

        .link {
            padding-top: 30px;
        }
    </style>
    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $sit = "";
        $media = ($n1 + $n2) / 2;
        if ($media >= 6) {
            $sit = "Aprovado";
        } elseif ($media >= 4) {
            $sit = "Exame final";
        } else {
            $sit = 'Reprovado';
        }
    }
    ?>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <h1 style="text-align: center;">Cálculo de Média</h1>
            </hgroup>
        </header>

        <h3>Sistema de consulta de média</h3>
        <fieldset>
            <p> Caso o Aluno tenha médias superiores a 6: terá sua situação como "Aprovado", caso o aluno com nota inferiro a 6 e maior que 4 o resultado será "Exame final" e em caso de notas inferiores a 6 o resultado será "Reprovado".</p>
        </fieldset>

        <h3>Nome: <span id="nom"><?php if(isset($nome))echo $nome; ?></span></h3>
        <h3>Média: <span id="med"><?php if(isset($media))echo $media; ?></span></h3>
        <h3>Situação: <span id="sit"><?php if(isset($sit)) echo$sit; ?></span></h3>

        <form action="" method="post">
            <div class="form-nome">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"><br>
            </div>
            <div class="form-n1">
                <label for="n1">Nota 1</label><br>
                <input type="number" name="n1" id="n1"><br>
            </div>
            <div class="form-n2">
                <label for="n2">Nota 2</label><br>
                <input type="number" name="n2" id="n2"><br>
            </div>
            <div class="btn">
                <button>Calcular</button>
            </div>
        </form>
        <div class="link">
            <a href="../index.html">Voltar</a>
        </div>
    </div>
</body>

</html>