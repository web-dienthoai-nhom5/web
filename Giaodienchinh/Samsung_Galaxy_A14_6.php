<?php include "header.php"?>
    <div class="container">
        <div class="g-container">
            <div class="l-pd-top">
                <h1 class="st-name"> Điện thoại Samsung Galaxy A14 6G</h1>
        </div>
        <div class="l-pd-row">
        <table width=100%>
            <tr>
                <td>
                    <div class="l-pd-left">
                        <div class="st-slider fs-sale">
                            <div class="fs-sale-border">
                                <img src="https://cdn.tgdd.vn/Products/Images/42/292770/samsung-galaxy-a14-4g-den-1-1.jpg" alt="Samsung Galaxy A14 6GB">
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <!-- Existing price and promotion code -->
                                <div class="st-price__left boxprice">
                                    <div class="st-pd-price" id="product-price-online"><h2>4.390.000đ</h2></div>
                                    <div class='st-pd-old-price'>
                                        <strike>4.990.000đ</strike>
                                    </div>
                                    <br>
                                </div>
                                <div class="promotion">
                                    <br>
                                    <table border='1' width=100%>
                                        <tr>
                                            <td>
                                                <div class="title"><h4>Hưởng ngay khuyến mãi đặc biệt</h4></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="st-boxPromo">
                                                <div class='st-pd-price-saving'>
                                                        Trả góp 12 tháng 0 lãi, 0đ trả trước
                                                    </div>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- Purchase button -->
                                <br>
                                <div class="st-pd-btn">
                                    <div class="btn btn-primary btn-xl btn--lg btn-muangay" onclick="ga('send', 'event', 'Product Detail', 'Click CTA Button', 'Mua Ngay'); handleEventTrackingClicks(39475);">
                                        <div><strong>
                                            <button class='btn-muangay'id="muaNgayBtn">MUA NGAY
                                                <br>
                                                Giao hàng tận nơi hoặc nhận ở cửa hàng
                                            </button></strong></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <script>
    $(document).ready(function () {
        // Function to handle the click event on the "Mua Ngay" button
        $(".btn-muangay").on("click", function () {
            // Retrieve product information
            var productName = "Điện thoại Samsung Galaxy A14"; // You can replace this with dynamic data
            var productPrice = parseFloat($("#product-price-online").text().replace("đ", "").replace(",", ""));
            var productQuantity = 1; // You can set the quantity based on user input
            var productColor = $("#color-select").val();
            var productRam = $("#gb-select").val();

            // Create a query string with the product information
            var queryString =
                "?name=" + encodeURIComponent(productName) +
                "&price=" + productPrice +
                "&quantity=" + productQuantity +
                "&color=" + encodeURIComponent(productColor) +
                "&ram=" + encodeURIComponent(productRam);

            // Redirect to giohang.php with the product information
            window.location.href = "giohang.php" + queryString;
        });
    });
