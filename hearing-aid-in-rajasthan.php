<?php 
$page_title = "Hearing Aid Clinics Across Rajasthan | Our Presence";
$meta_description = "Find the best hearing aid clinics across Rajasthan. We have 10+ clinics providing expert hearing care in Jaipur, Ajmer, Udaipur, and more.";

include 'includes/header.php'; 
?>

<section class="relative py-20 md:py-28 bg-[#00a8d6] text-center text-white overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="inline-block px-4 py-1 bg-white/20 backdrop-blur-sm text-white text-[13px] font-bold rounded-md mb-4 uppercase tracking-wider">
            Our Presence
        </div>
        <h1 class="text-4xl md:text-6xl font-[900] mb-6 tracking-tight">Find Us Across Rajasthan</h1>
        <p class="text-lg md:text-xl opacity-90 max-w-3xl mx-auto font-medium leading-relaxed">
            10 clinics across Rajasthan, bringing expert hearing care closer to you.
        </p>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            <div class="p-6">
                <h2 class="text-[#00a8d6] text-5xl font-[900] mb-2">10</h2>
                <p class="text-[#121926] font-bold text-lg uppercase tracking-wide">Clinic Locations</p>
            </div>

            <div class="p-6 border-y md:border-y-0 md:border-x border-gray-100">
                <h2 class="text-[#00a8d6] text-5xl font-[900] mb-2">10</h2>
                <p class="text-[#121926] font-bold text-lg uppercase tracking-wide">Cities Covered</p>
            </div>

            <div class="p-6">
                <h2 class="text-[#00a8d6] text-5xl font-[900] mb-2">2</h2>
                <p class="text-[#121926] font-bold text-lg uppercase tracking-wide">State (Rajasthan, UP)</p>
            </div>

        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
        <div class="text-center mb-16">
            <h2 class="text-[#121926] text-3xl md:text-[42px] font-[900] mb-4">Our Clinic Locations</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                Visit any of our conveniently located clinics for comprehensive hearing care services.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php
            function locationCard($city, $address, $phone, $link) {
                echo '
                <div class="bg-white rounded-[25px] p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-gray-100 flex flex-col hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-[#f0faff] rounded-xl flex items-center justify-center text-[#00a8d6] flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-[#121926]">'.$city.'</h4>
                            <p class="text-[#00a8d6] text-sm font-bold uppercase">Rajasthan</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 flex-grow mb-8">
                        <div class="flex gap-3 text-gray-500 text-[15px] leading-relaxed">
                            <i class="fas fa-map-pin mt-1 text-gray-300"></i>
                            <span>'.$address.'</span>
                        </div>
                        <div class="flex gap-3 text-gray-500 text-[15px]">
                            <i class="fas fa-phone-alt mt-1 text-gray-300"></i>
                            <span>'.$phone.'</span>
                        </div>
                        <div class="flex gap-3 text-gray-500 text-[15px]">
                            <i class="fas fa-envelope mt-1 text-gray-300"></i>
                            <span>hearinghealthcareclinics@gmail.com</span>
                        </div>
                    </div>

                    <a href="'.$link.'" class="w-full bg-[#00a8d6] text-white text-center py-3.5 rounded-xl font-bold hover:bg-[#008db3] transition-colors flex items-center justify-center gap-2">
                        View Details <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>';
            }

            // Cards Data
            locationCard("Ajmer", "Gali number 2 Baldev Nagar opposite Makadwali Road, Panchsheel Nagar, 305001", "+91-9001969266", "hearing-aid-in-ajmer.php");
            locationCard("Alwar", "Shri Ram Market, Company Bagh Road, Near Wonder Mall, 301001", "+91-9549921321", "hearing-aid-in-alwar.php");
            locationCard("Bikaner", "Rajshree complex Ist Floor, Opposite TB Clinic shastri nagar road 334401", "+91-9549925321", "hearing-aid-in-bikaner.php");
            locationCard("Bhilwara", "F-107, First Floor, HRJ Trade Centre, Roadways bus stand, Opposite petrol pump 311001", "+91-9549920321", "hearing-aid-in-bhilwara.php");
            locationCard("Jaipur", "505- 4th Floor, Apex Mall, Lal Kothi, Tonk Road, 302015", "+91-9859857674", "hearing-aid-in-jaipur.php");
            locationCard("Jodhpur", "G-11, Near Shri Hanwant Sr Sec School, Sector G, Shastri Nagar, 342003", "+91-9549900758", "hearing-aid-in-jodhpur.php");
            locationCard("Sikar", "Opposite S.K. Kalyan college, Saini Mandir, Near Kaler Medical, 332001", "+91-9928363720", "hearing-aid-in-sikar.php");
            locationCard("Sri Ganganagar", "Shopping Complex, 120-121, Sukhadia Cir, opposite Choudhary Ultrasound, Vrindavan colony, 335001", "+91-9549923321", "hearing-aid-in-sriganganagar.php");
            locationCard("Udaipur", "G-2, Madhuban Medi Plaza, Opposite Anil Clinic, Hospital Road, 313001", "+91-9549922321", "hearing-aid-in-udaipur.php");
            ?>

        </div>
    </div>
</section>

<section class="py-16 md:py-24" style="background-image: linear-gradient(180deg, #111827 0%, #0090C2 100%);">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-10">
            <div class="lg:w-1/2 w-full text-white">
                <h2 class="text-4xl font-[700] mb-4 tracking-tight">Ready to Hear Better?</h2>
                <p class="text-lg opacity-90 mb-10 font-medium">Book your free consultation today and take the first step towards better hearing</p>
                <form action="process-form.php" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name" class="w-full px-5 py-4 rounded-xl bg-white text-gray-800 focus:outline-none">
                        <input type="text" placeholder="Last Name" class="w-full px-5 py-4 rounded-xl bg-white text-gray-800 focus:outline-none">
                    </div>
                    <input type="tel" placeholder="Phone Number" class="w-full px-5 py-4 rounded-xl bg-white text-gray-800 focus:outline-none">
                    <button type="submit" class="w-full py-4 bg-[#111827] text-white font-bold rounded-xl text-lg hover:bg-black transition-all">Book Free Consultation</button>
                </form>
            </div>
            <div class="lg:w-1/2 w-full">
                <div class="bg-white rounded-[40px] p-2 shadow-2xl overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/free-consultation.png" class="w-full h-[400px] object-cover rounded-[35px]">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>