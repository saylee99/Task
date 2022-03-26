<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        </style>
</head>
<body>
    <?php
   $servername= "localhost";
   $username= "root";
   $password= "";
   $database="store";

   $conn=mysqli_connect($servername, $username, $password, $database);

   $dbc =mysqli_connect('localhost','root','','store');
   $sql_table1 ="CREATE TABLE brand( ID int,
   Name varchar(30),
   Logo varchar(30),
   Description varchar(30)
   )";
   
   $sql_table1="INSERT INTO `brand`(`ID`, `Name`, `Logo`, `Description`) VALUES(1,'Nike','Circle','Best product')";
   if(mysqli_query($conn,$sql_table1)){
    echo "New record";
}else{
    echo"error".mysqli_error($conn);
}

   $sql_table2 ="CREATE TABLE mystore( ID int,
   Name varchar(30),
   brand varchar(30),
   City varchar(30),
   Address varchar(30),
   Opentime int,
   Closetime int,
   foreign key (brand) references brand(Name)
   foreign key (city) refernces (Name)
   )";

 $sql_table2="INSERT INTO `mystore`(`ID`, `Name`, `brand`, `City`,'Address','Opentime','Closetime') VALUES('111','Nike's store','Nike','Mumbai','xyz street','11','9')";
 $sql_table2= "SELECT * FROM `mystore` WHERE Name='Nike' and City='Mumbai'";
if(mysqli_query($conn,$sql_table2)){
    echo "New record";
}else{
    echo"error".mysqli_error($conn);


  $sql_table3="CREATE TABLE City( ID int,
   Name varchar(30),
   code int
   )";

   $sql_table3="INSERT INTO `City`(`ID`, `Name`, `code`) VALUES(112,'Mumbai',111)";

   if(mysqli_query($conn,$sql_table3)){
    echo "New record";
}else{
    echo"error".mysqli_error($conn);
}
    mysqli_close($conn);
}
    ?>
    <h2>
        Store Name : <input type="sname">
        City : <input type="ncity">
        <button>Search </button>
        <button>Cancel</button>
</h2>
</body>
</html>
