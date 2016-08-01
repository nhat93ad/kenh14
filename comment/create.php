<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('location:/kenh14/user/log-in.php');
} else {
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

        $check = TRUE;
        $message = '';

        $user = $_SESSION['username'];
        $content = $_POST['content'];
        $now = time();

    if (isset($_POST['content'])) {

        if (!$user) {
            $check = FALSE;
            $message .= '<p>Vui lòng nhập tên</p>';
        }

        if (!$content) {
            $check = FALSE;
            $message .= '<p>Vui lòng nhập nội dung</p>';
        }


        if ($check) {
            $sql = "INSERT INTO comment (user, content, created_at)
                VALUES ('$user', '$content', '$now')";
            $conn->query($sql);
            $conn->close();
        }
    }

    header('location:/kenh14/article/index.php');

}

        