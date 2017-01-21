<?php 
include('db.php');

   $sql=mysqli_query($conn,"select * from user where user='".$_SESSION['user']."'");
   $rowss=mysqli_fetch_array($sql); 
 $mysql=mysqli_query($conn,"select * from frnd where user='".$rowss[0]."'");
  if(mysqli_num_rows($mysql)>0)
  {
    while($row=mysqli_fetch_array($mysql))
     {   
   $sql1=mysqli_query($conn,"select * from user where id='".$row[2]."'");
	     $rowss1=mysqli_fetch_array($sql1); 
		echo "<div class='panel panel-default'><strong>".$rowss1[1]."</strong></div></br>"; 
	  
     }
   
   }
   else{
	  
	  echo "NO friend!!";
	  
	  
  }
?>