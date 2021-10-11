<?php
include '../config/database.php';
$db = new Database();
if(isset($_POST['cat_name']) && isset($_POST['cat_id'])){
    $catName = mysqli_real_escape_string($db->conn, $_POST['cat_name']);
    $catId = mysqli_real_escape_string($db->conn, $_POST['cat_id']);


    $check = $db->prepareStatement("update category set cat_name='".$catName."' WHERE id='".$catId."'");
    if($check){
        header("location: category.php?updated");
    }
} 
?>