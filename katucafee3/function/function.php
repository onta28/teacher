<?php 
 class Calculator{
// ບວກ
function Plus($result1,$result2){
    return $result1 + $result2;
    }
    // ລົບ
    function Minus($result1,$result2){
    return $result1 - $result2;
    }
    // ຄູນ
    function Multiply($result1,$result2){
    return $result1 * $result2;
    }
    // ຫານ
    function Divide($result1,$result2){
    return $result1 / $result2;
    }
    function insertBill($connection)
{
    if (!isset($_SESSION['bill']) || empty($_SESSION['bill'])) {
        return; 
    }
    foreach ($_SESSION['bill'] as $item) {
        $saleDate = date('Y-m-d H:i:s'); 
        $sql = "INSERT INTO tb_bill (ProductID, quantity, total_price, sale_date) 
                VALUES ((SELECT ProductID FROM tb_product WHERE ProductName = :productName), :qty, :total, :saleDate)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':productName', $item['name']);
        $statement->bindParam(':qty', $item['qty']);
        $statement->bindParam(':total', $item['total']);
        $statement->bindParam(':saleDate', $saleDate);
        $statement->execute();
    }
    unset($_SESSION['bill']);
}

 }
 
?>