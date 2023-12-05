<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Điện thoại iPhone</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <style>
       header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        h1 {
            position: relative;
            z-index: 2;
        }
        .logo1 {
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }
        img {
            width: 200px;
            border-radius: 10px
        }
        table,
        td {
            border: 0px solid #FFA500;
            border-radius: 10px;
            border-collapse: collapse;
            text-align: center;
            padding: 15px;
        }
        .sp {
            margin: 0 auto; 
            width: 80%;
        }
        th {
            align-items: center;
        }
        button {
            display: block;
            margin: 0 auto; 
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #FFA500; 
            color: white; 
            border: 2px solid #FFA500; 
            border-radius: 10px;
            font-size: 16px; 
        }
        a {
            color: red;
            text-decoration: line-through; /* Add strikethrough */
        }

        .discount-price {
            color: green;
            font-weight: bold;
            margin-top: 5px; /* Add space below the original price */
        }
        .clickable-image {
        width: 100%; /* Đảm bảo chiều ngang của hình ảnh bằng với chiều ngang của trang web */
        cursor: pointer;
        }
    </style>
    <body>

    <header>
        <h1>Điện thoại iPhone</h1>
        <img src="https://scr.vn/wp-content/uploads/2020/07/Background-%C4%91%E1%BB%8F-cam.jpg" alt="Logo1" class="logo1">
        <br>
    </header>
    <div class="content">
        <div class="scrollable-content">
            <a href="https://www.google.com" target="_blank">
                <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/IP15-720-220-720x220-1.png" alt="Clickable Image" class="clickable-image">
            </a>
            <br>
        </div>
        <div class="sp">
        <table class="iphone_product">
            <tr colspan="9"> 
                <th>iPhone 15</th>
            </tr> 
            <tr>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/281570/iphone-15-den-thumb-200x200.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 128GB </figcaption>
                    <a>22.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 22.690.000đ</div>
                    <button class="btn-infor" name="iphone" value="22690000">Xem thông tin </button>
                </td>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303716/iphone-15-xanh-thumb-200x200.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 256GB</figcaption>
                    <a>25.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 25.900.000đ</div>
                    <button class="btn-infor" name="iphone" value="25900000">Xem thông tin </button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303891/iphone-15-plus-xanh-la-128gb-thumb-200x200.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Plus 128GB</figcaption>
                    <a>25.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 25.790.000đ</div>
                    <button class="btn-infor" name="iphone" value="25790000">Xem thông tin</button>
                </td>    
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303823/iphone-15-plus-vang-256gb-thumb-200x200.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Plus 256GB </figcaption>
                    <a>28.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 28.790.000đ</div>
                    <button class="btn-infor" name="iphone" value="28790000">Xem thông tin</button>
                </td>                     
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303825/iphone-15-plus-hong-512gb-thumb-200x200.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Plus 512GB </figcaption>
                    <a>34.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 32.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="32990000">Xem thông tin</button>
                </td>  
            </tr>
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-black-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro 128GB</figcaption>
                    <a>28.990.000đ</a><br>
                    <button class="btn-infor" name="iphone" value="28990000">Xem thông tin</button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303831/iphone-15-pro-blue-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro 256GB</figcaption>
                    <a>31.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 31.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="31490000">Xem thông tin</button>
                </td>                 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303831/iphone-15-pro-titan-tu-nhien-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro 512GB</figcaption>
                    <a>37.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 37.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="37490000">Xem thông tin</button>
                </td>  
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303831/iphone-15-pro-white-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro 1TB</figcaption>
                    <a>43.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 40.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="40990000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-black-1-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro Max 256GB</figcaption>
                    <a>34.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 33.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="33990000">Xem thông tin</button>
                </td> 
            </tr>
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-1-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro Max 512GB</figcaption>
                    <a>40.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 40.290.000đ</div>
                    <button class="btn-infor" name="iphone" value="40290000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-white-1-3.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 15 Pro Max 1TB</figcaption>
                    <a>46.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 44.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="44990000">Xem thông tin</button>
                </td> 
            </tr>
        </table>
        <br> 

        <table  class="iphone_product">
            <tr colspan="11"> 
                <th>iPhone 14</th>
            </tr> 
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/240259/iphone-14-do-glr-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 128GB</figcaption>
                    <a>21.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 19.390.000đ</div>
                    <button class="btn-infor" name="iphone" value="19390000">Xem thông tin</button>
                </td>  
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/240259/iphone-14-tim-1-3.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 256GB</figcaption>
                    <a>24.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 22.290.000đ</div>
                    <button class="btn-infor" name="iphone" value="22290000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-plus-den-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Plus 128GB </figcaption>
                    <a>24.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 21.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="21990000">Xem thông tin</button>
                </td>  
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-plus-xanh-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Plus 256GB </figcaption>
                    <a>27.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 24.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="24490000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-den-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro 128GB </figcaption>
                    <a>27.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 25.190.000đ</div>
                    <button class="btn-infor" name="iphone" value="25190000">Xem thông tin</button>
                </td> 
            </tr>
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/247508/iphone14-pro-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro 256GB</figcaption>
                    <a>29.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 27.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="27490000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-1-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro 512GB</figcaption>
                    <a>35.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 33.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="33490000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro Max 128GB</figcaption>
                    <a>29.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 27.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="27490000">Xem thông tin</button>
                </td>              
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/289700/iphone-14-pro-max-bac-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro Max 256GB</figcaption>
                    <a>32.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 29.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="29990000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-plus-ti-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro Max 512GB</figcaption>
                    <a>37.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 35.690.000đ</div>
                    <button class="btn-infor" name="iphone" value="35690000">Xem thông tin</button>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-plus-den-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 14 Pro Max 1TB </figcaption>
                    <a>43.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 41.690.000đ</div>
                    <button class="btn-infor" name="iphone" value="41690000">Xem thông tin</button>
                </td>   
            </tr>   
        </table>   
        <br>    
            
        <table class="iphone_product">
            <tr colspan="2"> 
                <th>iPhone 13</th>
            </tr> 
            <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-xanh-glr-1.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 13 128GB </figcaption>
                    <a>18.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 16.690.000đ</div>
                    <button class="btn-infor" name="iphone" value="16690000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/250258/iphone-13-1-2.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 13 256GB </figcaption>
                    <a>20.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 19.990.000đ</div>
                    <button class="btn-infor" name="iphone" value="19990000">Xem thông tin</button>
                </td> 
        </table>
        <br> 
                    
        <table class="iphone_product">
            <tr colspan="2"> 
                <th>iPhone 12</th>
            </tr> 
            <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-den-1-1-org.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 12 64GB </figcaption>
                    <a>17.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 13.690.000đ</div>
                    <button class="btn-infor" name="iphone" value="13690000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-1-2.jpg" alt="" />
                    <figcaption>ĐĐiện thoại iPhone 12 128GB </figcaption>
                    <a>18.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 15.190.000đ</div>
                    <button class="btn-infor" name="iphone" value="15190000">Xem thông tin</button>
                </td> 
        </table>
        <br> 

        <table class="iphone_product">
            <tr colspan="2"> 
                <th>iPhone 11</th>
            </tr> 
            <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/210644/iphone-11-xanh-la-1-org.jpg" alt="" />
                    <figcaption>Điện thoại iPhone 11 64GB </figcaption>
                    <a>11.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 10.890.000đ</div>
                    <button class="btn-infor" name="iphone" value="10890000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-trang-1-2-org.jpg" alt="" />
                    <figcaption>ĐĐiện thoại iPhone 11 128GB </figcaption>
                    <a>13.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 12.490.000đ</div>
                    <button class="btn-infor" name="iphone" value="12490000">Xem thông tin</button>
                </td> 
        </table>
</body>
</html>
