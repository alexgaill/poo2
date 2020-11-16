<?php
namespace App\Controller;

use App\Model\OrderModel;
use Core\Controller\DefaultController;

class OrderController extends DefaultController{

    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function renderIndex()
    {
        $orders = $this->model->query("SELECT * FROM orders");
        $this->render("orderIndexView");
    }

    public function renderOne()
    {
        $order = $this->model->query("SELECT * FROM orders WHERE orderNumber = 10100", true);
        require ROOT."/App/View/orderOneView.php";
    }

    public function saveOrders($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
            password_hash($data["password"], PASSWORD_DEFAULT);
        }
        $this->model->saveOrder($data);
    }
}