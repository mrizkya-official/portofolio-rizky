<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Rizky Apryansyah | Portofolio</title>
    <meta name="description" content="Portofolio Profesional M Rizky Apryansyah - Operations, IT & Administrative Specialist. Seni Merenung di Tengah Bisingnya Dunia.">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body>

    <button class="mobile-nav-toggle d-xl-none" aria-label="Toggle Navigation">
        <i class="fas fa-bars"></i>
    </button>

    <header id="sidebar-nav">
        <div class="profile-card">
            <img src="assets/img/Profil.jpg" alt="M Rizky A Profile Picture" class="profile-image"> 
            <h1 class="profile-name"><a href="#hero">M Rizky A</a></h1>
            <span class="profile-tagline text-muted">Operations, IT & Administrative Specialist</span>
            
            <div class="social-links-container">
                <a href="https://x.com/Rizky33125" class="social-icon" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a> 
                <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" aria-label="GitHub"><i class="fab fa-github"></i></a> 
                <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <nav id="main-menu" class="nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link active"><i class="fas fa-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link"><i class="fas fa-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link"><i class="fas fa-file-alt"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio" class="nav-link"><i class="fas fa-th-list"></i> <span>Portofolio</span></a></li>
                <li><a href="#organization" class="nav-link"><i class="fas fa-handshake"></i> <span>Organisasi</span></a></li>
                <li><a href="#contact" class="nav-link"><i class="fas fa-envelope-open-text"></i> <span>Contact</span></a></li>
            </ul>
        </nav>
    </header>

    <main id="content-main">
        
        <?php 
            // Memanggil semua bagian section secara berurutan
            include('sections/hero.php'); 
            
            echo '<hr>';
            include('sections/about.php'); 
            
            echo '<hr>';
            include('sections/resume.php'); 
            
            echo '<hr>';
            include('sections/portfolio.php'); 
            
            echo '<hr>';
            include('sections/organization.php'); 
            
            echo '<hr>';
            include('sections/contact.php'); 
        ?>

    </main>

    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        /**
         * Inisialisasi GLightbox untuk fitur Pop-up Portofolio
         */
        const lightbox = GLightbox({
            selector: '.glightbox', // Ini harus sama dengan class yang ada di file portfolio.php
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    </script>

</body>
</html>