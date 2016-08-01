<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="/kenh14/css/style.css">
        <meta charset="utf-8">
        <style>
            .username{
                width: 150px;
                margin-top: 3%;
                font-weight: bold;
                color: #fff;
                display: inline-block;
                float: right;
            }
            .username a{
                color: #f7f7f7;
            }
            .username a:hover{
                color: #ccc;
            }
        </style>
    </head>
    <body>
        <div class="logo container">
            <div class="logo container1">
                <a href="" title="Kenh14.vn">
                    <img src="/kenh14/images/k14.png">
                </a>
                <div class="username">
                <?php
                    if (isset($_SESSION['username'])) {
//                        echo $_SESSION['username'] . " <a href=\"../user/log-out.php\">Đăng xuất </a>";
                        ?>
                        <strong><?= $_SESSION['username'] ?></strong>
                        |
                        <a href="../user/log-out.php">Đăng xuất </a>
                        <?php
                    } else {
//                        echo "<a href=\"/kenh14/user/sign-up.php\"> Đăng kí</a>  
//                        <a href=\"/kenh14/user/log-in.php\">Đăng nhập</a>";
                        ?>
                        <a href="/kenh14/user/sign-up.php"> Đăng kí</a>  
                        <a href="/kenh14/user/log-in.php">Đăng nhập</a>
                        <?php
                    }
                ?>
                </div>
                <a href="" title="Trải nghiệm giao diện mới" class="newscreen">
                    <img src="/kenh14/images/trainghiem.png">
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="top-bar">
            <ul>
                <li> <a href="">Trang chủ</a></li>
                <li> <a href="">Đời sống</a></li>
                <li> <a href="">Văn hóa</a></li>
                <li> <a href="">Xã hội</a></li>
                <li> <a href="">Y tế</a> </li>
                <li> <a href="">Giáo dục </a></li>
                <li> <a href="">Giới trẻ</a></li>
                <li> <a href="">Thể thao </a></li>
                <li> <a href="">Công nghệ </a></li>
                <li> <a href="">Ẩm thực</a></li>
                <li> <a href="">Ngôi sao</a></li>
                <li> <a href="">Du lịch</a></li>
            </ul>
        </div>
    </body>
</html>