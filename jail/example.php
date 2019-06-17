
<?php  
 $connect = mysqli_connect("localhost", "root", "", "canteen"); 
 if ( isset( $_POST['status1'] ) ) {
 	$block=$_POST['block'];
 	$rpno=$_POST['rpno'];
 	$status=$_POST['status'];
 	
 	if($status==1){
		$query = "UPDATE entry SET status=0 WHERE rpno='$rpno' AND block='$block'";
		$search_result = mysqli_query($connect, $query);
	}
	else{
		$query = "UPDATE entry SET status='1' WHERE rpno='$rpno' and block='$block'";
		$search_result = mysqli_query($connect, $query);
	}
 }
$query = "SELECT * FROM entry";
$search_result = mysqli_query($connect, $query);
 ?>
 <html>
<head>
<style>
	
	.mydiv,.myform{
		display: inline-block;
		width:300px;
		height:300px;

	}
	.myform{
		background-color: #f87646;
		padding: 20px;
		color: #ffffff;
	}
	.myform:hover{
		background-color: transparent;
		color: black;
	}
	.editbtn{
	margin-left:30%;
	font-size:20px;
	height:10%;
	background: #ff766a;
	border-radius: 10px;
  
}
body{
	background-color: #ffd2b8;
}
</style>

</head>
<body>
<center>	
		
<?php
while($row = mysqli_fetch_array($search_result))  
                {  
                    if($row['status']==1)
                    {
                    	$x='active';
                	}
                	else
                	{
                		$x='inactive';
            		} 
            		echo "<form class='myform' action=# method='post'>";
                    echo "<div class='mydiv'>";
                    echo '<br/><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"height="100" width="100" class="img-thumnail"/>';
                    echo "<br/>PRISONER NAME:";
                    echo "" .$row['name']."<br/>";
                    echo "RP NUMBER:";
					echo "" .$row['rpno']."<br/>";
					echo "ACC NUMBER:";
                    echo "" .$row['accno']."<br/>"; 
                    echo "BLOCK:";
                    echo "" .$row['block']."<br/>";
                    echo '<input type="hidden" name="rpno" value="'.$row['rpno'].'">';
            		echo '<input type="hidden" name="block" value="'.$row['block'].'">';
                    echo '<input type="hidden" name="status" value="'.$row['status'].'">';
            		
                    echo  '<br/> <button type="submit" name="status1" value="" class="editbtn">'.$x.'</button>'; 
                    echo "</div>"; 
                    echo '</form>';
                    echo '&nbsp;';
                    echo '&nbsp;'; 
                    echo '&nbsp;';   
                }  



?>

</center>
</body>
</html>