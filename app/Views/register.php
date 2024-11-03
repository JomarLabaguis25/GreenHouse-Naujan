<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
</head>
<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('/img/green.jpg'); /* Replace 'background-image.jpg' with your image file */
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.container {
  width: 25%;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
  text-align: center;
}
.form-group {
  margin-bottom: 15px;
}
label {
  display: block;
  font-weight: bold;
}
input[type="text"],
input[type="email"],
input[type="password"] {
  width: calc(100% - 16px);
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-top: 6px;
}
button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: block;
  margin: 20px auto 0;
}
button:hover {
  background-color: #0056b3;
}
</style>
<body>
  <div class="container">
    <h2>User Registration</h2>
    <form  method="post" id="registerForm" action="<?= site_url('register'); ?>">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      <button type="submit">Register</button>
      </form>
      <div class="col-12">
        <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
      </div>
  </div>
</body>
 <script>
  document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    // Fetch form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;
    // Check if passwords match
    if (password !== confirm_password) {
      alert('Passwords do not match');
      return;
    }
    // Simulating a successful registration (Replace this with your actual registration process)
    // For this example, we'll consider registration successful if all fields are filled
    if (name && email && password && confirm_password) {
      alert('Registration Successful!');
      console.log('Name:', name);
      console.log('Email:', email);
      console.log('Password:', password);
      // Here you can add code to send data to a server or perform further actions
    } else {
      alert('Please fill in all fields');
    }
  });
</script>
</html>
