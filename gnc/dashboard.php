<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: loginpage.php");
  exit();
}

// ✅ COUNTS
$totalAssignments = $conn->query("SELECT COUNT(*) as t FROM assignments")
                        ->fetch_assoc()['t'];

$totalAnnouncements = $conn->query("SELECT COUNT(*) as t FROM announcements")
                          ->fetch_assoc()['t'];

// ✅ LATEST ANNOUNCEMENT
$latest = $conn->query("SELECT * FROM announcements ORDER BY created_at DESC LIMIT 1");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-black text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-8">

  <!-- WELCOME -->
  <div>
    <h1 class="text-2xl font-bold">WELCOME BACK</h1>
    <p class="text-gray-400 text-sm">here’s what’s happening today</p>
  </div>

  <!-- CARDS -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- ASSIGNMENTS -->
    <a href="assignment.php" class="bg-[#1b1e29] p-5 rounded-xl flex justify-between items-center hover:bg-[#222635] transition">
      <div>
        <p class="text-3xl font-bold text-green-500"><?= $totalAssignments ?></p>
        <p class="text-xs text-gray-400 mt-1">ASSIGNMENTS</p>
      </div>
      <div class="flex items-center gap-3">
        <span>📄</span>
        <span>➔</span>
      </div>
    </a>

    <!-- DUE TODAY -->
    <a href="calendar.php" class="bg-[#1b1e29] p-5 rounded-xl flex justify-between items-center hover:bg-[#222635] transition">
      <div>
        <p class="text-3xl font-bold text-yellow-400">0</p>
        <p class="text-xs text-gray-400 mt-1">DUE TODAY</p>
      </div>
      <div class="flex items-center gap-3">
        <span>📅</span>
        <span>➔</span>
      </div>
    </a>

    <!-- ANNOUNCEMENTS -->
    <a href="announcement.php" class="bg-[#1b1e29] p-5 rounded-xl flex justify-between items-center hover:bg-[#222635] transition">
      <div>
        <p class="text-3xl font-bold text-purple-400"><?= $totalAnnouncements ?></p>
        <p class="text-xs text-gray-400 mt-1">ANNOUNCEMENTS</p>
      </div>
      <div class="flex items-center gap-3">
        <span>📢</span>
        <span>➔</span>
      </div>
    </a>

  </div>

  <!-- RECENT ANNOUNCEMENT -->
  <div class="space-y-4">
    <h3 class="text-sm text-gray-400">Recent Announcement</h3>

    <?php if ($latest->num_rows > 0): 
      $row = $latest->fetch_assoc(); ?>

    <div class="flex rounded-xl overflow-hidden bg-[#1b1e29] hover:bg-[#222635] transition">

      <div class="bg-green-700 flex items-center justify-center w-20 text-2xl">
        📢
      </div>

      <div class="flex-1 p-4 flex justify-between items-center">
        <span class="text-sm"><?= $row['title'] ?></span>
        <span class="text-xs text-gray-400">
          <?= date("M d, Y", strtotime($row['created_at'])) ?>
        </span>
      </div>

    </div>

    <?php else: ?>
      <p class="text-gray-500 text-sm">No announcements yet</p>
    <?php endif; ?>

  </div>

</main>

</div>
</body>
</html>
