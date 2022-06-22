<?php
session_start();
require_once 'dbconnect.php';
$id=$_GET["id"];
mysqli_query($dbcon,"delete from infus where id=$id");

?>

<script type="text/javascript">
    window.location="see_info.php";

</script>