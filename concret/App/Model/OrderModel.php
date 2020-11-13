<?php
namespace App\Model;

use Core\Database;

class orderModel extends Database{
    

    public function getOrders()
    {
        $query = $this->pdo->query("SELECT * FROM orders");
        return $query->fetchAll();
    }
}