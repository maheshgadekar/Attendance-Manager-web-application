





<html>
    <head>
     <style>
         
         body {
            background-image: linear-gradient(to right,#03a9fc , #f403fc);
}
            .div1 {
            
              background-color: #e6e6e6;    
              text-align: center;
              margin: auto;
                width: 45%;
                border: 3px solid black;
                padding: 10px;
                margin-top: 5px;
                border-radius: 8px;
                
                
            }

            input[type=text],[type=password]{
  width: 70%;
  padding: 6px 16px;
  margin: 6px 0;
  border: 1px solid black;
  border-radius: 4px;
  
}
input[type=submit] {
  width: 20%;
  background-color:#42f596;
  

  margin: 8px 0;
  border: 1px solid black;
  border-radius: 4px;
}
a { color: black; }
  


            </style>
    </head>
<body onload="checkCookie()"> 
    <script>
        
 

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
} 



function checkCookie() {
  var user=getCookie("username");
 
  if (user != "") {
    //alert("Welcome again " + user);
//var se= "mahesh";
  document.getElementById("user_name").setAttribute('value',user);
  document.getElementById("user_name").setAttribute('name',user);
  //var x = document.getElementById("user_name").name;
 // document.getElementById("demo").innerHTML = x;



  } 
 
}




        function validateForm()
        {
               var password = document.getElementById("password").value;
              



                var len = password.length;
                if(len<8)
                {
                  //  var con1="password must be contain at least 8 character";

                // document.getElementById("con1").innerHTML= con1;
                alert("password must be contain at least 8 character");
                

                }
                  
                  var id= document.getElementById("user_name").value;
            
                  if (id== "")
                  {
                      alert("please enter your id");
                  }
            
              
        
                                      var regex = /^[A-Za-z0-9 ]+$/
 
                                    //Validate TextBox value against the Regex.
                                    var isValid = regex.test(document.getElementById("password").value);
                                    if (!isValid) {
                                      //  alert("Contains Special Characters.");
                                    } else {
                                        //document.getElementById("con2").innerHTML= con2;
                                        alert("password must be contain at least 1 special charcter");
                                    }
       
                                }
    
    
        </script>
        

<div class="div1">
    
       
<center><h1>Attendance Sheet </h1> </center>
  <center>
   <div class="container">
<table>
<thead >
        <tr>
          <th>Roll no</th>
          <th>Present</th>
          <th>absent</th>
    
        </tr>
      </thead>
<tbody>
<form action="do.php" method="post">

<center><button type="submit"  name="submits" onclick="myFunction()">Submit</button></center>
<script>
function myFunction() {
  alert("your data saved sucessfully");
}
</script>

<hr>
<br>
    
    <?php 
 
 error_reporting(0);
    $sub =$_POST['sub'];
    $num = $_POST['number'];
     for($i=1;$i<=$num;$i++)  
     {
 ?>     
 
   <!--<input type="text" placeholder="enter a name" name="name[]"/> -->
   
   <tr>
          <td> <input type="text"  name="id[]" placeholder=" Roll number"/> </td>
          <td> <input type="checkbox"  name="name[]" value="present"/> <span style="color:Green">Present</span></td>
          <td><input type="checkbox"  name="name[]" value="absent"/> <span style="color:red">absent</span></td>
          <input type="hidden" value="<?php echo $num; ?>" name="number"/>
   <input type="hidden" value="<?php echo $sub; ?>" name="sub"/>
        </tr>
 
  
 
     <?php } ?>    
     
    
     
     </form>
    
     
     </table> 
     </center>    

</div>
<div>
    <center>
       



</center>
</div>
</body>
</html>

























































































