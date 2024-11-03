

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-image: url('/img/green.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">

<div class="container" style="width: 25%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center;">User Registration</h2>
    <form id="registrationForm" action="/UserReg" method="POST"> 
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="fullName" style="display: block; font-weight: bold;">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="department" style="display: block; font-weight: bold;">Department:</label>
            <select id="department" name="department" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
                <option value="Department of Agriculture" selected>Department of Agriculture</option>
            </select>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold;">Email:</label>
            <input type="email" id="email" name="email" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="password" style="display: block; font-weight: bold;">Password:</label>
            <input type="password" id="password" name="password" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
        </div>
        <button type="submit" id="registerButton" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; display: block; margin: 20px auto 0;">Register</button>
        <div class="col-12">
            <p class="small mb-0" style="text-align: center;">Already have an account? <a href="UserLogin">Login</a></p>
        </div>
    </form>
</div>

</body>
</html>
