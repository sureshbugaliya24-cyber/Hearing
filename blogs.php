<?php 
$page_title = "Our Blog | Insights & Expertise on Hearing Health";
$meta_description = "Explore the latest in hearing health, expert advice from our audiologists, and innovative solutions.";

include 'includes/header.php'; 
?>

<section class="py-20 md:py-28 bg-[#00a8d6] text-center text-white relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="inline-block px-4 py-1 bg-white text-[#00a8d6] text-[12px] font-bold rounded-md mb-4 uppercase tracking-wider">
            Our Blog
        </div>
        <h1 class="text-4xl md:text-5xl font-[900] mb-6 tracking-tight">Insights & Expertise</h1>
        <p class="text-lg opacity-90 max-w-2xl mx-auto font-medium">
            Explore the latest in hearing health, expert advice from our audiologists, and innovative solutions for better living.
        </p>
    </div>
</section>

<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
<?php
        // Fetch posts from database
        include 'includes/db_connect.php';
        $result = $conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 6");
        $has_posts = false;

        if ($result && $result->num_rows > 0) {
            $has_posts = true;
            echo '<div id="blog-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">';
            while($post = $result->fetch_assoc()) {
                $imageUrl = !empty($post['image_url']) ? htmlspecialchars($post['image_url']) : 'https://via.placeholder.com/600x400';
                $title = htmlspecialchars($post['title']);
                $excerpt = htmlspecialchars(substr($post['excerpt'], 0, 120)) . '...';
                $id = $post['id'];
                
                echo <<<HTML
                <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-lg transition-all duration-300">
                    <div class="h-56 overflow-hidden">
                        <img src="{$imageUrl}" alt="{$title}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-[18px] font-bold text-[#121926] mb-3 leading-snug">
                            {$title}
                        </h3>
                        <div class="text-gray-500 text-sm mb-6 flex-grow">
                            {$excerpt}
                        </div>
                        <a href="blog-single.php?id={$id}" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-[#008db3] transition mt-auto">
                            Read More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
HTML;
            }
            echo '</div>';
        } else {
            echo '<div class="text-center py-10"><p class="text-gray-500 text-lg">No blog posts found.</p></div>';
        }
        ?>

        <?php if($has_posts): ?>
        <div class="text-center mt-16">
            <button id="load-more" class="inline-block px-8 py-3 bg-[#00a8d6] text-white font-bold rounded-lg hover:bg-[#008db3] transition shadow-md">
                Load More
            </button>
        </div>
        <?php endif; ?>

<?php include 'includes/footer.php'; ?>