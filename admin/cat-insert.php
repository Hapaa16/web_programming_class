<?php include '../config/database.php';
    $db = new Database();
    if(isset($_POST['cat_name'])){
          $catName =  mysqli_real_escape_string($db->conn, $_POST['cat_name']);
        $check = $db->prepareStatement("insert into category (cat_name) VALUES ('".$catName."')");
        if($check){

            header("location:category.php?inserted");
        }
    }
?>