</main> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* Social Icon Float Effect */
    .social-icon {
        transition: transform 0.3s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #00a8d6; /* Image color */
        color: white;
        border-radius: 4px;
        width: 38px;
        height: 38px;
    }
    .social-icon:hover {
        transform: translateY(-5px); /* Only Float Effect */
        color: white; /* No color change */
    }

    /* Footer Link Hover Effect */
    .footer-link {
        transition: color 0.3s ease;
    }
    .footer-link:hover {
        color: white !important;
    }

    /* Heading Accent Style */
    .footer-heading {
        color: #8eb400; /* Lime Green color from image */
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }
</style>

<footer class="bg-[#121926] text-[#a0aec0] pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <div class="space-y-6">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/logo1.png" 
                     alt="Hearing Healthcare Clinic" 
                     class="h-14 brightness-0 invert">
                <p class="text-[15px] leading-relaxed">
                    Leading hearing aid clinic in Rajasthan, dedicated to providing comprehensive hearing care with compassion, precision, and technology.
                </p>
                <div class="flex space-x-3 pt-2">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div>
                <h4 class="footer-heading">Our Services</h4>
                <ul class="space-y-3">
                    <li><a href="service.php?title=Hearing-Evaluation" class="footer-link text-[15px]">Hearing Evaluation</a></li>
                    <li><a href="service.php?title=Hearing-Aids" class="footer-link text-[15px]">Hearing Aids</a></li>
                    <li><a href="service.php?title=Speech-Therapy" class="footer-link text-[15px]">Speech Therapy</a></li>
                    <li><a href="service.php?title=Cochlear-Implants" class="footer-link text-[15px]">Cochlear Implants</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="about.php" class="footer-link text-[15px]">About Us</a></li>
                    <li><a href="hearing-aid-in-rajasthan.php" class="footer-link text-[15px]">Our Presence</a></li>
                    <li><a href="blogs.php" class="footer-link text-[15px]">Blog</a></li>
                    <li><a href="contact.php" class="footer-link text-[15px]">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Contact Us</h4>
                <ul class="space-y-4 text-[15px]">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-white mt-1"></i>
                        <span>505- 4th Floor, Apex Mall, Lal Kothi, Tonk Road, Jaipur-302015</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone-alt text-white"></i>
                        <span>+91 9859857674 || +91 7976960480</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-white"></i>
                        <span>hearinghealthcareclinics@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-sm tracking-wide">
            <p>© 2024 Hearing Healthcare Clinics. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <span class="hover:text-white transition cursor-default">RGHS Approved</span>
                <span class="hover:text-white transition cursor-default">CGHS Approved</span>
                <span class="hover:text-white transition cursor-default">Railway Approved</span>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>

</body>
</html>