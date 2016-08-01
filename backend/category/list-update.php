
<meta charset="utf-8">
<?php
require 'E:/web/kenh14/modules/connect2.php';
$conn= connect();



$sql = "Select id, name From category";
$result = $conn->query($sql);
if($result->num_rows > 0)
    while ($item = $result -> fetch_assoc() ){
    ?>
    <p>
        <a href="update.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
    </p>
    <?php
    }
?>
