<?php 
$page_title = "Contact Us | Hearing Healthcare Clinic";
$meta_description = "Reach out to Hearing Healthcare Clinics in Rajasthan for expert hearing care and consultations.";
$meta_keywords = "contact hearing clinic jaipur, hearing aid service rajasthan, audiologist contact";

include 'includes/header.php'; 
?>

<section class="relative py-20 md:py-28 bg-[#00a8d6] text-center text-white overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="inline-block px-4 py-1 bg-white/20 backdrop-blur-sm text-white text-[13px] font-bold rounded-md mb-4 uppercase tracking-wider">
            Contact Us
        </div>
        <h1 class="text-4xl md:text-6xl font-[900] mb-6 tracking-tight">Get in Touch</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto font-medium">
            Have questions? We’re here to help. Reach out to us anytime.
        </p>
    </div>
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-black/5 rounded-full blur-3xl"></div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <div class="lg:w-7/12 order-2 lg:order-1">
                <h2 class="text-3xl font-[800] text-[#121926] mb-2">Send Us a Message</h2>
                <p class="text-gray-500 mb-10">Fill out the form below and our team will get back to you within 24 hours.</p>

                <form action="process-contact.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">Name</label>
                            <input type="text" name="name" placeholder="Your Name" required 
                                   class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-[#00a8d6] focus:bg-white focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">Email</label>
                            <input type="email" name="email" placeholder="Your Email" required 
                                   class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-[#00a8d6] focus:bg-white focus:outline-none transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">Phone Number</label>
                            <input type="tel" name="phone" placeholder="Phone Number" required 
                                   class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-[#00a8d6] focus:bg-white focus:outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">Select City</label>
                            <select name="city" class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-[#00a8d6] focus:bg-white focus:outline-none transition-all appearance-none">
                                <option value="jaipur">Jaipur (Main)</option>
                                <option value="ajmer">Ajmer</option>
                                <option value="alwar">Alwar</option>
                                <option value="sikar">Sikar</option>
                                <option value="kota">Kota</option>
                                <option value="jodhpur">Jodhpur</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700 ml-1">Message</label>
                        <textarea name="message" rows="5" placeholder="Tell us how we can help you..." 
                                  class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-[#00a8d6] focus:bg-white focus:outline-none transition-all resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full md:w-auto px-10 py-4 bg-[#121926] text-white font-bold rounded-xl hover:bg-black transition-all duration-300 shadow-lg flex items-center justify-center gap-3">
                        Send Message 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="lg:w-5/12 order-1 lg:order-2 space-y-6">
                <h2 class="text-3xl font-[800] text-[#121926] mb-2">Contact Information</h2>
                <p class="text-gray-500 mb-10">Reach out to us through any of these channels. We're here to assist you.</p>

                <div class="flex items-center p-6 bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 group hover:border-[#00a8d6] transition-all duration-300">
                    <div class="w-14 h-14 bg-[#f0faff] rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-all">
                        <i class="fas fa-phone-alt text-xl"></i>
                    </div>
                    <div class="ml-6">
                        <h4 class="text-lg font-bold text-[#121926]">Call us anytime</h4>
                        <p class="text-gray-500 font-medium">+91 9859857674 || +91 7976960480</p>
                    </div>
                </div>

                <div class="flex items-center p-6 bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 group hover:border-[#00a8d6] transition-all duration-300">
                    <div class="w-14 h-14 bg-[#f0faff] rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-all">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <div class="ml-6">
                        <h4 class="text-lg font-bold text-[#121926]">Send us an email</h4>
                        <p class="text-gray-500 font-medium">hearinghealthcareclinics@gmail.com</p>
                    </div>
                </div>

                <div class="flex items-center p-6 bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 group hover:border-[#00a8d6] transition-all duration-300">
                    <div class="w-14 h-14 bg-[#f0faff] rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-all">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                    </div>
                    <div class="ml-6">
                        <h4 class="text-lg font-bold text-[#121926]">Main Office</h4>
                        <p class="text-gray-500 font-medium">505- 4th Floor, Apex Mall, Lal Kothi, Tonk Road, Jaipur-302015, Rajasthan</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-[800] text-[#121926] mb-4">Visit Our Main Clinic</h2>
        <p class="text-gray-500 mb-12">Located in the heart of Jaipur</p>
        
        <div class="rounded-[30px] overflow-hidden shadow-2xl border-8 border-white h-[450px]">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.544716766442!2d75.8021!3d26.8879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db419c8088f1b%3A0x6a0c0e5a62e0802c!2sApex%20Mall!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>