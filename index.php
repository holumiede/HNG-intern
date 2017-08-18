<?php 
 //connection
$connection = mysqli_connect('localhost', 'root', '', 'hngintern');
if(!$connection){
    
    die("Database connection error") . mysqli_error($connection);
}

//query to select from database
$query= "SELECT * FROM users";

$result = mysqli_query($connection,$query);

if(!$result){
    
    die("QUERY FAILED");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
<?php 
    //print
    while($record = mysqli_fetch_assoc($result)){
        
//        print_r($record);
        echo $record ['months'];
    }
    
?>


</body>

</html>
