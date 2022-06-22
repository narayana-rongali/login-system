<?php
    echo "Welcome to stages where we are ready to connect to database.";
    // 1. MYSQLi extension ---> can be done using procedural and OOP
    // 2. PDO(Php Data Objects) 

    // connecting to the database 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "narayana";
    // Create a connection to the database
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    
    
    //Die if connection is not successful

    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    echo "<br> Successfully connected to Database";


    // CREATE database 
    // $sql = "CREATE DATABASE Narayana2";
    // $result = mysqli_query($conn, $sql);

    // if($result){
    //     echo "DB was created successfully.";
    // }
    // else{
    //     echo "the DB was not created sucessfully because of ---->" . mysqli_error();
    

    // Create a table in the DB table
    // $sql = "CREATE TABLE `Trip` (`S.no` INT(6) NOT NULL AUTO_INCREMENT, `Name` VARCHAR(20) NOT NULL, 
    // `Destination` VARCHAR(15) NOT NULL, PRIMARY KEY (`S.no`))";
    // mysqli_query($conn, $sql);
    
    $insertdata = "INSERT INTO `Trip` (`Name`, `Destination`) 
    VALUES ('Narayana','Visakhapatnam'),('Swaroop','Srikakulam'),
    ('Girish','Visakapatnam')";
    mysqli_query($conn, $insertdata);

    
    
    
    

?>