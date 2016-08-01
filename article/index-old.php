<html>
    <head>
        <meta charset="utf-8">
        <title>Kênh 14 cập nhật tin tức nhanh nhất</title>
        <link rel="stylesheet" href="/kenh14/css/style.css">
       
    </head>
    <body>
        <?php
        
        
        require dirname(__DIR__) . '/layouts/header.php';
        ?>
        <div class="container">
            <div class="container1">
                <ul>
                    <li><a href=""> Xã hội</a></li>
                    <li><a href="">Nhân đạo</a></li>
                    <li><a href=""> Chùm ảnh </a></li>
                </ul>
                <br>
                <div class="container2">
                    <div class="content">
                        <h2>Vietnam Airlines chính thức trở thành hãng hàng không quốc tế 4 sao</h2>
                        <br>
                        <p><b>Tổng công ty Hàng không Việt Nam (Vietnam Airlines) vừa chính thức được Tổ chức đánh giá và xếp hạng hà
                                ng không Anh SkyTrax trao chứng chỉ công nhận hãng Hàng không 4 sao.</b>
                        </p>
                        <br>
                        <p>Hôm nay (12/7), hãng hàng không Vietnam Airlines vừa chính thức được Tổ chức 
                            đánh giá và xếp hạng hàng không Anh SkyTrax trao chứng chỉ công nhận hãng hàng không 4
                            sao. Chứng chỉ đã được ông Edward Plaisted, Giám đốc điều hành SkyTrax trao cho Tổng
                            giám đốc Vietnam Airlines Dương Trí Thành tại triển lãm hàng không quốc tế Farnborough
                            (London, Anh).
                        </p>
                        <img src="/kenh14/images/tiep-vien-2-1468326124173.jpg" alt="Vietnam Airlines chính thức trở
                             thành hãng hàng không quốc tế 4 sao">
                        <p align='center'><i>Trong ảnh nhân viên Vietnam Airlines đang pha 
                                chế đồ uống cho hành khách.</i>
                        </p>
                        <br>
                        <p>Sau một quá trình đánh giá khách quan và chi tiết một cách tổng thể các hạng mục dịch vụ từ trên không đến mặt đất,
                            SkyTrax trao chứng chỉ hãng hàng không 4 sao cho Vietnam Airlines.
                            Đây là một sự công nhận và khẳng định trong việc đổi mới và nâng cấp chất lượng dịch vụ.
                        </p> 
                        <br>
                        <p>Ông Edward Plaisted, Giám đốc điều hành SkyTrax cho biết: "Đứng vào hàng ngũ các hãng
                            hàng không 4 sao là phần thưởng xứng đáng dành cho những cố gắng của Vietnam Airlines 
                            trong việc nâng cấp sản phẩm và dịch vụ. Việc đưa vào khai thác đồng thời hai loại máy
                            bay mới trong một thời gian ngắn như vậy là thách thức không nhỏ nhưng Vietnam Airlines
                            đã thành công.
                        </p>
                    </div>
                    <div class="small-box">
                        <p>Tổ chức SkyTrax thành lập năm 1989 với trụ sở đặt tại thủ đô London (Anh).
                            SkyTrax chuyên điều tra và nghiên cứu về sản phẩm, dịch vụ và hành khách của các 
                            hãng hàng không, liên minh hàng không, sân bay và các nhà cung ứng vận tải hàng không
                            trên toàn cầu. SkyTrax quản lý hai chương trình khảo sát khách hàng thường niên liên 
                            quan đến các hãng hàng không và các sân bay trên thế giới. Đây đã trở thành những chương
                            trình khảo sát toàn cầu, độc lập và đi đầu trong suốt 16 năm qua trong việc đánh giá chất
                            lượng dịch vụ các hãng hàng không và các sân bay. SkyTrax cũng sở hữu một trong những diễn 
                            đàn đánh giá các hãng hàng không và sân bay toàn cầu phổ biến nhất.
                        </p>
                    </div>

                    <p class="more-info">Tin liên quan</p>
                    <p class="more-info1"><a href="">Hình ảnh đầu tiên về chiếc máy bay Boeing 787 của VNA vừa có màn trình diễn ấn tượng tại Mỹ </a></p>
                    <p class="more-info1"><a href="">VNA lọt Top 10 hãng vận chuyển du lịch hàng đầu TP HCM</a></p>
                    <p class="more-info1"><a href="">Máy bay hiện đại nhất VNA đột ngột quay đầu sau gần 1h bay</a></p>

                    <div class="comment" id="comment">  
                        <div class="clearfix"></div>
                        <form method="POST" action="/kenh14/comment/create.php">
                            <textarea name="content" rows="6" cols="3" placeholder="Ý kiến của bạn" ></textarea>
                            <br>
                            <input type="submit" name="gg" value="Gửi">
                        </form>
                    </div>
                    <div class="box-comment">
                        <?php
                        $servername = 'localhost';
                        $database = 'kenh14_db';
                        $username = 'root';
                        $password = '';


// Create connection
                        $conn = new mysqli($servername, $username, $password, $database);

// Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        if (isset($_POST['user_name'], $_POST['content'])) {
                            $check = TRUE;
                            $message = '';


                            $content = $_POST['content'];
                            $now = time();



                            if (!$content) {
                                $check = FALSE;
                                $message .= '<p>Vui lòng nhập nội dung</p>';
                            }
                            header('location:/kenh14/comment/create.php');
//                        session_start();
//                        if(isset($_SESSION['username'])) {
//                            echo $_SESSION['username'];
//                        }  else {
//                            echo 'Đăng nhập';
//                        }
                        }


                        $sql = "SELECT user, content FROM comment ORDER BY created_at DESC LIMIT 10 OFFSET 0";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<span><b>{$row["user"]}</b></span> <br> {$row["content"]} <br>";
                            }
                        } else {
                            echo "0 results";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
                <?php
                        require '../layouts/footer.php';
                ?>

            </div>
        </div>






    </body>
</html>