<?


$con 	= mysqli_connect("localhost", "root", "", "3D"); // host / username / password / database 
//$mysqli = new mysqli("localhost", "root", "", "3D");
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$sql = "INSERT INTO items(NAME) VALUE ";
for($i=0;$i<10000;$i++){
	if ($i) $sql .= ',';
	$sql .= "('Item ".$i."')"; 
}
//echo $sql;
$result = mysqli_query($con,$sql);

?>