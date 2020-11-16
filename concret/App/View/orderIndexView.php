<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SERVER .'assets/css/style.css' ?>">
    <title>Document</title>
</head>
<body>
    <h1>Bons de commande</h1>
    <h2>Liste des commandes</h2>
    <?= "http://localhost:8888/cours/poo2/concret/Public/assets/css/style.css" ?>
    <?php var_dump($_SERVER) ?>
    <table>
        <thead>
            <tr>
                <th>Commande</th>
                <th>Date de la commande</th>
                <th>Date de livraison</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order): ?>
            <tr>
                <td><a href="order.php?orderNumber=<?= $order->orderNumber ?>"><?= $order->orderNumber ?></a></td>
                <td><?= $order->orderDate ?></td>
                <td><?= $order->shippedDate ?></td>
                <td><?= $order->status ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>