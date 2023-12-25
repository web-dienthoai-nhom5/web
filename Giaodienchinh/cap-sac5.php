<?php
session_start();
?>
<?php include "header.php"?>
    <script>
        $(document).ready(function(){
            $(".add-to-cart").click(function(){
                var id = $(this).val();
                var url = "giohang.php?id=" + id;
                window.open(url, "_self");
            });
        });
    </script>
    <?php
    include("connect.php");
    ?>
    <div class="container">
        <div class="g-container">
            <div class="l-pd-top">
                <h1 class="st-name"> Đế sạc nhanh không dây Samsung Galaxy S6 Edge Plus</h1>
                <br>
        </div>
        <table border="0" cellpadding="2px"width="600px">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE MASP=38") or die ("SELECT * FROM sanpham WHERE MASP=38" . "<br/><br/>" . mysqli_error($conn));
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><img src="<?php echo $row['Hinhanh']?>"></td>
                    <td>   	
                        <b><?php echo $row['Tensp']?></b><br />
                        <br />
                        <b><?php echo "Số lượng: " . $row['Soluong']; ?></b><br />
                        Price: 
                        <?php
                            if ($row['Gia_Discount'] < $row['Gia']) {
                                // Giảm giá, hiển thị giá giảm màu xanh
                                echo '<big style="color:green">$' . $row['Gia_Discount'] . '</big>';
                                echo ' <span style="text-decoration: line-through; color: red;">$' . $row['Gia'] . '</span>';
                            } else {
                                // Không giảm giá, hiển thị giá gốc màu đỏ
                                echo '<big style="color:red; text-decoration: line-through;">$' . $row['Gia'] . '</big>';
                            }
                        ?>
                        <br /><br />
                        <?php
                        echo "<form method='post' action='themgiohang.php'>";
                        echo "<input type='hidden' name='masp' value='{$row['MASP']}'>";
                        echo "<input type='hidden' name='tensp' value='{$row['Tensp']}'>";
                        echo "<input type='hidden' name='soluong' value='{$row['Soluong']}'>";
                        echo "<input type='hidden' name='gia' value='{$row['Gia']}'>";
                        echo "<button type='submit' name='themgiohang'style='background-color: green; color: white; padding: 10px 20px; font-size: 16px; width: 200px;' value='$row[MASP]'>THÊM GIỎ HÀNG</button>";
                        echo "</form>";
                        ?>
                    </td>	
                </tr>
                <tr><td colspan="2"><hr size="1" /></td></tr>
                <?php } ?> 
        </table>
        </div>
    </div>
    
    <div class="g-container">
    <div class="st-card">
                            <h2 class="card-title" style="text-align: center">Thông số kỹ thuật</h2>
                            <div class="card-body">
                                <table class="st-pd-table" border='1' id='initial' width='100%'>
                                    <tr >
                                        <th colspan='2'>Thông số cơ bản</th>
                                    </tr>
                                    <tr>
                                        <td>Cổng sạc ra</td>
                                        <td>1 x Type-C</td>
                                    </tr>
                                    <tr>
                                        <td>Sạc tối đa</td>
                                        <td>1 thiết bị</td>
                                    </tr>
                                    <tr>
                                        <td>Công suất sạcc</td>
                                        <td>25Wy</td>
                                    </tr>
                                    <tr>
                                        <td>Tính năng</td>
                                        <td>Sạc nhanh</td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <br>
                                <button class='button3' id='them2' >Xem cấu hình chi tiết</button>
                            </div>
                        </div>
                        
    <div class="renderboxbtn">
                        <h2 class="card-title" style="text-align: center">Đặc điểm nổi bật</h2>
                        <div class="card-body">
                            <div  id='divText'>
                                <p  style="margin-bottom: 11px; text-align: justify;"><b>Đế sạc nhanh không dây Samsung Galaxy S6 Edge Plus - Phụ kiện thiết yếu cho người dùng Samsung
