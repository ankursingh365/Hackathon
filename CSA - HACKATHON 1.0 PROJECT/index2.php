
<?php 
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "id18784910_root";  
$dbPassword = ".Lq?e!$4dr8GEUd";  
$dbName     = "id18784910_ankur";  

// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  

// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

$FIND=0;
$checkcopy=0;
$CPASSCOPY;
$PASSCOPY;

       
if(isset($_POST["name"])){ 
        

        // Allow certain file formats 
        
        
    
            $name = $_POST['name'];
           
            
            
            // Insert image content into database 
           
                $db->query("CREATE TABLE REGISTER (name varchar(1000),time DATETIME)");
                
                
                $insert = $db->query("INSERT into REGISTER(name,time) VALUES ('$name',NOW())"); 
                
                // $insert = $db->query("INSERT into login(Username,password) VALUES ('$Username','$safePassword')"); 
            
                if($insert){ 
                    $FIND=1;
                }
                else{ 
                   
                }
        
           
     
    
} 

// Display status message 


?>
<?php
$dbHost     = "localhost";  
$dbUsername = "id18784910_root";  
$dbPassword = ".Lq?e!$4dr8GEUd";  
$dbName     = "id18784910_ankur";  

// Create connection
$conn = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM REGISTER order by time desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>REGISTER</title>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/navbar.css">
      <link rel="stylesheet" href="CSS/register.css">

   </head>
   <body>
<a href="login.php"><button style="width: 50px; height:50px;">Admin login</button></a>
<a href="index.html"><button style="width: 50px; height:50px;">Home Page</button></a>

   </body>
</html>