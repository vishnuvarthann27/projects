<?php
$block=$_POST['block'];
 
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
$query = "SELECT * FROM entry WHERE block='$block'";
$search_result = mysqli_query($connect, $query);
if(isset($_POST["insert"]))  
 {    
      if(!empty($_FILES['image']['tmp_name']))
    {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO entry(name,rpno,accno,image,status,block) VALUES ('".$_POST["name"]."','".$_POST["rpno"]."','".$_POST["accno"]."','$file',1,'".$_POST["block"]."')";  
      }
    else
    {
    $query = "INSERT INTO entry(name,rpno,accno,status,block) VALUES ('".$_POST["name"]."','".$_POST["rpno"]."','".$_POST["accno"]."',1,'".$_POST["block"]."')";  
      }
    if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Data is sucessfully entried")</script>';  
      }  
    else
    {
     echo '<script>alert("Please upload image with low size")</script>';    
    }
 }  
?>
<html>
<head>
<style>
button{
	background-color: transparent;
	border:  0px;
}
	.myform{
    width:70%;
    height:200px;

  }
	.myform{
    border-radius: 8px;
		background-color: aliceblue;
		padding: 20px;
		color: black;
    
	}
	.myform:hover{
		background-color: transparent;
		color: black;
	}
	
  
  
}

.navbar-inverse{height: 30px;}
.form-control,.btn-default{
  position: relative;
  left: 0px;
  top: -10px;
}
.mybody {
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
  background-color: #ebdfc4;
  
}
.myimage{
  width: 150px;
  float: left;
  height: 150px;
  
}
.middle{
  width:33%;
  height:150px;
    float: left;
    }
.middle p
{
font-size:15px;
font-weight:bold;
}
.right button
{
  font-size:20px;
  width: 250px;
  height:20%;
  background: #ff766a;
  border-radius: 10px;
  float: right;
}

#header_menu {font-size: 12px;  font-weight: bold; color:#CCC;  text-decoration: none;  font-family:Tahoma, Geneva, sans-serif;}
#header_menu a {font-size: 12px;  font-weight: bold; color:#FF0;  text-decoration: none;  font-family:Tahoma, Geneva, sans-serif;}
#header_menu a:hover {font-size: 12px;  font-weight: bold; color:#FFF;text-decoration: none;  font-family:Tahoma, Geneva, sans-serif;}
#header_menu a:current {color:#FFF;}
#abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
div#popupentry {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
form.form1 {
width:45%;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#ebdfc4;
}
form.form1 input{
width:100%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway;
}
form.form1 #insert {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#bb2d0c;
color:#fff;
border:1px solid #bb2d0c;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px;
}
form.form1 #close
{
position:absolute;
right:56%;
top:1%;
height:15px;
width:15px;
cursor:pointer;
}
.fab {
   width: 60px;
   height: 60px;
   background-color: #bb2d0c;
   border-radius: 50%;
   box-shadow: 0 6px 10px 0 #666;
   transition: all 0.1s ease-in-out;
   font-size: 50px;
   color: white;
   text-align: center;
   position:absolute;
   line-height: 60px;
   right: 13%;
   top: 39%;
}
 
.fab:hover {
   box-shadow: 0 6px 14px 0 #666;
   transform: scale(1.05);
}
</style>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


 <body class="mybody">
	<img src="top_banner.jpg" width="100%" height="150" />
  <tr>
        <td colspan="2">
        <table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
       
        <td width="600" height="15" bgcolor="#bb2d0c">
          <div id="header_menu" align="center"><script language="javascript"> today = new Date(); var str  =today.toString(); document.write(str.substring(0,25)); </script> 
                  
          </div>
          </td>

      </tr>
      <tr>
      <td height="15" colspan="2" align="center" valign="middle" bgcolor="#bb2d0c">
      <div id="header_menu">
                     <a href="one.html" >Home</a>&nbsp;|&nbsp;
                  <a href="one.html" >About us</a>&nbsp;|&nbsp;
                        <a href="entry.php" >Entry</a>&nbsp;|&nbsp;
            <a href="main1.php" >Report</a>&nbsp;|&nbsp;
            <a href="add items.php" >Add Items</a>&nbsp;|&nbsp;
            <a href="main.php">Transaction</a>&nbsp;|&nbsp;
            <a href="logout.php" >Logout</a>&nbsp;&nbsp;|&nbsp;
            
       </div>
     </td>
     </tr>
     </table>
     
