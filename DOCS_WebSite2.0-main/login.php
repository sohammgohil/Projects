<?php
    include 'dbInfo.php';
    if (isset($_POST['sumit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM register WHERE uname='$username' AND pass='$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Login successful!');</script>";
            
        } else {
            echo "<script>alert('Invalid username or password. Please try again.');</script>";
        }

        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-400 min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white rounded-2xl p-8 w-full max-w-sm">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Please Log In here</h2>
            <form method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
               
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mt-6">Password:</label>
                    <input type="password" id="password" name="password" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"> 
                    <input type="checkbox" onclick="showPass()" class="mt-2"> Show Password
                </div>

                <input type="submit" value="Log In" name="sumit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition mt-5">
                <div class="flex justify-center space-x-4 p-2 mt-2">
                    <input type="button" value="New User" onclick="window.location.href='register.php'" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition">

                    <input type="button" value="Forgot Password" onclick="window.location.href='forgotPass.php'" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                </div>
            </form>
        </div>
    </main>
    <script src="js/showPass.js"></script>
</body>
</html>