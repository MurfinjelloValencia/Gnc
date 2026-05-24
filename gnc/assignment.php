<!DOCTYPE html>
<html>
<head>
  <title>Assignments</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-[#0f172a] text-white">

<?php include 'sidebar.php'; ?>
<?php include 'db.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-6">

  <!-- TITLE -->
  <h2 class="text-sm font-semibold tracking-wider text-gray-300 uppercase">
    Assignments
  </h2>

  <!-- ASSIGNMENT LIST -->
  <div class="space-y-4">

  <?php
  $asg = $conn->query("SELECT * FROM assignments ORDER BY due_date ASC");
  ?>

  <?php while($a = $asg->fetch_assoc()): ?>

    <!-- ITEM -->
    <div class="flex items-center justify-between bg-[#1b1e29] p-4 rounded-xl border border-gray-800 hover:bg-[#232736] transition">

      <div class="flex items-center gap-4">
        
        <!-- DOT -->
        <div class="w-2.5 h-2.5 bg-green-500 rounded-full"></div>

        <!-- TEXT -->
        <div>
          <h4 class="text-sm font-medium text-gray-200">
            <?= $a['title'] ?>
          </h4>
          <p class="text-xs text-gray-500 mt-1">
            <?= $a['subject'] ?> • Due: <?= $a['due_date'] ?>
          </p>
        </div>

      </div>

      <!-- BUTTON -->
      <button class="text-xs text-gray-300 border border-gray-600 px-4 py-1 rounded-lg hover:bg-gray-700 transition">
        Open
      </button>

    </div>

  <?php endwhile; ?>

  </div>

</main>

</div>
</body>
</html>
