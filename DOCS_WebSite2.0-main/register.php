<?php
    include 'dbInfo.php';
    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $uimg = $_POST['uimg'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if ($pass !== $cpass) {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
        } else {
            // Here you would typically add code to save the user details to a database
            echo "<script>alert('Registration successful! You can now log in.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }

        move_uploaded_file($_FILES['uimg']['tmp_name'], "profilPic/" . basename($_FILES['uimg']['name']));

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $insertQuery = "INSERT INTO register VALUES ('$fname', '$lname', '$uname', '$stuid', '$uimg', '$pass', '$cpass')";
        mysqli_query($conn, $insertQuery);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-400 min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white rounded-2xl p-8 w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Please Register here</h2>
            
            <form method="POST">
                <div class="flex justify-center space-x-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-600">First name:</label>
                        <input type="text" name="fname" placeholder="First name" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>    
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-600 ">Last name:</label> 
                        <input type="text" name="lname" placeholder="Last name" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>
                
                <div>
                    <lable class="block text-sm font-medium text-gray-600 mt-3">Username:</lable> 
                    <input type="text" name="uname" placeholder="user name" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                
                <div>
                    <lable class="block text-sm font-medium text-gray-600 mt-3">E-Mail:</lable> 
                    <input type="email" name="email" placeholder="E-mail" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                
                <div>
                    <lable class="block text-sm font-medium text-gray-600 mt-3">Profil img:</lable> 
                    <input type="file" name="uimg" accept="image/*" required class="mt-1 w-full file:rounded-lg file:border-0 file:px-4 file:py-2 file:w-full border rounded-lg shadow-sm focus:file:ring-2 focus:file:bg-gray-300">

                </div>
                
                <div class="flex justify-center space-x-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mt-3">Password:</label> 
                        <input type="password" name="pass" placeholder="pass"required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    
                    <div>
                        <lable class="block text-sm font-medium text-gray-600 mt-3">Confirm Password:</lable> 
                        <input type="password" name="cpass" placeholder="confirm pass"required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>
                
                <div>
                    <input type="submit" value="Register" name="register" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition mt-5">  
            </form>
        </div>
    </main>
</body>
</html>