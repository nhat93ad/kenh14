<?php
require '../layouts/header.php';
?>
<link rel="stylesheet" href="/kenh14/css/style.css">
<style>
    span {
         margin: 10px auto 0 auto;
        padding: 5px;
        color: black;
    }
     span b {
        font-size: 20px;
    }
</style>

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
            $id= $_GET['id'];
            $sql = "SELECT name, content FROM article Where id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<span><b> {$row["name"]} </b> <br> {$row["content"]} <br></span>";
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


