
<?PHP
require '../layouts/header.php';
?>
<meta charset="utf-8">
<link rel="stylesheet" href="/kenh14/css/style.css">
<div class="container">
    <div class="content">
        <div class=" wrap">
            <div class="content-area">
                <?php
                require '../modules/connect.php';
                
                $category_id = null;
                
                $id = $_GET['id'];
                $sql = "SELECT name, content, category_id  FROM article where id = $id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class=\"list\"><b> {$row["name"]}</b> <br>"
                        . " {$row["content"]}<br></div>";
                        
                        $category_id = $row['category_id'];
                    }
                } else {
                    echo "0 results";
                }

                
                if ($category_id != null) {
                ?>
                <ul>
                        
                        <?PHP
                        
                        $sql = "SELECT id, name FROM article where category_id = $category_id and id != $id ORDER BY created_at DESC LIMIT 3 OFFSET 0";
                         $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<li><a href=\"?id={$row['id']}\">{$row["name"]}</a></li>";
                            }
                        } else {
                            echo "0 results";
                        }

                        
                        ?>
                </ul>
                <div class="comment">
                    
                </div>
                <?php
                }
                ?>
            </div>
        <?PHP
                require '../layouts/footer.php';
        ?>
        </div>
    </div>
</div>
<style>
    ul li {
        list-style: circle;
        list-style-position: inside;
    }
</style>