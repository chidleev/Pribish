<?php
session_start();
require_once 'dbconnect.php';
$id = $_GET["id"];
mysqli_query($dbcon, "delete from specialty where id=$id");

?>

<script type="text/javascript">
    window.location = "add_spec.php";

</script>