<html>
    <head>
        <script>
           alert( "<?php
                    echo "Your form succefully submitted";
                 ?>");
        </script>
    </head>
    <body>
        <h1>Student Login Form</h1>
        <?php
      echo $name= $_POST["name"]."</br>";
      echo $Password= $_POST["password"]."</br>";
      echo $Mobile_no=$_POST["mobile_no"]."</br>";
      echo $Email= $_POST["email"]."</br>";
      echo $Branch=$_POST["Branch"]."</br>";
      echo $Gender=$_POST["gender"]."</br>";
      echo $Roll_no=$_POST["roll_no"]."</br>";
         $conn=mysqli_connect('localhost','root','','login');
         if($conn)
         {
              if($_POST['submit']!=""){
                  echo $query="insert into login_form (Name,Password,Mobile_no,Email,Branch,Gender,Roll_no)
                  values('$name','$Password','$Mobile_no','$Email','$Branch','$Gender','$Roll_no')";
                  mysqli_query($conn,$query);
              }
         }
        ?>
    </body>
</html>