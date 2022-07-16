<!--  -->
<?php
//  echo"Username";

if(isset($_POST["username"])){
   
    // echo"Username";
// Create connection
   
    $Username = $_POST['username'];
    $password = $_POST['password'];
    
    
        if ($Username=='ANKUR' and $password=="ankur") {
          include 'index1copy.php';
            
        } 
        else {
            echo"Incorrect Password!";
        }
    

}
?>
