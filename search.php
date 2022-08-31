<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><div class="container">
  
  
  </head>
  <body>
  <div class="row">
  <div class="col-md-8 col-md-offset-2 " style="margin-top:5%;">
  <div class="row">
  <?php
  $connection=mysqli_connect("localhost","root","","textile");
  if(isset($_POST['search'])){
	  $searchkey=$_POST['search'];
	 
	  $query="select date,credit,debit,balance,buyername from user WHERE date  LIKE '%$searchkey%'";
	   
	  
  }
  
     else
{
  $query="SELECT  date,credit,debit,balance,buyername  FROM user ";

    $searchkey="";
	
	
	
}
 $result=mysqli_query($connection,$query);  
  
  
  ?>
  
  
  
  
  
  
  
  
  
  
  <form action="" method="post"> 
  <div class="col-md-6">
  <input type="text"  name="search" class='form-control' placeholder="search by name" value="<?php echo "$searchkey"; ?>">
  </div>
  <div class="col-md-6 text-left">
  <button type="button" class="btn">Search</button>
  
  </div>
  
 

  
  
  
  
  
  
  
  
  
  </form>
  <br>
  <br>
  <br>
  
  </div>
   <table class="table table-hover" border="1">
  <tr>

  <tr>

<th>Date</th>
<th>Credit</th>
<th>Debit</th>
<th>Balance</th>
<th>BuyerName</th>
  
  
  
 </tr>
  
  
  <?php while($row=mysqli_fetch_array($result)): ?>
  
    <?php
	
	
	
		
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
  ?>
 <?php  
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
  



?>

<?php


  
  
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
  	
	
	
	
	
	
	
	?>
	<?php
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
 
 
	
	
	
	
	?>
	
	  
	
	<tr>

     <td><?php    echo $x ?></td>
	 
     <td><?php   echo $x1 ?></td>
      <td><?php echo $x2  ?></td>

     <td><?php  echo $x3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   </tr>
   
	<tr>
	
	  <td><?php    echo $y ?></td>
	 
     <td><?php   echo $y1 ?></td>
      <td><?php echo $y2 ?></td>

     <td><?php  echo $y3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
    
	
	</tr>
	<tr>
	  <td><?php    echo $z ?></td>
	 
     <td><?php   echo $z1?></td>
      <td><?php echo $z2 ?></td>

     <td><?php  echo $z3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
     
	
	</tr>
	<tr>
  
	  <td><?php    echo $a ?></td>
	 
     <td><?php   echo $a1?></td>
      <td><?php echo $a2?></td>

     <td><?php  echo $a3?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
     
	  
	  
	  
	  
	  </tr>
	  <tr>
	  
	  
	  
	  <td><?php    echo $b ?></td>
	 
     <td><?php   echo $b1?></td>
      <td><?php echo $b2?></td>

     <td><?php  echo $b3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
      </tr>
	  
	  <tr>
	  
	  
	  	  
	  <td><?php    echo $c?></td>
	 
     <td><?php   echo $c1?></td>
      <td><?php echo $c2?></td>

     <td><?php  echo $c3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
      </tr>
	  
	  
	  
	  <tr>
	  
	    <td><?php    echo $d?></td>
	 
     <td><?php   echo $d1?></td>
      <td><?php echo $d2 ?></td>

     <td><?php  echo $d3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
    </tr>
	  
	  <tr>
	  
	    <td><?php    echo $e?></td>
	 
     <td><?php   echo $e1?></td>
      <td><?php echo $e2?></td>

     <td><?php  echo $e3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
    </tr>
	  
	  
	  <tr>
	      <td><?php    echo $f?></td>
	 
     <td><?php   echo $f1 ?></td>
      <td><?php echo $f2 ?>></td>

     <td><?php  echo $f3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
    
	  </tr>
	  <tr>
	  
	      <td><?php    echo $h?></td>
	 
     <td><?php   echo $h1?></td>
      <td><?php echo $h2?></td>

     <td><?php  echo $h3 ?></td>
     <td><?php      echo $row['buyername'] ?></td>
   
    </tr>
	  
	   <?php endwhile; ?>
  </table>
 
 
	  
	  
  
  <body>
  </html>