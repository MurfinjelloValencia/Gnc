<?php
include 'db.php';
session_start();

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $conn->query("SELECT * FROM users WHERE email='$email'");

  if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {

      $_SESSION['user'] = $user;

      header("Location: dashboard.php");
      exit();

    } else {
      echo "<script>alert('Wrong password')</script>";
    }

  } else {
    echo "<script>alert('Account not found')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="w-full max-w-sm text-center">

  <img src="gnc2.png" class="w-20 mx-auto mb-6">

  <form method="POST" class="space-y-4">

    <input name="email" type="text" placeholder="Email"
      class="w-full px-4 py-3 rounded-xl border bg-[#f4f1f1] text-sm" required>

    <input name="password" type="password" placeholder="Password"
      class="w-full px-4 py-3 rounded-xl border bg-[#f4f1f1] text-sm" required>

    <button name="login"
      class="w-full bg-black text-white py-3 rounded-xl text-sm shadow-md">
      Log in
    </button>

  </form>

  <div class="flex items-center justify-center gap-3 my-6 text-xs text-gray-400">
    <div class="h-[1px] bg-gray-300 w-16"></div>
    Or
    <div class="h-[1px] bg-gray-300 w-16"></div>
  </div>

  <a href="register.php"
    class="block w-full border border-gray-300 py-3 rounded-xl text-sm hover:bg-gray-50">
    Create Account
  </a>

</div>

</body>
</html>