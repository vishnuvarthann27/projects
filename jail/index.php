<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: #f1f1f1;
}
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
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
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupentry {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
#form1 {
max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
.fab {
   width: 60px;
   height: 60px;
   background-color: #2196F3;
   border-radius: 50%;
   box-shadow: 0 6px 10px 0 #666;
   transition: all 0.1s ease-in-out;
 
   font-size: 50px;
   color: white;
   text-align: center;
   line-height: 60px;
 
   
   right: 200px;
   top: 30px;
}
 
.fab:hover {
   box-shadow: 0 6px 14px 0 #666;
   transform: scale(1.05);
}
input{
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#submit {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}
table {
  border-collapse: collapse;
  margin-left:10%;
  width:1000px;
}

table, th, td {
  border: 1px solid black;
  margin-top:5%;
}
.editbtn{
	margin-left:30%;
	font-size:20px;
	height:10%;
	background: #2196F3;
	border-radius: 10px;
  
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 		   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>	  
<?php  
 $connect = mysqli_connect("localhost", "root", "", "canteen");  
 if(isset($_POST["insert"]))	 
 {    
      if(!empty($_FILES['image']['tmp_name']))
	  {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO entry(name,rpno,accno,image,status) VALUES ('".$_POST["name"]."','".$_POST["rpno"]."','".$_POST["accno"]."','$file','active')";  
      }
	  else
	  {
		$query = "INSERT INTO entry(name,rpno,accno,status) VALUES ('".$_POST["name"]."','".$_POST["rpno"]."','".$_POST["accno"]."','active')";  
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
<body id="body" >
<div id="abc">
<div id="popupentry">
<form action="#" id="form1" method="post" name="form" onsubmit="return validateForm()" enctype="multipart/form-data">
<img id="close" src="images/3.png" onclick ="div_hide()">
<h2>PRISONER ENTRY</h2>
<hr>
<input id="name" name="name" placeholder="Name" type="text">
<input id="rpno" name="rpno" placeholder="RP No" type="text">
<input id="accno" name="accno" placeholder="Account No" type="text">
<input type="file" name="image" id="image" />  
<input type="submit" name="insert" id="submit" value="Insert" class="btn btn-info" />                     
</form>
</div>
</div>
<form method="post" class="example" style="margin:auto;max-width:300px;box-sizing: border-box;">
				<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
                <button type="submit" name="search" class="bt"></button>
</form>
<button class="fab" onclick="div_show()" style="position:absolute;">+</button>

<br><br><br>
<table class="table table-bordered">  
                     <tr>  
					      <th>Name</th>
						  <th>RP No</th>
						  <th>Account No</th>
                          <th>Image</th>  
						  <th>Status</th>
                     </tr>  
                <?php 
				
				$query = "SELECT * FROM entry";
				$search_result = mysqli_query($connect, $query);
                if(isset($_POST['search']))
                {
                 $valueToSearch = $_POST['valueToSearch'];
                 // search in all table columns
                 // using concat mysql function
                 $query = "SELECT * FROM entry WHERE CONCAT(`name`, `rpno`, `accno`,'image') LIKE '%".$valueToSearch."%'";
                 $search_result = filterTable($query);
                }
                else {
                $query = "SELECT * FROM entry";
                $search_result = filterTable($query);
                }

                 // function to connect and execute the query
                function filterTable($query)
                {
                $connect = mysqli_connect("localhost", "root", "", "canteen");
                $filter_Result = mysqli_query($connect, $query) or die( mysqli_error($connect));;
                return $filter_Result;
                }			
                while($row = mysqli_fetch_array($search_result))  
                {  
                       
                         echo "<tr>";
                         echo "<td>" .$row['name']. "</td>";
						 echo "<td>" .$row['rpno']. "</td>";
                         echo "<td>" .$row['accno']. "</td>";
                         echo '<td> 
                                <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="100" width="100" class="img-thumnail" />  
                               </td>' ; 
					     echo  '<td> <button class="editbtn">'.$row['status'].'</button> </td>';
                         echo " </tr>";  
                }  
                ?>  
                </table>

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
    
}
</script>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
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
}
function div_hide(){
document.getElementById('abc').style.display = "none";
}
</script>