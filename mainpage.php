<!DOCTYPE html>
<html>
<head>
     <style type="text/css">
          body
          {
               background-image:url("img.jpg");
               background-repeat: no-repeat;
               background-size:cover;
          }
     </style>
     <title></title>
</head>
<body>
<?php 
include("connection.php");
$email=$_POST['email_address1'];
$password=$_POST['password1'];
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
           ?>
          <script type="text/javascript">
          alert("EMAIL AND PASSWORD INCORRECT");  
          window.location.replace("signin.html");
      </script>
  <?php
  }
  else
  {
     ?>

     <?php

  }
?>
</body>
</html>