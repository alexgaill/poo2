<?php
namespace App\Controller;

use App\Model\OrderModel;

class OrderController{

    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function renderIndex()
    {
        $orders = $this->model->query("SELECT * FROM orders");
        require ROOT."/App/View/orderIndexView.php";
    }

    public function renderOne()
    {
        $order = $this->model->query("SELECT * FROM orders WHERE orderNumber = 10100", true);
        require ROOT."/App/View/orderOneView.php";
    }
}