<?php
 session_start();
// echo $_SESSION['uname'];
 //echo $_POST['number'];

 header('location:main.html');

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "connection establish";


}
else{

    echo "no connection";
}

mysqli_select_db($con,'info');
$name=$_SESSION['uname'];
//$number=$_SESSION['number'];
$sub = $_POST['sub'];

$x=1;

for($i=0;$i<$_POST['number'];$i++)
{
            

    $q = "insert into $name(id,name,date,lecture ) values('".$_POST['id'][$i]."','".$_POST['name'][$i]."',CURDATE(),'$sub')";
       mysqli_query($con,$q);

}
?>