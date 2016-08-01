<html>
    <head>
        <meta charset="utf-8">
        <title>Kênh 14 cập nhật tin tức nhanh nhất</title>
        <style>
            * {
                position: relative;
                padding: 0;
                margin: 0;
            }

            .logo {
                background: #003399;
                height: 100%;
                max-height: 100px;
                width: auto;
                background-image: linear-gradient(to bottom,#335B8B,#14234C);
            }
            .logo a img {
                margin-left:  18%;
                margin-top: 0.5%;
                height: auto;
                width: auto;
            }
            .newscreen {
                float: right;
                margin-right: 18%;
                margin-top: 2%;
            }
            a {
                text-decoration: none;
            }
            .clearfix {
                clear: both;
                height: 0;
                line-height: 0;
            }


            .top-bar {
                background: #004f8b;
                padding: 1px 4px;
                height: 32px;
                font-family: Tahoma;
                font-size: 15px;
                line-height: 30px;
                font-weight: bold;

            }


            .top-bar ul li  {
                list-style: none;
                float: left;
                padding: 5px 5px;
                line-height: 14px;
                border-left: 1px solid #ccc;
                left: 18%;

            }
            .top-bar ul li:hover{
                outline: solid #eee 2px;
                color: #ccc;
            }

            .top-bar ul li a {
                color: #fff;
            } 

            .top-bar ul li:first-child {
                border-left: none;
            }
            .container {
                width: 100%;
                background: #eee;
            } 
            .container1{
                background: #eeefff;
                width: 100%;
                max-width: 900px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                border: solid 1px #14234C;
            }


            .container1 ul li{
                list-style: none;
                float: left;
                padding: 5px 5px;
                line-height: 14px;
                border-left: 1px solid #eee;
                text-transform: uppercase;
                font-weight: bold;
                margin-left: 2%;
                margin-top: 2%;
                display: block;
            }
            .container1 ul li a{
                color: #335B8B;
            }
            .container1 ul li:hover{
                color: #004f8b;
                outline: solid #004f8b 2px;
            }
            .container2 {
                width: 100%;
                max-width: 750px;
                background: #fff;
                margin-top: 4%;
                display: block;
                border: solid #14234C 1px;
                padding: 5px;
                margin-left: 5px;
                border-radius: 3px;

            }
            .content {
                margin-top: 2%;
                padding: 10px;
                line-height: 22px;
            }
            .small-box{
                width: 100%;
                max-width: 450px;
                border: solid #999900 2px;
                padding: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
            .more-info{
                margin-top: 5%;
                font-size: 20px;
                font-weight: bold;
                color: #ff6600;
                border-bottom:solid #ccc 1px;
                padding: 5px;
            }
            .more-info1 {
                border-bottom: dotted #ccc 1px;
                font-weight: bold;
                padding: 10px;
            }


            .comment input[type="text"] {
                height: 100%;
                max-height: 25;
                margin-top: 1em;
            }

            .comment{
                background: #eee;
            }   
            .comment a {
                line-height: 2em;
                float: right;
                padding: 5px;
            }
            .comment a:hover{
                color: #004f8b
            }
            .comment textarea {
                width:100% ;
                margin-top: 0.5em;
                border-radius: 5px;
                font-family: Arial;
            }
            form input[type="submit"] {
                font-family:Arial;
                margin-top: 0.5em;
                padding: 0.5em 2em;
            }
            .box-comment {
                background: #f7f7f7;
            }
            
            span {
                margin-top:  15px;
                line-height: 2em;
              
                color: #6b2;
            }





        </style>



    </head>
    <body>
        <div class="logo">
            <a href="" title="Kenh14.vn">
                <img src="images/k14.png">
            </a>
            <a class="newscreen" href="" title="Trải nghiệm giao diện mới">
                <img src="images/trainghiem.png">
            </a>
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
        <div class="container">
            <div class="container1">
                
                <div class="comment" id="comment">  
                    <form method="POST" action="kenh14-1.php">
                            
                            <textarea name="content" rows="10" cols="100%" placeholder="Nội dung bài viết" ></textarea>
                            <br>
                            <input type="submit" name="gg" value="Gửi">
                        </form>
                    </div>
            </div>
        </div>
    </body>
<?php
                        $servername = 'localhost';
                        $database = 'ducnhat_db';
                        $username = 'ducnhat_user';
                        $password = 'TawKY2xnj8UAxTMA';


// Create connection
                        $conn = new mysqli($servername, $username, $password, $database);

// Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                if (isset( $_POST['content'])) {
                            $check = TRUE;
                            $message = '';

                           
                            $content = $_POST['content'];
                            $now = time();
                            if (!$content) {
                                $check = FALSE;
                                $message .= '<p>Vui lòng nhập nội dung</p>';
                            }
                            if ($check) {
                                $sql = "INSERT INTO comment (content, created_at)
            VALUES ('$content', '$now')";
                            }
                                $conn->query($sql);
                        $conn->close();
                                
                            }