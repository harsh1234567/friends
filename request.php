<?php session_start();
      include('db.php');
	  extract($_SESSION);
	  extract($_GET);
	  if($_SESSION['user']!=true)
	  {
		  header('location:index.php');
		  exit();
		  
	  }
	  $id1=$id;
	  $mysql_p=mysqli_query($conn,"select * from user where user='".$_SESSION['user']."'");
	  $rows=mysqli_fetch_array($mysql_p);
	  
	  $mysql_r=mysqli_query($conn,"insert into request values('','".$id."','".$rows['0']."')");
	  if($mysql_r==true)
	  {  
		  echo "<script>
		     alert('request sent !!!');
		 window.location = 'welcome.php';
         
		  </script>";
		  
	  }else{
		  
	  }


?>