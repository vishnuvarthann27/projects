<html>
<head>

<style>
.button{
	border-radius: 10px;
 	border: none;
  	color: #FFFFFF;
  	text-align: center;
  	font-size: 28px;
  	padding: 20px;
   	background-color: #f4511e;
  	transition: all 0.5s;
  	cursor: pointer;
  	margin: 5px;
	height: 250px;
	width: 500px;
}
.button:hover span {
  	padding-right: 25px;

}
.button:hover{
	background-color: transparent;
	color: #0a0303
}

.button:hover span:after {
  	opacity: 1;
  	right: 0;
}
.button span {
  	cursor: pointer;
  	display: inline-block;
  	position: relative;
  	transition: 0.5s;
}
.button span:after {
  	content: '\00bb';
  	position: absolute;
  	opacity: 0;
  	top: 0;
  	right: -20px;
  	transition: 0.5s;
}
.container{
	position: relative;
	top: 0px;
	left: 250px;
}
.button:active:after {
  	padding: 0;
  	margin: 0;
  	opacity: 1;
  	transition: 0s
  	padding-left: 350%;
  	margin-left: -20px!important;
  	margin-top: -120%;
  	opacity: 0;
  	transition: all 0.8s
}

	body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	background-color:#ebdfc4;
	
}

#header_menu {font-size: 12px;	font-weight: bold; color:#CCC;	text-decoration: none;	font-family:Tahoma, Geneva, sans-serif;}
#header_menu a {font-size: 12px;	font-weight: bold; color:#FF0;	text-decoration: none;	font-family:Tahoma, Geneva, sans-serif;}
#header_menu a:hover {font-size: 12px;	font-weight: bold; color:#FFF;text-decoration: none;	font-family:Tahoma, Geneva, sans-serif;}
#header_menu a:current {color:#FFF;}


</style>

</head>
<body>
	
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
<div class="container">
	<table>
		<tr>
			<td>
				<form action="details.php" method="post">
					
					<button class="button" type="submit" name="block" value="a"><span>A BLOCK</span></button>
				</form>
			</td>
			<td>
				<form  action="details.php" method="post">
					
					<button class="button" type="submit" name="block" value="b"><span>B BLOCK</span></button>
				</form>
			</td>
		</tr>
<br/>
		<tr>
			<td>
				<form action="details.php" method="post">
					
					<button class="button" type="submit" name="block" value="c"><span>C BLOCK</span></button>
				</form>
			</td>
			<td>
				<form action="details.php" method="post">
					
					<button class="button" type="submit" name="block" value="d"><span>D BLOCK</span></button>
				</form>
			</td>
		</tr>
	</table>
</div>
</body>
</html>