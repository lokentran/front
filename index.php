<?php
require  __DIR__ . '/admin/vendor/autoload.php';

use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\CartController;

$products = new ProductController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php include_once('front/menu/navbar.php'); ?>
    

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/reno-combo-800-300-800x300.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/800-300-800x300-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/800-300-800x300-2.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="main-content">
        <div class="container">  
            <div id="all-product">
                <h3>Các sản phẩm mới nhất</h3>
                <div class="row">
                    <?php
                        if(isset($_GET['page'])) {
                            switch ($_GET['page']) {
                                case 'detail-product':
                                    $products->detailProduct();
                                    break;
                                
                                default:
                                    $products->getAllProductFront();
                                    break;
                            } 
                        } else {
                            $products->getAllProductFront();
                        }
                    ?> 
                </div>
            </div>
        </div>
    
    </div>


</body>
</html>