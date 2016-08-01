
<?php
require '../layouts/header-old.php';
?>
<meta charset="utf-8">
<link rel="stylesheet" href="/kenh14/css/style cũ.css">


<style>

    .list {

        border-bottom: solid #ccc 1px;
        padding: 20px;
        color: black;
        box-sizing: border-box;
        
    }
    .list:last-child{
        border-bottom: none;
    }
    .list b a {
        font-size: 20px;
      
    }
    .list b a:hover{
        color: #1ad;
    }
</style>
<body>

    <div class="container">
        <div class="container1">
            <div class="container2">       

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
                $sql = "SELECT id, name, description FROM article ORDER BY created_at DESC LIMIT 3 OFFSET 0";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class = \"list\"><b><a href = \"detail-old.php?id={$row["id"]}\"> {$row["name"]} </a></b> <br> {$row["description"]} <br></div>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
            <?php
            require '../layouts/footer.php';
            ?>
        </div>
    </div>
</body>