<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include ('../../vendor/phpmailer/src/Exception.php');
include ('../../vendor/phpmailer/src/PHPMailer.php');
include ('../../vendor/phpmailer/src/SMTP.php');

//include('../Model/ProductClass.php');
include('../Model/ProductService.php');
//include('../Model/BillClass.php');
include('../Model/BillService.php');
//include('../Model/SploiClass.php');
//include('../Model/SpLoiService.php');
class productController
{
    public $productService;
    public $billService;
    public function __construct()
    {
        $this->productService = new ProductService();
        $this->billService = new BillService();
        
    }
    public function getAllProductIndex()
    {
        $result_List =   $this->productService->getAllProduct();
        include("../Views/index.php");
    }
}
?>
