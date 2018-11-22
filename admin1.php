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
    <title>admin1</title>
    
	<style>
.button {
    position:relative;
    background-color:	#004d99;
    border:2PX solid black;
    color:white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    left:80%;

}
body {
background-image: url("image/38.jpg");
background-repeat: no-repeat;
background-size: cover;
}
</style>
</head>
<body>
         <nav class="nav" >
	        
		    
			<!--<button class="button button4" value="events" onClick="window.location.href='index.html'" class="css3button" style="margin-left: 75px">BACK</button>
	  
-->
	</form>
	  
        </nav>
       
    <h1 style="text-align:center; color:red; padding-bottom:10px;">INFORMATION</h1>
	
	  <?php
	    
		$query="select *  from property";
		$result=mysqli_query($link,$query);
		?>
		<div  class="container10">
        <?php
		if(mysqli_num_rows($result)>0)
		{
			?>
			
			
            <button class="button" onClick="window.location.href='buy.php'">BUY</button>
            <button class="button" onClick="window.location.href='sell.php'">SELL</button>&emsp13;
            <form  action="search.php" id="form" method="post">
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
		     
			
		    