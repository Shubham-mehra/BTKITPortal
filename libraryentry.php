<?php 
include'configstudentdetail.php';
$studentName=$_POST['studentName'];
$rollNo=$_POST['rollNo'];
$fatherName=$_POST['fatherName'];
$motherName=$_POST['motherName'];
$studentBranch=$_POST['studentBranch'];
$studentSemester=$_POST['studentSemester'];
$studentYear=$_POST['studentYear'];
$studentGender=$_POST['studentGender'];
$studentDob=$_POST['studentDob'];
$studentEmail=$_POST['studentEmail'];
$studentContact=$_POST['studentContact'];
$postalAddress=$_POST['postalAddress'];
	$path="images/profilephotos/".$_FILES['profilePicture']['name'];
	move_uploaded_file($_FILES['profilePicture']['tmp_name'],$path);
		$query="INSERT INTO `studentdata` (`id`,`studentName`,`rollNo`,`fatherName`,`motherName`,`branch`,`semster`,`profilePicture`,`year`,`gender`,`dob`,`email`,`contact`,`postalAddress`) values('','$studentName','$rollNo','$fatherName','$motherName','$studentBranch','$studentSemester','$path','$studentYear','$studentGender','$studentDob','$studentEmail','$studentContact','$postalAddress')";
		mysqli_query($dbcon,$query);
	echo "<script>
	alert('Registred Sucessfully!!!!!!!!');
	window.location.href='library.php'</script>"


?>
