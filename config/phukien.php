<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiTan shop</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="img.phukien">
    <style>
        .warpper-group-category img {
            max-width: 10%; 
            height: auto; /* Maintain the image's aspect ratio */
            border: 1px solid #ccc; /* Optional: Add a border around the image */
        }
        h5 {
            color: red;
            text-decoration: line-through; /* Add strikethrough */
        }
        
        .img {
            width: 200px;
            border-radius: 10px;
        }
        
    </style>
</head>

<body>
<header>
        <h1></h1>
        <img src="https://i.pinimg.com/736x/12/eb/74/12eb74b79ff13b133af6db1e3055e978.jpg" alt="Logo" class="logo" style="width:100%">
</header>

    <div class='warpper-content' style='background-color:#f1f1f1!important'>
        <section class="phukien_menu">
            <h3 class='title-category'>Phụ kiện nổi bật</h3>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <table>
                <tr>
                    <td>
                        <div class="warpper-group-category">
                            <a href="sac-cap.php">
                                <img src="https://greetingsvietnam.com/wp-content/uploads/2021/09/tai_nghe_bluetooth_samsung.jpg" alt="House" style="width:100%">
                                <h3>Sạc, cáp</h3>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="tai-nghe.php">
                            <img src="https://greetingsvietnam.com/wp-content/uploads/2021/09/tai_nghe_bluetooth_samsung.jpg"  style="width:100%" >
                            <h3>Tai nghe</h3>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='1'>
                        <a href="case">
                            <img src="data:image/jpeg;base64,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"  style="width:100%" >
                            <h3>Ốp lưng, bao da</h3>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
        </section>
    </div>
    <div class="block v2" id="tai-nghe">
        <section>
            <div class="accessory-type tainghe" style="background-color:#b5292d!important;">
            <table>
                <tr>
                    <td>
                        <div class="bgw-type">
                        <a data-cate="-9" data-place="7006" rel="nofollow" href="tai-nghe.php" onclick="jQuery.ajax({ url: '/bannertracking?bid=73382&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/11/banner/Long---tai-nghe-400-400-400x400.png" alt="Tai Nghe" width="400" height="400"> </a>                        
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="tai-nghe1.php">
                            <img src="https://cdn.tgdd.vn/Products/Images/54/264068/nhet-tai-samsung-ia500-den-2-1.jpg"  style="width:100%" class='img' >
                            <br>
                            <a>Tai nghe Có Dây Samsung IA500</a>
                            <h5>300.000đ</h5>
                            <br>
                            <div class="discount-price"> 280.000đ</div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="tai-nghe2.php">
                            <img src="https://cdn.tgdd.vn/Products/Images/54/286045/tai-nghe-bluetooth-true-wireless-galaxy-buds2-pro-den-1.jpg" class='img'   style="width:100%" >
                            <br>
                            <a>Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N</a>
                            <h5>4.990.000đ</h5>
                            <br>
                            <div class="discount-price"> 3.490.000đ</div>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
                <aside>
                    <div class="prt-accessory" data-htmlid="" data-cateid="" data-manuid="">
                        <div class="ajax-call" data-placeid="3662" data-max="10">
                        <div class="stage-two"><div class="load"></div>
                        <a href="tai-nghe.php" class="see-all hide"><span>Xem tất cả phụ kiện Tai nghe</span></a>
                        </div>
                    </div>
                </aside>
        </section>
        <br>
        <br>
        <br>
    </div>
    <div class="block v2" id="cap-sac">
        <section>
        <div class="accessory-type capsac" style="background-color:#B5292D!important;">
            <table>
                <tr>
                    <td>
                        <div class="bgw-type">
                        <a data-cate="-9" data-place="7005" rel="nofollow" href="sac-cap.php" onclick="jQuery.ajax({ url: '/bannertracking?bid=73381&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/11/banner/400x400-400x400-1.png" alt="Cáp Sạc" width="400" height="400"></a>               
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="sac-cap1.php">
                            <img class='img'  src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/u/s/usb-c-1.png"  style="width:100%" >
                            <br>
                            <a>Củ sạc Samsung USB-C 25W 1 cổng</a>
                            <h5>499.000đ</h5>
                            <br>
                            <div class="discount-price"> 250.000đ</div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="sac-cap2.php">
                            <img class='img'  src="https://images.samsung.com/is/image/samsung/p6pim/vn/ep-t4510xbegww/gallery/vn-45w-power-adapter-ep-t4510-ep-t4510xbegww-530965943?$684_547_PNG$"  style="width:100%" >
                            <br>
                            <a>Củ sạc Type C Samsung T4510 45W đen</a>
                            <h5>1149.000đ</h5>
                            <br>
                            <div class="discount-price"> 950.000đ</div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="sac-cap3.php">
                            <img class='img'  src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/c/u/cu-sac-nhanh-samsung-ep-ta210-2-cong-35w-3.jpg"  style="width:100%" >
                            <br>
                            <a>Củ sạc Samsung 2 cổng 35W EP-TA210</a>
                            <br>
                            <br>
                            <br>
                            <br>
                            <a>Giá liên hệ</a>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
                <aside>
                    <div class="prt-accessory" data-htmlid="" data-cateid="" data-manuid="">
                        <div class="ajax-call" data-placeid="3661" data-max="10">
                            <div class="stage-two"><div class="load"></div></div>
                        </div>
                        <a href="sac-cap.php" class="see-all hide"><span>Xem tất cả phụ kiện C&#xE1;p s&#x1EA1;c</span></a>
                        <input type="hidden" class="hdf hide"/>
                    </div>
                </aside>
            </div>
        </section>
    </div>
</body>
</html>
