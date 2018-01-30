<<<<<<< HEAD
<?php
$host = null;
$socket = "/cloudsql/webautocomplete-182600:us-central1:giwac-sql-large"; /* Host name */
$user = "root"; /* User */
$password = "warfield"; /* Password */
$dbname = "giwacdb"; /* Database name */
//connect with the database
$db = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}else{
	//get search term
	$query = "SELECT name FROM products";
	$result = mysqli_query($db,$query);
	while ($row = mysqli_fetch_array($result)){
		$data[] = $row['name'];
	}
}
//return json data
echo json_encode($data);
=======
<?php
$host = null;
$socket = "/cloudsql/webautocomplete-182600:us-central1:giwac-sql-large"; /* Host name */
$user = "root"; /* User */
$password = "warfield"; /* Password */
$dbname = "giwacdb"; /* Database name */
//connect with the database
$db = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}else{
	//get search term
	$query = "SELECT name FROM products";
	$result = mysqli_query($db,$query);
	while ($row = mysqli_fetch_array($result)){
		$data[] = $row['name'];
	}
}
//return json data
echo json_encode($data);
>>>>>>> a54b2cbebad018cc7bb28adc98d949a8eee21e17
?>