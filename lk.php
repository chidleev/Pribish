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
                    <h1 class="float-left text-center text-md-left">Редактирование студентов</h1>
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
                                    <h3 class="card-title">Измените необходимую информация о студентах</h3>


                                    <form class="form-horizontal" action="" method="POST" role="form"
                                          enctype="multipart/form-data">
                                        <fieldset>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Поле ввода ФИО</label>
                                                <div class="col-md-9">
                                                    <input id="mm_FIO" name="mm_FIO" type="text"
                                                           placeholder="Введите ФИО"
                                                           class="form-control">
                                                </div>


                                                <label class="col-md-3 control-label" for="name">Группа</label>
                                                <div class="col-md-9">
                                                    <select class="form-control input100" id="exampleFormControlSelect1" name="mm_groupp">
                                                        <option selected>Быберите...</option>
                                                        <?php
                                                        $res = mysqli_query($dbcon, "SELECT * FROM specialty ");
                                                        while ($row = mysqli_fetch_array($res)) {
                                                            ?>
                                                            <option value="<?php echo $row["spec"]; ?>"><?php echo $row["spec"]; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <label class="col-md-3 control-label" for="name">Паспортные
                                                    данные</label>
                                                <div class="col-md-9">
                                                    <input id="mm_email" name="mm_pasport" type="text"
                                                           placeholder="Введите паспортные данные"
                                                           class="form-control">
                                                </div>

                                                <label class="col-md-3 control-label" for="name">Образование</label>
                                                <div class="col-md-9">
                                                    <select class="form-control input100" id="exampleFormControlSelect1" name="mm_obr">
                                                        <option selected>Выберите</option>
                                                        <option value="Среднее общее">Среднее общее</option>
                                                        <option value="Среднее профиссиональное">Среднее профиссиональное</option>
                                                        <option value="Высшее">Высшее</option>
                                                    </select>
                                                </div>

                                                <label class="col-md-3 control-label" for="name">Красный диплом</label>
                                                <div class="col-md-9">
                                                    <select class="form-control input100" id="exampleFormControlSelect1" name="mm_dip">
                                                        <option selected>Выбирите</option>
                                                        <option value="есть">Есть</option>
                                                        <option value="нету">Нету</option>
                                                    </select>
                                                </div>




                                                <label class="col-md-3 control-label" for="name">дата рождения</label>
                                                <div class="col-md-9">
                                                    <input id="mm_tel" name="mm_rozd" type="text"
                                                           placeholder="Введите дату рождения"
                                                           class="form-control">
                                                </div>

                                                <label class="col-md-3 control-label" for="name">Город</label>
                                                <div class="col-md-9">
                                                    <input id="mm_tel" name="mm_gor" type="text"
                                                           placeholder="Введите город"
                                                           class="form-control">
                                                </div>


                                            </div>
                                            <div class="col-md-6 pull-left">
                                                <input type="submit" value="Добавить" name="add4"
                                                       class="btn btn-primary">
                                            </div>


                                        </fieldset>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </section>




                    <?php

                    if (isset($_POST["add4"]))
                    {
                        if ((!empty($_POST["mm_FIO"]))  and (!empty($_POST["mm_pasport"]))   and (!empty($_POST["mm_rozd"])) and (!empty($_POST["mm_gor"]))) {


                            $count = 0;
                            $res = mysqli_query($dbcon, "select * from infus ");
                            $count = mysqli_num_rows($res);
                            mysqli_query($dbcon, "insert into infus values (NULL, '$_POST[mm_FIO]', '$_POST[mm_groupp]', '$_POST[mm_pasport]', '$_POST[mm_obr]', '$_POST[mm_dip]', '$_POST[mm_rozd]', '$_POST[mm_gor]')") or die (mysqli_error($dbcon));
                            ?>

                            <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Группа</th>
                                        <th scope="col">Паспортные данные</th>
                                        <th scope="col">Образование</th>
                                        <th scope="col">Красный диплом</th>
                                        <th scope="col">дата рождения</th>
                                        <th scope="col">Город</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 0;
                                    $counti = 0;
                                    $res = mysqli_query($dbcon, "SELECT * FROM infus;");
                                    while ($row = mysqli_fetch_array($res)) {
                                        $count = $count + 1;
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row["FIO"]; ?></td>
                                            <td><?php echo $row["grup"]; ?></td>
                                            <td><?php echo $row["pasport"]; ?></td>
                                            <td><?php echo $row["obraz"]; ?></td>
                                            <td><?php echo $row["diplom"]; ?></td>
                                            <td><?php echo $row["rozden"]; ?></td>
                                            <td><?php echo $row["town"]; ?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </form>


                            <script type="text/javascript">
                                alert("Страница добавлена")
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
                                <th scope="col">ФИО</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Паспортные данные</th>
                                <th scope="col">Образование</th>
                                <th scope="col">Красный диплом</th>
                                <th scope="col">дата рождения</th>
                                <th scope="col">Город</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 0;
                            $counti = 0;
                            $res = mysqli_query($dbcon, "SELECT * FROM infus;");
                            while ($row = mysqli_fetch_array($res)) {
                                $count = $count + 1;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count; ?></th>
                                    <td><?php echo $row["FIO"]; ?></td>
                                    <td><?php echo $row["grup"]; ?></td>
                                    <td><?php echo $row["pasport"]; ?></td>
                                    <td><?php echo $row["obraz"]; ?></td>
                                    <td><?php echo $row["diplom"]; ?></td>
                                    <td><?php echo $row["rozden"]; ?></td>
                                    <td><?php echo $row["town"]; ?></td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </form>


                </div>    <!--/.main-->


                <?php
                }

                ?>



        </main>
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
