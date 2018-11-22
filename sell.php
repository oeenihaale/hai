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
position:relative;
    background-color:#89426;
    border: none;
    color:golden;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
   /* margin: 4px 2px;*/
    /*cursor: pointer;*/
	float:right;
}
body {
background-image: url("image/36.jpg");
background-repeat: no-repeat;
background-size: cover;
}
</style>
</head>
<body>
         <nav class="nav" >
	        
		    
			<button class="button button4" value="events" onClick="window.location.href='admin1.php'" class="css3button" style="margin-left: 75px">BACK</button>
			<button class="button button4" value="events" onClick="window.location.href='admin1.php'" class="css3button" style="margin-left: 75px">EXIT</button>
	  

	
	  
        </nav>
       
    <h1 style="text-align:center; color:red; padding-bottom:10px;">PROPERTY TO SELL</h1>
	
	  <?php
	    
		$query="select *  from property where purpose='sell'";
		$result=mysqli_query($link,$query);
		?>
		<div  class="container10">
        <?php
		if(mysqli_num_rows($result)>0)
		{
			?>
			
			<form  action="sell.php" id="form" method="post">
			<table  border="10" style="color:;width:100%;">
			<tr>
			 <td>property type</td>
			 <td>city</td>
			 <td>bedrooms</td>
			 <td>bathcounts</td>
             <td>minlistprice</td>
             <td>maxlistprice</td>
             <td>purpose</td>
			 
			</tr>
            <?php			
			 while( $row = mysqli_fetch_array( $result ) )
		  {
			?>
			
			<tr>
			<td style="width:150px;"><?php echo $row["propertytype"];?></br></td>
		     <td style="width:150px;"><?php echo $row["cityid"];?></br></td>
			 <td style="width:150px;"><?php echo $row["bedrooms"];?></td>
		     <td style="width:150px;"><?php echo $row["bathcount"];?></br></td>
             <td style="width:150px;"><?php echo $row["minlistprice"];?></br></td>
             <td style="width:150px;"><?php echo $row["maxlistprice"];?></br></td>
             <td style="width:150px;"><?php echo $row["purpose"];?></br></td>
			 
			</tr>
			 
		
	   
	   
        <?php
		  
			}
		}
?>	
	
       </table>
	  
	   
	   </form>
       <body>
       <html>	   
		     
			
		    