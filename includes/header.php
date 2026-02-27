<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
// Get the title parameter if exists (for active state in dropdown)
$current_title = isset($_GET['title']) ? $_GET['title'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($page_title) ? $page_title : "Hearing Healthcare Clinic | Best Service"; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Hearing Healthcare Clinic provides professional hearing tests and treatments."; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : "hearing clinic, hearing aids, hearing test, doctor"; ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .mobile-menu { transition: transform 0.3s ease-in-out; }
        
        .nav-active {
            color: #06b6d4 !important;
            position: relative;
        }

        @media (min-width: 1024px) {
            .nav-active::after {
                content: '';
                position: absolute;
                bottom: -4px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #00a8d6;
            }
        }

        /* Mobile Accordion Animation */
        #mobile-services-list {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
        #mobile-services-list.open {
            max-height: 300px;
        }
        .rotate-icon {
            transition: transform 0.3s ease;
        }
        .rotate-icon.active {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 md:px-6 py-3 flex justify-between items-center">
        
        <div class="flex items-center">
            <a href="index.php">
                <img src="https://hearinghealthcare.aladinngroup.com/wp-content/uploads/2025/12/logo1.png" 
                     alt="Hearing Healthcare Clinic" 
                     class="h-12 md:h-16 w-auto">
            </a>
        </div>

        <nav class="hidden lg:block">
            <ul class="flex space-x-6 lg:space-x-8 text-gray-700 font-semibold items-center">
                <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">About Us</a></li>
                
                <li class="relative group dropdown" id="desktop-dropdown">
                    <a href="service.php" class="flex items-center gap-1 <?php echo ($current_page == 'service.php') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">
                        Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul id="dropdown-menu" class="dropdown-menu absolute hidden bg-white shadow-xl rounded-xl py-3 w-64 top-full left-0 mt-2 border border-gray-100 overflow-hidden">
                        <li><a href="service.php?title=Hearing-Evaluation" class="block px-6 py-2 hover:bg-cyan-50 hover:text-cyan-600 transition <?php echo ($current_title == 'Hearing-Evaluation') ? 'text-cyan-600 bg-cyan-50' : ''; ?>">Hearing Evaluation</a></li>
                        <li><a href="service.php?title=Hearing-Aids" class="block px-6 py-2 hover:bg-cyan-50 hover:text-cyan-600 transition <?php echo ($current_title == 'Hearing-Aids') ? 'text-cyan-600 bg-cyan-50' : ''; ?>">Hearing Aids</a></li>
                        <li><a href="service.php?title=Speech-Therapy" class="block px-6 py-2 hover:bg-cyan-50 hover:text-cyan-600 transition <?php echo ($current_title == 'Speech-Therapy') ? 'text-cyan-600 bg-cyan-50' : ''; ?>">Speech Therapy</a></li>
                        <li><a href="service.php?title=Cochlear-Implants" class="block px-6 py-2 hover:bg-cyan-50 hover:text-cyan-600 transition <?php echo ($current_title == 'Cochlear-Implants') ? 'text-cyan-600 bg-cyan-50' : ''; ?>">Cochlear Implants</a></li>
                    </ul>
                </li>

                <li><a href="hearing-aid-in-rajasthan.php" class="<?php echo ($current_page == 'hearing-aid-in-rajasthan.phpp') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">Our Presence</a></li>
                <li><a href="blogs.php" class="<?php echo ($current_page == 'blogs.php') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">Blogs</a></li>
                <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'nav-active' : 'hover:text-cyan-500 transition'; ?>">Contact Us</a></li>
                
                <li>
                    <a href="appointment.php" class="bg-[#00a8d6] text-white px-6 py-2.5 rounded-md hover:bg-[#008db3] transition duration-300 font-bold shadow-sm">
                        Book Appointment
                    </a>
                </li>
            </ul>
        </nav>

        <div class="lg:hidden flex items-center">
            <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-full z-[100]">
        <ul class="flex flex-col p-6 space-y-4 font-semibold text-gray-700">
            <li><a href="index.php" class="block pb-2 border-b border-gray-50 <?php echo ($current_page == 'index.php') ? 'text-cyan-500' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="block pb-2 border-b border-gray-50 <?php echo ($current_page == 'about.php') ? 'text-cyan-500' : ''; ?>">About Us</a></li>
            
            <li class="border-b border-gray-50 pb-2">
                <button id="mobile-services-btn" class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="<?php echo ($current_page == 'service.php') ? 'text-cyan-500' : ''; ?>">Services</span>
                    <svg class="w-5 h-5 rotate-icon" id="accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <ul id="mobile-services-list" class="pl-4 space-y-3 mt-2 border-l-2 border-cyan-100">
                    <li><a href="service.php?title=Hearing-Evaluation" class="block mt-2 <?php echo ($current_title == 'Hearing-Evaluation') ? 'text-cyan-500' : ''; ?>">Hearing Evaluation</a></li>
                    <li><a href="service.php?title=Hearing-Aids" class="block <?php echo ($current_title == 'Hearing-Aids') ? 'text-cyan-500' : ''; ?>">Hearing Aids</a></li>
                    <li><a href="service.php?title=Speech-Therapy" class="block <?php echo ($current_title == 'Speech-Therapy') ? 'text-cyan-500' : ''; ?>">Speech Therapy</a></li>
                    <li><a href="service.php?title=Cochlear-Implants" class="block <?php echo ($current_title == 'Cochlear-Implants') ? 'text-cyan-500' : ''; ?>">Cochlear Implants</a></li>
                </ul>
            </li>

            <li><a href="hearing-aid-in-rajasthan.php" class="block pb-2 border-b border-gray-50 <?php echo ($current_page == 'hearing-aid-in-rajasthan.php') ? 'text-cyan-500' : ''; ?>">Our Presence</a></li>
            <li><a href="blogs.php" class="block pb-2 border-b border-gray-50 <?php echo ($current_page == 'blogs.php') ? 'text-cyan-500' : ''; ?>">Blogs</a></li>
            <li><a href="contact.php" class="block pb-2 border-b border-gray-50 <?php echo ($current_page == 'contact.php') ? 'text-cyan-500' : ''; ?>">Contact Us</a></li>
            <li>
                <a href="appointment.php" class="block bg-[#00a8d6] text-white text-center py-3 rounded-md font-bold shadow-lg">
                    Book Appointment
                </a>
            </li>
        </ul>
    </div>
</header>

<script>
    // --- Mobile Menu Toggle ---
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // --- Mobile Accordion Logic ---
    const servicesBtn = document.getElementById('mobile-services-btn');
    const servicesList = document.getElementById('mobile-services-list');
    const accordionIcon = document.getElementById('accordion-icon');
    
    servicesBtn.addEventListener('click', () => {
        servicesList.classList.toggle('open');
        accordionIcon.classList.toggle('active');
    });

    // --- Desktop Dropdown Delay Logic ---
    const dropdownWrapper = document.getElementById('desktop-dropdown');
    const dropdownMenu = document.getElementById('dropdown-menu');
    let timeoutId;

    dropdownWrapper.addEventListener('mouseenter', () => {
        clearTimeout(timeoutId);
        dropdownMenu.style.display = 'block';
    });

    dropdownWrapper.addEventListener('mouseleave', () => {
        // 1 second (1000ms) delay before closing
        timeoutId = setTimeout(() => {
            dropdownMenu.style.display = 'none';
        }, 300);
    });
</script>

<main class="flex-grow">