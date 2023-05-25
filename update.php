<?php
   // Create all necessary Variable for Database connection
   $query = "Update student set ID=11 where ID=6"; // Select query
   $dns = 'mysql:host=localhost;dbname=student'; // Address of Database
   $username= "root"; // Username of Database
   $password = ""; // password for Database
   try{
        // Connect to Database 
        $db = new PDO($dns,$username,$password);
        //echo 'Connected Successfully'; // if conncted then print this
        
        //Prepare the Statement
        $statement = $db->prepare($query);

        //Execute the statement
        if($statement->execute()){
            echo "Updation Completed";
        
        }
        else{
            echo "Records not inserted <br>";
            echo "Error Code : ". $statement->errorCode();
            echo "Error Info : ". $statement->errorInfo();
            $err_arr = $statement->errorInfo();
            print_r($err_arr);
        }
       
   }
   catch(Exception $e){ // Display the error during connection or query execution
      $error_message = $e->getMessage();
      echo "<p> Error Message is : $error_message </p>";
   }

   
  
?>