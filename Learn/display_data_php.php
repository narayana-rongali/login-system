<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "narayana";
      // Create a connection to the database
      $conn = mysqli_connect($servername, $username, $password, $database);
      //Die if connection is not successful
      if(!$conn){
          die("Sorry we failed to connect: " . mysqli_connect_error());
      }
      echo "<br> Successfully connected to Database";
      $sql_update = "UPDATE Trip SET Destination = 'Visakhapatnam' WHERE `S.no` = '2'";
      mysqli_query($conn,$sql_update);
      $sql_delete = "DELETE FROM `Trip` WHERE `S.no` ='2'";
      mysqli_query($conn,$sql_delete);
      $sql = "SELECT * FROM Trip WHERE Destination = 'Visakhapatnam'";
      $result = mysqli_query($conn, $sql);
      echo "<br>" . mysqli_num_rows($result);
      if(!$result){
        die("Sorry we failed to make changes: " . mysqli_connect_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>" . $row['S.no'].". Hello ". $row['Name']." your destination is  ".$row['Destination'];
    }


?>