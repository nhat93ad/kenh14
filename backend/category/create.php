

<meta charset="utf-8">
<form method="post" action="#">
    <label>Danh mục</label>
    <input type="text" name="name">
    <br>
    <label>Mô tả</label>
    <textarea name="description"></textarea>
    <br>
    <button type="submit">Tạo</button>
</form>

<?php
require 'E:web/kenh14/modules/connect2.php';
$conn = connect();
$now = time();
$message = '';
$check = true;

if (!isset($_POST['name']) or $_POST['name'] == '') {
    $check = false;
    $message = 'Bạn chưa điền tên danh mục';
}

    if ($check) {
        $sql = "INSERT INTO category ( name, description)
        VALUES ('{$_POST['name']}', '{$_POST['description']}')";

        $result = $conn->query($sql);

        if ($result === true) {
            $message = 'Thành công mẹ nó rồi';
        }
    }

    echo $message;
    ?>
