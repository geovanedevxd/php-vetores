<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva o código PHP para representar um vetor com os seguintes dados:</title>
</head>

<body>
    <h1>Exerc 1 a</h1>

    <?php

    // Vetor com os dados fornecidos
    $vetor = array("ADS", "CD", "ADS", "ADS", "CD", "CD", "ADS");

    // Início da tabela HTML com bordas
    echo "<table border='1'>";

    // Início de uma nova linha na tabela
    echo "<tr>";

    // Loop para percorrer cada elemento do vetor
    foreach ($vetor as $valor) {
        // Criação de uma célula na tabela com o valor atual
        echo "<td>$valor</td>";
    }

    // Fim da linha na tabela
    echo "</tr>";

    // Fim da tabela HTML
    echo "</table>";

    echo '<br><br>';

    echo '<h2>Exercício 1 b</h2>';

    // Vetor com os dados fornecidos
    $vetor = array(
        array("Nome", "Idade", "Curso", "Média"),
        array("Pedro", 30, "ADS", 7.0)
    );

    // Início da tabela HTML com bordas
    echo "<table border='1'>";

    // Loop para percorrer cada linha do vetor
    foreach ($vetor as $linha) {
        // Início de uma nova linha na tabela
        echo "<tr>";

        // Loop para percorrer cada elemento da linha
        foreach ($linha as $valor) {
            // Criação de uma célula na tabela com o valor atual
            echo "<td>$valor</td>";
        }

        // Fim da linha na tabela
        echo "</tr>";
    }

    // Fim da tabela HTML
    echo "</table>";



    echo '<br><br>';

    echo '<h2>Exerc 2 a e b</h2>';
    // Vetor multidimensional com os dados fornecidos
    $dados = array(
        array("Nome", "Curso", "Média", "Situação"),
        array("Maria", "ADS", 7.0, ""),
        array("João", "CD", 5, ""),
        array("José", "CD", 8.0, ""),
        array("Pedro", "ADS", 1.5, ""),
        array("Paulo", "ADS", 6.0, "")
    );

    // Loop para percorrer cada linha do vetor de dados, exceto a primeira linha
    foreach ($dados as $indice => $linha) {
        // Calcula a média apenas para as linhas com dados dos alunos
        if ($indice != 0) {
            // Calcula a média como o terceiro elemento da linha
            $media = $linha[2];

            // Preenche a coluna "Situação" de acordo com a média
            if ($media < 2) {
                $dados[$indice][3] = "Reprovado";
            } elseif ($media >= 2 && $media < 6) {
                $dados[$indice][3] = "Exame Final";
            } else {
                $dados[$indice][3] = "Aprovado";
            }
        }
    }

    // Início da tabela HTML com bordas
    echo "<table border='1'>";

    // Loop para percorrer cada linha do vetor de dados
    foreach ($dados as $linha) {
        // Início de uma nova linha na tabela
        echo "<tr>";

        // Loop para percorrer cada elemento da linha
        foreach ($linha as $valor) {
            // Criação de uma célula na tabela com o valor atual
            echo "<td>$valor</td>";
        }

        // Fim da linha na tabela
        echo "</tr>";
    }

    // Fim da tabela HTML
    echo "</table>";

    echo '<br><br>';

    echo '<h2>Exerc 2 c</h2>';


    // Vetor multidimensional com os dados fornecidos
    $dados = array(
        array("Nome", "Curso", "Média", "Situação"),
        array("Maria", "ADS", 7.0, ""),
        array("João", "CD", 5, ""),
        array("José", "CD", 8.0, ""),
        array("Pedro", "ADS", 1.5, ""),
        array("Paulo", "ADS", 6.0, "")
    );

    // Array para armazenar a contagem da situação dos alunos por curso
    $contagem_situacao = array();

    // Loop para percorrer cada linha do vetor de dados, exceto a primeira linha
    foreach ($dados as $indice => $linha) {
        // Calcula a média apenas para as linhas com dados dos alunos
        if ($indice != 0) {
            // Calcula a média como o terceiro elemento da linha
            $media = $linha[2];

            // Preenche a coluna "Situação" de acordo com a média
            if ($media < 2) {
                $dados[$indice][3] = "Reprovado";
            } elseif ($media >= 2 && $media < 6) {
                $dados[$indice][3] = "Exame Final";
            } else {
                $dados[$indice][3] = "Aprovado";
            }

            // Conta a situação dos alunos por curso
            $curso = $linha[1];
            $situacao = $dados[$indice][3];
            if (!isset($contagem_situacao[$curso][$situacao])) {
                $contagem_situacao[$curso][$situacao] = 1;
            } else {
                $contagem_situacao[$curso][$situacao]++;
            }
        }
    }

    // Exibir a contagem da situação dos alunos por curso
    echo "<h2>Contagem da Situação dos Alunos por Curso</h2>";
    foreach ($contagem_situacao as $curso => $situacoes) {
        echo "<h3>$curso:</h3>";
        echo "<ul>";
        foreach ($situacoes as $situacao => $quantidade) {
            echo "<li>$situacao: $quantidade</li>";
        }
        echo "</ul>";
    }
    ?>


</body>

</html>