<?php
$conn=mysqli_connect("localhost","root","","article");

	if(!$conn)
	{
		echo "".mysqli_connect_error();
	}
	else
	{
		echo "";
	}
    echo "</br>";
$email=$_POST["email"];
$article=$_POST["article"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
	$qry="insert into articleinfo(email,first_name,last_name,article) values('".$email."','".$fname."','".$lname."','".$article."')";

	$res=mysqli_query($conn,$qry);
	if($res!="")
	{
		echo "";
	}
	else
	{
		echo "";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sustainable - Preserving The Pristine</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet" />
    <link href="css/article.css" rel="stylesheet" />
</head>
<body>
<section class="america-section bg-light" id="america">
<center><i class="fa-solid fa-thumbs-up fa-6x"></i>
           <p class="text-black mt-4">Thanks, <?php echo $fname ?>! We'll Get Back To You...</p>
           <a class="nav-link" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
        </center>
        </section>
</body></html>