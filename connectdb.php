<?php
//terminal:composer require mongodb/mongodb 
// error use :composer update --ignore-platform-reqs
include __DIR__ . "/vendor/autoload.php";
use Dotenv\Dotenv as Dotenv;

session_start();

// connect to MongoDB
$Websitebanhang= Dotenv::createImmutable(__DIR__ . '');
$Websitebanhang->load();
function Getmongodb($namedb, $namecollection)
{
   
    $client = new MongoDB\Client($_ENV['MONG_DB']);

    // select a database
    $database = $client->selectDatabase($namedb);

    // select a collection
    $collection = $database->selectCollection($namecollection);
    return $collection;

    // output user data
}


// $client = new MongoDB\Client("mongodb+srv://soemnho1695:soemnho1695@uocgiconguoiyeu.hyo2mgk.mongodb.net/");
// $database = $client->selectDatabase("QuanLyBanHang");
// $collection = $database->selectCollection("Product");
// $result = $collection->find([]);
// foreach($result as $d)
// {
//     echo 'ProductID: ' . $d['ProductID'] . '<br>';
//     echo 'ProductName: '. $d['ProductName']. '<br>';
// }
// echo 'ProductName: ' . $result['ProductName'] . '<br>';
// echo 'Series: ' . $result['Series'] . '<br>';
// echo 'Brand: ' . $result['Brand'] . '<br>';
// echo 'Note: ' . $result['Note'] . '<br>';
// echo 'DateRelease: ' . $result['DateRelease'] . '<br>';
// echo 'ProductStatus: ' . $result['ProductStatus'] . '<br>'; 
?>
