<!DOCTYPE html>
<html>
<head>
  <title>Materials</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-[#0f172a] text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-6">

  <!-- TITLE -->
  <h1 class="text-sm text-gray-400 tracking-wider">MATERIALS</h1>

  <!-- GRID -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl">

    <!-- WORD -->
    <a href="https://www.microsoft.com/en/microsoft-365/word" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition cursor-pointer">
      <img src="https://img.icons8.com/color/96/microsoft-word-2019.png" class="w-16">
    </a>

    <!-- ONEDRIVE -->
    <a href="https://onedrive.live.com/" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/microsoft-onedrive-2019.png" class="w-16">
    </a>

    <!-- POWERPOINT -->
    <a href="https://www.microsoft.com/en/microsoft-365/powerpoint" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/microsoft-powerpoint-2019.png" class="w-16">
    </a>

    <!-- CHATGPT -->
    <a href="https://chat.openai.com/" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png" class="w-16">
    </a>

    <!-- OUTLOOK -->
    <a href="https://outlook.live.com/" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/microsoft-outlook-2019.png" class="w-16">
    </a>

    <!-- ONENOTE -->
    <a href="https://www.onenote.com/" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/microsoft-onenote-2019.png" class="w-16">
    </a>

    <!-- OFFICE -->
    <a href="https://www.microsoft.com/en/microsoft-365" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/microsoft-office-2019.png" class="w-16">
    </a>

    <!-- COPILOT -->
    <a href="https://copilot.microsoft.com/" target="_blank"
       class="bg-white rounded-2xl p-4 flex items-center justify-center hover:scale-105 transition">
      <img src="https://img.icons8.com/color/96/artificial-intelligence.png" class="w-16">
    </a>

  </div>

</main>

</div>
</body>
</html>
