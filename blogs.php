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
        
        <div id="blog-loader" class="flex justify-center items-center py-20">
            <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-[#00a8d6]"></div>
        </div>

        <div id="blog-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 hidden">
            </div>

        <div class="text-center mt-16">
            <button id="load-more" class="inline-block px-8 py-3 bg-[#00a8d6] text-white font-bold rounded-lg hover:bg-[#008db3] transition shadow-md">
                Load More
            </button>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const blogContainer = document.getElementById('blog-container');
    const loader = document.getElementById('blog-loader');
    const apiUrl = 'https://hearinghealthcare.aladinngroup.com/wp-json/wp/v2/posts?_embed&per_page=6';

    fetch(apiUrl)
        .then(response => response.json())
        .then(posts => {
            loader.classList.add('hidden');
            blogContainer.classList.remove('hidden');

            posts.forEach(post => {
                // Featured Image Logic
                const imageUrl = post._embedded['wp:featuredmedia'] 
                                ? post._embedded['wp:featuredmedia'][0].source_url 
                                : 'https://via.placeholder.com/600x400';

                const blogCard = `
                    <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-lg transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="${imageUrl}" alt="${post.title.rendered}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-[18px] font-bold text-[#121926] mb-3 leading-snug">
                                ${post.title.rendered}
                            </h3>
                            <div class="text-gray-500 text-sm mb-6 flex-grow">
                                ${post.excerpt.rendered.substring(0, 120)}...
                            </div>
                            <a href="blog-single.php?id=${post.id}" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-[#008db3] transition">
                                Read More <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                `;
                blogContainer.innerHTML += blogCard;
            });
        })
        .catch(error => {
            console.error('Error fetching blogs:', error);
            loader.innerHTML = '<p class="text-red-500">Failed to load blogs. Please try again later.</p>';
        });
});
</script>

<?php include 'includes/footer.php'; ?>