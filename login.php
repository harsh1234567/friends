<?php session_start();
include('db.php');
      extract($_GET);
	  extract($_POST);
	//echo $user;
	  $mysql=mysqli_query($conn,"select * from user where user='".$user."' and pass='".$pass."'");
      
  if(mysqli_num_rows($mysql)>0)
	{
       $my_row=mysqli_fetch_array($mysql);
        $_SESSION['user']=$my_row[1];
		//$_SESSION['id']=$my_row[0];
		 header('location:welcome.php');
		
	}
?>