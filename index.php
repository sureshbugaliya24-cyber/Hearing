<?php 
$page_title = "Hearing Healthcare Clinic | Hear Better, Live Better";
$meta_description = "Rajasthan's most trusted clinics for advanced and compassionate hearing healthcare.";
$meta_keywords = "hearing aids, cochlear implants, speech therapy, hearing test jaipur";

include 'includes/header.php';
?>

<style>
    /* Slider Main Container */
    .hero-slider {
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        background-color: #00a8d6;
        margin-top: 0;
    }

    @media (min-width: 768px) {
        .hero-slider { height: 550px; }
    }

    /* Individual Slide */
    .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        display: flex;
        align-items: center;
    }

    .slide.active { opacity: 1; z-index: 10; }

    .slide-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    /* Text Content Animation */
    .slide-content {
        transform: translateY(20px);
        transition: all 0.7s ease-out;
        opacity: 0;
    }

    .slide.active .slide-content {
        transform: translateY(0);
        opacity: 1;
    }

    /* Navigation Arrows */
    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 30;
        font-size: 1.5rem;
        color: white;
        background: rgba(0,0,0,0.1);
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 50%;
        transition: all 0.3s;
    }
    .slider-nav:hover { background: rgba(0,0,0,0.3); }
    .prev-arrow { left: 20px; }
    .next-arrow { right: 20px; }
</style>

<section class="hero-slider">
    <div class="slide active">
        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Banner-01-scaled.png" class="slide-bg" alt="Banner 1">
        <div class="container mx-auto px-6 md:px-12 relative z-20">
            <div class="slide-content max-w-2xl text-white">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">Hear Better, <br>Live Better</h1>
                <p class="text-base md:text-lg leading-relaxed mb-8 opacity-90">
                    Rajasthan's most trusted clinics for advanced and compassionate hearing healthcare, helping you reconnect with the sounds that matter through precision care and modern technology, approved under RGHS, CGHS, Railway, and major health insurance plans.
                </p>
                <a href="appointment.php" class="inline-flex items-center border border-white text-white px-6 py-2.5 rounded-lg font-medium hover:bg-white hover:text-[#00a8d6] transition duration-300">
                    Book Free Consultation <span class="ml-2">→</span>
                </a>
            </div>
        </div>
    </div>

    <div class="slide">
        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Banner-04-scaled.png" class="slide-bg" alt="Banner 2">
        <div class="container mx-auto px-6 md:px-12 relative z-20">
            <div class="slide-content max-w-2xl text-white">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">Cochlear Implants <br>That Restore Hearing</h1>
                <p class="text-base md:text-lg leading-relaxed mb-8 opacity-90">
                    Helping individuals who do not benefit from conventional hearing aids rediscover sound, rebuild communication, and reconnect with the world around them in a meaningful way.
                </p>
                <a href="appointment.php" class="inline-flex items-center border border-white text-white px-6 py-2.5 rounded-lg font-medium hover:bg-white hover:text-[#00a8d6] transition duration-300">
                    Book Free Consultation <span class="ml-2">→</span>
                </a>
            </div>
        </div>
    </div>

    <div class="slider-nav prev-arrow" onclick="moveSlide(-1)">&#10094;</div>
    <div class="slider-nav next-arrow" onclick="moveSlide(1)">&#10095;</div>
</section>

<script>
    let currentIdx = 0;
    const allSlides = document.querySelectorAll('.slide');

    function showSlide(index) {
        if (index >= allSlides.length) currentIdx = 0;
        else if (index < 0) currentIdx = allSlides.length - 1;
        else currentIdx = index;

        allSlides.forEach(s => s.classList.remove('active'));
        allSlides[currentIdx].classList.add('active');
    }

    function moveSlide(step) {
        showSlide(currentIdx + step);
    }

    // Auto Slide
    let slideInterval = setInterval(() => moveSlide(1), 6000);

    const sliderEl = document.querySelector('.hero-slider');
    sliderEl.addEventListener('mouseenter', () => clearInterval(slideInterval));
    sliderEl.addEventListener('mouseleave', () => {
        slideInterval = setInterval(() => moveSlide(1), 6000);
    });
</script>






