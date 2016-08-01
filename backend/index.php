
<meta charset="utf-8">
<?=require 'E:/web/kenh14/backend/layouts/header.php';?>

<div class="container">
    <div class="wrap">
<?php
session_start();
if($_SESSION['username']){
?>
<p>Bài viết</p>
<ul>
    <li><a href="/kenh14/backend/article/create.php">Thêm bài viết</a></li>
    <li><a href="/kenh14/backend/article/list-update.php">Chỉnh sửa bài viết</a></li>
</ul>
<p>Danh mục</p>
<ul>
    <li><a href="/kenh14/backend/category/create.php">Thêm danh mục</a></li>
    <li><a href="/kenh14/backend/category/list-update.php">Chỉnh sửa danh mục</a></li>
</ul>

<?php
}else{
    header('location:/kenh14/backend/log-in.php');
}
?>
    </div>
</div>