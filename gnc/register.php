<?php
include 'db.php';

if (isset($_POST['register'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = $conn->query("SELECT * FROM users WHERE email='$email'");

  if ($check->num_rows > 0) {
    echo "<script>alert('Email already exists');</script>";
  } else {
    $conn->query("INSERT INTO users (name, email, password)
                  VALUES ('$name', '$email', '$password')");

    echo "<script>alert('Account created!'); window.location='loginpage.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>

  <!-- ✅ FIXED: Tailwind -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="w-full max-w-sm text-center">

  <!-- ✅ FIXED IMAGE -->
  <img src="gnc2.png" class="w-20 mx-auto mb-6">

  <form method="POST" class="space-y-4">

    <input name="name" type="text" placeholder="Full Name"
      class="w-full px-4 py-3 rounded-xl border bg-[#f4f1f1] text-sm" required>

    <input name="email" type="text" placeholder="Email"
      class="w-full px-4 py-3 rounded-xl border bg-[#f4f1f1] text-sm" required>

    <input name="password" type="password" placeholder="Password"
      class="w-full px-4 py-3 rounded-xl border bg-[#f4f1f1] text-sm" required>

    <button name="register"
      class="w-full bg-green-700 text-white py-3 rounded-xl text-sm">
      Register
    </button>

  </form>

  <div class="mt-6 text-sm">
    Already have an account?
    <a href="loginpage.php" class="text-blue-500 hover:underline">Login</a>
  </div>

</div>

</body>
</html>
