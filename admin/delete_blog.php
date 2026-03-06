<?php
require_once 'auth.php';
require_once '../includes/db_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: dashboard.php?msg=Post deleted successfully");
    } else {
        header("Location: dashboard.php?msg=Error deleting post");
    }
    $stmt->close();
} else {
    header("Location: dashboard.php");
}
exit;
?>
