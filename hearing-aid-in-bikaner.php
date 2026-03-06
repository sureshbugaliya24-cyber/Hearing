<?php 
$page_title = "Best Hearing Aid Clinic in Bikaner | Hearing Healthcare Clinic";
$meta_description = "Visit our Bikaner clinic for professional hearing tests and the latest digital hearing aids. Expert audiology services in Bikaner, Rajasthan.";

include 'includes/header.php'; 
?>

<section class="relative py-20 md:py-28 bg-[#00a8d6] text-center text-white overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="inline-block px-4 py-1 bg-white text-[#00a8d6] text-[12px] font-bold rounded-md mb-4 uppercase tracking-wider">
            Bikaner || Rajasthan
        </div>
        <h1 class="text-4xl md:text-6xl font-[900] mb-6 tracking-tight">Hearing Healthcare Clinic</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-3xl mx-auto font-medium leading-relaxed">
            Expert hearing care services in Bikaner
        </p>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <div class="lg:w-7/12">
                <h2 class="text-3xl font-[800] text-[#121926] mb-2">Send Us a Message</h2>
                <p class="text-gray-500 mb-8">Fill out the form below and our team will get back to you within 24 hours.</p>
                
                <form action="process-form.php" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Name" class="w-full px-5 py-3 rounded-lg border border-gray-200 focus:outline-[#00a8d6] bg-gray-50">
                    <input type="email" name="email" placeholder="Email" class="w-full px-5 py-3 rounded-lg border border-gray-200 focus:outline-[#00a8d6] bg-gray-50">
                    <input type="tel" name="phone" placeholder="Phone Number" class="w-full px-5 py-3 rounded-lg border border-gray-200 focus:outline-[#00a8d6] bg-gray-50">
                    <select class="w-full px-5 py-3 rounded-lg border border-gray-200 focus:outline-[#00a8d6] bg-gray-50 text-gray-500">
                        <option>Select City</option>
                        <option selected>Bikaner</option>
                    </select>
                    <textarea placeholder="Tell us how we can help you..." rows="4" class="w-full px-5 py-3 rounded-lg border border-gray-200 focus:outline-[#00a8d6] bg-gray-50 resize-none"></textarea>
                    <button type="submit" class="w-full py-3.5 bg-[#121926] text-white font-bold rounded-lg hover:bg-black transition flex items-center justify-center gap-2">
                        Send Message <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                </form>
            </div>

            <div class="lg:w-5/12 space-y-4">
                <h2 class="text-3xl font-[800] text-[#121926] mb-2">Contact Information</h2>
                <p class="text-gray-500 mb-8">Reach out to us through any of these channels.</p>
                
                <div class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm flex items-center gap-5">
                    <div class="w-12 h-12 bg-[#f0faff] text-[#00a8d6] rounded-xl flex items-center justify-center"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <p class="text-sm font-bold text-[#121926]">Call us anytime</p>
                        <p class="text-gray-500">+91-9549925321</p> </div>
                </div>

                <div class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm flex items-center gap-5">
                    <div class="w-12 h-12 bg-[#f0faff] text-[#00a8d6] rounded-xl flex items-center justify-center"><i class="fas fa-envelope"></i></div>
                    <div>
                        <p class="text-sm font-bold text-[#121926]">Send us an email</p>
                        <p class="text-gray-500">hearinghealthcareclinics@gmail.com</p> </div>
                </div>

                <div class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm flex items-center gap-5">
                    <div class="w-12 h-12 bg-[#f0faff] text-[#00a8d6] rounded-xl flex items-center justify-center"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <p class="text-sm font-bold text-[#121926]">Main Office</p>
                        <p class="text-gray-500">Rajshree complex Ist Floor, Opposite TB Clinic shastri nagar road 334401</p> </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-[800] text-[#121926] mb-2">Visit Our Bikaner Clinic</h2>
        <p class="text-gray-500 mb-10">Located in the Bikaner || Rajasthan</p>
        <div class="rounded-[30px] overflow-hidden shadow-xl border-8 border-gray-50 h-[450px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3523.080516834017!2d73.3283257!3d28.0067341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fdd6a5a2f5f13%3A0x6777777777777777!2sHearing%20Healthcare%20Clinic%20Bikaner!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-[800] text-[#121926] text-center mb-4">Other Clinic Locations</h2>
        <p class="text-gray-500 text-center mb-12">We have 9 clinics Across Rajasthan</p>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 max-w-6xl mx-auto">
            <?php
            $cities = ["Ajmer", "Alwar", "Bikaner", "Bhilwara", "Jaipur", "Jodhpur", "Sikar", "Sri Ganganagar", "Udaipur"];
            foreach($cities as $city) {
                // के अनुसार बीकानेर हाइलाइटेड रहेगा
                $active = ($city == "Bikaner") ? "bg-[#00a8d6] text-white" : "bg-white text-[#121926] hover:bg-[#f0faff]";
                echo '<a href="hearing-aid-in-'.strtolower(str_replace(' ', '', $city)).'.php" class="'.$active.' p-4 rounded-xl shadow-sm border border-gray-100 flex items-center gap-3 transition-all">
                        <i class="fas fa-map-marker-alt '.($city == "Bikaner" ? "text-white" : "text-[#00a8d6]").'"></i>
                        <span class="font-bold">'.$city.'</span>
                      </a>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>