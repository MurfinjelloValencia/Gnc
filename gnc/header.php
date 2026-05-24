<?php
// ✅ DO NOT START SESSION HERE
$user = $_SESSION['user'] ?? null;
?>


<header class="bg-green-800 h-14 flex items-center justify-between px-6 text-white shadow-md">

  <!-- SEARCH -->
  <input type="text" placeholder="Search..."
    class="bg-white/10 px-3 py-1.5 rounded-md text-sm 
           focus:bg-white/20 transition-all duration-200">

  <!-- RIGHT -->
  <div class="flex gap-4 items-center">

    <!-- NOTIFICATION -->
    <div class="relative">
      <span class="text-lg"></span>
      
    </div>

    <!-- AVATAR -->
    <a href="profile.php">
  <img id="headerAvatar"
    src="https://api.dicebear.com/7.x/adventurer/svg?seed=User"
    class="w-8 h-8 rounded-full border-2 border-white/40 
           hover:scale-105 transition duration-200">
</a>


  </div>

</header>
