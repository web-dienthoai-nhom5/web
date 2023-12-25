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
                <h1 class="st-name"> Điện thoại Samsung Galaxy S23 Ultra 5G 1TB</h1>
        </div>
        <table border="0" cellpadding="2px"width="600px">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE MASP=21") or die ("SELECT * FROM sanpham WHERE MASP=21" . "<br/><br/>" . mysqli_error($conn));
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
                <td>Height: 163.4 mm - Width: 78.1 mm </td>
            </tr>
            <tr>
                <td>Trọng lượng</td>
                <td>223 g</td>
            </tr>
            <tr>
                <td>Màn hình</td>
                <td>6.8</td>
            </tr>
            <tr>
                <td>Tần số quét</td>
                <td>120Hz</td>
            </tr><tr>
                <td>Camera sau</td>
                <td>200MP + 12MP + 10MP + 10MP</td>
            </tr><tr>
                <td>Camera trước</td>
                <td>12MP</td>
            </tr><tr>
                <td>Chip xử lý</td>
                <td>Snapdragon 8 Gen 2 for Galaxy</td>
            </tr><tr>
                <td>RAM</td>
                <td>12GB</td>
            </tr><tr>
                <td>ROM</td>
                <td>1TB</td>
            </tr><tr>
                <td>Dung lượng pin - Sạc nhanh</td>
                <td>5000mAh</td>
            </tr>
        </table>
    </div>
    </div>   
    <div class="renderboxbtn">
        <h2 class="card-title" style="text-align: center">Đặc điểm nổi bật</h2>
            <div class="card-body">
                <div  id='divText'>
                    <p  style="margin-bottom: 11px; text-align: justify;"><b> Thoả sức chụp ảnh, quay video chuyên nghiệp - Camera đến 200MP, chế độ chụp đêm cải tiến, bộ xử lí ảnh thông minh
                                                                            Chiến game bùng nổ - chip Snapdragon 8 Gen 2 8 nhân tăng tốc độ xử lí, màn hình 120Hz, pin 5.000mAh
                                                                            Nâng cao hiệu suất làm việc với Siêu bút S Pen tích hợp, dễ dàng đánh dấu sự kiện từ hình ảnh hoặc video
                                                                            Thiết kế bền bỉ, thân thiện - Màu sắc lấy cảm hứng từ thiên nhiên, chất liệu kính và lớp phim phủ PET tái chế</b></p>
                    <p  style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Điện thoại Samsung Galaxy S23 Ultra 5G 1TB" id="Điện thoại Samsung Galaxy S23 Ultra 5G 1TB" src="https://cdn.tgdd.vn/Products/Images/42/301796/samsung-galaxy-s-ultra-tim-1.jpg" /></p>
                <div>
                    <br>
                        <button class='button3' id='them' >Xem thêm</button>
                </div>
            </div>      
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
