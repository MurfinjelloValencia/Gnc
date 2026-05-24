<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="w-56 bg-white text-gray-700 min-h-screen border-r flex flex-col">

  <!-- TOP PART -->
  <div class="flex items-center justify-between px-4 py-3 border-b">
    <span class="text-lg cursor-pointer hover:text-green-700 transition">☰</span>
    <span class="text-base cursor-pointer hover:text-green-700 transition"><img src="bell.png" class="w-5 h-5"></span>
  </div>

  <!-- NAV -->
  <nav class="p-3 space-y-2 flex-1">

    <!-- DASHBOARD -->
    <a href="dashboard.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'dashboard.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile6.png" class="w-5 h-5">
      DASHBOARD
    </a>

    <!-- ANNOUNCEMENT -->
    <a href="announcement.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'announcement.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile5.png" class="w-5 h-5">
      ANNOUNCEMENT
    </a>

    <!-- ASSIGNMENT -->
    <a href="assignment.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'assignment.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile4.png" class="w-5 h-5">
      ASSIGNMENT
    </a>

    <!-- MATERIALS -->
    <a href="materials.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'materials.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile3.png" class="w-5 h-5">
      MATERIALS
    </a>

    <!-- CALENDAR -->
    <a href="calendar.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'calendar.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile2.png" class="w-5 h-5">
      CALENDAR
    </a>

    <!-- PROFILE -->
    <a href="profile.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'profile.php'
      ? 'bg-green-700 text-white shadow'
      : 'hover:bg-gray-100' ?>">
      
      <img src="profile.png" class="w-5 h-5">
      PROFILE
    </a>

    <!-- ADMIN -->
    <a href="admin.php"
      class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs font-medium transition
      <?= $currentPage == 'admin.php'
      ? 'bg-red-600 text-white shadow'
      : 'text-red-600 hover:bg-red-50' ?>">
      
      <span class="text-sm">🛠️</span>
      ADMIN PANEL
    </a>

  </nav>

</aside>
