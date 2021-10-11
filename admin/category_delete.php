<?php
include '../config/database.php';
$db = new Database(); 
if(isset($_GET['id'])){
    $check = $db->prepareStatement("DELETE FROM category WHERE id='".$_GET['id']."'");
    if($check){
        header("location:category.php?deleted");
    }
}
?>