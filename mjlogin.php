<?php

$host="localhost";
$user="root";
$password="";
$dbname="mohamed elkyer project";


$connection= mysqli_connect($host,$user,$password,$dbname);
mysqli_set_charset($connection,"utf8");
if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
  
    $sql="select * from user where user='".$uname."' AND password ='".$password."' limit 1" ;
    $result=mysqli_query($connection,$sql);	 
   // $sql1="select * from admin where user='".$uname."' AND pass ='".$password."' limit 1" ;
   // $result1=mysqli_query($connection,$sql1);
    
    if(mysqli_num_rows($result)==1)
    {
      header("location:the user.html");
      
        exit();
    }
	// elseif(mysqli_num_rows($result1)==1)
    // {
    //   header("location: admin.html");
    //     exit();
    // }
	
    else
    {
      header("location: testlog.html");
        exit();
    }
}?> 
                     
                     
                    