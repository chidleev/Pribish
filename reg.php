<?php
session_start();
require_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

</head>

<body>

<!-- container -->
<div class="container">



    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">



            <form name="reg" method=POST action=action_reg.php>
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                            <form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Регистрация
					</span>

                                <span class="txt1 p-b-11">
						Логин
					</span>
                                <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                                    <input class="input100" type="text" name="uname" >
                                    <span class="focus-input100"></span>
                                </div>


                                <span class="txt1 p-b-11">
						Имя
					</span>
                                <div class="wrap-input100 validate-input m-b-36" data-validate = "First name is required">
                                    <input class="input100" type="text" name="fname" >
                                    <span class="focus-input100"></span>
                                </div>



                                <span class="txt1 p-b-11">
						Фамилия
					</span>
                                <div class="wrap-input100 validate-input m-b-36" data-validate = "Last name is required">
                                    <input class="input100" type="text" name="lname" >
                                    <span class="focus-input100"></span>
                                </div>




                                <span class="txt1 p-b-11">
						Пароль
					</span>
                                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                                    <input class="input100" type="password" name="pass" >
                                    <span class="focus-input100"></span>
                                </div>

                                <span class="txt1 p-b-11">
						Подтвердите пароль
					</span>
                                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                                    <input class="input100" type="password" name="pass2">
                                    <span class="focus-input100"></span>
                                </div>




                                <div class="flex-sb-m w-full p-b-48">

                                    <div>
                                        <a href="que.php" class="txt3">
                                            Вернуться
                                        </a>
                                    </div>


                                    <div id="error">
                                        <?php
                                        if ($_SESSION['a']==true)
                                        {
                                            echo 'Добавлено';
                                            /*header("Location: login.php");*/
                                        }

                                        if ($_SESSION['b']==true)
                                        {
                                            echo 'Есть не заполненные поля';
                                        }

                                        if ($_SESSION['c']==true)
                                        {
                                            echo 'Пароли не совпадают';
                                        }

                                        if ($_SESSION['d']==true)
                                        {
                                            echo 'Логины совпадают';
                                        }
                                        session_destroy();

                                        ?>
                                    </div>




                                </div>


                                <div class="container-login100-form-btn">

                                    <button class="login100-form-btn" type='submit' name='reg'>
                                        Зарегистрировать
                                    </button>
                                </div>

                            </form>

        </article>
        <!-- /Article -->

    </div>
</div>
<!-- /container -->





</body>
</html>