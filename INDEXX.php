<!DOCTYPE html>
<?php
include"Connection.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<body>
<?php
#page tene taba3 l index.php
$sql='SELECT * FROM client'; // Add a space after the * in SELECT



$retval = mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0){
    while($row=mysqli_fetch_assoc($retval)){
    echo"Client username:{$row['user']}<br>".
        "Client password:{$row['pass']}<br>";
        
}//end while
}
else{
    echo"0 result";
}
mysqli_close($conn);
?>
</body>
</html>