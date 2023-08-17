<?php


if (isset($_POST['save'])) {
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "KejaCampo";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_errno) {
echo "<p>MySQL error no {$conn->connect_errno} : {$conn->connect_error}</p>";
exit();
}

# prepare data for insertion

$item_name = $_POST['project_title'];
$cartegory_name = $_POST['user_id'];
$quantity = $_POST['description'];
$unit_price = $_POST['project'];

$filepath =$_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $filepath);
$sql = "INSERT  INTO `proposol` (`id`,`project_title`, `user_id`, 'description','project' )
VALUES (NULL, '{$item_name}', '{$cartegory_name}', '{$filepath}', '{$quantity}', '{$unit_price}'";
if ($conn->query($sql)) {
	header("location:admin-create-menu.php");
} else {
echo "<p>MySQL error no {$conn->errno} : {$conn->error}</p>";
exit();
}
}
?>
