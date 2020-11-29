<html>
 <body style="background-color:powderblue;">
 <center><h1 style= "color:blue;">Enter Your data</h1></center>
    <div>
        <ul>
    <li><a href="retrive.php">click here to see the ALL USER VIEWS</a>
            </li>
         </ul>
     </div>         
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >  
 <fieldset>
     <legend>feedback form:</legend>     
 name:<br>     <input type="text" name="name" ><br>    
 email:<br>     <input type="text" name="email" ><br>
 gender:<br>     <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male<br>  
 comment:<br>     <textarea name = "comment" rows = "5" cols = "40"></textarea><br>  
 website:<br>     <input type="text" name="website" ><br>  
<br>     <input type="submit" value="Submit"> 
  </fieldset> 
</form> 
 
<?php       if(isset($_POST["name"]))    {     $v1=$_POST["name"];     
$v2=$_POST["email"];
$v3=$_POST["gender"];
$v4=$_POST["comment"];
$v5=$_POST["website"];
echo "Name is : ".$v1."<br>";   
  echo "email : ".$v2."<br>";  
echo "gender is : ".$v3."<br>";
echo "comment is : ".$v4."<br>"; 
echo "website is : ".$v5."<br>";                                           
  $host="localhost";   
    $user="root";   
      $pwd="";   
        $dbname="mysql";     $con=mysqli_connect($host,$user,$pwd,$dbname);   
  if($con)     {      echo "connected <br>";  
    $sql="insert into feedback values('$v1','$v2','$v3','$v4','$v5')";   
   $row=mysqli_query($con,$sql);  
    if($row)      echo "succeessful <br>";
     echo "fail <br>";    }  
    else     {      
        echo "not connected";    
    }          
exit();   
        }
     ?>
    </body>
</html> 