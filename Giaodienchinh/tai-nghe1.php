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
                <h1 class="st-name"> Tai nghe Có Dây Mozard DS510-WB</h1>
                <br>
        </div>
        <table border="0" cellpadding="2px"width="600px">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE MASP=30") or die ("SELECT * FROM sanpham WHERE MASP=30" . "<br/><br/>" . mysqli_error($conn));
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
                                        <td>Lo&#x1EA1;i tai nghe</td>
                                        <td>Tai nghe nhét tai</td>
                                    </tr>
                                    <tr>
                                        <td>T&#xED;nh n&#x103;ng</td>
                                        <td>Nghe nhạc; Xem phim</td>
                                    </tr>
                                    <tr>
                                        <td>Cổng giao tiếp</td>
                                        <td>Jack 3.5 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Hệ điều hành tương thích</td>
                                        <td>macOS</td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <br>
                                <button class='button3' id='them2' >Xem cấu hình chi tiết</button>
                            </div>
                        </div
    <div class="renderboxbtn">
                        <h2 class="card-title" style="text-align: center">Đặc điểm nổi bật</h2>
                        <div class="card-body">
                            <div  id='divText'>
                                <p  style="margin-bottom: 11px; text-align: justify;"><b>Với thiết kế in-ear chuy&ecirc;n dụng, tai nghe Samsung IA500 sẽ gi&uacute;p bạn thưởng thức trọn vẹn chất &acirc;m  đỉnh cao từ hệ thống loa hai chiều trầm ấm. C&ocirc;ng nghệ ho&agrave;n thiện hiện đại đảm bảo t&iacute;nh bền bỉ cho sản phẩm, gia tăng t&iacute;nh cơ động v&agrave; c&aacute; t&iacute;nh trong phong c&aacute;ch. Sản phẩm được trang bị  bộ điều khiển tr&ecirc;n d&acirc;y hết sức tiện lợi.</b></p>
                                <p  style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Tai nghe có dây Samsung IA500 3.5mm 1" id="Tai nghe có dây Samsung IA500 3.5mm 11" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/BaoPK/lenovo-thinkpad-e460/tai-nghe-co-day-samsung-ia500-3-5mm-1.jpg" /></p>
                            </div> 
                        </div>
                        
                    </td>
                </tr>
            </table>
                <div>
                    <br>
                        <button class='button3' id='them' >Xem thêm</button>
                </div>
            
    </div>
    
    <script>
        const them2 = document.getElementById("them2");
        const initial = document.getElementById("initial");
        them2.addEventListener("click", function() {
            initial.innerHTML += `
                <table>
                    <tr >
                        <th colspan='2'>Thông tin hàng hóa</th>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Tai nghe có dây Samsung IA500 3.5mm</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ</td>
                        <td>Trung Quốc</td>
                    </tr>
                    <tr>
                        <td>Thời gian bảo hành (tháng);</td>
                        <td>12</td>
                    </tr>
                    <tr >
                        <th colspan='2'>Thiết kế & Trọng lượng</th>
                    </tr>
                    <tr>
                        <td>Trọng lượng sản phẩm</td>
                        <td>14.76 g</td>
                    </tr>
                    <tr>
                        <td>Chất liệu</td>
                        <td>Nhựa</td>
                    </tr>
                    <tr>
                        <td>Độ dài dây</td>
                        <td>1 m</td>
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
                        <h3 style="margin-bottom: 11px; text-align: justify;"><b>Thiết kế c&aacute; t&iacute;nh v&agrave; đơn giản</b></h3>
                        <p style="margin-bottom: 11px; text-align: justify;">Cầm v&agrave; sử dụng Samsung IA500, bạn sẽ cảm nhận được sự cao cấp của chiếc <a href="tai-nghe.php" title="Tai nghe chính hãng" type="Tai nghe chính hãng">tai nghe </a>n&agrave;y ngay từ thiết kế b&ecirc;n ngo&agrave;i. Nh&agrave; sản xuất cho thấy kỹ nghệ ho&agrave;n thiện sản phẩm rất cao, đồng thời thể hiện sự tinh tế khi bọc cao su ở những phần tiếp gi&aacute;p với c&aacute;p kết nối nhằm tr&aacute;nh g&atilde;y, hỏng d&acirc;y. Tổng thể chiếc tai nghe sử dụng tone m&agrave;u đen sang trọng,  cho thấy n&eacute;t đẹp thanh lịch khi sử dụng.</p>
                        <p style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Thiết kế cá tính và đơn giản 1" id="Thiết kế cá tính và đơn giản 11" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/BaoPK/lenovo-thinkpad-e460/tai-nghe-co-day-samsung-ia500-3-5mm-6.JPG" /></p>
                        <h3 style="margin-bottom: 11px; text-align: justify;"><b>Đệm silicon mềm mại, vừa tai</b></h3>
                        <p style="margin-bottom: 11px; text-align: justify;">Samsung IA500 sử dụng thiết kế in-ear với đệm silicon đi s&acirc;u v&agrave;o ống tai v&agrave; đưa &acirc;m thanh đến gần với người nghe nhất. Tuy nhi&ecirc;n, bạn kh&ocirc;ng cần lo lắng về vấn đề sản phẩm g&acirc;y kh&oacute; chịu trong thời gian d&agrave;i bởi <a href="../../main/index.php">Samsung</a> đ&atilde; lựa chọn tỉ mỉ <br> chất liệu nhằm đem lại cảm gi&aacute;c trong tai &ecirc;m nhất, đồng thời h&atilde;ng cũng trang bị ba k&iacute;ch cỡ n&uacute;t in-ear để chủ nh&acirc;n thiết bị c&oacute; thể chọn được phần đệm tai thực sự vừa vặn với bản th&acirc;n.</p>
                        <p style="margin-bottom: 11px; text-align: justify;"><img class='l-pd-left' alt="Đệm silicon mềm mại, vừa tai 1" id="Đệm silicon mềm mại, vừa tai 11" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/BaoPK/lenovo-thinkpad-e460/tai-nghe-co-day-samsung-ia500-3-5mm-5.JPG" /></p>
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
        <?php include "footer.php"?>
