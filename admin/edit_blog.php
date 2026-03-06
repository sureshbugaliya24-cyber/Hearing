<?php
require_once 'auth.php';
require_once '../includes/db_connect.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$id = $_GET['id'];
$error = '';

// Fetch existing post
$stmt = $conn->prepare("SELECT * FROM blog_posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    header("Location: dashboard.php?msg=Post not found");
    exit;
}
$post = $result->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $excerpt = $conn->real_escape_string($_POST['excerpt']);
    $content = $conn->real_escape_string($_POST['content']);
    $image_url = $conn->real_escape_string($_POST['image_url']);

    if(empty($title) || empty($content)) {
        $error = "Title and Content are required fields.";
    } else {
        $stmt = $conn->prepare("UPDATE blog_posts SET title=?, excerpt=?, content=?, image_url=? WHERE id=?");
        $stmt->bind_param("ssssi", $title, $excerpt, $content, $image_url, $id);
        
        if ($stmt->execute()) {
            header("Location: dashboard.php?msg=Post updated successfully");
            exit;
        } else {
            $error = "Error updating post: " . $conn->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body class="bg-gray-50 flex h-screen overflow-hidden">
    
    <!-- Sidebar -->
    <div class="w-64 bg-[#111827] text-white flex flex-col hidden md:flex">
        <div class="p-6 border-b border-gray-800">
            <h2 class="text-2xl font-bold text-[#00a8d6]">Admin Panel</h2>
        </div>
        <nav class="flex-grow p-4">
            <a href="dashboard.php" class="block py-3 px-4 rounded transition duration-200 text-gray-300 hover:bg-gray-800">
                <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow flex justify-between items-center p-4">
            <h2 class="text-xl font-bold text-gray-800">Edit Post #<?php echo $post['id']; ?></h2>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
            <?php if($error): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="bg-white rounded-lg shadow-md p-8">
                <form action="" method="POST">
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Title *</label>
                        <input type="text" name="title" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00a8d6]" value="<?php echo htmlspecialchars($post['title']); ?>">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Image URL (Featured Media)</label>
                        <input type="url" name="image_url" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00a8d6]" value="<?php echo htmlspecialchars($post['image_url']); ?>">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Excerpt (Short Description)</label>
                        <textarea name="excerpt" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00a8d6]"><?php echo htmlspecialchars($post['excerpt']); ?></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Content *</label>
                        
                        <!-- Custom Editor Toolbar -->
                        <div class="border border-gray-300 rounded-t-lg bg-gray-100 p-2 flex gap-2 flex-wrap border-b-0">
                            <button type="button" onclick="formatDoc('bold')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-bold"></i></button>
                            <button type="button" onclick="formatDoc('italic')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-italic"></i></button>
                            <button type="button" onclick="formatDoc('underline')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-underline"></i></button>
                            <div class="w-px bg-gray-300 mx-1"></div>
                            <button type="button" onclick="formatDoc('justifyLeft')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-align-left"></i></button>
                            <button type="button" onclick="formatDoc('justifyCenter')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-align-center"></i></button>
                            <button type="button" onclick="formatDoc('justifyRight')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-align-right"></i></button>
                            <div class="w-px bg-gray-300 mx-1"></div>
                            <button type="button" onclick="formatDoc('insertOrderedList')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-list-ol"></i></button>
                            <button type="button" onclick="formatDoc('insertUnorderedList')" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-list-ul"></i></button>
                            <div class="w-px bg-gray-300 mx-1"></div>
                            <button type="button" onclick="addLink()" class="p-2 hover:bg-gray-200 rounded text-gray-700"><i class="fas fa-link"></i></button>
                            <button type="button" onclick="formatDoc('formatBlock', 'H3')" class="p-2 hover:bg-gray-200 rounded font-bold text-gray-700 text-sm">H3</button>
                            <button type="button" onclick="formatDoc('formatBlock', 'P')" class="p-2 hover:bg-gray-200 rounded font-bold text-gray-700 text-sm">P</button>
                        </div>
                        
                        <!-- The Editable Div -->
                        <div id="editor" contenteditable="true" class="w-full px-4 py-3 border border-gray-300 rounded-b-lg focus:outline-none focus:ring-2 focus:ring-[#00a8d6] min-h-[300px] bg-white overflow-y-auto prose"></div>
                        
                        <!-- Hidden Textarea that actually submits -->
                        <textarea id="hidden-content" name="content" class="hidden"><?php echo htmlspecialchars($post['content']); ?></textarea>
                    </div>

                    <script>
                        function formatDoc(cmd, value=null) {
                            if (value) {
                                document.execCommand(cmd, false, value);
                            } else {
                                document.execCommand(cmd);
                            }
                            document.getElementById('editor').focus();
                        }

                        function addLink() {
                            const url = prompt('Insert link URL:');
                            if (url) {
                                formatDoc('createLink', url);
                            }
                        }

                        document.addEventListener("DOMContentLoaded", function() {
                            const hiddenContent = document.getElementById('hidden-content');
                            const editor = document.getElementById('editor');
                            if (hiddenContent.value) {
                                editor.innerHTML = hiddenContent.value;
                            }
                        });

                        document.querySelector('form').addEventListener('submit', function() {
                            document.getElementById('hidden-content').value = document.getElementById('editor').innerHTML;
                        });
                    </script>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-[#00a8d6] hover:bg-[#008db3] text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
