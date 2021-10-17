<?php

session_start();
header('location:index.html');
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
   $name1=$_POST['name'];

   $query = "select * from name
   where name='$name' && pass='$pass'";
  $qr= "CREATE TABLE $name1 (
    id INT(6),
    name VARCHAR(30) NOT NULL , date DATE ,lecture VARCHAR(30) NOT NULL
    )"; 
    mysqli_query($con,$qr);
   $result = mysqli_query($con,$query);
   $num = mysqli_num_rows($result);
   if( $num == 1)
   {
        echo "alredy account present";
   }
 else
 {
   $qy="insert into name (name , pass)
    values('$name','$pass')";
 mysqli_query($con,$qy); 
 }
}


?>