<?php
	if ($_POST['block']=='a'){
	 echo '<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<form action="details.php" method="post">
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#"><button type="submit" name="block" value="a">A BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="b">B BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="c">C BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="d">D BLOCK</button></a></li>
    		</ul>
    		</form>
    		<form class="navbar-form navbar-left" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
     			</div>
      			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
  		</div>
	</nav>';
}
if ($_POST['block']=='b'){
	echo '<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<form action="details.php" method="post">
    		<ul class="nav navbar-nav">
      			<li ><a ><button type="submit" name="block" value="a">A BLOCK</button></a></li>
      			<li class="active"><a href="#"><button type="submit" name="block" value="b">B BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="c">C BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="d">D BLOCK</button></a></li>
    		</ul>
    		</form>
    		<form class="navbar-form navbar-left" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
     			</div>
      			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
  		</div>
	</nav>';
}

if ($_POST['block']=='c'){

	echo '<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<form action="details.php" method="post">
    		<ul class="nav navbar-nav">
      			<li ><a ><button type="submit" name="block" value="a">A BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="b">B BLOCK</button></a></li>
      			<li class="active"><a href="#"><button type="submit" name="block" value="c">C BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="d">D BLOCK</button></a></li>
    		</ul>
    		</form>
    		<form class="navbar-form navbar-left" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
     			</div>
      			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
  		</div>
	</nav>';
}

if ($_POST['block']=='d'){	
	echo '<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<form action="details.php" method="post">
    		<ul class="nav navbar-nav">
      			<li ><a ><button type="submit" name="block" value="a">A BLOCK</button></a></li>
      			<li ><a ><button type="submit" name="block" value="b">B BLOCK</button></a></li>
      			<li><a><button type="submit" name="block" value="c">C BLOCK</button></a></li>
      			<li class="active"><a href="#"><button type="submit" name="block" value="d">D BLOCK</button></a></li>
    		</ul>
    		</form>
    		<form class="navbar-form navbar-left" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
     			</div>
      			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
  		</div>
	</nav>';
}
echo '<div id="abc">
<div id="popupentry">
<form action="#" class="form1" id="form1" method="post" name="form" onsubmit="return validateForm()" enctype="multipart/form-data">
<img id="close" src="image.png" onclick ="div_hide()">
<h2>PRISONER ENTRY</h2>
<hr>
<input id="name" name="name" placeholder="Name" type="text">
<input id="rpno" name="rpno" placeholder="RP No" type="text">
<input id="accno" name="accno" placeholder="Account No" type="text">
<input id="block" name="block" placeholder="BLOCK" type="text">
<input type="file" name="image" id="image" />  
<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />                     
</form>
</div>
</div>
<div id="def">
<button class="fab" onclick="div_show()" style="position:absolute;">+</button>
</div>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
	echo '<center>';	
		

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
                    echo '<br/><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"height="100" width="100" class="myimage"/>';
                    echo '<div class="middle">';
                    echo "<p id='name'> NAME:".$row['name']."</p>";
                    echo "<p id='rpno'> RP NO:".$row['rpno']."</p>";
                    echo "<p id='accno'> ACCOUNT NO:".$row['accno']."</p>"; 
                    echo '</div>';
                    echo '<input type="hidden" name="rpno" value="'.$row['rpno'].'">';
                    echo '<input type="hidden" name="block" value="'.$row['block'].'">';
                    echo '<input type="hidden" name="status" value="'.$row['status'].'">';
            		    echo '<div class="right">';
                    echo  '<br/> <button type="submit" name="status1" value="" class="editbtn1">Edit</button>';
                    echo  '<br/>';
                    echo  '<br/> <button type="submit" name="status1" value="" class="editbtn2">Transaction</button>';
                    echo  '<br/>';
                    echo  '<br/> <button type="submit" name="status1" value="" class="editbtn3">'.$x.'</button>'; 
                    echo "</div>"; 
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
<script>
function validateForm() {
  var name = document.forms["form"]["name"].value;
  var rpno = document.forms["form"]["rpno"].value;
  var accno = document.forms["form"]["accno"].value;
  if (name == "") {
    alert("Please fill the name");
    return false;
  }
  else if(rpno == ""){
    alert("Please fill the RP No");
    return false;
  }
  if (accno== "") {
    alert("Please fill the Account No");
    return false;
  }
  if (block== "") {
    alert("Please fill the Block");
    return false;
  }
    
}
</script>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                return true;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 
<script>
function div_show() {
document.getElementById('abc').style.display = "block";
document.getElementById('def').style.display = "none";

}
function div_hide(){
document.getElementById('abc').style.display = "none";
document.getElementById('def').style.display = "block";

}
</script>