<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Announcement</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-black text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-6">

  <!-- TITLE -->
  <h2 class="text-sm font-semibold text-gray-300 tracking-wider">
    ANNOUNCEMENT!!!
  </h2>

  <?php
  $ann = $conn->query("SELECT * FROM announcements ORDER BY created_at DESC");
  ?>

  <?php while($row = $ann->fetch_assoc()): ?>

  <!-- ANNOUNCEMENT CARD -->
  <div class="bg-[#1b1e29] rounded-2xl overflow-hidden shadow-lg border border-gray-800">

    <!-- IMAGE BANNER -->
    <div class="relative h-64">

      <img src="https://images.unsplash.com/photo-1588072432836-e10032774350"
           class="w-full h-full object-cover opacity-60">

      <div class="absolute inset-0 bg-black/60"></div>

      <!-- TITLE FROM SQL -->
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl font-black tracking-widest text-white text-center px-4">
          <?= strtoupper($row['title']) ?>
        </h1>
      </div>

    </div>

    <!-- CONTENT FROM SQL -->
    <div class="bg-white text-gray-800 p-6 text-sm leading-relaxed space-y-3 rounded-b-2xl">

      <p class="font-bold uppercase text-xs text-gray-600 tracking-wider">
        Advisory
      </p>

      <p>
        <?= nl2br($row['content']) ?>
      </p>

      <p class="pt-2 font-medium">
        Posted on: <?= date("F d, Y", strtotime($row['created_at'])) ?>
      </p>

    </div>

  </div>

  <?php endwhile; ?>

</main>

</div>
</body>
</html>