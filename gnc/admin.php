<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex bg-[#0f172a] text-white">

<?php include 'sidebar.php'; ?>

<div class="flex-1 flex flex-col">

<?php include 'header.php'; ?>

<main class="p-6 space-y-8">

  <!-- TITLE -->
  <h1 class="text-xl font-bold text-red-500 tracking-wide">
    ADMIN PANEL
  </h1>

  <!-- ✅ ANNOUNCEMENT FORM -->
  <div class="bg-[#1b1e29] p-6 rounded-2xl shadow-lg border border-gray-800 space-y-4">

    <h2 class="text-sm text-gray-300 uppercase tracking-wider">
      Post Announcement
    </h2>

    <form method="POST" class="space-y-4">

      <input type="text" name="title" placeholder="Announcement Title"
        class="w-full bg-[#0f172a] border border-gray-700 px-4 py-2 rounded-lg text-sm 
               focus:outline-none focus:ring-2 focus:ring-green-600" required>

      <textarea name="content" placeholder="Write your announcement..."
        class="w-full bg-[#0f172a] border border-gray-700 px-4 py-2 rounded-lg text-sm 
               focus:outline-none focus:ring-2 focus:ring-green-600" rows="4" required></textarea>

      <button name="postAnnouncement"
        class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg text-sm font-medium transition">
        Post Announcement
      </button>

    </form>

  </div>

  <!-- ✅ ASSIGNMENT FORM -->
  <div class="bg-[#1b1e29] p-6 rounded-2xl shadow-lg border border-gray-800 space-y-4">

    <h2 class="text-sm text-gray-300 uppercase tracking-wider">
      Add Assignment
    </h2>

    <form method="POST" class="space-y-4">

      <input type="text" name="asg_title" placeholder="Assignment Title"
        class="w-full bg-[#0f172a] border border-gray-700 px-4 py-2 rounded-lg text-sm 
               focus:outline-none focus:ring-2 focus:ring-blue-500" required>

      <input type="text" name="subject" placeholder="Subject"
        class="w-full bg-[#0f172a] border border-gray-700 px-4 py-2 rounded-lg text-sm 
               focus:outline-none focus:ring-2 focus:ring-blue-500" required>

      <input type="date" name="due_date"
        class="w-full bg-[#0f172a] border border-gray-700 px-4 py-2 rounded-lg text-sm 
               focus:outline-none focus:ring-2 focus:ring-blue-500" required>

      <button name="postAssignment"
        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-medium transition">
        Add Assignment
      </button>

    </form>

  </div>

</main>

</div>

</body>
</html>

<?php
// ✅ INSERT ANNOUNCEMENT
if (isset($_POST['postAnnouncement'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];

  $conn->query("INSERT INTO announcements (title, content)
                VALUES ('$title', '$content')");
}

// ✅ INSERT ASSIGNMENT
if (isset($_POST['postAssignment'])) {
  $title = $_POST['asg_title'];
  $subject = $_POST['subject'];
  $due = $_POST['due_date'];

  $conn->query("INSERT INTO assignments (title, subject, due_date)
                VALUES ('$title', '$subject', '$due')");
}
?>
