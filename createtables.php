<?php
  $c=mysqli_connect("localhost","root","");
     	if($c)
{
   $q="create database post_user";
   if($c->query($q)==true)
   {
   	$c=mysqli_connect("localhost","root","","post_user");
   	if($c)
   	{
      
      $b="select * from user_registration";
        $z=$c->query($b);
  if(!$z)
  {
     $p="create table user_registration(fname varchar(20),lname varchar(20),email varchar(30),password varchar(30))";
     $n=$c->query($p);
     }
}
}
}