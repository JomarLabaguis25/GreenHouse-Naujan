<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form method="POST" action="/UserReg">
        @csrf <!-- CSRF protection -->
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullName"><br>
        
        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
