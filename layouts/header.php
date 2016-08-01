<?php
session_start();
?>
        <meta charset="utf-8">

        <link rel="stylesheet" href="/kenh14/css/style.css">
      

        <div class="logo container">
            <div class="logo container1">
                <a href="" title="Kenh14.vn">
                    <img src="/kenh14/images/k14.png">
                </a>
                <div class="username ">
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
                        <a href="/kenh14/user/sign-up.php"> Đăng kí</a> |  
                        <a href="/kenh14/user/log-in.php">Đăng nhập</a>
                        <?php
                    }
                    ?>
                </div>

                <a href="" title="Trải nghiệm giao diện mới" class="newscreen">
                    <img src="/kenh14/images/trainghiem.png">
                </a>
            </div>



            <div class="top-bar">

                <?PHP
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

                $sql = "SELECT id, name FROM category ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<b><a href = \"/kenh14/category/index.php?id={$row['id']}\">{$row["name"]}</a></b>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </body>
</html>