<section class="py-16 md:py-20 bg-[#f0faff]">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row items-center gap-10">
            
            <div class="lg:w-1/2">
                <div class="inline-block px-4 py-1 bg-[#00a8d6] text-white text-[13px] font-bold rounded-md mb-6 shadow-sm">
                    ABOUT US
                </div>
                
                <h2 class="text-[#121926] text-3xl md:text-[42px] font-[700] leading-[1.1] mb-6 tracking-tight">
                    Rajasthan's Leading <br> Chain of 
                    <span class="text-[#00a8d6]">Hearing Healthcare Clinics</span>
                </h2>
                
                <div class="space-y-5 text-[#4a5568] text-[16px] md:text-[17px] leading-relaxed font-medium">
                    <p>
                        Hearing Healthcare Clinics is a leading hearing aid clinic in Rajasthan, dedicated to providing comprehensive hearing care with compassion, precision, and technology.
                    </p>
                    <p>
                        As one of the best hearing aid clinics, we specialize in the diagnosis, management, and treatment of hearing disorders through advanced audiological assessments and modern hearing solutions.
                    </p>
                    <p>
                        Approved under RGHS, CGHS, Railway, and several Health Insurance and Corporate Health Plans, we make professional hearing care accessible and affordable for everyone.
                    </p>
                </div>
                
                <div class="pt-8">
                    <a href="about.php" class="inline-flex items-center bg-[#00a8d6] text-white px-7 py-3 rounded-lg font-bold text-[15px] hover:bg-[#008db3] transition-all duration-300 shadow-lg group">
                        Learn More About Us 
                        <span class="ml-3 group-hover:translate-x-2 transition-transform duration-300">→</span>
                    </a>
                </div>
            </div>
            
            <div class="lg:w-1/2">
                <div class="relative group">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Leading-Hearing-Care-min.png" 
                         alt="Hearing Healthcare Rajasthan" 
                         class="w-full h-[300px] md:h-[500px] rounded-[35px] shadow-xl">
                </div>
            </div>

        </div>
    </div>
</section>






<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
        <div class="text-center mb-16">
            <div class="inline-block px-5 py-1.5 bg-[#00a8d6] text-white text-[12px] font-bold rounded-md mb-4 shadow-sm uppercase tracking-wider">
                Our Services
            </div>
            <h2 class="text-[#121926] text-3xl md:text-[45px] font-[900] mb-4 leading-tight">What Services We Offer</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-[16px] md:text-[18px] leading-relaxed">
                At Hearing Healthcare Clinics, we provide complete hearing and speech care solutions under one roof ensuring comfort, accuracy, and expert guidance at every step.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Hearing-Evaluation-min.png" alt="Hearing Tests" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-8 flex flex-col flex-grow text-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Hearing Tests</h3>
                    <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">
                        We offer precise hearing assessments using advanced audiometric tools to detect and evaluate hearing loss accurately.
                    </p>
                    <div class="flex justify-center">
                        <a href="service.php?title=Hearing-Evaluation" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Hearing-Aids-1.png" alt="Hearing Aids" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-8 flex flex-col flex-grow text-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">
                        Choose from a wide range of digital hearing aids from trusted global brands, expertly fitted and customized for your needs.
                    </p>
                    <div class="flex justify-center">
                        <a href="service.php?title=Hearing-Aids" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Speech-Therapy-min.png" alt="Speech Therapy" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-8 flex flex-col flex-grow text-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Speech Therapy</h3>
                    <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">
                        Our skilled therapists help children and adults improve speech clarity, pronunciation, and language development with personalized sessions.
                    </p>
                    <div class="flex justify-center">
                        <a href="service.php?title=Speech-Therapy" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group bg-white rounded-[25px] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden border border-gray-100 flex flex-col h-full transition-all duration-500 hover:-translate-y-3">
                <div class="overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Cochlear-Implants-change.png" alt="Cochlear Implants" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-8 flex flex-col flex-grow text-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Cochlear Implants</h3>
                    <p class="text-gray-500 text-[15px] mb-6 flex-grow leading-relaxed">
                        For those with severe hearing loss, we provide cochlear implant consultation and post-surgery support to help restore hearing and communication.
                    </p>
                    <div class="flex justify-center">
                        <a href="service.php?title=Cochlear-Implants" class="inline-flex items-center justify-center bg-[#00a8d6] text-white px-6 py-2.5 rounded-lg text-[14px] font-bold hover:bg-[#008db3] transition-all duration-300">
                            Learn More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





















