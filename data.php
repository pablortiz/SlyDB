<?
$C=$_REQUEST["C"];
$T=$_REQUEST["T"];
$N=isset($_REQUEST["N"]) ? $_REQUEST["N"]:1;
$con 	= mysqli_connect("localhost", "root", "", "3d");
$sql = "SELECT * FROM items LIMIT $C,$N"; 
$result = mysqli_query($con,$sql);
$c=0;
while($row = mysqli_fetch_array($result))
  {  	
		if ($c ) echo ";;;;";
		$C2=$C+$c;
		echo $_REQUEST["T"] ."_$C2;;;;";
		$c+=1;
		echo '<div style="min-heigth:100px" >'.$row["name"]."</div>";
	} // end while $row
?>