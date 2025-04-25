<?php
session_start();
if (!isset($_SESSION['bill'])) {
    $_SESSION['bill'] = [
        ["name" => "Coffee", "type" => "Drink", "qty" => 2, "price" => 50, "total" => 100],
        ["name" => "Tea", "type" => "Drink", "qty" => 1, "price" => 30, "total" => 30]
    ];
}
?>

<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ບິນຂອງທ່ານ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <table class="table mb-3 fs-6">
        <thead>
            <tr>
                <th>ລາຍການ</th>
                <th>ປະເພດ</th>
                <th>ຈໍານວນ</th>
                <th>ລາຄ່າ</th>
                <th>ລວມ</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($_SESSION['bill'] as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= htmlspecialchars($item['type']) ?></td>
                    <td><?= htmlspecialchars($item['qty']) ?></td>
                    <td><?= number_format((float)$item['price'], 2) ?></td>
                    <td><?= number_format((float)$item['total'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="../backend/sell/binsert.php" class="btn btn-primary w-100 me-2">ພິມບິນ</a>

</body>
</html>
