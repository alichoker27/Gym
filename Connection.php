<?php  
$dbhost="localhost";
$dbName="gym";
$user="root";
$pass="";


//$conn=new mysqli("mysql:host=$dbhost;dbname=$dbName",$user,$pass);

// Create a mysqli object to connect to the database
$conn = mysqli_connect($dbhost, $user, $pass, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
echo "Successful connected with database"."<br>";
echo"<br>";
echo"The elements in the database are :"."<br>";

}

?>



