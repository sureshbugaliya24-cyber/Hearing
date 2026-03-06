<?php
require_once 'auth.php';
require_once '../includes/db_connect.php';

// Fetch all posts
$posts = [];
$result = $conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Hearing Health</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">
    
    <!-- Sidebar / Navbar Setup -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-[#111827] text-white flex flex-col hidden md:flex">
            <div class="p-6 border-b border-gray-800">
                <h2 class="text-2xl font-bold text-[#00a8d6]">Admin Panel</h2>
            </div>
            <nav class="flex-grow p-4">
                <a href="dashboard.php" class="block py-3 px-4 rounded transition duration-200 bg-[#00a8d6] text-white font-semibold">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="../blogs.php" target="_blank" class="block py-3 px-4 mt-2 rounded transition duration-200 hover:bg-gray-800 text-gray-300">
                    <i class="fas fa-eye mr-2"></i> View Site
                </a>
            </nav>
            <div class="p-4 border-t border-gray-800">
                <a href="logout.php" class="block w-full text-center py-2 px-4 border border-red-500 text-red-500 rounded hover:bg-red-500 hover:text-white transition duration-200">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow flex justify-between items-center p-4">
                <div class="md:hidden">
                    <h2 class="text-xl font-bold text-[#00a8d6]">Admin Panel</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, <strong><?php echo htmlspecialchars($_SESSION['admin_username']); ?></strong></span>
                    <a href="logout.php" class="md:hidden text-red-500 hover:text-red-700"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800">Blog Posts</h1>
                    <a href="add_blog.php" class="bg-[#00a8d6] hover:bg-[#008db3] text-white font-bold py-2 px-4 rounded shadow-md transition duration-300">
                        <i class="fas fa-plus mr-2"></i> Add New Post
                    </a>
                </div>

                <?php if(isset($_GET['msg'])): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline"><?php echo htmlspecialchars($_GET['msg']); ?></span>
                    </div>
                <?php endif; ?>

                <!-- Table -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Title
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date Created
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($posts) > 0): ?>
                                <?php foreach($posts as $post): ?>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap"><?php echo $post['id']; ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap font-medium"><?php echo htmlspecialchars($post['title']); ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap"><?php echo date('M d, Y', strtotime($post['created_at'])); ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                            <a href="edit_blog.php?id=<?php echo $post['id']; ?>" class="text-blue-600 hover:text-blue-900 mx-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="delete_blog.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure you want to delete this post?');" class="text-red-600 hover:text-red-900 mx-2">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        No blog posts found.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
