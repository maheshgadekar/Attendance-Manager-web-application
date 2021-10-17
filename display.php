

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>
    
<title> our record</title>
</head>
<body>
   <center><h1>your record: </h1> </center><br>
   
   <div class="container">
<table id="customers">
<thead>
        <tr>
          <th>roll no</th>
          <th>name</th>
          <th>Date</th>
          <th>subject</th>
        </tr>
      </thead>
<tbody>


<?php
 session_start();
 $name=$_SESSION['uname'];


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
 $qy="select * from $name";


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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>



