</script>
    <div class="b-container">
    <div class="st-card">
        <br>
        <h2 class="card-title" style="text-align:center">Thông số kỹ thuật</h2>
        <br>
        <table border="1"class="table-specs">
            <tr>
                <th>Thông số</th>
                <th>Mô tả</th>
            </tr>
            <tr>
                <td>Kích thước</td>
                <td>6.6 inches</td>
            </tr>
            <tr>
                <td>Trọng lượng</td>
                <td>201 g</td>
            </tr>
            <tr>
                <td>Màn hình</td>
                <td>IPS LCD</td>
            </tr>
            <tr>
                <td>Tần số quét</td>
                <td>90Hz</td>
            </tr><tr>
                <td>Camera sau</td>
                <td>50MP + 2MP + 2MP</td>
            </tr><tr>
                <td>Camera trước</td>
                <td>13MP</td>
            </tr><tr>
                <td>Chip xử lý</td>
                <td>MediaTek Dimensity 700</td>
            </tr><tr>
                <td>RAM</td>
                <td>6GB</td>
            </tr><tr>
                <td>ROM</td>
                <td>128GB</td>
            </tr><tr>
                <td>Dung lượng pin - Sạc nhanh</td>
                <td>5000mAh</td>
            </tr>
        </table>
    </div>
    </div>   
    <div class="renderboxbtn">
            <table width=100%>
                <tr>
                    <td>
                        <h2 class="card-title" style="text-align: center">Đặc điểm nổi bật</h2>
                        <div class="card-body">
                            <div  id='divText'>
                                <p  style="margin-bottom: 11px; text-align: justify;"><b> Giải trí cực đã - Màn hình 6.6" FullHD, tần số quét 90Hz hệ thống loa vòm Dolby Atmos.
                                                                                        <br> Kết nối nhanh, mượt mà - Dòng sản phẩm hiếm có hỗ trợ 5G trong tầm giá, đi kèm chip Dimensity 700.
                                                                                        <br> Camera chụp ảnh đã chế độ - Camera 50MP, chụp toàn cảnh, chụp cận cảnh, chụp xoá phông.  
                                                                                        <br> Sử dụng đến 2.5 ngày - Với Pin 5000mAh, sạc nhanh 15W.
                                                                                        <br> Lưu ý: Thanh toán trước khi mở seal.</b></p>
                                <p  style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Điện thoại Samsung Galaxy A14" id="Điện thoại Samsung Galaxy A14" src="https://cdn.tgdd.vn/Products/Images/42/292770/samsung-galaxy-a14-4g-den-1-1.jpg" /></p>
                            </div> 
                        </div>
                    </td>           
    </div>
    
    <script>
        const them = document.getElementById("them");
        const divText = document.getElementById("divText");
        them.addEventListener("click", function() {
            divText.innerHTML += `
                `;
        });
    </script> 
    
    <div class="danhgia">
        <h2>Đánh giá & Nhận xét</h2>
        <!-- <span class="badge text-white" style="vertical-align: middle; background: #dc3545">9</span> -->
        <div class="card-body">
            <div class="c-rate-star">
                <div class="row">
                    <div class="col">
                        <table width='100%'>
                            <tr>
                                <td>
                                    <p>Đánh Giá Trung Bình</p>
                                    <div class="point">4/5</div>
                                    <br>
                                        <div class="list-star" style="display:inline-block">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-5">
                                        <div class="c-rate__center">
                                            <div class="c-progress-list">
                                                    <div class="c-progress-item">
                                                        <label> 5
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </label>
                                                        <div class="c-progress-bar">
                                                            <span class="c-progress-value" style="width: 42%"></span>
                                                        </div>
                                                    </div>

                                                    <div class="c-progress-item">
                                                        <label>4
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </label>
                                                    </div>

                                                    <div class="c-progress-item">
                                                        <label>3
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </label>
                                                    </div>

                                                    <div class="c-progress-item">
                                                        <label>2
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </label>
                                                    </div>

                                                    <div class="c-progress-item">
                                                        <label>1
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <div class="c-rate__right text-center">
                                            <p class="small-para">Bạn đã dùng sản phẩm này?</p>
                                            <a style="cursor:pointer;" class="btn btn-primary" id="show-user-rate">Gửi đánh giá của bạn</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>  
                </div>
            </div>
        </div>     
    </div>

    <script>
        const rate = document.getElementById("show-user-rate");
        const bandau = document.getElementById("c-rate-star");
        rate.addEventListener("click", function() {
            bandau.innerHTML += `
            <div class="c-user-rate" id="user-rate"">
            <div class="row no-gutters">
                <div class="col">
                    <div class="c-user-rate-star text-center">
                        <p>Bạn chấm sản phẩm này bao nhiêu sao?</p>
                        <span hidden id="number-rate-hidden">0</span>
                        <div class="list-star user-rate-star">
                            <ul>
                                <li>
                                    <i class="demo-icon ye-star large icon-star non-star" data-rate="1" id="number-rate-1"></i>
                                </li>
                                <li>
                                    <i class="demo-icon ye-star large icon-star non-star" data-rate="2" id="number-rate-2"></i>
                                </li>
                                <li>
                                    <i class="demo-icon ye-star large icon-star non-star" data-rate="3" id="number-rate-3"></i>
                                </li>
                                <li>
                                    <i class="demo-icon ye-star large icon-star non-star" data-rate="4" id="number-rate-4"></i>
                                </li>
                                <li>
                                    <i class="demo-icon ye-star large icon-star non-star" data-rate="5" id="number-rate-5"></i>
                                </li>
                            </ul>
                            <span id="text-rate"> Hài lòng</span>
                        </div>
                        <span id="err-star" hidden style="color: red">Vui lòng chọn đánh giá của bạn về sản phẩm này.</span>
                    </div>
                </div>
                <div class="col-8">
                    <div class="c-user-rate-form">
                        <textarea name id="string-rate" rows="4" placeholder="Bạn có khuyên người khác mua sản phẩm này không? Tại sao?"></textarea>
                        <button class="btn btn-primary" id="sent-user-rate">Gửi đánh giá</button>
                    </div>
                        <span id="err-rate" hidden style="color: red">
                            Mời bạn đánh giá sản phẩm.(Tối thiểu 3 ký tự)
                        </span>
                </div>
            </div>
            </div>
                `;
        });
    </script> 

        <div class="l-pd-comment" id="comment-box">
            <div class="g-container">
                <div class="card st-card card-normal">
                    <div class="card-title card-title--badge">
                        <h2>Hỏi & Đáp</h2>
                    </div>
                    <div class="card-body">
                        <div class="c-user-rate-form f-comment-0">
                            <table width='100%'>
                                <tr>
                                    <td>
                                        <textarea name='noidung' class="send-user-comment" id="f-comment-0" rows="4" placeholder="Viết câu hỏi của bạn"></textarea>
                                    </td>
                                    <td>
                                        <input type="submit" name='ques' id='send-user-comment' value="Gửi câu hỏi">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "main_sp.php" ?>
        <?php include "footer.php"?>
