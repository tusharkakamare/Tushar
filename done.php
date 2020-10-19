<?php 
include("createtables.php");
include("connection.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email_address'];
$password=$_POST['password'];
$result=0;
$g="select * from user_registration";
     	$k=$c->query($g);
     	while($y=mysqli_fetch_array($k))
     	{
     		if($email==$y['email'] && $password==$y['password'])
     	{
     	  	$result=1;
        }
     }
     
     if($result==0)
     {
     	$p="insert into user_registration values('$fname','$lname','$email','$password')";
     	if($c->query($p)==true)
{
     ?>
      	<script type="text/javascript">
      	alert("USER SUCCESSFULLY REGISTERED");	
      	window.location.replace("signup.html");
      </script>
  <?php
  }
  else{
   ?>
      	<script type="text/javascript">
      	alert("USER NOT REGISTERED");	
      window.location.replace("signup.html");
      </script>
  <?php
  	
  }		
     }     
     else
     {
     		?>
      	<script type="text/javascript">
      	alert("PLEASE USE ANOTHER PASSWORD");	
      window.location.replace("signup.html");
      </script>
  <?php
     }