
<?php   error_reporting(1);session_start();
    
	  include('db.php');
	$mysql= mysqli_query($conn,"select * from user where user='".$_SESSION['user']."'");
	 $rowss=mysqli_fetch_array($mysql);
	  $mysql=mysqli_query($conn,"select * from request where requestee='".$rowss['id']."'");
	  if(mysqli_num_rows($mysql)>0)
	  {		  while($rows=mysqli_fetch_array($mysql))
	   {
		   $mysql_u=mysqli_query($conn,"select * from user where id='".$rows[2]."'");
		   $row=mysqli_fetch_array($mysql_u);
		   echo "<div class='panel panel-default'><a href='accept.php?id=".$rows[2]."'>accept request &nbsp;<strong>".$row[1]."</strong></a>&nbsp;||
		   &nbsp;<a href='reject.php?id=".$rows[2]."'>reject request &nbsp;<strong>".$row[1]."</strong></a></div><br/>";
		   
	   }
	  

	  }else{
		  
		  echo "no Request !!";
	  }
  


?>