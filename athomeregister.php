<?php
    $con = mysqli_connect("localhost", "u971089175_form", "detrick", "u971089175_reg")
        or die("Failed to connect to the mysql server" .mysqli_connect_server());
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$experience = mysqli_real_escape_string($con, $_POST['experience']);
$beento = mysqli_real_escape_string($con, $_POST['beento']);


$query = "INSERT INTO RegistrationForm(FirstName, LastName, Email, Experience, Beento) 
				VALUES('$firstname', '$lastname', '$email', '$experience', '$beento')";

		

if(!mysqli_query($con, $query))
{
    echo "Error ".mysqli_error($con);
}
else
{
    header("Location: athomeform.html?msg=1");
}
?>