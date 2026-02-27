<?php
/**
 * Main Service Router & Listing Page
 * URL 1: service.php (Shows all services)
 * URL 2: service.php?title=Service-Name (Shows specific static design)
 */

// 1. URL से 'title' पैरामीटर प्राप्त करें
$slug = isset($_GET['title']) ? $_GET['title'] : '';

// 2. अगर स्लग खाली है, तो मुख्य लिस्टिंग पेज दिखाएं
if (empty($slug)) {
    $page_title = "Hearing & Speech Services | Expert Audiologists in Rajasthan";
    $meta_description = "Explore our professional hearing services in Rajasthan, including precise hearing tests, digital hearing aids, and speech therapy.";
    $meta_keywords = "hearing test jaipur, digital hearing aids rajasthan, speech therapy for kids, cochlear implant consultation";

    include 'includes/header.php';
    ?>

    <section class="relative py-20 md:py-28 bg-[#00a8d6] text-center overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="inline-block px-6 py-2 bg-white text-[#00a8d6] text-[14px] font-bold rounded-full mb-8 shadow-sm">
                Our Services
            </div>
            <h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-[700] leading-[1.1] mb-8 tracking-tight max-w-5xl mx-auto">
                What Services We Offer
            </h1>
            <p class="text-white text-lg md:text-2xl opacity-95 max-w-4xl mx-auto leading-relaxed font-medium">
                At Hearing Healthcare Clinics, we provide complete hearing and speech care solutions under one roof ensuring comfort, accuracy, and expert guidance at every step.
            </p>
        </div>
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-12 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                    <div class="overflow-hidden">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Hearing-Evaluation-min.png" alt="Hearing Tests" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow text-center">
                        <h3 class="text-xl font-bold text-[#121926] mb-3">Hearing Tests</h3>
                        <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">We offer precise hearing assessments using advanced audiometric tools to detect and evaluate hearing loss accurately.</p>
                        <div class="flex justify-center">
                            <a href="service.php?title=Hearing-Evaluation" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">Learn More <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                    <div class="overflow-hidden">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Hearing-Aids-1.png" alt="Hearing Aids" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow text-center">
                        <h3 class="text-xl font-bold text-[#121926] mb-3">Hearing Aids</h3>
                        <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">Choose from a wide range of digital hearing aids from trusted global brands, expertly fitted and customized for your needs.</p>
                        <div class="flex justify-center">
                            <a href="service.php?title=Hearing-Aids" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">Learn More <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                    <div class="overflow-hidden">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Speech-Therapy-min.png" alt="Speech Therapy" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow text-center">
                        <h3 class="text-xl font-bold text-[#121926] mb-3">Speech Therapy</h3>
                        <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">Our skilled therapists help children and adults improve speech clarity and language development with personalized sessions.</p>
                        <div class="flex justify-center">
                            <a href="service.php?title=Speech-Therapy" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">Learn More <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                    <div class="overflow-hidden">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Cochlear-Implants-change.png" alt="Cochlear Implants" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow text-center">
                        <h3 class="text-xl font-bold text-[#121926] mb-3">Cochlear Implants</h3>
                        <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">For those with severe hearing loss, we provide cochlear implant consultation and post-surgery support to restore hearing.</p>
                        <div class="flex justify-center">
                            <a href="service.php?title=Cochlear-Implants" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">Learn More <span class="ml-2">→</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
} else {
    // --- यह सिंगल सर्विस वाला हिस्सा है (Switch Logic) ---
    switch ($slug) {
        case 'Hearing-Evaluation':
            $page_title = "Professional Hearing Evaluation | Hearing Healthcare Clinics";
            $meta_description = "Detailed hearing tests and audiometry by certified specialists in Rajasthan.";
            $design_file = 'includes/service-hearing-evaluation.php';
            break;
        case 'Hearing-Aids':
            $page_title = "Digital Hearing Aids & Fitting | Top Brands Rajasthan";
            $meta_description = "Advanced hearing aids from Widex and Signia with expert fitting across 9 clinics.";
            $design_file = 'includes/service-hearing-aids.php';
            break;
        case 'Speech-Therapy':
            $page_title = "Speech Therapy for Kids & Adults | Certified Therapists";
            $meta_description = "Personalized speech therapy sessions to improve pronunciation and communication.";
            $design_file = 'includes/service-speech-therapy.php';
            break;
        case 'Cochlear-Implants':
            $page_title = "Cochlear Implants Consultation & Rehab | Hearing Healthcare";
            $meta_description = "Expert support and rehabilitation for cochlear implant candidates in Rajasthan.";
            $design_file = 'includes/service-cochlear-implants.php';
            break;
        default:
            header("Location: service.php");
            exit();
    }

    include 'includes/header.php';
    if (file_exists($design_file)) {
        include $design_file;
    } else {
        // अगर डिज़ाइन फाइल अभी नहीं बनी है
        echo "<section class='py-32 text-center bg-gray-50'><h2 class='text-2xl font-bold'>Design for '$slug' is Coming Soon</h2><br><a href='service.php' class='text-[#00a8d6] underline'>Back to Services</a></section>";
    }
}

// 3. Common Form & Footer for both Listing and Single page
?>

<section class="py-16 md:py-24" style="background-image: linear-gradient(180deg, #111827 0%, #0090C2 100%);">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-10 text-white">
            <div class="lg:w-1/2 w-full">
                <h2 class="text-4xl font-[700] mb-4">Ready to Hear Better?</h2>
                <p class="text-lg opacity-90 mb-10">Book your free consultation today and take the first step towards better hearing</p>
                <form action="process-form.php" method="POST" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="text" name="first_name" placeholder="First Name" required class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none">
                        <input type="text" name="last_name" placeholder="Last Name" required class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="email" name="email" placeholder="Email" required class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none">
                        <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none">
                    </div>
                    <textarea name="message" rows="3" placeholder="How can we help you?" class="w-full px-6 py-4 rounded-2xl bg-white text-gray-800 focus:outline-none resize-none"></textarea>
                    <button type="submit" class="w-full py-4 bg-[#111827] text-white font-bold rounded-2xl text-lg hover:bg-black transition-all">Book Free Consultation</button>
                </form>
            </div>
            <div class="lg:w-1/2 w-full">
                <div class="bg-white rounded-[40px] p-2 shadow-2xl overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/free-consultation.png" alt="Consultation" class="w-full h-[300px] md:h-[400px] rounded-[35px] object-cover block">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>