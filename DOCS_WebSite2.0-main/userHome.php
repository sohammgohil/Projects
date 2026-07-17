<?php
    include 'dbInfo.php';

    $selectQuery = "SELECT fname,lname FROM register";
    $result = mysqli_query($conn, $selectQuery);

    while ($row = mysqli_fetch_assoc($result)) {
                        $msg = "Welcome " . $row['fname'] . " " . $row['lname'];
                        
                    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
 </head>
 <body>
    <table>
        <tr>
            <div>
                <?php echo $msg;?>
            </div>
        </tr>
    </table>
 </body>
 </html>
