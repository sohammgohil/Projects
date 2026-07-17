<?php
    // Database connection info
    $host="127.0.0.1";
    $user="root";
    $password="";
    $db="docs";

    //connect to db 
    $conn = mysqli_connect($host, $user, $password, $db);

    
    // table name register
    //columns: fname, lname, uname, email,uimg,pass, cpass
    $table = "create table if not exists register (
        fname varchar(50) not null,
        lname varchar(50) not null,
        uname varchar(50) primary key,
        email varchar(20) not null,
        uimg varchar(255),
        pass varchar(255) not null,
        cpass varchar(255) not null
    )";

    mysqli_query($conn, $table);

?>