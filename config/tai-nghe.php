<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Điện thoại Samsung</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css_phukien.css">
        <style>
        img {
            width: 200px;
            border-radius: 10px;
        }
        h5 {
            color: red;
            text-decoration: line-through; /* Add strikethrough */
        }
        </style>
    </head>
    <body>
        
    <header>
        <img src="https://i.pinimg.com/736x/12/eb/74/12eb74b79ff13b133af6db1e3055e978.jpg" alt="Logo" class="logo" style="width:100%">
    </header>
    <div class="row">
        <ol class="breadcrumb breadcrumb-margin">
            <li class="breadcrumb-item"><a href="../../main/index.php" onClick="gaSendEvent('Product Detail', 'Click Breadcrumb', 'Trang chủ');">Trang chủ</a></li>
         
            <li class="breadcrumb-item"><a href="phukien.php" onClick="gaSendEvent('Product Detail', 'Click Breadcrumb', 'Phụ kiện');">Phụ kiện</a></li>
        </ol>
    </div>
    <div class="normal-body">
        <h1>TAI NGHE</h1>
        <table width='100%'>
            <tr>
                <td>
                    <div class="product-item" product-sale>
                        <a href="tai-nghe1.php">
                        <div class="product_img">
                            <img src="../../img/phukien/nhet-tai-samsung-ia500-den-2-1.jpg" alt="">
                            <div class="product_label">
                                <span class="badge-warning"></span>
                            </div>
                        </div>
                        <div class="product-info">
                            <br>
                            <a>Tai nghe Có Dây Samsung IA500</a>
                            <h5>300.000đ</h5>
                            <div class="discount-price"> 280.000đ</div>
                        </div>
                        </a>
                    </div>
                </td>
                <td>
                <a href="tai-nghe2.php">
                    <div class="product-item" product-sale>
                        <div class="product_img">
                            <img src="../../img/phukien/hinhdt (1).jpg" alt="">
                            <div class="product_label">
                                <span class="badge-warning"></span>
                            </div>
                        </div>
                        <div class="product-info">
                            <br>
                            <a>Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N</a>
                            <h5>4.990.000đ</h5>
                            <div class="discount-price"> 3.490.000đ</div>
                        </div>
                    </div>
                    </a>
                </td>
            </tr>
            <tr></tr>
        </table>
    </div>
   
        </body>
</html>
