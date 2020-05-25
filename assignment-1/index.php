    
<!DOCTYPE html>
<html>
<head>
    <title>SignUp | IITB Sports</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="info">
        <h1 class="center coral" id="main"><strong>IITB SPORTS</strong></h1>
    </div>
    <?php
     if(!isset($_POST["submit"])){  
     $con=mysqli_connect('localhost:3306','root','','users') or die(mysqli_error());  
     $query1="SELECT * FROM login";
        $query_data=mysqli_query($con,$query1) or die('error getting');
        echo "<table>";
        echo "<tr><th>Username</th><th>RollNo</th></tr>";
        while($row=mysqli_fetch_array($query_data,MYSQLI_ASSOC)){
            echo "<tr><td>";
                echo $row['username'];
            echo "</td><td>";
                echo $row['RollNo'];
            echo "</td></tr>";
        }
        echo"</table>";
        ?>
         <div class="loginbox">
        <img src="logo.png" class="avatar">
        <h1>SignUp Here!</h1>
        <form method="POST" action="">
            <p>Username</p>
            <input type="text" name="user" placeholder ="Enter Username" required>
            <p>RollNo</p>
            <input type="number" name="pass" placeholder="Enter RollNo" required min="170010001" max="200000000">
            <input type="submit" name="submit" value="SignUp">
        </form>
    </div>
    <?php
    }
    if(isset($_POST["submit"])){  
         $con=mysqli_connect('localhost:3306','root','','users') or die(mysqli_error());  

        if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
            $user=$_POST['user'];  
            $pass=$_POST['pass'];  
            $con=mysqli_connect('localhost:3306','root','','users') or die(mysqli_error());  
            $query="SELECT * FROM login WHERE username='".$user."'"; 
            $answer=mysqli_query($con,$query);
            $numrows=mysqli_num_rows($answer);  
            if($numrows==0){  
                $sql="INSERT INTO login(username,RollNo) VALUES('$user','$pass')";  
                $result=mysqli_query($con,$sql);  
                if($result){ 
                    echo"Registered successfull, welcome $user";
                }
                else {  
                    echo "Failure!";  
                }
            }
            else {  
                echo "That username already exists! Please try again with another.";  
            }    
        }
        else {  
            echo "All fields are required!"; 
        }
                $query1="SELECT * FROM login";
            $query_data=mysqli_query($con,$query1) or die('error getting');?>
            <div style:text-align="center";>
                <?php
            
            echo "<table>";
            echo "<tr><th>Username</th><th>RollNo</th></tr>";
            while($row=mysqli_fetch_array($query_data,MYSQLI_ASSOC)){
                echo "<tr><td>";
                    echo $row['username'];
                echo "</td><td>";
                    echo $row['RollNo'];
                echo "</td></tr>";
            }
            echo"</table>";
            ?>
            </div>  
            <?php   
    }    
    ?> 
</body>  
</html>