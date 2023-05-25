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
        echo "Your form succefully submitted</br>";
        echo "Hello! ".$_POST["Name"]."</br>";
        echo "EmailId ".$_POST["Email"]."</br>";
        echo "Branch is  ".$_POST["Branch"]."</br>";
		if(isset($_REQUEST["check1"])){
			echo "gender is:",$_REQUEST["check1"];
		}
		if(isset($_REQUEST["check2"])){
			echo "gender is:",$_REQUEST["check2"];
		}
    
	
        ?>
    </body>
</html>