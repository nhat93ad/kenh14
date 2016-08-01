<?php
session_start();
?>


<meta charset="utf-8">

<style>
    *{
        margin: 0;
        padding: 0;
        position: relative;
    }
    .header{
        background: #004f8b;
    }
    .header p {
        font-size: 30px;
        padding: 0.5em;
        color: yellow;
    }   
    .container{
        background: #eee;
    }
    .wrap{
        background: #fff;
        width: 100%;
        max-width: 700px;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        border: solid #ccc 1px;
        line-height: 2em;
        box-shadow: 0 10px 10px #ccc
    }


</style>
<div class="header">
    <p>Kenh14.vn</p>
</div>


<div class="container">
    <div class="wrap">
        <?php
        require 'E:\web\kenh14/modules/connect2.php';
        $conn = connect();



        $sql = "Select id, name From article";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
            while ($item = $result->fetch_assoc()) {
                ?>
                <p>
                    <a href="update.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
                </p>
                <?php
            }
        ?>
    </div>
</div>