
<html>
<style>

input[type=text]{
	width:400%;
	padding:50px;
	
	
}




</style>
<body>

<?php


// including the database connection file
$mysqli=mysqli_connect("localhost","root","","textile");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$credit= mysqli_real_escape_string($mysqli, $_POST['credit']);
	$debit = mysqli_real_escape_string($mysqli, $_POST['debit']);

   $balance = mysqli_real_escape_string($mysqli, $_POST['balance']);	

  $buyername = mysqli_real_escape_string($mysqli, $_POST['buyername']);	





	
	
	// checking empty fields
	if(empty($date) || empty($credit) || empty($debit)|| empty($balance)|| empty($buyername)) {	
			
		if(empty($date)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($credit)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}
		
		if(empty($debit)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	

if(empty($balance)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}	

if(empty($buyername)) {
			echo "<font color='red'>Number field is empty.</font><br/>";
		}	


		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE user SET date='$date',credit='$credit',debit='$debit',balance='$balance',buyername='$buyername' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: home.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT id,date,credit,debit,balance,buyername FROM user WHERE id=$id");

while($res = mysqli_fetch_array($result))
{


	
	
	
	
	
	$date=$res['date'];
	$credit = $res['credit'];
	$debit = $res['debit'];
	$balance = $res['balance'];
	$buyername = $res['buyername'];
}
?>




<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="home.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Date</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			
			</tr>
			<tr> 
				<td>Credit</td>
				<td><input type="text" name="credit" value="<?php echo $credit;?>"></td>
			</tr>
			<tr> 
				<td>Debit</td>
				<td><input type="text" name="debit" value="<?php echo $debit;?>"></td>
			</tr>
			
			<tr> 
				<td>Balance</td>
				<td><input type="text" name="balance" value="<?php echo $balance;?>"></td>
			</tr>
			<tr> 
				<td>Buyername</td>
				<td><input type="text" name="buyername" value="<?php echo $buyername;?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
