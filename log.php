<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'realestate');
 
  

  
if(isset($_POST['submit']))  
{  
    $username=$_POST['username'];  
    $pass=$_POST['pass'];  
  
    $check_user="select * from client WHERE username='$username'AND pass='$pass'";  
  
    $run=mysqli_query($link,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        
  
        $_SESSION['username']=$username;//here session is used and value of $user_email store in $_SESSION.
        echo "<script>window.open('page3.html','_self')</script>";  		
  
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	  echo"<script>window.open('login.html','_self')</script>";
    }  
}  
?>