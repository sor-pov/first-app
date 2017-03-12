<?PHP
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = 'first_db';
$con = mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$con){
	die("Error connection");
}else{
	echo "Successfully";
}
echo "Hello world";
?>