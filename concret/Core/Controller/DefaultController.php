<?php
namespace Core\Controller;

class DefaultController{
    public function render($filename){
        require ROOT."/App/View/header.php";
        require ROOT."/App/View/$filename.php";
        require ROOT."/App/View/footer.php";
    }
}