<?php
 session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'realestate');


?>

<!DOCTYPE html>
<html>
<head>
<style>
td, th {
border: 1px solid #CCC;

 
 } 

th {  
    
    font-weight: bold;
}

td {  
    background: white; 
    text-align: center;
    
}
</style>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script  src="javascript.js">
</script>
    <title>search</title>
    
	<style>
.button {
    background-color:#009999;
    border: none;
    color:golden;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
body {
background-image: url("image/35.jpg");
background-repeat: no-repeat;
background-size: cover;
}
</style>
</head>
<body>
         <nav class="nav" >
	        
		    
			<button class="button button4" value="events" onClick="window.location.href='admin1.php'" class="css3button" style="margin-left: 75px">BACK</button>
			<button class="button button4" value="events" onClick="window.location.href='admin1.php'" class="css3button" style="margin-left: 75px">EXIT</button>

	</form>
	  
        </nav>
       
    <h1 style="text-align:center; color:red; padding-bottom:10px;">	<b>BUYER INFORMATION</b></h1>
	
	  <?php
	    
		$query="select *  from buy 	";
		$result=mysqli_query($link,$query);
		?>
		<div  class="container10">
        <?php
		if(mysqli_num_rows($result)>0)
		{
			?>
			
			<form  action="buy.php" id="form" method="post">
			<table  border="10" style="color:;width:100%;">
			<tr>
			 <td>Buyer name</td>
			 <td>Email id</td>
			 <td>Phone No.</td>
			 <td>Purpose</td>
             <td>House ID</td>
             
			 
			</tr>
            <?php			
			 while( $row = mysqli_fetch_array( $result ) )
		  {
			?>
			
			<tr>
			<td style="width:150px;"><?php echo $row["name"];?></br></td>
		     <td style="width:150px;"><?php echo $row["email"];?></br></td>
			 <td style="width:150px;"><?php echo $row["phone"];?></td>
		     <td style="width:150px;"><?php echo $row["purpose"];?></br></td>
             <td style="width:150px;"><?php echo $row["id"];?></br></td>
             
			 
			</tr>
			 
		
	   
	   
        <?php
		  
			}
		}
?>	
	
       </table>
	  
	   
	   </form>
       <body>
       <html>	   
		     
			
		    