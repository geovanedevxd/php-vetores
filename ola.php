<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     
    $nomes = array("João", "Maria", "José", "Paulo", "Carlos"); 
    ?>
    
    <ol>
        <?php foreach ($nomes as $nome): ?>
            <li><?php echo $nome; ?></li>
        <?php endforeach; ?>
    </ol>
    
    ?>
</body>

</html>