<!-- <?php
//terminal:composer require mongodb/mongodb 
// error use :composer update --ignore-platform-reqs

require_once __DIR__ . "/vendor/autoload.php";
use Dotenv\Dotenv as Dotenv;
$Websitebanhang= Dotenv::createImmutable(__DIR__ . '');
$Websitebanhang->load();
// connect to MongoDB
$client = new MongoDB\Client($_ENV['MONG_DB']);

// select a database
$database = $client->selectDatabase('QuanLyBanDienTu');

// select a collection
$collection = $database->selectCollection('sanpham');
$products = $collection->distinct('manhasx');
$er = "SamSung";

// Chuyển kết quả tìm kiếm thành mảng
foreach ($products as $loaiSP) {
    echo $loaiSP . "\n";
}
echo '--------';
// foreach ($products1 as $loaiSP) {
//     echo $loaiSP . "\n";
// }
// $intersectedValues = array_intersect($products, $products1);

// foreach ($intersectedValues as $value) {
//     echo $value . "\n";
// }
// if (empty($intersectedValues)){
//     echo 'test';
// }
if (in_array($er, $products)) {
    echo "true";
} else {
    echo "false";
}
print_r($products);
print_r($er);
?> -->