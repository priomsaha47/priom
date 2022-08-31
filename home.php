<html>

<?php
//including the database connection file 

$mysqli=mysqli_connect("localhost","root","","textile");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC"); // using mysqli_query instead
?>
 
<style>
    table,th,td{
		border-collapse:collapse;
		border:1px solid black;
		text-align:center;
		
		
		
	}


nav{
	background-color:gray;
	width:100%;
	overflow:auto;
	
}


ul{
	margin:0px;
	
}

li{
	list-style:none;
	float:left;
	
}
a{
	width:80px;
	text-decoration:none;
	display:block;
	text-alaign:center;
	margin:5px;
	
	
}



body{
	

}


</style>




<body>
<nav>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Logout</a></li>

</ul>










</nav>

<img src="h.jpg">
<br>

<form  id="cart" action="" method="post">
<table name="cart">

<tr>
<th>Date</th>
<th>Credit</th>
<th>Debit</th>
<th>Balance</th>
</tr>
<tr>
<td>  <input placeholder="00-00-00" value="00-00-00"class="textbox-n" type="text" onfocus="(this.type='date')" id="date"name="date1"  ></td>
<td><input type="text"    name="credit1"  id="c1"placeholder="Enter credit" value="0"></td>
<td><input type="text"    name="debit1" id="p"  value="0" placeholder="Enter debit"></td>
<td><input type="text"     id="prio"     name="balance1" placeholder="Enter balance"></td>
</tr>

<tr>
<td><input type="date"      name="date2"  ></td>
<td><input type="text"    id="priom"  name="credit2"  placeholder="Enter credit"></td>
<td><input type="text"    id ="pr"  value="0"   name="debit2"   placeholder="Enter debit"></td>
<td><input type="text"    id="priom_saha"   name="balance2" placeholder="Enter balance"></td>
</tr>




<tr>
<td><input type="date"     name="date3"></td>
<td><input type="text"    id= "p2"  name="credit3"   placeholder="Enter credit"></td>
<td><input type="text"    id="p3"  value="0" name="debit3"  placeholder="Enter debit"></td>
<td><input type="text"    id="p4"   name="balance3" placeholder="Enter balance"></td>
</tr>


<tr>
<td><input type="date"     name="date4"></td>
<td><input type="text"    id= "p5"  name="credit4"   placeholder="Enter credit"></td>
<td><input type="text"    id="p6"  value="0" name="debit4"  placeholder="Enter debit"></td>
<td><input type="text"    id="p7"   name="balance4" placeholder="Enter balance"></td>
</tr>

<tr>
<td><input type="date"     name="date5"></td>
<td><input type="text"    id= "p8"  name="credit5"  placeholder="Enter credit"></td>
<td><input type="text"    id="p9"  value="0" name="debit5"  placeholder="Enter debit"></td>
<td><input type="text"    id="p10"   name="balance5" placeholder="Enter balance"></td>
</tr>


<tr>
<td><input type="date"     name="date6"></td>
<td><input type="text"    id= "p11"  name="credit6"  placeholder="Enter credit"></td>
<td><input type="text"    id="p12"  value="0" name="debit6"  placeholder="Enter debit"></td>
<td><input type="text"    id="p13"   name="balance6" placeholder="Enter balance"></td>
</tr>


<tr>
<td><input type="date"     name="date7"></td>
<td><input type="text"    id= "p14"  name="credit7"  placeholder="Enter credit"></td>
<td><input type="text"    id="p15"  value="0" name="debit7"  placeholder="Enter debit"></td>
<td><input type="text"    id="p16"   name="balance7" placeholder="Enter balance"></td>
</tr>





<tr>
<td><input type="date"     name="date8"></td>
<td><input type="text"    id= "p17"  name="credit8"  placeholder="Enter credit"></td>
<td><input type="text"    id="p18"  value="0" name="debit8"  placeholder="Enter debit"></td>
<td><input type="text"    id="p19"   name="balance8" placeholder="Enter balance"></td>
</tr>




<tr>
<td><input type="date"     name="date9"></td>
<td><input type="text"    id= "p20"  name="credit9"  placeholder="Enter credit"></td>
<td><input type="text"    id="p21"  value="0" name="debit9"  placeholder="Enter debit"></td>
<td><input type="text"    id="p22"   name="balance9" placeholder="Enter balance"></td>
</tr>




