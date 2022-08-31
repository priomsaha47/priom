<html>
<style>



    table,th,td{
		
		border-collapse:collapse;
		border:1px solid black;
		text-align:center;
		
	}



</style>






<body>






<li><h1><?php
session_start();

$con=mysqli_connect('localhost','root','','textile'); 
if($_SESSION["buyername"]==true)
{
	
	echo "hi"."".$_SESSION["buyername"];
}


?></li>

<br>
<br>


<button onclick="window.print()">Print</button>






<table>

<tr>
<th>Date</th>
<th>Credit</th>
<th>Debit</th>
<th>Balance</th>
<th>BuyerName</th>

</tr>




  <?php
  	
	$connection=mysqli_connect("localhost","root","","textile");
	
	$sql="SELECT date,credit,debit,balance,buyername From user where buyername='$_SESSION[buyername]'";

	
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
 
 
  
  
	  
  echo"<tr>";
				

	 
	 	

	
  echo "<td> $x</td>";
    echo "<td>$x1</td>";
echo "<td>$x2</td>";
echo "<td>$x3</td>";
echo "<td>$row[buyername]</td>";
	

 	 
 echo"</tr>";
 

   

	 echo"<tr>";
				

	 

	 
  echo "<td>$y</td>";
  
   
  echo "<td>$y1</td>";
  echo "<td>$y2</td>";
  
  echo "<td>$y3</td>";
 	 echo "<td>$row[buyername]</td>";
	
	 

	 
	 
 echo"</tr>";
   

   
   
	
	 echo"<tr>";
				

	 
	 	
 
	 
  echo "<td>$z</td>";
  
  
	 
  echo "<td>$z1</td>";
   echo "<td>$z2</td>";
   echo "<td>$z3</td>";
  echo "<td>$row[buyername]</td>";
  
 
 
	 echo"</tr>";
    
	
	
	
	
	
		 echo"<tr>";
				

	 
	 	


  echo "<td>$a</td>";
  
  
	 
  echo "<td>$a1</td>";
   echo "<td>$a2</td>";
   echo "<td>$a3</td>";
  echo "<td>$row[buyername]</td>";
 
  
 	
	 echo"</tr>";
    
	
	
	
		 echo"<tr>";
				

	 
	 	

	 
  echo "<td>$b</td>";
  
  
	 
  echo "<td>$b1</td>";
   echo "<td>$b2</td>";
   echo "<td>$b3</td>";
  echo "<td>$row[buyername]</td>";
  
 
  
 	
	 echo"</tr>";
    
	
	
		 echo "<tr>";
				

	 
	 	

  echo "<td>$c</td>";
  
  
	 
  echo "<td>$c1</td>";
   echo "<td>$c2</td>";
   echo "<td>$c3</td>";
  echo "<td>$row[buyername]</td>";
   
  
 
	 echo"</tr>";
    
	
	
	
	
	
		 echo"<tr>";
				

	 
	 	
 
	 
  echo "<td>$d</td>";
  
  
	 
  echo "<td>$d1</td>";
   echo "<td>$d2</td>";
   echo "<td>$d3</td>";
  echo "<td>$row[buyername]</td>";
  
 
  
	 echo"</tr>";
    
	
		 echo"<tr>";
				

	 
	 
	 
  echo "<td>$e</td>";
  
  
	 
  echo "<td>$e1</td>";
   echo "<td>$e2</td>";
   echo "<td>$e3</td>";
  echo "<td>$row[buyername]</td>";
  
  
	 echo"</tr>";
    
		 echo"<tr>";
				

	 
	 	
 
	 
  echo "<td>$f</td>";
  
  
	 
  echo "<td>$f1</td>";
   echo "<td>$f2</td>";
   echo "<td>$f3</td>";
  echo "<td>$row[buyername]</td>";
  
  
  
 	 
	 echo"</tr>";
    
  
      	 echo"<tr>";
				

	 
	 	


  echo "<td>$h</td>";
  
  
	 
  echo "<td>$h1</td>";
   echo "<td>$h2</td>";
   echo "<td>$h3</td>";
   
  echo "<td>$row[buyername]</td>";

  
 	 	
	 echo"</tr>";
    }
	}
	  
	
	
	
	
	
	
	
	$connection=mysqli_connect("localhost","root","","textile");
	$t=0;
	$s="SELECT  total from user  where buyername='$_SESSION[buyername]' ";
	
		
	
	$result=mysqli_query($connection,$s);

	
	if(mysqli_num_rows($result)>0){
		
			
		while($r=mysqli_fetch_array($result)){
	    $t+= $r['total'];

		}
	}
	echo " <h1> Total  balance :$t</h1>";
	
	
	

	
	
	
	
	
	
	
	$connection=mysqli_connect("localhost","root","","textile");
	$debit=0;
	$s1="SELECT  totaldebit from user where buyername='$_SESSION[buyername]'  ";
	
		
	
	$result1=mysqli_query($connection,$s1);

	
	if(mysqli_num_rows($result1)>0){
		
			
		while($r1=mysqli_fetch_array($result1)){
	    $debit+= $r1['totaldebit'];

		}
	}
	echo "<h1>Total debit :$debit</h1>";
	
	
	
	
	
	
	
	
	
	
		$connection=mysqli_connect("localhost","root","","textile");
	$credit=0;
	$s2="SELECT  totalcredit from user where buyername='$_SESSION[buyername]'    ";
	
		
	
	$result2=mysqli_query($connection,$s2);

	
	if(mysqli_num_rows($result2)>0){
		
			
		while($r2=mysqli_fetch_array($result2)){
	    $credit+= $r2['totalcredit'];

		}
	}
	echo "<h1>Total credit :$credit</h1>";
	
	
	
	
	
	
	
	
	
	
  ?>

	
	
	
	
	
	
	
	
 






</body>
</html>