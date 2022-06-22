<?php
session_start(); 
require_once 'dbconnect.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$_SESSION['per']=$uname;
$_SESSION['b']= false;
$_SESSION['a']= false;

if (isset ($_POST['b1']))
{
	$_SESSION['proverka']=false;
	$_SESSION['proverka1']=false;

	if(!empty ($uname) and !empty ($pass))
	{
		$mysql= "Select * From autoriz Where (login = '".$uname."' and password='".$pass."');";
		$result = $dbcon->query($mysql);
		
		if ($myrow = $result->fetch_array())

			{
				$_SESSION["username[$i]"]=$myrow['login'];
				$_SESSION["firstname[$i]"]=$myrow['name'];
				$_SESSION["lastname[$i]"]=$myrow['familia'];
				$_SESSION["priority[$i]"]=$myrow['priority'];
				$_SESSION["password[$i]"]=$myrow['password'];
		
				$_SESSION['proverka']=true;


				$_SESSION['fname']=$_SESSION["firstname[$i]"];
				$_SESSION['lname']=$_SESSION["lastname[$i]"];
				$_SESSION['priority']=$_SESSION["priority[$i]"];
				$_SESSION['password']=$_SESSION["password[$i]"];
                header("Location: index.php");
			}
		else
		{
			$_SESSION['b']=true;
			header("Location: log.php");
		}
		




		$mysql= "Select login,priority From autoriz Where (login = '".$uname."' and priority = 'admin');";
		$result1 = $dbcon->query($mysql);

		if ($myrow = $result1->fetch_array())
			
			{
				$_SESSION["username[$i]"]=$myrow1['login'];
				$_SESSION["priority[$i]"]=$myrow1['priority'];
				$_SESSION['proverka1']=true;
				/*echo $myrow1['priority'];*/
				header("Location: index.php");
			}


			else
		{
			/*echo 'нет';*/
			/*header("Location: login.php");*/
		}







	}
	else
	{
		$_SESSION['a']=true;
		$_SESSION['proverka']=false;
		$_SESSION['proverka1']=false;
		$_SESSION['proverka2']=false;
		$_SESSION['proverka2']=false;
		header("Location: log.php");
	}
}
?>