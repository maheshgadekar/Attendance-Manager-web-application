

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title> our record</title>
<style>
    table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
  

<center><h1>Your record: </h1> </center><br>
   <div class="table-responsive">
   <div class="container">
<table class="table table-bordered">
<thead class="thead-dark">
        <tr>
          <th scope="col">roll no</th>
          <th scope="col">name</th>
          <th scope="col">Date</th>
          <th scope="col">subject</th>
        </tr>
      </thead>
<tbody>

<?php
 session_start();
 $name=$_SESSION['uname'];
 $sub=$_POST['sub'];
 $date=$_POST['date'];
 


$con = mysqli_connect('localhost','root');

if($con)
{
    echo "";


}
else{

    echo "no connection";
}

mysqli_select_db($con,'info');

//$name=$_SESSION['uname'];
$qy = "select * from $name
where name='absent' && lecture='$sub' && date='$date'";


 $qu= mysqli_query($con,$qy); 
 $num= mysqli_num_rows($qu);
 while($res= mysqli_fetch_array($qu))
 {
    
   ?> 
     <tr>
          <td><?php echo $res['id'];?> </td>
          <td><?php echo $res['name'];?></td>
          <td><?php echo $res['date'];?></td>
          <td><?php echo $res['lecture'];?></td>
        </tr>





<?php
 }

 ?>



</tbody>
</table>
</div>
</div>

</body>
</html>



