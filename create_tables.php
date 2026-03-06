<?php
include 'includes/db_connect.php';

// SQL to create admin_users table
$sql_admin = "CREATE TABLE IF NOT EXISTS admin_users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_admin) === TRUE) {
    echo "Table admin_users created successfully\n";
} else {
    echo "Error creating admin table: " . $conn->error . "\n";
}

// SQL to create blog_posts table
$sql_blog = "CREATE TABLE IF NOT EXISTS blog_posts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    excerpt TEXT NOT NULL,
    content LONGTEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql_blog) === TRUE) {
    echo "Table blog_posts created successfully\n";
} else {
    echo "Error creating blog_posts table: " . $conn->error . "\n";
}

// Insert default admin
$password = password_hash('password123', PASSWORD_DEFAULT);
$sql_insert = "INSERT IGNORE INTO admin_users (username, password) VALUES ('admin', '$password')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Default admin user inserted successfully\n";
} else {
    echo "Error inserting admin: " . $conn->error . "\n";
}

$conn->close();
?>
