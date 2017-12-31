<?php
  include "conn.php";

// new data

$user = $_POST['uname'];
$password = $_POST['pword'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM users WHERE username= :hjhjhjh AND password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
	?>
        <script>
          window.location = "./cari.php";
        </script>
  <?php
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
// 	session_write_close();
?>
        <script>
          window.location = "./index.php";
        </script>
<?php
	exit();
}

?>
