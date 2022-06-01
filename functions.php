<?php
$conn = mysqli_connect("localhost","root","","obatin_database");

function register($data){
	global $conn;
	
    $first_name = $data["first_name"];
    $last_name = $data["last_name"];
    $phone_number = $data["phone_number"];
	$username = strtolower(stripslashes($data["username"]));
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]); 	
	$cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

	if (mysqli_num_rows($cek) > 0){
		echo "<script>alert('Username sudah ada !');</script>";
		return false;
	}


	if ($password !== $password2) {
		echo "<script>alert('Konfirmasi Password tidak sama !');</script>";
		return false;
	} 
	
	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($conn, "INSERT INTO users (first_name, last_name, phone_number, username, email, password) VALUES (
        '$first_name',
        '$last_name',
        '$phone_number',
        '$username',
        '$email',
        '$password'
        )
        ");

	return mysqli_affected_rows($conn);
	
}

?>