<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'header.php';
    $allCategory = $db->dataPrint("SELECT * FROM category ORDER BY id desc;");
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
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Категори</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Категори нэр</th>
                                                <th>Засах</th>
                                                <th>Устгах</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 1;
                                            foreach($allCategory as $cat) { ?>
                                            <tr>
                                                <td><?php echo $counter++ ?></td>
                                                <td><?php echo $cat['cat_name']; ?></td>
                                                <td><a href="category_edit.php?id=<?php echo $cat['id']; ?>">засах</a><i class="bi-alarm"></i></td>
                                                <td><a href="category_delete.php?id=<?php echo $cat['id']; ?>">@устгах</a></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
            <?php include 'footer.php' ?>
</body>

</html>