<section class="py-16 md:py-24 bg-[#f0faff]">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
        <div class="text-center mb-16">
            <div class="inline-block px-5 py-1.5 bg-[#00a8d6] text-white text-[12px] font-bold rounded-md mb-4 shadow-sm uppercase tracking-wider">
                Why Choose Us
            </div>
            <h2 class="text-[#121926] text-3xl md:text-[42px] font-[900] mb-5 leading-tight">
                Why Is Hearing Healthcare Clinic the Best <br class="hidden md:block"> Hearing Aid Provider?
            </h2>
            <p class="text-gray-500 max-w-3xl mx-auto text-[15px] md:text-[17px] leading-relaxed">
                Choosing the right hearing aid clinic can make a world of difference in your hearing journey. Here's why Hearing Healthcare Clinics stands among the best hearing aid companies in India:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Experienced-Audiologists-min.png" alt="Experienced Audiologists" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Experienced Audiologists & Specialists</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Our certified audiologists and hearing care professionals bring years of expertise in diagnosing, managing, and treating different degrees of hearing loss using a patient-centric approach.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Latest-Technology-min.png" alt="Latest Hearing Technology" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Latest Hearing Technology</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        We provide advanced digital hearing aids with the newest features such as Bluetooth connectivity, noise reduction, rechargeability, and smartphone compatibility ensuring crystal-clear and natural sound quality.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Government-Approved-min.png" alt="Government Approved" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Government & Corporate Tie-ups</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Our association with RGHS, CGHS, Railway, and various corporate health programs allows patients to avail of treatments and devices at subsidized or covered rates.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Multiple-Clinics-Across-Rajasthan-2.png" alt="Multiple Clinics Across Rajasthan" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Multiple Clinics Across Rajasthan</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        With 9 fully operational clinics, we ensure that expert hearing care is never far from your home. We take pride in being recognized as a trusted hearing aid clinic that combines medical precision with compassionate care.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Personalised-Hearing-Care.png" alt="Personalised Hearing Care" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Personalised Hearing Care</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        We understand that every hearing need is different. Our experts provide customised evaluations, tailored hearing solutions, and ongoing care designed specifically for each individual.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-[20px] shadow-md overflow-hidden flex flex-col h-full transition-transform duration-300 hover:-translate-y-2">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Affordable-Solutions-with-Insurance-Support.png" alt="Insurance Support" class="w-full h-56 object-cover">
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Affordable Solutions with Insurance Support</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        We offer cost-effective hearing solutions with flexible options, along with assistance for insurance and government scheme coverage to make quality hearing care accessible to all.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

















