<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $servername= "localhost";
   $username= "root";
   $password= "";
   $database="store";

   $conn=mysqli_connect($servername, $username, $password, $database);

   $dbc =mysqli_connect('localhost','root','','store');
   $sql ="CREATE TABLE brand( ID int,
   Name varchar(30),
   Logo varchar(30),
   Description varchar(30)
   )";

//  $result =mysqli_query($dbc,$sql) or die("wrong: $sql");
   $sql="INSERT INTO `brand`(`ID`, `Name`, `Logo`, `Description`) VALUES('1','Nike','Circle','Best product')";
   if(mysqli_query($conn,$sql)){
    echo "new record created";
}else{
    echo"error".mysqli_error($conn);
}
    mysqli_close($conn);

    ?>
    <h2>
        Brand Name: <input text="bname" >
        Store Name : <input type="sname">
        City : <input type="ncity">
        <button>Add </button>
        <button>Cancel</button>
</h2>
</body>
</html>