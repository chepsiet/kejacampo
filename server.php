<?php

	$db = mysqli_connect('localhost', 'root', '', 'user-accounts');
$sql = "SELECT * FROM proposol";

$result = mysqli_query($db, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// initialize variables
	// $project_title = "";
	// $user_id="";
	// $description = "";
	// $project="";
	// $id = 0;

	$update = false;
if (isset($_POST['submit'])) {
// Uploads files


$project_title = $_POST['project_title'];
		$user_id = $_POST['user_id'];
			$uid = $_POST['uid'];
		$description = $_POST['description'];
		$project=$_POST['project'];
		$filename = $_FILES['myfile']['name'];
    // destination of the file on the server
    $destination = 'proposol' . $filename;
		$year = $_POST['year'];

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','doc']))
		{
        echo "You file extension must be .zip, .pdf or .docx";
    }
		elseif ($_FILES['myfile']['size'] > 1000000)
		 { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    }
		 else
		{
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination))
			{
				$sql = "INSERT INTO proposol (project_title,user_id,description,project,name, size, downloads, uid, status,year,comments) VALUES ('$project_title','$user_id', '$description','$project','$filename', '$size',0,'$uid','pending','$year','comment')";
					}
            if (mysqli_query($db, $sql))
						{
              	$_SESSION['message'] = "File uploaded successfully";
							  header('locatio: proposal.php');
								echo"script type='text/javascript'>alert('file uploaded successfully')</script>";

			       }

				else
				{
            	$_SESSION['error_msg']  ="Failed to upload file.";
						header('locatio:proposal.php');
							echo"script type='text/javascript'>alert('Failed to upload file')</script>";
        }
    }
}




if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$project_title = $_POST['project_title'];
	$user_id=$user_id;
	$description = $_POST['description'];
	$project = $_POST['project'];
	mysqli_query($db, "UPDATE proposol SET project_title='$project_title',user_id=$user_id ,description='$description', project='$project' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM proposol WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: index.php');
}
// if (isset($_POST['approved'])) {
//  $approved = $_POST['approved'];
// 	mysqli_query($db, "UPDATE proposol SET status='approved' WH);
// 	}


if (isset($_POST['approved'])) {
    $id=$_POST['id'];

  mysqli_query($db, "UPDATE proposol SET status='approved' WHERE id=$id ");
	$_SESSION['message'] = 'Proposal Approved!';
	header('location: dashboard.php');
	echo"script type='text/javascript'>alert('Appoved')</script>";
}
if (isset($_POST['disapproved'])) {

  $id=$_POST['id'];
mysqli_query($db, "UPDATE proposol SET status='disapproved' WHERE id=$id ");
$_SESSION['message'] = "Proposal Rejected!";
header('location: dashboard.php');
	echo"script type='text/javascript'>alert('Rejected')</script>";

}
if(isset($_POST['comments'])){
	  $id=$_POST['id'];
  $comments = $_POST['comments'];
  mysqli_query($db, "UPDATE proposol SET comments='$comments' WHERE id=$id ");
	$_SESSION['message'] = "Proposal";
	header('location: dashboard.php');
		echo"script type='text/javascript'>alert('Proposol commented')</script>";
}

// if (isset($_POST['file_id'])) {
// 		$id = $_POST['file_id'];
//
// 		// fetch file to download from database
// 		$sql = "SELECT * FROM proposol WHERE id=$id";
// 		$result = mysqli_query($conn, $sql);
//
// 		$file = mysqli_fetch_assoc($result);
// 		$filepath = 'uploads' . $file['name'];
//
// 		if (file_exists($filepath)) {
// 				header('Content-Description: File Transfer');
// 				header('Content-Type: application/octet-stream');
// 				header('Content-Disposition: attachment; filename=' . basename($filepath));
// 				header('Expires: 0');
// 				header('Cache-Control: must-revalidate');
// 				header('Pragma: public');
// 				header('Content-Length: ' . filesize('uploads/' . $file['name']));
// 				readfile('uploads'. $file['name']);
//
// 				// Now update downloads count
// 				$newCount = $file['downloads'] + 1;
// 				$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
// 				mysqli_query($conn, $updateQuery);
// 				exit;
// 		}
//
// }
