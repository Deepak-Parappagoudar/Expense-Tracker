<?php



	 $servername = "localhost";
	 $username = "root";
	 $password = ""; # enter password of your database
	 $dbname = "exp_ak";     # import `exp_ak.sql` db and enter its name h

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

@@session_start();

function isloggedin()
{
	
if(@@$_SESSION['logged_in']!=TRUE)
{
 return FALSE;
}	
else
{
return TRUE;
}
}



?>