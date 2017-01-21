<?php session_start();
if($_SESSION['user']==true)
{
   unset($_SESSION['user']);
   header('location:index.php');

}?>