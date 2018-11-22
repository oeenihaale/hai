<?php
 session_start();
 if(isset($_POST['propertytype'])){
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
.button {
	position:relative;
    background-color:red;
    border: none;
    color:golden;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	left:70%;
}
body {
background-image: url("image/11.jpg");
background-repeat: no-repeat;
background-size: cover;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
#myBtn{
	position:relative;
	height:40px;
	width:100px;
	left:90%;
}
</style>
</head>
<body>
	
        <nav class="nav" >
	        
		    
			<button class="button button4" value="events" onClick="window.location.href='tobuy.html'" class="css3button" style="margin-left: 75px">NEXT</button>
	  

	  
        </nav>
       
		<h1 style="text-align:center; color:red; padding-bottom:10px;">PROPERTY TO SELL</h1>
	
	  <?php
	 if(isset($_POST['search'])){
		$query="select *  from property where propertytype='".$_POST['propertytype']."'";
		$result=mysqli_query($link,$query);
		?>
		<div  class="container10">
		<?php 
		if(mysqli_num_rows($result)>0)
		{
			?>
			
			<!--<form  action="search.php" id="form" method="post">-->
			<table  border="10" style="color:;width:100%;">
			<tr>
			<td>ID</td>
			 <td>property type</td>
			 <td>city</td>
			 <td>bedrooms</td>
			 <td>bathcounts</td>
             <td>minlistprice</td>
             <td>maxlistprice</td>
			 <td>purpose</td>
			 <td>image</td>
			 
			</tr>
            <?php			
			 while( $row = mysqli_fetch_array( $result ) )
		  {
			?>
			
			<tr><form method="post" action="tobuy.html">
			<td style="width:100px;"><?php echo $row["id"];?><br/></td>
			<td style="width:100px;"><?php echo $row["propertytype"];?><br/></td>
		     <td style="width:100px;"><?php echo $row["cityid"];?><br/></td>
			 <td style="width:100px;"><?php echo $row["bedrooms"];?><br/></td>
		     <td style="width:100px;"><?php echo $row["bathcount"];?><br/></td>
             <td style="width:100px;"><?php echo $row["minlistprice"];?><br/></td>
             <td style="width:100px;"><?php echo $row["maxlistprice"];?><br/></td>
			 <td style="width:100px;"><?php echo $row["purpose"];?><br/></td>
			 <td style="width:150px;"><img src="image/<?php echo $row["image"];?>" style="width:200px;height:200px"></td>
		  <td style="width:100px;"><input type="submit" value="check"/><br/></td></form>
		  </tr>
		  <?php
		  
		}
	}
}
 }
?>	

			 </table>