<?php
    include 'dbInfo.php';
    
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $newPassword = $_POST['password'];
        $confirmPassword = $_POST['cpassword'];

        if ($newPassword !== $confirmPassword) {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
        } else {
            $updateQuery = "UPDATE register SET pass='$newPassword', cpass='$confirmPassword' WHERE uname='$username'";
            if (mysqli_query($conn, $updateQuery)) {
                echo "<script>alert('Password updated successfully! You can now log in.');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            } else {
                echo "<script>alert('Error updating password. Please try again.');</script>";
            }
        }

        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-400 min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white rounded-2xl p-8 w-full max-w-sm">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Please Enter registed username</h2>
            <form method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
               
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mt-6">Password:</label>
                    <input type="password" id="password" name="password" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mt-6">Conform Password:</label>
                    <input type="password" id="password" name="cpassword" required class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <input type="submit" value="Submit" name="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition mt-5">
                
            </form>
        </div>
    </main>
    
</body>
</html>