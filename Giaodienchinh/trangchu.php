<?php 
    include 'header.php';
?>


    <div class="content">
        <div class="scrollable-content">
            <a href="Samsung.php" target="_blank">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:1200:0/q:80/plain/https://cellphones.com.vn/media/wysiwyg/samsung-dien-thoai-gap.png" alt="Clickable Image" class="clickable-image">
            </a>
            <br>
        </div>
    </div>
    <h2><b>ĐIỆN THOẠI SAMSUNG</b></h2>
    <br>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="https://th.bing.com/th/id/OIP.mwktg9N0XZKtswy3qeaGQQHaHa?rs=1&pid=ImgDetMain" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://th.bing.com/th/id/OIP.6EInOvxO98_C3R_h0rfizwHaHa?w=1360&h=1360&rs=1&pid=ImgDetMain" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://th.bing.com/th/id/R.b4aad57f7892e8106af7c7f310596e27?rik=zGgCtg8HPkFpgQ&pid=ImgRaw&r=0" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> 

    <script>
            let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
    
    <div class="block v2" id="dienthoai">
        <section>
                <div class="xem">
                    <a href="Samsung.php" class="see-all hide"><span>Xem tất cả điện thoại  </span><i class="fa-solid fa-play"></i></a>
                </div>
            <table>
                <tr>
                    <td>
                        <a href="Samsung_Galaxy_A04s_4.php">
                            <div class="warpper-group-category" data-index='2'>
                                <img src="https://cdn.tgdd.vn/Products/Images/42/283819/samsung-galaxy-a04s-xanh-1-1.jpg"    >
                                <br>
                                <br>
                                <a>Điện thoại Samsung Galaxy A04s</a>
                                <br>
                                <br>
                                <div class="discount-price">3.990.000đ</div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="https://localhost:8080/DoAn/Samsung_Galaxy_A14.php">
                            <img src="https://cdn.tgdd.vn/Products/Images/42/303579/samsung-galaxy-a14-4g-tim-1.jpg" >
                            <br>
                            <br>
                            <a>Điện thoại Samsung Galaxy A14</a>
                            <br>
                            <div class="discount-price"> 5.190.000đ</div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <a href="Samsung_Galaxy_A04s_4.php">
                            <div class="warpper-group-category" data-index='2'>
                                <img src="https://cdn.tgdd.vn/Products/Images/42/283819/samsung-galaxy-a04s-nau-1-1.jpg"   >
                                <br>
                                <br>
                                <a>Điện thoại Samsung Galaxy A24</a>
                                <br>
                                <br>
                                <div class="discount-price">5.890.000đ</div>
                            </div>
                        </a>
                    </td>
                </tr>
            </table>
        </section>
        <br>
        <br>
        <br>
    </div>

    <div class="content1">
        <div class="scrollable-content">
            <a href="https://www.google.com" target="_blank">
                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:595:0/q:80/plain/https://dashboard.cellphones.com.vn/storage/sac-cap-thang-11-02-update.png" alt="Clickable Image1" class="clickable-image1">
            </a>
            <br>
        </div>
    </div>

    <div class="block v2" id="phukien">
        <section>
                <div class="xem">
                    <a href="phukien.php" class="see-all hide"><span>Xem tất cả phụ kiện  </span><i class="fa-solid fa-play"></i></a>
                </div>
            <table>
                <tr>
                    <td>
                        <a href="cap-sac1.php">
                            <div class="warpper-group-category" data-index='2'>
                                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/u/s/usb-c-1.png"  >
                                <br>
                                <br>
                                <a>Củ sạc Samsung USB-C 25W 1 cổng</a>
                                <br>
                                <br>
                                <div class="discount-price">250.000đ</div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="cap-sac2.php">
                            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/f/r/frame_41.png" >
                            <br>
                            <br>
                            <a>Củ sạc Samsung Type-C 45W kèm cáp C-C 5A 1.8M T4510</a>
                            <br>
                            <br>
                            <div class="discount-price"> 950.000đ</div>
                        </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                            <div class="warpper-group-category" data-index='2'>
                            <a href="op-lung1.php">
                                <img src="https://cdn.tgdd.vn/Products/Images/60/312390/op-lung-galaxy-z-fold5-nhua-cung-samsung-linh-hoat-trong-5.jpg"  >
                                <br>
                                <br>
                                <a>Ốp lưng Galaxy Z Fold5 Nhựa cứng Samsung Linh hoạt</a>
                                <br>
                                <br>
                                <div class="discount-price">900.000đ</div>
                            </a>
                            </div>
                    </td>
                    <td>
                            <div class="warpper-group-category" data-index='2'>
                            <a href="op-lung2.php">
                                <img src="https://cdn.tgdd.vn/Products/Images/60/317090/op-lung-galaxy-s23-fe-nhua-cung-pc-samsung-linh-hoat-trong-1.jpg"  >
                                <br>
                                <br>
                                <a>Ốp lưng Galaxy S23 FE Nhựa cứng PC Samsung Linh hoạt</a>
                                <br>
                                <br>
                                <div class="discount-price">765.000đ</div>
                            </a>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                            <div class="warpper-group-category" data-index='2'>
                            <a href="tai-nghe1.php">
                                <img src="https://images.samsung.com/is/image/samsung/p6pim/vn/eo-ia500bbegww/gallery/vn-samsung-35mm-earphones-eo-ia500-eo-ia500bbegww-530460390?$730_584_PNG$">
                                <br>
                                <br>
                                <a>Tai nghe Có Dây Samsung IA500</a>
                                <br>
                                <br>
                                <div class="discount-price">900.000đ</div>
                            </a>
                            </div>
                    </td>
                    <td>
                            <div class="warpper-group-category" data-index='2'>
                            <a href="tai-nghe2.php">
                                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/g/r/group_182_2.png" style="height:429px" >
                                <br>
                                <br>
                                <a>Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N</a>
                                <br>
                                <br>
                                <div class="discount-price">3.490.000đ</div>
                            </a>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="tai-nghe1.php">
                            <div class="warpper-group-category" data-index='2'>
                                <img src="https://cdn.tgdd.vn/Products/Images/54/264068/nhet-tai-samsung-ia500-den-2-1.jpg"   style="height:429px" >
                                <br>
                                <br>
                                <a>Tai nghe Có Dây Samsung IA500</a>
                                <br>
                                <br>
                                <div class="discount-price"> 280.000đ</div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <div class="warpper-group-category" data-index='2'>
                        <a href="tai-nghe2.php">
                            <img src="https://cdn.tgdd.vn/Products/Images/54/286045/tai-nghe-bluetooth-true-wireless-galaxy-buds2-pro-den-1.jpg" style="height:429px" >
                            <br>
                            <br>
                            <a>Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N</a>
                            <br>
                            <div class="discount-price"> 3.490.000đ</div>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
        <br>
    </div>

   <style>
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }
        .content {
            text-align: center;
            margin-top: 20px;
        }
        

        table {
        width: 100%;
        border-collapse: collapse!important;
        }

        td {
            padding: 30px;
        }

        * {box-sizing:border-box}

        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        .mySlides {
        display: none;
        }

        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        .text {
        color: #f2f2f2;
        font-size: 30px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

         img {
  width: 100%; /* Make sure the image takes the full width of its container */
  border-radius: 8px; /* Add rounded corners to the image */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for a lift effect */
  transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
}

/* Hover effect for the images */
table img:hover {
  transform: scale(1.05); /* Enlarge the image slightly on hover */
}

        @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }

        .discount-price {
            color: black; 
            font-weight: bold;
            }

        .xem {
            margin-top: 20px; 
            margin-left: 1000px;
            outline: none;
            padding-top: 20px;
        }

         a {
        text-decoration: none;
        color: black; 
        }

   </style>
  <?php include 'footer.php'?>
