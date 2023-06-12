<?php
    include_once 'db.php';
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Помилка підключення : " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM reviews";
    
    if ($conn->query($sql) === TRUE) {
        echo @include("index.php");
    } else {
        echo "Помилка: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>