<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: loginpage.php");
  exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-[#0f172a] text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6">

  <!-- PROFILE SECTION -->
  <div class="flex items-center gap-6">

    <!-- ✅ CLICKABLE AVATAR -->
    <div onclick="document.getElementById('fileInput').click()"
      class="w-40 h-40 rounded-full overflow-hidden shadow-lg border-4 border-gray-700 relative cursor-pointer">

      <img id="profileImage"
  src="https://api.dicebear.com/7.x/thumbs/svg?seed=<?= $user['name'] ?>"
  class="w-full h-full object-cover">

      <!-- HOVER OVERLAY -->
      <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 flex items-center justify-center text-sm">
        Edit
      </div>

    </div>

    <!-- USER INFO -->
    <div>
      <h1 class="text-2xl font-bold tracking-wide"><?= strtoupper($user['name']) ?></h1>
      <p class="text-blue-500 text-sm tracking-wider">STUDENT ACCOUNT</p>
    </div>

  </div>

  <!-- INFO -->
  <div class="mt-8 space-y-2 text-sm text-gray-400">
    <p><span class="text-gray-500">Email:</span> <?= $user['email'] ?></p>
    <p><span class="text-gray-500">Status:</span> Active</p>
  </div>

  <!-- LOGOUT -->
  <div class="mt-6">
    <a href="logout.php"
      class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-bold inline-block">
      SIGN OUT
    </a>
  </div>

</main>

</div>

<!-- ✅ HIDDEN FILE INPUT -->
<input type="file" id="fileInput" accept="image/*" class="hidden">

<script>
const fileInput = document.getElementById('fileInput');
const profileImage = document.getElementById('profileImage');
const headerAvatar = document.getElementById('headerAvatar');

// ✅ LOAD SAVED IMAGE
let saved = localStorage.getItem("profile_image");

if (saved) {
  if (profileImage) profileImage.src = saved;
  if (headerAvatar) headerAvatar.src = saved;
}

// ✅ CHANGE IMAGE
fileInput.addEventListener("change", function () {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function () {

      // update both images
      if (profileImage) profileImage.src = reader.result;
      if (headerAvatar) headerAvatar.src = reader.result;

      // save
      localStorage.setItem("profile_image", reader.result);
    };

    reader.readAsDataURL(file);
  }
});
</script>


</body>
</html>
