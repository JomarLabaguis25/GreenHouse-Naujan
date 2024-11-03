<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-image: url('/img/green.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">

<div class="container" style="width: 25%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center;">Login</h2>
    <form action="UserLogin" method="post" style="margin-top: 20px;">
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="email" style="display: block; font-weight: bold;">Email:</label>
            <input type="email" id="email" name="email" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="password" style="display: block; font-weight: bold;">Password:</label>
            <input type="password" id="password" name="password" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; display: block; margin: 20px auto 0;">Login</button>
    </form>
    <?php if (isset($error)) : ?>
        <p style="color: red; text-align: center;"><?php echo $error; ?></p>
    <?php endif; ?>
    <div class="col-12" style="text-align: center; margin-top: 20px;">
        <p class="small mb-0">Don't have an account? <a href="<?= base_url('UserReg') ?>">Create an account</a></p>
    </div>
    <div class="col-12" style="text-align: center;">
        <p class="small mb-0">Want to use the Department's account? <a href="<?= base_url('Login') ?>">Dept account</a></p>
    </div>
</div>


<?php


session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Increment login attempts counter in session
    $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;

    // Check if there are 3 consecutive failed login attempts within 30 seconds
    if ($_SESSION['login_attempts'] >= 3) {
        $last_attempt_time = $_SESSION['last_attempt_time'] ?? 0;
        if (time() - $last_attempt_time < 30) {
            // 30 seconds haven't passed since the last attempt, block login
            $error = "Too many consecutive failed login attempts. Please try again later.";
        } else {
            // Reset login attempts counter and last attempt time
            $_SESSION['login_attempts'] = 0;
            $_SESSION['last_attempt_time'] = 0;
        }
    }

    // Update last attempt time in session
    $_SESSION['last_attempt_time'] = time();
}
?>

</body>
</html>
