

<?php

$connection=mysqli_connect('localhost','root','','textile');
session_start();
if(isset($_POST['submit']))

{
	
	$buyername=$_POST['buyername'];
	$password=$_POST['password'];
	
	/*$query="insert into admin(name,password) values ('$name','$password')";
	$q=mysqli_query($connection,$query);*/
	
	$query=mysqli_query($connection,"select * from registration where buyername='$buyername' and password='$password'");

		$row=mysqli_fetch_array($query);
	
	if($row==true)
	{
		
	$_SESSION["buyername"]=$buyername;
	
	
	
	
	
			header('Location:show.php');
	}
	

else{
	
	
	echo"username and password is wrong";
	
}

}
?>


<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/ff129be781.js" crossorigin="anonymous"></script>
</head>

<style>
body{
	background-image:url('logo8.jpg');
	background-size:cover;
	background-repeat:No-repeat;
	
}
background-image:hover{
	opacity:0.5;
}
.box{
	positon:absolute;
	margin-left:40%;
	margin-top:18%;
	top:-50%;
	left:50%;
	
}

h1{
	color:white;
	font-family:"Times New Roman", Times, serif;
	padding:13px;
	mergin:13px;
	border-bottom:5px solid #78D335;
	width:150px;
	font-size:40px;
}

input{
	
	margin:0px;
	background:transparent;
	border-style:none;
	outline:none;
	color:white;
	font-size:18px;
}
.user2{
	margin:10px;
}
.user{
	
	margin:0px;
	padding:5px;
	width:35%;
	border-bottom:2px solid #78D335;
}

.fa-user{
	color:white;
	font-size:18px;
	margin:5px;
	
}
.fa-lock{
	color:white;
	font-size:18px;
    margin:5px;
}
.fa-eye
{
	color:white;
	font-size:18px;
    margin:5px;
}
.buton{
	padding:5px;
	margin-top:20px;
	width:15%;
	border:2px solid #78D335; 
	border-radius:10px;
	background-color:#E8E5E5 ;
	font-weight:bold;
	color:#78D335;
	font-family:"Times New Roman", Times, serif;
	font-size:17px;
}
.buton:hover{
	background-color:#78D335;
	color:white;
}


.mee
{
	color:white;
	font-size:25px;
	width:500px;
	margin-left:500px;
}
</style>


<body>

<form action="" method="post">
<div class="box">
<div class="h1">
<span><h1>Log in</h1></span>
</div>

<div class="user">
<i class="fas fa-user"></i>
<input  type="text" placeholder="Buyer name" name="buyername">
</div>

<div class="user">
<i class="fas fa-lock"></i>
<input  type="password" placeholder="Password" name="password">
<i class="far fa-eye"></i>
</div>

<div class="buton1">
<input type="submit" class="buton" name="submit" value="Sign in">



</div>

</div>
</form>


</body>
</html>