Củ sạc của Samsung luôn được biết đến với chất lượng tốt cùng tốc độ sạc nhanh chóng. Nếu bạn đang <br> cần một củ sạc mới cho điện thoại Samsung hoặc bất kỳ thiết bị smartphone nào, hãy mua ngay sản phẩm Đế sạc nhanh không dây Samsung Galaxy S6 Edge Plus.</b></p>
                                <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/g/r/group_205_2.png" alt="">
                            </div> 
                        </div>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
                <div>
                    <br>
                        <button class='button3' id='them' >Xem thêm</button>
                        <br>
                </div>
            
    </div>
    
    <script>
        const them2 = document.getElementById("them2");
        const initial = document.getElementById("initial");
        them2.addEventListener("click", function() {
            initial.innerHTML += `
                <table>
                    <tr >
                        <th colspan='2'>Thông tin hãng</th>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Đế sạc nhanh không dây Samsung Galaxy S6 Edge Plus</td>
                    </tr>
                    <tr>
                        <td>Hãng sản xuất</td>
                        <td>Samsung Chính hãng</td>
                    </tr>
                    <tr>
                        <td>Màu sắc</td>
                        <td>Đen</td>
                    </tr>
                </table>
                `;
        });
    </script>   
    
    <script>
        const them = document.getElementById("them");
        const divText = document.getElementById("divText");
        them.addEventListener("click", function() {
            divText.innerHTML += `
                <table>
                    <tr>
                        <br>
                        <p style="margin-bottom: 11px; text-align: justify;">Siêu sạc nhanh với dòng điện hiệu năng 25 Watt và cổng USB-C
Trang bị dòng điện hiệu năng 25 Watt <br>, củ sạc nhanh Samsung 25W USB-C sẽ đảm bảo điện thoại bạn có được thời lượng pin cao chỉ trong <br> thời gian ngắn nhất. Và công nghệ Power Delivery tích hợp thêm sẽ càng tăng tốc quá trình sạc, đảm bảo <br> bạn có điện thoại đầy pin mà không phải chờ đợi lâu.</p>
                        <p style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Thiết kế cá tính và đơn giản 1" id="Thiết kế cá tính và đơn giản 11" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/u/s/usb-c-1.png" /></p>
                        <p style="margin-bottom: 11px; text-align: justify;">Trong hộp tai nghe khi mua về, mình nhận được tổng cộng 3 cặp đệm tai. Trong đó, có 1 cặp được <br> gắn sẵn lên tai nghe và 2 cặp rời đi kèm. Mỗi cặp đệm tai là một kích cỡ khác nhau, tương ứng <br> với 3 cỡ S - M - L. Do vậy, khá dễ dàng để lựa chọn được cặp đệm tai phù hợp với khuôn tai <br> của mình. Ngoài ra, khi cho bạn bè mượn cũng có thể đổi cặp đệm có kích cỡ khác vừa vặn với bạn <br> mình hơn.</p>
                        <p style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Đệm silicon mềm mại, vừa tai 1" id="Đệm silicon mềm mại, vừa tai 11" src="https://cdn.tgdd.vn/Products/Images/54/286045/tai-nghe-bluetooth-true-wireless-galaxy-buds2-pro-151022-035731.jpg" /></p>
                    </tr>
                </table>
                `;
        });
    </script> 
    
    <!-- <div class="danhgia">
        <h2>Đánh giá & Nhận xét</h2>
         <span class="badge text-white" style="vertical-align: middle; background: #dc3545">9</span> 
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
                                <td> -->
                                    <div class="col">
                                        <div class="c-rate__right text-center">
                                            <br>
                                            <p class="small-para">Bạn đã dùng sản phẩm này?</p>
                                            <a style="cursor:pointer;" class="btn btn-primary" id="show-user-rate">Gửi đánh giá của bạn</a>
                                        </div>
                                    </div>
                                <!-- </td>
                            </tr>
                        </table>  
                </div> -->
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
                                </tr>
                                <tr>
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
        <?php include "header.php"?>
