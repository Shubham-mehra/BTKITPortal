<?php
$yname  = $_POST["yname"];
$email    = $_POST["email"];
$cname  = $_POST["cname"];
$num      = $_POST["num"];
$wname = $_POST["wname"];
$budg    = $_POST["budg"];
$cmnt     = $_POST["cmnt"];

$con = mysqli_connect("localhost","root","","seo");
$query = "insert into gio(name, email, company, phone_number, website, budget, comments) values ('$yname', '$email', '$cname', $num, '$wname', '$budg', '$cmnt')";

mysqli_query($con, $query); 

if(mysqli_affected_rows($con)>0)
{
		echo "<script>alert('Submitted Successfully');
		window.location.href = 'index.php';									
		</script>";
}	

else
{
	echo "<script>alert('Not Submitted!');
	window.location.href = 'index.php';
	</script>";
}
