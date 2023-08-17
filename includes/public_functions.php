<?php
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}
?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ;?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>