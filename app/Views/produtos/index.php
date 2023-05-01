<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Produtos dentro da pasta view</title>
</head>
<body>
    <h1><?php echo $titulo ?></h1>

    <table border="1px" width="100%">
        <thread>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thread>
        <tbody>
            <?php  foreach($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['descricao'] ?></td>
                    <td><?= $produto['valor_de_compra'] ?></td>
                    <td><?= $produto['valor_de_venda'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>

                    <?php if($produto['validade'] == ""): ?>
                         <td>Produto sem Validade</td>
                    <?php else: ?>
                        <td><?= $produto['validade'] ?></td>
                    <?php endif; ?>
                   
                </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</body>
</html>