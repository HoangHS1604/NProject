<?php /* if(isset($_SESSION['check'])){
if($_SESSION['check'] == 'admin'){ */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>public/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>public/admin/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= base_url() ?>public/admin/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?= base_url() ?>public/admin/css/paper-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url() ?>public/admin/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url() ?>public/admin/css/themify-icons.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        DEMO
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="?controller=admin&action=view">
                            <i class="ti-panel"></i>
                            <p>FEATURED PRODUCTS</p>
                        </a>
                    </li>

                    <li class="active">
                        <a href="?controller=admin&action=productList">
                            <i class="ti-view-list-alt"></i>
                            <p>Product list</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="ti-text"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="ti-pencil-alt2"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="ti-map"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="ti-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="ti-export"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-10">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col" colspan='4' >Mô tả</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                    <?php foreach ($productlist as $item) { ?><tr>
                                            <th scope="col"> <?= $item['Title'] ?> </th>
                                            <th scope="col"><?= $item['Price'] ?></th>
                                            <th scope="col" colspan='4'><?= $item['description'] ?></th>
                                            <th scope="col"><?= $item['content'] ?></th>
                                            <th scope="col"> <?=$item['Img']?></th>

                                            <th scope="col"><?= $item['created_date'] ?></th>
                                        </tr>
                                    <?php } ?>
                                </thead>
                                <tbody>
                                    <?php if (isset($result)) : foreach ($result as $value) : ?>
                                            <tr>
                                                <th scope="row"><?php echo $value[0]; ?></th>
                                                <td><?php echo $value[1]; ?></td>
                                                <td><?php echo $value[2]; ?></td>
                                                <td><?php echo $value[5]; ?></td>
                                                <td><?php echo $value[4]; ?></td>
                                                <td><img src="public/images/featured products/<?php echo $value[3]; ?>" width="250" height="200"></td>
                                                <td><?php echo $value[6]; ?></td>
                                                <td><a href="?controller=admin&action=editForm&id=<?php echo $value[0]; ?>">Sửa</a></td>
                                                <td><a href="?controller=admin&action=delete&id=<?php echo $value[0]; ?>">Xóa</a></td>
                                            </tr>
                                        <?php endforeach;
                                endif; ?>
                                </tbody>
                            </table>


                        </div>

                    </div>



                    <footer class="footer">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul>

                                    <li>
                                        <a href="http://www.creative-tim.com">
                                            Creative Tim
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://blog.creative-tim.com">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.creative-tim.com/license">
                                            Licenses
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="copyright pull-right">
                                &copy; <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                            </div>
                        </div>
                    </footer>

                </div>
            </div>
</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>public/admin/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/admin/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?= base_url() ?>public/admin/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>public/admin/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>public/admin/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?= base_url() ?>public/admin/js/paper-dashboard.js"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>public/admin/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.initChartist();
        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>
</html>
<?php /* }else{echo 'Bạn chưa được cấp quyền vào trang này';}}else{echo 'Bạn chưa đăng nhập';} */?>