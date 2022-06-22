<?php
session_start();
require_once 'dbconnect.php';
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];

$prior='admin';

if ((empty($uname))  or (empty($fname))  or (empty($lname))   or (empty($pass)) or (empty($pass2)))
	{
		$_SESSION['b']=true;
	}
elseif ($pass!=$pass2)
{
	$_SESSION['c']=true;
}
else
{
$sel = "SELECT * FROM autoriz WHERE login = '".$uname."';";
 $res = $dbcon->query($sel); 
 $num = mysqli_num_rows($res);
 if($num == 0) { 


     $mysql = "INSERT INTO autoriz(id,login,name,familia,priority,password)
	 VALUES(NULL, '".$uname."','".$fname."','".$lname."','".$prior."','".$pass."');";
     $result = $dbcon->query($mysql);
     $_SESSION['a']=true; 
	  header("Location: add_users.php");
 }
 else { 
 $_SESSION['d']=true;
 


}

}
 header("Location: add_users.php");
?>
