<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Dados do Servidor</title>
</head>
<body>
    <pre>

    <h1>PHP Curso em vídeo - Dados do Servidor</h1>
    <?php 
    require_once 'Conta.php';
    
    $p1 = new Conta();//Jubileu
    $p1->abrirConta("CC");//50 saldo
    $p1->setDono("Jubileu");
    $p1->setNumConta("33333311111");
    $p1->depositar(53);
    $p1->sacar(50);
    $p1->pagarMensal();
    $p1->sacar(3);
    $p1->fecharConta();

    $p2 = new Conta();//Creusa
    $p2->abrirConta("CP");
    $p2->setDono("Creusa");
    $p2->setNumConta("33333");
    $p2->depositar(8000);
    $p2->sacar(10);
    $p2->pagarMensal();

    print_r($p1);
    print_r($p2);
    
    ?>
    </pre>
</body>
</html>