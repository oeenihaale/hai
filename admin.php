<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'realestate');
 
  

  
if(isset($_POST['submit']))  
{  
    $user_name=$_POST['user_name'];  
    $user_pass=$_POST['user_pass'];  
  
    $check_user="select * from admin WHERE user_name='$user_name'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($link,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        
  
        $_SESSION['user_name']=$user_name;//here session is used and value of $user_email store in $_SESSION.
        echo "<script>window.open('admin1.php','_self')</script>";  		
  
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	  echo"<script>window.open('admin.html','_self')</script>";
    }  
}  
?>