<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
        <div class="text-center mb-16">
            <h2 class="text-[#121926] text-3xl md:text-[42px] font-[900] mb-4">Know the Types of Hearing Aids</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-[16px] md:text-[18px]">
                We offer a complete range of hearing aids designed for comfort, clarity, and convenience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <div class="md:w-1/2 overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Behind-The-Ear-BTE-Hearing-Aids.png" alt="BTE Hearing Aids" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Behind-The-Ear (BTE) Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Durable and powerful, suitable for all age groups and all types of hearing loss.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <div class="md:w-1/2 overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2026/01/Receiver-In-Canal-RIC-Hearing-Aids.png" alt="RIC Hearing Aids" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Receiver-In-Canal (RIC) Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Compact and lightweight, providing clear and natural sound with minimal visibility.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <div class="md:w-1/2 overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2026/01/In-The-Ear-ITE-Hearing-Aids.png" alt="ITE Hearing Aids" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">In-The-Ear (ITE) Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Custom-made to fit securely inside your ear for better comfort and sound delivery.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <div class="md:w-1/2 overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Completely-In-Canal-CIC-Hearing-Aids-min.png" alt="CIC Hearing Aids" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Completely-In-Canal (CIC) Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Virtually invisible hearing aids that fit deep inside the ear canal, ideal for those seeking discreet solutions.
                    </p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl md:col-span-1">
                <div class="md:w-1/2 overflow-hidden">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/Rechargeable-Digital-Hearing-Aids-min.png" alt="Rechargeable Hearing Aids" class="w-full h-64 md:h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-[#121926] mb-3">Rechargeable Digital Hearing Aids</h3>
                    <p class="text-gray-500 text-[15px] leading-relaxed">
                        Eco-friendly, easy to use, and perfect for daily wear no need to replace batteries frequently.
                    </p>
                </div>
            </div>

        </div>

        <div class="text-center mt-12">
            <p class="text-gray-600 italic">
                Our experts will guide you in selecting the perfect device that suits your hearing needs, lifestyle, and budget.
            </p>
        </div>
    </div>
</section>































<section class="py-16 md:py-24 bg-[#f0f9ff] overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block px-5 py-1 bg-[#00a8d6] text-white text-[13px] font-bold rounded-md mb-4 shadow-sm uppercase">
                Testimonials
            </div>
            <h2 class="text-[#121926] text-3xl md:text-[42px] font-[900] mb-3">What Our Patients Say</h2>
            <p class="text-gray-500">Real experiences from real people</p>
        </div>

        <div class="relative max-w-6xl mx-auto overflow-hidden">
            <div id="testimonial-track" class="flex">
                
                <div class="testimonial-item min-w-full md:min-w-[33.333%] px-4">
                    <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 h-full flex flex-col">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/5-stars-img.png" alt="5 Stars" class="w-32 mb-6">
                        <p class="text-gray-600 italic mb-8 flex-grow">"I have consult many audiologist before but mostly audiologist was just tried to sale the machine..."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gray-100 rounded-full overflow-hidden border-2 border-[#00a8d6]">
                                <svg viewBox="0 0 250 250" class="w-full h-full"><path d="M132 36a56 56 0 0 0-56 56v6.17A12 12 0 0 0 66 110v14a12 12 0 0 0 10.3 11.88 56.04 56.04 0 0 0 31.7 44.73v18.4h-4a72 72 0 0 0-72 72v9h200v-9a72 72 0 0 0-72-72h-4v-18.39a56.04 56.04 0 0 0 31.7-44.73A12 12 0 0 0 198 124v-14a12 12 0 0 0-10-11.83V92a56 56 0 0 0-56-56Z" fill="#ae5d29"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#121926]">Naveen Chauhan</h4>
                                <p class="text-gray-400 text-sm">Alwar</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item min-w-full md:min-w-[33.333%] px-4">
                    <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 h-full flex flex-col">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/5-stars-img.png" alt="5 Stars" class="w-32 mb-6">
                        <p class="text-gray-600 italic mb-8 flex-grow">"Excellent service and professional staff. The audiologist took time to explain everything clearly."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gray-100 rounded-full overflow-hidden border-2 border-[#00a8d6]">
                                <svg viewBox="0 0 250 250" class="w-full h-full"><path d="M132 36a56 56 0 0 0-56 56v6.17A12 12 0 0 0 66 110v14a12 12 0 0 0 10.3 11.88 56.04 56.04 0 0 0 31.7 44.73v18.4h-4a72 72 0 0 0-72 72v9h200v-9a72 72 0 0 0-72-72h-4v-18.39a56.04 56.04 0 0 0 31.7-44.73A12 12 0 0 0 198 124v-14a12 12 0 0 0-10-11.83V92a56 56 0 0 0-56-56Z" fill="#d08b5b"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#121926]">Priya Sharma</h4>
                                <p class="text-gray-400 text-sm">Jaipur</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item min-w-full md:min-w-[33.333%] px-4">
                    <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 h-full flex flex-col">
                        <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/5-stars-img.png" alt="5 Stars" class="w-32 mb-6">
                        <p class="text-gray-600 italic mb-8 flex-grow">"Best hearing aid clinic in Rajasthan. The team is very supportive and the devices are of high quality."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gray-100 rounded-full overflow-hidden border-2 border-[#00a8d6]">
                                <svg viewBox="0 0 250 250" class="w-full h-full"><path d="M73 192a48 48 0 0 0 13.6-1.95 72.08 72.08 0 0 0 13.68 9.1c1.56-.1 3.13-.15 4.72-.15h4v-18.39a56.03 56.03 0 0 1-31.8-45.74A12 12 0 0 1 67 123v-13a12 12 0 0 1 10-11.83v-.75c8.46-5.38 16.75-16.36 21.98-30.34C108.78 68.94 120.04 70 132 70c12.55 0 24.31-1.16 34.45-3.2C171.76 81.17 180.32 92.4 189 97.7v.46c.44.07.87.17 1.29.29a24.4 24.4 0 0 0 3.23 1.47A11.99 11.99 0 0 1 199 110v13a12 12 0 0 1-10.2 11.87A56.03 56.03 0 0 1 157 180.6V199h4c1.59 0 3.16.05 4.72.15a72.08 72.08 0 0 0 13.69-9.1 48 48 0 0 0 45.19-82.18 44.01 44.01 0 0 0-28.37-69.28A44.02 44.02 0 0 0 133 15.9a44.02 44.02 0 0 0-63.23 22.7 44.01 44.01 0 0 0-28.37 69.27A48 48 0 0 0 73 192Z" fill="#ecdcbf"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#121926]">Rajesh Kumar</h4>
                                <p class="text-gray-400 text-sm">Jodhpur</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="flex justify-center gap-3 mt-10">
                <span class="dot w-3 h-3 rounded-full bg-[#00a8d6] cursor-pointer" onclick="goToSlide(0)"></span>
                <span class="dot w-3 h-3 rounded-full bg-gray-300 cursor-pointer" onclick="goToSlide(1)"></span>
                <span class="dot w-3 h-3 rounded-full bg-gray-300 cursor-pointer" onclick="goToSlide(2)"></span>
            </div>
        </div>
    </div>
</section>

<script>
    const track = document.getElementById('testimonial-track');
    const dots = document.querySelectorAll('.dot');
    let items = document.querySelectorAll('.testimonial-item');
    
    // 1. Infinity Loop के लिए Clones बनाएं
    const firstClone = items[0].cloneNode(true);
    const lastClone = items[items.length - 1].cloneNode(true);
    
    track.appendChild(firstClone);
    track.prepend(lastClone);

    // 2. Initial Setup
    let index = 1; // क्योंकि 0 पर अब lastClone है
    const transitionTime = '0.5s ease-in-out';
    
    function updateLayout() {
        const itemWidth = items[0].offsetWidth;
        track.style.transition = 'none';
        track.style.transform = `translateX(-${index * itemWidth}px)`;
    }

    // शुरूआती पोजीशन सेट करें
    window.addEventListener('load', updateLayout);
    window.addEventListener('resize', updateLayout);

    function moveSlider() {
        const itemWidth = items[0].offsetWidth;
        track.style.transition = `transform ${transitionTime}`;
        index++;
        track.style.transform = `translateX(-${index * itemWidth}px)`;

        // जब Clone पर पहुँच जाए
        track.addEventListener('transitionend', () => {
            if (index >= items.length + 1) {
                track.style.transition = 'none';
                index = 1;
                track.style.transform = `translateX(-${index * itemWidth}px)`;
            }
            updateDots();
        });
    }

    function updateDots() {
        // Dot index (0 to length-1)
        let dotActive = index - 1;
        if (index >= items.length + 1) dotActive = 0;
        if (index <= 0) dotActive = items.length - 1;

        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-[#00a8d6]', i === dotActive);
            dot.classList.toggle('bg-gray-300', i !== dotActive);
        });
    }

    function goToSlide(n) {
        index = n + 1;
        const itemWidth = items[0].offsetWidth;
        track.style.transition = `transform ${transitionTime}`;
        track.style.transform = `translateX(-${index * itemWidth}px)`;
        updateDots();
    }

    // Auto Play
    let autoSlide = setInterval(moveSlider, 4000);

    // Hover पर रोकें और हटाने पर शुरू करें
    track.parentElement.addEventListener('mouseenter', () => clearInterval(autoSlide));
    track.parentElement.addEventListener('mouseleave', () => autoSlide = setInterval(moveSlider, 4000));
</script>
























<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        
        <div class="text-center mb-12 md:mb-16">
            <div class="inline-block px-5 py-1.5 bg-[#00a8d6] text-white text-[12px] font-bold rounded-md mb-4 shadow-sm uppercase tracking-wider">
                Our Network
            </div>
            <h2 class="text-[#121926] text-3xl md:text-[42px] font-[900] mb-4">Our Clinic Locations</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-[16px] md:text-[18px]">
                We have 9 fully equipped clinics across Rajasthan, providing expert hearing and speech care near you.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8 md:gap-12">
            
            <div class="lg:w-5/12 w-full">
                <div class="relative rounded-[30px] overflow-hidden shadow-xl border-4 border-[#f0f9ff] group">
                    <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2026/01/Map-banner-01-1-2048x1152.png" 
                         alt="Rajasthan Clinic Map" 
                         class="w-full h-[300px] md:h-[450px] object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>

            <div class="lg:w-7/12 w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                    <a href="location-ajmer.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] shadow-sm group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Ajmer</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-alwar.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Alwar</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-bhilwara.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Bhilwara</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-bikaner.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Bikaner</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-jaipur.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Jaipur (Main)</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-jodhpur.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Jodhpur</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-kota.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Kota</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-sikar.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Sikar</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                    <a href="location-udaipur.php" class="flex items-center p-4 bg-[#f0faff] rounded-2xl border border-transparent hover:border-[#00a8d6] hover:bg-white hover:shadow-md transition-all duration-300 group">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-[#00a8d6] group-hover:bg-[#00a8d6] group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4"><h4 class="text-[17px] font-bold text-[#121926]">Udaipur</h4><p class="text-[13px] text-gray-500">Rajasthan, India</p></div>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>























<section class="py-16 md:py-24 bg-[#e6f4f9]">
    <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <div class="lg:w-1/3">
                <div class="inline-block px-4 py-1.5 bg-[#00a8d6] text-white text-[13px] font-bold rounded-md mb-6 shadow-sm uppercase tracking-wider">
                    FAQ’S
                </div>
                <h2 class="text-[#121926] text-4xl md:text-4xl font-[700] leading-tight">
                    Frequently Asked <br> Questions
                </h2>
            </div>

            <div class="lg:w-2/3 space-y-4">
                
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">1. How do I know if I need a hearing aid?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            If you find yourself turning up the TV volume, struggling to follow conversations, or asking people to repeat themselves often, you may have hearing loss. A professional test at our clinic can help you know for sure.
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">2. Do you provide aftercare and servicing for hearing aids?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            Yes. We provide full aftercare and maintenance, including hearing aid cleaning, tuning, software updates, repairs, and battery or receiver replacement to keep your device working perfectly.
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">3. What brands of hearing aids do you provide?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            We offer high-performance digital hearing aids from globally trusted brands Signia and Widex. These brands are known for excellent sound clarity, Bluetooth connectivity, noise control, and rechargeable options.
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">4. How long does it take to adjust to a new hearing aid?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            Most people get comfortable within a few days to a couple of weeks. Our audiologists guide you throughout this period with follow-up sessions and personalized adjustments for a smooth adaptation.
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">5. Do hearing aids restore normal hearing?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            Hearing aids do not cure hearing loss, but they significantly improve sound clarity and communication by amplifying sounds to match your hearing level. With regular use, most users experience a major boost in daily comfort and confidence.
                        </div>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm transition-all duration-300">
                    <button class="faq-btn w-full flex items-center justify-between p-5 text-left transition-colors hover:bg-gray-50">
                        <span class="text-[17px] font-bold text-[#121926]">6. Are digital hearing aids difficult to use?</span>
                        <span class="faq-icon text-[#00a8d6] font-bold text-xl">+</span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-5 pt-0 text-gray-600 leading-relaxed border-t border-gray-100 mt-2">
                            Not at all. Modern Signia and Widex hearing aids are user-friendly, with automatic sound adjustment and smartphone-based control apps. Our team provides complete guidance on using and maintaining them.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    /* एक्टिव आइटम के लिए थोड़ा अलग लुक */
    .faq-item.active {
        border-color: #00a8d6;
        box-shadow: 0 10px 20px rgba(0, 168, 214, 0.05);
    }
    .faq-item.active .faq-btn {
        background-color: #f8fdff;
    }
</style>

<script>
    document.querySelectorAll('.faq-btn').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');

            // अगर दूसरा खुला है तो उसे बंद करें (Optional)
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem && item.classList.contains('active')) {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').style.maxHeight = 0;
                    item.querySelector('.faq-icon').textContent = '+';
                }
            });

            // वर्तमान वाले को टॉगल करें
            faqItem.classList.toggle('active');

            if (faqItem.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.textContent = '-';
            } else {
                answer.style.maxHeight = 0;
                icon.textContent = '+';
            }
        });
    });
</script>




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

                    <textarea name="message" rows="3" placeholder="Message" 
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