<tr>
<td><input type="date"     name="date10"></td>
<td><input type="text"    id= "p23"  name="credit10"  placeholder="Enter credit"></td>
<td><input type="text"    id="p24"  value="0" name="debit10"  placeholder="Enter debit"></td>
<td><input type="text"    id="p25"   name="balance10" placeholder="Enter balance"></td>
</tr>















<tr>
<td colspan="4"><input type="text" name="buyername" placeholder="Enter Buyer Name" ></td>
</tr>
<tr>
<td></td>

<td><input type="text"  id="tcredit"  name="tcredit"   placeholder="Total Credit"></td>
<td ><input type="text" id="tdebit"  name="tdebit"     placeholder="Toatal Debit"></td>
<td><input type="text"  id="toto"     name="total"     placeholder="Total Balance" ></td>
</tr>



<tr>
<td colspan="4"><input type="submit" name="submit" value="save"></td>

</tr>






</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script>

     $(document).ready(function(e){
	 
	 
	 $("input").change(function(){
	 
	 

	 	 
	 var tu=0;
	 
	 $("input[id=c1]").each(function(){
	 
	 
	tu =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 	 var tt=0;
	 
	 $("input[id=p]").each(function(){
	 
	 
	tt =tu-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	  $("input[id=prio]").val(tt);

	 
	 
	 
	 	 var total=0;
	 
	 $("input[id=prio]").each(function(){
	 
	 
	total =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
	  var total1=0;
	 
	 $("input[id=priom]").each(function(){
	 
	 
	total1=total+total1+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	  
	 var t=0;
	 
	 $("input[id=pr]").each(function(){
	 
	 
	t =total1-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 $("input[id=priom_saha]").val(t);
	 
	 
	 var p=0;
	 
	 
	  $("input[id=p2]").each(function(){
	 
	 
	p =t+p+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 
	 
	 
	 	  
	 var t1=0;
	 
	 $("input[id=p3]").each(function(){
	 
	 
	t1 =p-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 
	 $("input[id=p4]").val(t1);
	 
	 
	 
	 	 var p5=0;
	 
	 
	  $("input[id=p5]").each(function(){
	 
	 
	p5 =p5+t1+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 	 	  
	 var p6=0;
	 
	 $("input[id=p6]").each(function(){
	 
	 
	p6 =p5-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 	 $("input[id=p7]").val(p6);
	 
	 
	 
	 
	 
	 
	 	 
	 
	 
	 
	 
	 
	  
	 	 var p8=0;
	 
	 
	  $("input[id=p8]").each(function(){
	 
	 
	p8 =p8+p6+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 	  
	 	 var p9=0;
	 
	 
	  $("input[id=p9]").each(function(){
	 
	 
	p8 =p8-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	  $("input[id=p10]").val(p8);
	 
	 
	 
	 
	 
	 
	 	 	 var p11=0;
	 
	 
	  $("input[id=p11]").each(function(){
	 
	 
	p11 =p11+p8+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 	 
	 
	 	 	 var p12=0;
	 
	 
	  $("input[id=p12]").each(function(){
	 
	 
	p12 =p11-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 	  $("input[id=p13]").val(p12);
	 
	 
	 
	 

	 
	 
	 	 	 var p14=0;
	 
	 
	  $("input[id=p14]").each(function(){
	 
	 
	p14 =p14+p12+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	  
	 
	 	 	 var p15=0;
	 
	 
	  $("input[id=p15]").each(function(){
	 
	 
	p15 =p14-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	   $("input[id=p16]").val(p15);
	 
	 
	 
	 
	 	 	 	 var p17=0;
	 
	 
	  $("input[id=p17]").each(function(){
	 
	
	p17 =p17+p15+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 	 	 	 var p18=0;
	 
	 
	  $("input[id=p18]").each(function(){
	 
	
	p18 =p17-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 $("input[id=p19]").val(p18);
	 
	 
	 
	 
	 
	 
	 
	 
	  	 	 	 var p20=0;
	 
	 
	  $("input[id=p20]").each(function(){
	 
	
	p20=p20+p18+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	  	 	 	 var p21=0;
	 
	 
	  $("input[id=p21]").each(function(){
	 
	
	p21 =p20-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	  
	 $("input[id=p22]").val(p21);
	 
	 
	 
	 
	 
	 
	   	 	 	 var p23=0;
	 
	 
	  $("input[id=p23]").each(function(){
	 
	
	p23=p23+p21+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	   	 	 	 var p24=0;
	 
	 
	  $("input[id=p24]").each(function(){
	 
	
	p24=p23-parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	  $("input[id=p25]").val(p24);
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 var to=0;
	 
	 $("input[id=prio]").each(function(){
	 
	 
	to =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	

	 
	 
	 var too=0;
	 
	 $("input[id=priom_saha]").each(function(){
	 
	 
	too =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	
	 
	 
	 var top=0;
	 
	 $("input[id=p4]").each(function(){
	 
	 
	top =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	  var tooo=0;
	 
	 $("input[id=p7]").each(function(){
	 
	 
	tooo =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 	  var toooo=0;
	 
	 $("input[id=p10]").each(function(){
	 
	 
	toooo =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	   var tero=0;
	 
	 $("input[id=p13]").each(function(){
	 
	 
	tero =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 
	 	   var sulo=0;
	 
	 $("input[id=p16]").each(function(){
	 
	 
	sulo =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 
	 
	 	 	   var unis=0;
	 
	 $("input[id=p19]").each(function(){
	 
	 
	unis =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 
	 
	 	 
	 	 	   var bais=0;
	 
	 $("input[id=p22]").each(function(){
	 
	 
	bias =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 
	  	 	   var pochis=0;
	 
	 $("input[id=p25]").each(function(){
	 
	 
	pochis=to+too+top+tooo+toooo+tero+sulo+unis+bias+pochis+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	  
	 
	 
	 
	 
	 
	 
	 
	 
	  
	 $("input[id=toto]").val(pochis);
	 
	 
	 
	 
	
	
	
	 	   var d1=0;
	 
	 $("input[id=p]").each(function(){
	 
	 
	d1 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	
	
	 	   var d2=0;
	 
	 $("input[id=pr]").each(function(){
	 
	 
	d2 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	
	
	
	 	   var d3=0;
	 
	 $("input[id=p3]").each(function(){
	 
	 
	d3 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	 
	 
	 	   var d4=0;
	 
	 $("input[id=p6]").each(function(){
	 
	 
	d4 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	 
	 
	 
	 
	 	   var d5=0;
	 
	 $("input[id=p9]").each(function(){
	 
	 
	d5 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	  	   var d6=0;
	 
	 $("input[id=p12]").each(function(){
	 
	 
	d6 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	  	   var d7=0;
	 
	 $("input[id=p15]").each(function(){
	 
	 
	d7 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	  	   var d8=0;
	 
	 $("input[id=p18]").each(function(){
	 
	 
	d8 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	  	   var d9=0;
	 
	 $("input[id=p21]").each(function(){
	 
	 
	d9 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	 
	  	   var d10=0;
	 
	 $("input[id=p24]").each(function(){
	 
	 
	d10 =d1+d2+d3+d4+d5+d6+d7+d8+d9+d10+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 $("input[id=tdebit]").val(d10);
	 
	 
	 
	 
	 
	 
	 	 
	  	   var c1=0;
	 
	 $("input[id=c1]").each(function(){
	 
	 
	c1 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	   	   var c2=0;
	 
	 $("input[id=priom]").each(function(){
	 
	 
	c2 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	   	   var c3=0;
	 
	 $("input[id=p2]").each(function(){
	 
	 
	c3 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 	 
	   	   var c4=0;
	 
	 $("input[id=p5]").each(function(){
	 
	 
	c4 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 	 
	   	   var c5=0;
	 
	 $("input[id=p8]").each(function(){
	 
	 
	c5 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 	 
	   	   var c6=0;
	 
	 $("input[id=p11]").each(function(){
	 
	 
	c6 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 	 
	   	   var c7=0;
	 
	 $("input[id=p14]").each(function(){
	 
	 
	c7 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 	 

	 	 
	   	   var c8=0;
	 
	 $("input[id=p17]").each(function(){
	 
	 
	c8 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 	 
	   	   var c9=0;
	 
	 $("input[id=p20]").each(function(){
	 
	 
	c9 =parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 
	 
	 
	 	 
	   	   var c10=0;
	 
	 $("input[id=p23]").each(function(){
	 
	 
	c10 =c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+parseInt($(this).val());
	 
	 
	 
	 
	 
	 })
	 
	 
	 $("input[id=tcredit]").val(c10);
	 
	 
	 
	 
	 
	 
	 });
	 
	 
	 
	 
	 
	 
	 });
	 
	 
 
 
 
 
 
 
 
 








</script>



		









</table>





<?php
   $connection=mysqli_connect("localhost","root","","textile");
   if($connection){
	   
	   echo "database connection sucessfully";
   }

 else{
	 
	 echo "database connection failed";
	 
	 
 }

 if(isset($_POST['submit'])){
	 
	 
	 $date1=$_POST['date1'];
	 $date2=$_POST['date2'];
	 $date3=$_POST['date3'];
	 $date4=$_POST['date4'];
	 $date5=$_POST['date5'];
	 $date6=$_POST['date6'];
	 $date7=$_POST['date7'];
	 $date8=$_POST['date8'];
	 $date9=$_POST['date9'];
	 $date10=$_POST['date10'];
	  
	  
	  
	 
	 $credit1=$_POST['credit1'];
	 $credit2=$_POST['credit2'];
	 $credit3=$_POST['credit3'];
	 $credit4=$_POST['credit4'];
	 
	 $credit5=$_POST['credit5'];
	 $credit6=$_POST['credit6'];
	 $credit7=$_POST['credit7'];
	 $credit8=$_POST['credit8'];
	 $credit9=$_POST['credit9'];
	 
	 $credit10=$_POST['credit10'];
	 
	 
	 
	 
	 
	 
	 $debit1=$_POST['debit1'];
	 $debit2=$_POST['debit2'];
	 $debit3=$_POST['debit3'];
	 $debit4=$_POST['debit4'];
	 $debit5=$_POST['debit5'];
	 $debit6=$_POST['debit6'];
	 $debit7=$_POST['debit7'];
	 $debit8=$_POST['debit8'];
	 $debit9=$_POST['debit9'];
	 $debit10=$_POST['debit10'];
	 
	 
	 $balance1=$_POST['balance1'];
	 $balance2=$_POST['balance2'];
	 $balance3=$_POST['balance3'];
	 $balance4=$_POST['balance4'];
	 $balance5=$_POST['balance5'];
	 $balance6=$_POST['balance6'];
	 $balance7=$_POST['balance7'];
	 $balance8=$_POST['balance8'];
	 $balance9=$_POST['balance9'];
	 $balance10=$_POST['balance10'];
	 
	 
	 
	 $buyername=$_POST['buyername'];
	 $total=$_POST['total'];
	 $tdebit=$_POST['tdebit'];
	 $tcredit=$_POST['tcredit'];
	 
	 $dateall=$date1.','.$date2.','.$date3.','.$date4.','.$date5.','.$date6.','.$date7.','.$date8.','.$date9.','.$date10;
	 $creditall=$credit1.','.$credit2.','.$credit3. ',' .$credit4.','.$credit5.','.$credit6.',' .$credit7.','.$credit8.','.$credit9.','.$credit10;
	 $debitall=$debit1.','.$debit2.','.$debit3.','.$debit4.','.$debit5.','.$debit6.','.$debit7.','.$debit8.','.$debit9.','.$debit10;
	 
	 
	 
	 
	 
	 $balanceall=$balance1.','.$balance2.','.$balance3.','.$balance4.','.$balance5.','.$balance6.','.$balance7.','.$balance8.','.$balance9.','.$balance10;     
	 
	 $query="insert into user(date,credit,debit,balance,buyername,total,totaldebit,totalcredit) values ('$dateall','$creditall','$debitall','$balanceall','$buyername',
	 '$total','$tdebit','$tcredit'  
	 )";
	 $q=mysqli_query($connection,$query);
	 
	 if($q){
		 
		 echo "data added successfully";
		 
	 }
	 
	 
	 else{
		 
		 echo "data added to failed";
		 
		 
	 
	 }
 }




?>












<br>

<table>

<tr>
<th>Id Number</th>
<th>Date</th>
<th>Credit</th>
<th>Debit</th>
<th>Balance</th>
<th>BuyerName</th>
<th>ID</th>

<th>Delete</th>
<th>Edit</th> 

</tr>



  <?php
  	
	$connection=mysqli_connect("localhost","root","","textile");
	
	
	$sql="SELECT date,credit,debit,balance,buyername,id from user ";
	$counter = 1;
	
	
	$results=mysqli_query($connection,$sql);

	
	if(mysqli_num_rows($results)>0){
			
		while($row=mysqli_fetch_array($results)){
	
$go=$row[0];
$explode=explode(",",$go);

       $explode[0];$x=$explode[0];

       $explode[1];$y=$explode[1];
       $explode[2];$z=$explode[2];
       $explode[3];$a=$explode[3];
       $explode[4];$b=$explode[4];
       $explode[5];$c=$explode[5];
       $explode[6];$d=$explode[6];
       $explode[7];$e=$explode[7];
	   $explode[8];$f=$explode[8];
	   $explode[9];$h=$explode[9];
  
  
  
  





foreach($explode as $i =>$key) {
$i >1;
    echo $i.' '.$key .'</br>';

}



  
  
  
  
  
  
  
  
  
  $g=$row[1];
$explode=explode(",",$g);



     $explode[0];$x1=$explode[0];

       $explode[1];$y1=$explode[1];
       $explode[2];$z1=$explode[2];
       $explode[3];$a1=$explode[3];
       $explode[4];$b1=$explode[4];
       $explode[5];$c1=$explode[5];
       $explode[6];$d1=$explode[6];
       $explode[7];$e1=$explode[7];
	   $explode[8];$f1=$explode[8];
	   $explode[9];$h1=$explode[9];
  




foreach($explode as $i1 =>$key1) {
$i >1;
    echo $i1.' '.$key1 .'</br>';

}

  
  
  
  
  



  
  
  $gm=$row[2];
$explode=explode(",",$gm);

     $explode[0];$x2=$explode[0];

       $explode[1];$y2=$explode[1];
       $explode[2];$z2=$explode[2];
       $explode[3];$a2=$explode[3];
       $explode[4];$b2=$explode[4];
       $explode[5];$c2=$explode[5];
       $explode[6];$d2=$explode[6];
       $explode[7];$e2=$explode[7];
	   $explode[8];$f2=$explode[8];
	   $explode[9];$h2=$explode[9];
  	
	
	
foreach($explode as $i2 =>$key2) {
$i >1;
    echo $i2.' '.$key2 .'</br>';

}

  
	
	
	
	
	
	
  $gl=$row[3];
$explode=explode(",",$gl);
 
 
       $explode[0];$x3=$explode[0];

       $explode[1];$y3=$explode[1];
       $explode[2];$z3=$explode[2];
       $explode[3];$a3=$explode[3];
       $explode[4];$b3=$explode[4];
       $explode[5];$c3=$explode[5];
       $explode[6];$d3=$explode[6];
       $explode[7];$e3=$explode[7];
	   $explode[8];$f3=$explode[8];
	   $explode[9];$h3=$explode[9];
 
 
 

foreach($explode as $i3 =>$key3) {
$i >1;
    echo $i3.' '.$key3 .' '.$key1.'</br>';

	
	
	
	
	
	
	
	
	
	
	
	
}

  
  
  
  
  
  
  
  
  
  
  
  
  $count=1;


  echo"<tr>";
				


	 echo "<td>$count </td>";
  echo "<td> $x</td>";
    echo "<td>$x1</td>";
echo "<td>$x2</td>";
echo "<td>$x3</td>";
echo "<td>$row[buyername]</td>";
   echo"<td>$row[id]</td>";


 	 
 echo"</tr>";
   
 	
		  
  

	 echo"<tr>";
				


	 	
 echo "<td> </td>";
	 
  echo "<td>$y</td>";
  
   
  echo "<td>$y1</td>";
  echo "<td>$y2</td>";
  
  echo "<td>$y3</td>";
 	 echo "<td>$row[buyername]</td>";
	   echo"<td>$row[id]</td>";
	 

	 	  
 echo"</tr>";
   

   
   
	
	 echo"<tr>";
				

	 
	 	
 echo "<td></td>";
	 
  echo "<td>$z</td>";
  
  
	 
  echo "<td>$z1</td>";
   echo "<td>$z2</td>";
   echo "<td>$z3</td>";
  echo "<td>$row[buyername]</td>";
  
    echo"<td>$row[id]</td>";
 
	 echo"</tr>";
    
	
	
	
	
	
		 echo"<tr>";
				

	 
	 	

	  echo "<td></td>";
  echo "<td>$a</td>";
  
  
	 
  echo "<td>$a1</td>";
   echo "<td>$a2</td>";
   echo "<td>$a3</td>";
  echo "<td>$row[buyername]</td>";
    echo"<td>$row[id]</td>";
  
 	
	 echo"</tr>";
    
	
	
	
		 echo"<tr>";
				

	 
	 	
 echo "<td></td>";
	 
  echo "<td>$b</td>";
  
  
	 
  echo "<td>$b1</td>";
   echo "<td>$b2</td>";
   echo "<td>$b3</td>";
  echo "<td>$row[buyername]</td>";
  
    echo"<td>$row[id]</td>";
  
 	
	 echo"</tr>";
    
	
	
		 echo "<tr>";
				

	 
	 	

	  echo "<td></td>";
  echo "<td>$c</td>";
  
  
	 
  echo "<td>$c1</td>";
   echo "<td>$c2</td>";
   echo "<td>$c3</td>";
  echo "<td>$row[buyername]</td>";
    echo"<td>$row[id]</td>";
  
 
	 echo"</tr>";
    
	
	
	
	
	
		 echo"<tr>";
				

	 
	 	
 echo "<td></td>";
	 
  echo "<td>$d</td>";
  
  
	 
  echo "<td>$d1</td>";
   echo "<td>$d2</td>";
   echo "<td>$d3</td>";
  echo "<td>$row[buyername]</td>";
  
    echo"<td>$row[id]</td>";
  
	 echo"</tr>";
    
	
		 echo"<tr>";
				

	 
	 	
 echo "<td></td>";
	 
  echo "<td>$e</td>";
  
  
	 
  echo "<td>$e1</td>";
   echo "<td>$e2</td>";
   echo "<td>$e3</td>";
  echo "<td>$row[buyername]</td>";
    echo"<td>$row[id]</td>";
  
	 echo"</tr>";
    
		 echo"<tr>";
				

	 
	 	
 echo "<td></td>";
	 
  echo "<td>$f</td>";
  
  
	 
  echo "<td>$f1</td>";
   echo "<td>$f2</td>";
   echo "<td>$f3</td>";
  echo "<td>$row[buyername]</td>";
  
    echo"<td>$row[id]</td>";
  
 	 
	 echo"</tr>";
    
  
      	 echo"<tr>";
				

	 
	 	

	  echo "<td></td>";
  echo "<td>$h</td>";
  
  
	 
  echo "<td>$h1</td>";
   echo "<td>$h2</td>";
   echo "<td>$h3</td>";
   
  echo "<td>$row[buyername]</td>";
    echo"<td>$row[id]</td>";
  
 	 	
	 echo"</tr>";
    
	  
	 	echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('oi delete kor?')\">Delete</a></td>";	
  	    echo"<td><a href=\"edit.php?id=$row[id]\">Edit</a></td>";
  
  $count++;
		  
		}
   
	}
	else{
		
		echo "<h1 style=color:red;>No Data are avaialable in the database</h1>";
		
	}

	$connection=mysqli_connect("localhost","root","","textile");
	$t=0;
	$s="SELECT  total from user ";
	
		
	
	$result=mysqli_query($connection,$s);

	
	if(mysqli_num_rows($result)>0){
		
			
		while($r=mysqli_fetch_array($result)){
	    $t+= $r['total'];

		}
	}
	echo "<h1>Total balance :$t</h1>";
	
	
	
	
	
	
	
	
	
	$connection=mysqli_connect("localhost","root","","textile");
	$debit=0;
	$s1="SELECT  totaldebit from user ";
	
		
	
	$result1=mysqli_query($connection,$s1);

	
	if(mysqli_num_rows($result1)>0){
		
			
		while($r1=mysqli_fetch_array($result1)){
	    $debit+= $r1['totaldebit'];

		}
	}
	echo "<h1>Total debit :$debit</h1>";
	
	
		$connection=mysqli_connect("localhost","root","","textile");
	$credit=0;
	$s2="SELECT  totalcredit from user ";
	
		
	
	$result2=mysqli_query($connection,$s2);

	
	if(mysqli_num_rows($result2)>0){
		
			
		while($r2=mysqli_fetch_array($result2)){
	    $credit+= $r2['totalcredit'];

		}
	}
	echo "<h1>Total credit :$credit</h1>";
	
	
	
	
	
	
	
	
	
	
  ?>



<a href="login.php">Login</a>


</body>
</html>