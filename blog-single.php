<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/db_connect.php';

$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (empty($post_id)) {
    header("Location: blogs.php");
    exit;
}

$post = null;
$stmt = $conn->prepare("SELECT * FROM blog_posts WHERE id = ?");
if ($stmt) {
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $post = $result->fetch_object();
    }
    $stmt->close();
}

$page_title = ($post && isset($post->title)) ? htmlspecialchars($post->title) : "Blog Post";
include 'includes/header.php'; 
?>

<style>
    .blog-content p { margin-bottom: 1.5rem; line-height: 1.8; color: #4a5568; font-size: 17px; }
    .blog-content h2 { font-size: 26px; font-weight: 800; color: #121926; margin: 2rem 0 1rem; }
    .blog-content img { border-radius: 20px; margin: 2rem 0; width: 100%; height: auto; }
    .blog-hero { background-color: #00a8d6; padding: 80px 0; text-align: center; color: white; }
</style>

<?php if ($post): ?>
    <section class="blog-hero">
        <div class="container mx-auto px-6">
            <div class="inline-block px-4 py-1 bg-white/20 backdrop-blur-sm text-white text-[12px] font-bold rounded-md mb-4 uppercase">
                Blog Post
            </div>
            <h1 class="text-3xl md:text-5xl font-[900] mb-6 max-w-4xl mx-auto leading-tight">
                <?php echo htmlspecialchars($post->title); ?>
            </h1>
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm opacity-90">
                <span><i class="far fa-user"></i> admin</span>
                <span><i class="far fa-calendar-alt"></i> <?php echo date('F d, Y', strtotime($post->created_at)); ?></span>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-32">
            <?php if (!empty($post->image_url)): ?>
                <div class="mb-12">
                    <img src="<?php echo htmlspecialchars($post->image_url); ?>" 
                         class="w-full h-auto rounded-[30px] shadow-lg" alt="<?php echo htmlspecialchars($post->title); ?>">
                </div>
            <?php endif; ?>

            <div class="blog-content">
                <?php echo $post->content; // Rich text from DB ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="py-20 text-center bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-red-500">Unable to load blog content</h2>
            <p class="text-gray-600 mt-2">Check internet or Post ID: <?php echo htmlspecialchars($post_id); ?></p>
            <a href="blogs.php" class="mt-6 inline-block text-[#00a8d6] font-bold">← Back to Blogs</a>
        </div>
    </section>
<?php endif; ?>

<section class="py-16 bg-gray-50 border-t border-gray-100">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <h2 class="text-3xl font-[900] text-[#121926] text-center mb-12">Related Blog Posts</h2>
        <div id="related-posts-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $related_result = $conn->query("SELECT * FROM blog_posts WHERE id != {$post_id} ORDER BY created_at DESC LIMIT 3");
        if ($related_result && $related_result->num_rows > 0) {
            while($rel_post = $related_result->fetch_assoc()) {
                $img = !empty($rel_post['image_url']) ? htmlspecialchars($rel_post['image_url']) : 'https://via.placeholder.com/600x400';
                $title = htmlspecialchars($rel_post['title']);
                $id = $rel_post['id'];
                
                echo <<<HTML
                <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-lg transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{$img}" alt="{$title}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-[18px] font-bold text-[#121926] mb-3 leading-snug">
                            {$title}
                        </h3>
                        <a href="blog-single.php?id={$id}" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-[#008db3] transition mt-auto">
                            Read More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
HTML;
            }
        }
        ?>
        </div>
    </div>
</section>





<section class="py-16 md:py-24" style="background-image: linear-gradient(180deg, #111827 0%, #0090C2 100%);">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-10">
            
            <div class="lg:w-1/2 w-full text-white">
                <h2 class="text-4xl md:text-4xl font-[700] mb-4 tracking-tight">Ready to Hear Better?</h2>
                <p class="text-lg md:text-xl opacity-90 mb-10 font-medium">
                    Book your free consultation today and take the first step towards better hearing
                </p>

                <form action="process-form.php" method="POST" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="text" name="first_name" placeholder="First Name" required 
                               class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none placeholder:text-gray-400">
                        
                        <input type="text" name="last_name" placeholder="Last Name" required 
                               class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none placeholder:text-gray-400">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="email" name="email" placeholder="Email" required 
                               class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none placeholder:text-gray-400">
                        
                        <input type="tel" name="phone" placeholder="Phone Number" required 
                               class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none placeholder:text-gray-400">
                    </div>

                    <textarea name="message" rows="3" placeholder="How can we help you?" 
                              class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none placeholder:text-gray-400 resize-none"></textarea>

                    <button type="submit" 
                            class="w-full py-4 bg-[#111827] text-white font-bold rounded-2xl text-lg hover:bg-black transition-all duration-300 shadow-2xl">
                        Book Free Consultation
                    </button>
                </form>
            </div>

            <div class="lg:w-1/2 w-full">
                <div class="bg-white rounded-[40px] p-2 shadow-2xl overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/free-consultation.png" 
                         alt="Hearing Expert Consultation" 
                         class="w-full h-[300px] md:h-[400px] rounded-[35px] object-cover block">
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>