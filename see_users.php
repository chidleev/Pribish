<?php
session_start();
require_once 'dbconnect.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solekx</title>




    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--Custom Font-->



    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="vendor1/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>


    <![endif]-->
</head>
<body>

<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
            <h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Lazarev.com</a></h1>

            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
            <ul class="nav nav-pills flex-column sidebar-nav">

                <li class="nav-item"><a class="nav-link" href="lk.php"><em class="fa fa-expeditedssl"></em>Добавление
                        студентов</a></li>
                <li class="nav-item"><a class="nav-link" href="see_info.php"><em class="fa fa-eye"></em>Просмотр
                        студентов</a></li>
                <li class="nav-item"><a class="nav-link" href="add_users.php"><em class="fa fa-plus-square"></em>Добавление
                        пользователей</a></li>
                <li class="nav-item"><a class="nav-link" href="see_users.php"><em class="fa fa-users"></em>Просмотр
                        пользователей</a></li>
                <li class="nav-item"><a class="nav-link" href="add_spec.php"><em class="fa fa-users"></em>Добавление
                        специальности</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-share"></em>Выйти</a>
                </li>
            </ul>

        </nav>
        <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8">
                    <h1 class="float-left text-center text-md-left">Просмотр студентов</h1>
                </div>
                <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a
                            class="btn btn-stripped dropdown-toggle" href="https://example.com"
                            id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="username mt-1">
                            <h4 class="mb-1"><?php echo $_SESSION['per']; ?></h4>
                            <h6 class="text-muted">Администратор</h6>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;"
                         aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="exit.php"><em class="fa fa-power-off mr-1"></em>Выход</a>
                    </div>
                </div>
                <div class="clear"></div>
            </header>


            <section class="row">
                <ma class="col-sm-12">
                    <section class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-block">
                                    <h3 class="card-title">Просмотр информации о пользователях</h3>


                                    <div class="container-fluid">

                                        <div class="card shadow mb-4">

                                            <div class="card-body">
                                                <div class="table-responsive">


                                                    <table class="table table-bordered" id="dataTable" width="100%"
                                                           cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">№</th>
                                                            <th scope="col">Логин</th>
                                                            <th scope="col">Имя</th>
                                                            <th scope="col">Фамилия</th>
                                                            <th scope="col">Приоритет</th>
                                                            <th align="center">Пароль</th>
                                                            <th align="center">Изменить</th>
                                                            <th align="center">Удалить</th>


                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        $count = 0;
                                                        $res = mysqli_query($dbcon, "SELECT * FROM autoriz;");
                                                        while ($row = mysqli_fetch_array($res)) {
                                                        $count = $count + 1;
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $count; ?></th>
                                                            <td><?php echo $row["login"]; ?></td>
                                                            <td><?php echo $row["name"]; ?></td>
                                                            <td><?php echo $row["familia"]; ?></td>
                                                            <td><?php echo $row["priority"]; ?></td>
                                                            <td><?php echo $row["password"]; ?></td>
                                                            <td>
                                                                <a href="edit_people.php?id=<?php echo $row["id"]; ?>"
                                                                   class="btn btn-warning btn-icon-split">
                      <span class="icon text-white-50">
                      <i class="fa fa-pencil-square-o"></i>
                    </span>
                                                                    <span class="text">Изменить</span>
                                                                </a></td>


                                                            <td>
                                                                <a href="action_delete_users.php?id=<?php echo $row["id"]; ?>"
                                                                   class="btn btn-danger btn-icon-split">
                      <span class="icon text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                                                                    <span class="text">Удалить</span>
                                                                </a></td>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                </ma>
            </section>

        </main>


    </div>
</div>


</div>    <!--/.main-->


<!-- Bootstrap core JavaScript-->
<script src="vendor1/jquery/jquery.min.js"></script>
<script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor1/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js1/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor1/datatables/jquery.dataTables.min.js"></script>
<script src="vendor1/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js1/demo/datatables-demo.js"></script>

</body>
</html>
