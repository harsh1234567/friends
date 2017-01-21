<?php session_start();
      include('db.php');
	  extract($_GET);
	  $mysql1= mysqli_query($conn,"select * from user where user='".$_SESSION['user']."'");
	  $rows=mysqli_fetch_array($mysql1);
	  //add friend
	  $mysqli=mysqli_query($conn,"select * from frnd where user='".$rows['id']."' and friend='".$id."'");
	  if(mysqli_num_rows($mysqli)<1)
	  {
	  $mysql=mysqli_query($conn,"insert into frnd values('','".$rows['id']."','".$id."')");
	 $mysql11=mysqli_query($conn,"delete from request where requestee='".$rows['id']."' and requester='".$id."'");
	  if($mysql11==true)
	  {  
		  echo "<script>
		     alert(' accept request !!!');
		 window.location = 'welcome.php?option=requests';
         
		  </script>";
		  
	  }else{
		  
	  }
	  }else{
		  
		  
	  }
	  
	  ?>