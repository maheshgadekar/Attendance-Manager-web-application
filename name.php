

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title> our record</title>

</head>

<body>
<?php
 session_start();
   ?> 

  
  <center>       
<h1 class="display-3">
  Welcome
  <h4>
  <small class="text-muted"><span class="badge badge-success"><?php echo $_SESSION['uname'];?></span></small></h5>
</h4>
</center>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
















<div class="table-responsive">
   <div class="container">
   <div class="container">
   <div class="container">
   <div class="container">

<table class="table table-bordered">
<tbody>
<tr>
          <td><center><button type="button" class="btn btn-light btn-lg" onclick="myFunction()" ><a  href="index.html">Home</a></button></center></td>
          <td><center><button type="button" class="btn btn-light btn-lg"><a href="number.html">start attendence</a></button></center></td>

</tr>
<tr>
          <td><center><button type="button" class="btn btn-light btn-lg"><a href="present.html">check presnt student</a></button></center></td>
          <td><center><button type="button" class="btn btn-light btn-lg">  <a href="absent.html">check absent student</a></button></center></td>
        </tr>
        <tr>
          <td><center><button type="button" class="btn btn-light btn-lg"><a href="display.php">Display All</a></button></center></td>
          <td><center><button type="button" class="btn btn-light btn-lg"><a href="index.html"><i class="fa fa-fw fa-user"></i>Logout</a></button></center></td>
        </tr>
        <tr>
        <td><center><button type="button" class="btn btn-light btn-lg"><a href="detain.html">check detain list</a></button></center></td>
         
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</center>



   
</body>
</html>
