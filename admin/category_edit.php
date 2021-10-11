<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'header.php';
    if(isset($_GET['id'])){
        $category = $db->dataPrint("SELECT * from category WHERE id='".$_GET['id']."'");
        $info = mysqli_fetch_assoc($category);
    }

?>

</head>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div>
    <div id="main-wrapper">

        <?php include 'nav.php'; ?>       
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="cat-add.php"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Category нэмэх</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Категори засах:</h4>
                                <form action="category_edited.php"   method="post"   class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                       
                                        <div class="col-md-12">
                                            <input type="text" name="cat_name" value="<?php echo $info["cat_name"];?>"
                                                class="form-control form-control-line">
                                       
                                            <input type="hidden" name="cat_id" value="<?php echo $info["id"];?>"
                                                class="form-control form-control-line">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" value="Update" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>     
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->   
            <?php include 'footer.php' ?>
</body>

</html>