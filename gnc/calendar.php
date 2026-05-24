<!DOCTYPE html>
<html>
<head>
  <title>Calendar</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-[#0f172a] text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-6">

  <!-- TOP CONTROLS -->
  <div class="flex justify-between items-center">

    <!-- LEFT -->
    <div class="flex items-center gap-2">
      <span class="bg-gray-700 px-4 py-1 rounded-full text-xs font-bold">
        APRIL 2026
      </span>
      <span class="bg-gray-600 px-3 py-1 rounded-full text-xs">
        TODAY
      </span>
    </div>

    <!-- RIGHT -->
    <button class="bg-green-600 px-4 py-1 rounded-full text-xs font-bold">
      EVENT
    </button>

  </div>

  <!-- CALENDAR BOX -->
  <div class="bg-white text-gray-800 p-6 rounded-2xl shadow-xl">

    <!-- DAYS HEADER -->
    <div class="grid grid-cols-7 text-center text-xs font-bold text-gray-500 mb-2">
      <div>SUNDAY</div>
      <div>MONDAY</div>
      <div>TUESDAY</div>
      <div>WEDNESDAY</div>
      <div>THURSDAY</div>
      <div>FRIDAY</div>
      <div>SATURDAY</div>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-7 border border-gray-300">

      <!-- ROW 1 -->
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>

      <!-- ROW 2 -->
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>

      <!-- ROW 3 -->
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>

      <!-- ROW 4 -->
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>

      <!-- ROW 5 -->
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>
      <div class="h-20 border"></div>

    </div>

  </div>

</main>

</div>
</body>
</html>