<?php
session_start();
//header('location:number.html');
if(isset($_REQUEST['name']))
{
    $uname=$_REQUEST['name'];
    $_SESSION['uname']=$uname;
}

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection establish";
}
else{

    echo "no connection";
}

mysqli_select_db($con,'info');

if(isset($_POST['insert']))
{
   $name = $_POST['name'];
   $pass =$_POST['password'];

   $query = "select * from name
   where name='$name' && pass='$pass'";
   
   $result = mysqli_query($con,$query);

   $num = mysqli_num_rows($result);

   if( $num == 1)
   {
        $_SESSION['username']=$name; 
      //  header('location:home.php');
      header('location:main.html');

   }

 else
 {
  header('location:index.html');

 }
}







?>