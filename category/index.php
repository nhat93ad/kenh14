<?PHP
require '../layouts/header.php';
?>
<style>
    .list img {
        width: 80px;
        height: auto;
        display: inline;
        float: left;
        margin-right: 1em;
        margin-bottom: 1em;
    }
</style>

<meta charset="utf-8">
<link rel="stylesheet" href="/kenh14/css/style.css">
<div class="container">
    <div class="content">
        <div class=" wrap">
            <div class="content-area">

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
                $category_id = $_GET['id'];
                $id = $_GET['id'];
                $sql = "SELECT name, description, id, image, image_path FROM article where category_id = $category_id ORDER BY created_at DESC LIMIT 5 OFFSET 0" ;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class=\"list\">"
                        . "<img src=\"{$row['image_path']}{$row['image']}\">"
                        . "<a href =\"/kenh14/article/index.php?id={$row["id"]}\"><b>{$row["name"]}</b></a>"
                        . "<p>{$row["description"]}</p>"
                        . "</div>";
                    }
                } else {
                    echo "Không có bài viết nào trong danh mục này.";
                }

                $conn->close();
                ?>
            </div>
            <?PHP
                require '../layouts/footer.php';
            ?>
        <</div> 
    </div
</div>
