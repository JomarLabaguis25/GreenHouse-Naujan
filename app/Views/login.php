<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('/img/green.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 400px;
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-top: 6px;
      box-sizing: border-box;
    }

    #loginButton {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block;
      margin: 20px auto 0;
    }

    #countdownMessage {
      display: none;
    }

    .col-12 {
      text-align: center;
    }

    .small {
      margin-bottom: 0;
    }

    a {
      display: block;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .container {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Login Department's Account</h2>
    <form id="loginForm" action="/auth/login" method="POST">
      <div class="form-group">
        <label for="Username">Username:</label>
        <input type="text" id="Username" name="Username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" id="loginButton">Login</button>
    </form>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get('alert') === 'login_required') {
        alert('Please log in first.');
      }
    });

    var attempts = 0; // Initialize the attempts counter
    var disabled = false; // Flag to track if the input is disabled

    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      if (disabled) {
        return; // Do nothing if input is disabled
      }

      var username = document.getElementById('Username').value; // Changed 'email' to 'Username'
      var password = document.getElementById('password').value;

      // Perform AJAX request to login
      fetch('/auth/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            Username: username,
            password: password
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            alert('Login successful!');
            window.location.href = '/dash'; // Redirect to dashboard upon successful login
          } else {
            attempts++; // Increment attempts counter
            if (attempts >= 3) {
              disabled = true; // Disable input after three failed attempts
              document.getElementById('Username').disabled = true;
              document.getElementById('password').disabled = true;
              document.getElementById('countdownMessage').style.display = 'block';
              var countdown = 30; // Countdown time in seconds
              var countdownInterval = setInterval(function() {
                document.getElementById('countdown').innerText = countdown;
                countdown--;
                if (countdown < 0) {
                  clearInterval(countdownInterval);
                  document.getElementById('Username').disabled = false;
                  document.getElementById('password').disabled = false;
                  document.getElementById('countdownMessage').style.display = 'none';
                  attempts = 0; // Reset attempts counter
                  document.getElementById('loginButton').disabled = false; // Enable login button
                }
              }, 1000); // Update every second
            } else {
              alert(data.message);
            }
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  </script>
</body>

</html>