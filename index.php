<?php session_start();
include('db.php');
  //    extract($_GET);
	  extract($_POST);
	//echo $user;
	if(isset($submit))
	{
	  $mysql=mysqli_query($conn,"select * from user where user='".$user."' and pass='".$pass."'");
      
  if(mysqli_num_rows($mysql)>0)
	{
       $my_row=mysqli_fetch_array($mysql);
        $_SESSION['user']=$my_row[1];
		 header('location:welcome.php');
		
	}else{
		
		$msg="<font class='text-danger'>you are wrong user !!</div>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>user  Login Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1> Login Form</h1>
                        </div>
                    </div>
                  
							
							  <?php 
							  
							   if(isset($msg))
							   {
								   
			                     echo @$msg;					   
							   }
							  ?>
						
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            
							<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
							<div class="form-bottom">
			                    <form   class="login-form" method='POST'>
			                    	<div class="form-group">
									   
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user" placeholder="Username..." class="form-username form-control" id="user">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="pass">
			                        </div>
			                        <button  class="btn" id='submit'  name='submit'>Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js">
		</script>
        <script>
		  /* $(document).ready(function(){
			  $("#msg").hide();
             $("#submit").click(function(){
                            
			    var user=$("#user").val();
                 var pass=$("#pass").val();
				 var msg1='user='+user+'&pass='+pass;
            $.ajax({
  type: "POST",
  url: "login.php",
  data: msg1,
  cache: false,
  success: function(data){
	  $('#msg').show();
     $("#msg").text(data);
  }
});     
    
			 });
}); */
		</script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>