<?php
session_start();
require_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solekx</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
            <h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Lazarev.com</a></h1>

            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
            <ul class="nav nav-pills flex-column sidebar-nav">

                <li class="nav-item"><a class="nav-link" href="lk.php"><em class="fa fa-expeditedssl"></em>Добавление студентов</a></li>
                <li class="nav-item"><a class="nav-link" href="see_info.php"><em class="fa fa-eye"></em>Просмотр студентов</a></li>
                <li class="nav-item"><a class="nav-link" href="add_users.php"><em class="fa fa-plus-square"></em>Добавление пользователей</a></li>
                <li class="nav-item"><a class="nav-link" href="see_users.php"><em class="fa fa-users"></em>Просмотр пользователей</a></li>
                <li class="nav-item"><a class="nav-link" href="add_spec.php"><em class="fa fa-users"></em>Добавление специальности</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-share"></em>Выйти</a></li>
            </ul>

        </nav>
        <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8">
                    <h1 class="float-left text-center text-md-left">Добавление студентов</h1>
                </div>
                <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a
                        class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="username mt-1">
                            <h4 class="mb-1"><?php echo $_SESSION['per']; ?></h4>
                            <h6 class="text-muted">Администратор</h6>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;"
                         aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="exit.php"><em class="fa fa-power-off mr-1"></em>Выход</a></div>
                </div>
                <div class="clear"></div>
            </header>
            <section class="row">
                <div class="col-sm-12">
                    <section class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-block">
                                    <h3 class="card-title">Введите информация о студентах</h3>


                                    <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
                                        <fieldset>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Поле ввода специальности</label>
                                                <div class="col-md-9">
                                                    <input id="mm_spec" name="mm_spec" type="text" placeholder="Введите специальность"
                                                           class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-6 pull-left">
                                                <input type="submit" value="Добавить" name="add6" class="btn btn-primary">
                                            </div>


                                        </fieldset>
                                    </form>






                                </div>
                            </div>
                        </div>
                    </section>




                    <?php

                    if (isset($_POST["add6"]))
                    {
                        if ((!empty($_POST["mm_spec"]))) {


                            $count = 0;
                            $res = mysqli_query($dbcon, "select * from specialty ");
                            $count = mysqli_num_rows($res);
                            mysqli_query($dbcon, "insert into specialty values (NULL, '$_POST[mm_spec]')") or die (mysqli_error($dbcon));
                            ?>

                            <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Специальность</th>
                                        <th scope="col">Удалить</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 0;
                                    $counti = 0;
                                    $res = mysqli_query($dbcon, "SELECT * FROM specialty;");
                                    while ($row = mysqli_fetch_array($res)) {
                                        $count = $count + 1;
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row["spec"]; ?></td>




                                            <td> <a href="action_delete_spec.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                                                    <span class="text">Удалить</span>
                                                </a></td>



                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </form>


                            <script type="text/javascript">
                                alert("Специальность добавлена")
                            </script>

                        <?php
                        }
                        else
                        {
                        ?>


                            <script type="text/javascript">
                                alert("Есть пустые поля")
                            </script>

                            <?php
                        }

                    }
                    else{
                    ?>

                    <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Специальность</th>
                                <th scope="col">Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 0;
                            $counti = 0;
                            $res = mysqli_query($dbcon, "SELECT * FROM specialty;");
                            while ($row = mysqli_fetch_array($res)) {
                                $count = $count + 1;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count; ?></th>
                                    <td><?php echo $row["spec"]; ?></td>


                                    <td><a href="action_delete_spec.php?id=<?php echo $row["id"]; ?>"
                                           class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                                            <span class="text">Удалить</span>
                                        </a></td>


                                </tr>
                                <?php
                            }

                            ?>
                            </tbody>
                        </table>
                    </form>






        </main>

        <?php
        }

        ?>














    </div>
</div>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js"></script>

<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>

</body>
</html>