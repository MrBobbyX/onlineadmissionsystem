<?php
session_start();
if (!isset($_SESSION['id']))///Entire If statement is the changes made --> Ahmad
{
    header("location:logout.php");
}//End of IF statement
session_destroy();
header("Location: adminlogin.php");
?>
