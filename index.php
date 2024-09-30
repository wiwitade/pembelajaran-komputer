<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website pembelajaran komputer yang menyajikan sejarah, jenis-jenis komputer, dan kuis interaktif.">
    <title>Pembelajaran Komputer | Sejarah, Jenis, dan Kuis Interaktif</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="logo-wrapper">
                    <img src="https://fontmeme.com/permalink/240902/1085ef830d801e5da2ed8822411b3e08.png" alt="one-piece-manga-font" border="0" style="width: 140px; height: auto;">
                </div>
                
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="index.php" >Beranda</a></li>
                        <li><a href="sejarah.php" >Sejarah Komputer</a></li>
                        <li><a href="jenis.php" >Jenis-Jenis Komputer</a></li>
                        <li><a href="kuis.php" >Kuis Interaktif</a></li>
                    </ul>
                </nav>

                <div class="user-actions">
                    <?php
                    if ($isLoggedIn) {
                        echo '<div class="user-info">';
                        echo '<span class="user-name">' . htmlspecialchars($_SESSION['username']) . '</span>';
                        echo '<a href="#" class="btn-logout" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i></a>';
                        echo '</div>';
                    } else {
                        echo '<a href="login_register/index.php" class="btn-login">Login</a>';
                    }
                    ?>
                </div>
                <script>
                    function confirmLogout() {
                        if (confirm('Apakah anda yakin ingin keluar?')) {
                            window.location.href = 'logout.php';
                        }
                    }
                </script>
            </div>
        </div>
    </header>

    <main>
        <?php if ($isLoggedIn): ?>
            <section class="hero" style="background-image: url('images/l.jpg');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">Jelajahi Dunia Komputer Bersama Kami</h1>
                        <p class="hero-subtitle">Pelajari sejarah, jenis, dan teknologi komputer terkini</p>
                        <a href="sejarah.php" class="cta-button">Mulai Petualangan</a>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container">
                    <h1 class="section-title">Konten Pembelajaran</h1>
                    <div class="cards-wrapper">
                        <div class="card animate-card" style="--delay: 0.2s;">
                            <div class="card-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h2>Sumber Belajar</h2>
                            <p>Jelajahi perjalanan inovasi teknologi komputer dari masa ke masa, dan temukan bagaimana penemuan-penemuan hebat telah mengubah dunia kita.</p>
                            <a href="sejarah.php" class="button">Jelajahi Sekarang</a>
                        </div>
                        
                        <div class="card animate-card" style="--delay: 0.4s;">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h2>Ragam Jenis Komputer</h2>
                            <p>Pelajari beragam jenis komputer yang ada saat ini, dari yang terkecil hingga supercomputer, dan pahami peran pentingnya dalam kehidupan sehari-hari kita.</p>
                            <a href="jenis.php" class="button">Jelajahi Sekarang</a>
                        </div>
                        
                        <div class="card animate-card" style="--delay: 0.6s;">
                            <div class="card-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h2>Kuis</h2>
                            <p>Uji dan tingkatkan pengetahuan Anda melalui serangkaian kuis menarik dan menantang, dirancang untuk memperkuat pemahaman Anda tentang dunia komputer.</p>
                            <a href="kuis.php" class="button">Jelajahi Sekarang</a>
                        </div>
                    </div>
                </div>
            </section>

            </main>
        <section class="features-timeline">
            <div class="container">
                <h2 class="section-title">Fitur dan Timeline Pembelajaran</h2>
                <div class="timeline">
                    <div class="timeline-item animate-timeline">
                        <div class="timeline-content">
                            <h3 style="color: #4a90e2;">Sejarah Komputer</h3>
                            <p style="font-size: 16px; line-height: 1.5;">Sejarah komputer dimulai dari alat hitung kuno seperti abacus, diikuti kalkulator mekanik oleh Blaise Pascal dan mesin konsep Charles Babbage. Pada abad ke-20, komputer elektronik seperti ENIAC dikembangkan, diikuti penemuan transistor yang mengurangi ukurannya. Komputer pribadi mulai populer pada 1970-an dengan Apple II dan IBM PC. Internet dan teknologi terus mendorong evolusi komputer menjadi perangkat kecil dan canggih seperti laptop dan smartphone.</p>
                        </div>
                        <div class="timeline-image">
                            <img src="images/sejarah-komputer.jpg" alt="Materi Berkualitas">
                        </div>
                    </div>
                    <div class="timeline-item animate-timeline">
                        <div class="timeline-content">
                        <h3 style="color: #4a90e2;">Jenis-Jenis Komputer</h3>
                        <p style="font-size: 16px; line-height: 1.5;">
                                Komputer adalah perangkat yang digunakan untuk memproses data dan menjalankan berbagai aplikasi. 
                                Berdasarkan jenis dan penggunaannya, komputer dapat dikategorikan dalam beberapa tipe. 
                                Berikut adalah jenis-jenis komputer secara lengkap:
                            </p>
                            <ul>
                                <li><strong>Komputer Super (Supercomputer):</strong> Untuk pemrosesan data kompleks seperti simulasi cuaca.</li>
                                <li><strong>Mainframe:</strong> Digunakan organisasi besar untuk memproses data dalam jumlah besar.</li>
                                <li><strong>Komputer Mini (Minicomputer):</strong> Untuk perusahaan menengah, mendukung beberapa pengguna.</li>
                                <li><strong>Komputer Mikro (PC):</strong> Untuk penggunaan pribadi seperti desktop dan laptop.</li>
                                <li><strong>Komputer Tablet:</strong> Portabel dengan layar sentuh untuk membaca atau mengakses internet.</li>
                                <li><strong>Komputer Embedded:</strong> Tertanam dalam perangkat lain seperti ponsel atau peralatan rumah tangga.</li>
                            </ul>
                            <p>
                                Setiap jenis komputer dirancang untuk memenuhi kebutuhan tertentu berdasarkan penggunaannya.
                            </p>
                        </div>
                        <div class="timeline-image">
                            <img src="images/jenis.jpg" alt="Pembelajaran Interaktif">
                        </div>
                    </div>
                </div>
                <div class="timeline-item animate-timeline">
                    <div class="timeline-content">
                    <h3 style="color: #4a90e2;">Kuis Interaktif</h3>
                    <p style="font-size: 16px; line-height: 1.5;">Ikuti kuis kami yang terdiri dari pertanyaan seputar IT dan teknologi. Melalui kuis interaktif dan tantangan menarik, Anda akan memiliki kesempatan untuk menguji pengetahuan Anda, mendapatkan wawasan baru, dan bahkan menemukan area-area yang perlu dipelajari lebih lanjut di bidang teknologi.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="images/kuis.jpg" alt="Jaringan Profesional">
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
.hero {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #fff;
    padding: 120px 0;
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); 
    z-index: 1;
}

.hero .container {
    position: relative;
    z-index: 2;
}

.hero-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    animation: fadeInUp 0.8s ease-out;
}

.hero-subtitle {
    font-size: 1.4rem;
    margin-bottom: 30px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    animation: fadeInUp 1s ease-out;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #fff;
    color: #333;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    animation: fadeInUp 1.2s ease-out;
}

.cta-button:hover {
    background-color: #f0f0f0;
    transform: translateY(-3px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 80px 0;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }
}

.content {
    padding: 80px 0;
    background-color: #f8f9fa;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.cards-wrapper {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    perspective: 1000px;
}

.card {
    flex: 1;
    min-width: 300px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    text-align: center;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    opacity: 0;
    transform: translateY(50px) rotateX(-10deg);
}

.card.show {
    opacity: 1;
    transform: translateY(0) rotateX(0);
}

.card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.card-icon {
    font-size: 60px;
    color: #007bff;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.card:hover .card-icon {
    transform: scale(1.2) rotate(10deg);
}

.card h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 15px;
}

.card p {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.button {
    display: inline-block;
    padding: 12px 25px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.button:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-on-scroll {
    opacity: 0;
    animation: fadeInUp 0.6s ease-out forwards;
}

.card:nth-child(1) {
    animation-delay: 0.2s;
}

.card:nth-child(2) {
    animation-delay: 0.4s;
}

.card:nth-child(3) {
    animation-delay: 0.6s;
}

@media (max-width: 768px) {
    .cards-wrapper {
        flex-direction: column;
    }
    
    .card {
        min-width: 100%;
        margin-bottom: 30px;
    }
}

.features-timeline {
    background-color: #ffffff;
    padding: 60px 0;
    color: #000;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
    font-size: 2.5rem;
    color: #7b68ee;
}

.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 60px;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 1.5s ease, transform 1.5s ease;
}

.timeline-item.show {
    opacity: 1;
    transform: translateY(0);
}

.timeline-content {
    flex: 1;
    padding-right: 40px;
}

.timeline-content h3 {
    color: #7b68ee;
    font-size: 2rem;
    margin-bottom: 20px;
}

.timeline-content p {
    font-size: 1.1rem;
    line-height: 1.6;
}

.timeline-image {
    flex: 1;
}

.timeline-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

@media screen and (max-width: 768px) {
    .timeline-item {
        flex-direction: column;
    }
    
    .timeline-content {
        padding-right: 0;
        margin-bottom: 20px;
    }
}

.user-info {
    display: flex;
    align-items: center;
    background-color: #f0f0f0;
    border-radius: 5px;
    padding: 5px 10px;
}

.user-avatar {
    font-size: 24px;
    margin-right: 10px;
    color: #333;
}

.user-details {
    display: flex;
    flex-direction: column;
}

.user-name {
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.btn-logout {
    background-color: #dc3545;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.9rem;
}

.btn-logout:hover {
    background-color: #c82333;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.animate-card');
    const timelineItems = document.querySelectorAll('.animate-timeline');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                if (entry.target.classList.contains('animate-card')) {
                    entry.target.style.transitionDelay = entry.target.style.getPropertyValue('--delay');
                }
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => {
        observer.observe(card);
    });

    timelineItems.forEach(item => {
        observer.observe(item);
    });
});
</script>

        <section class="profile">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Profil Pengembang</h2>
                <div class="profile-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="profile-card">
                        <div class="profile-image">
                            <img src="images/saya.jpg" alt="Foto Profil Pengembang">
                            <div class="profile-overlay">
                                <div class="profile-social">
                                    <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                                    <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-info">
                            <h3>Wiwit Adek Saputra</h3>
                            <p class="job-title">Web Developer & Pendidik Teknologi</p>
                            <p class="bio">Saya adalah seorang pengembang web yang bersemangat dan pendidik teknologi dengan pengalaman lebih dari 5 tahun dalam industri ini. Saya percaya bahwa pendidikan teknologi harus dapat diakses oleh semua orang, dan itulah mengapa saya menciptakan platform pembelajaran ini.</p>
                            <div class="skills">
                                <span class="skill-tag">HTML</span>
                                <span class="skill-tag">CSS</span>
                                <span class="skill-tag">JavaScript</span>
                                <span class="skill-tag">PHP</span>
                                <span class="skill-tag">MySQL</span>
                            </div>
                            <a href="https://wa.me/your_number" class="btn-contact">Hubungi Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <button id="back-to-top" title="Kembali ke atas">
                <i class="fas fa-chevron-up"></i>
            </button>
        </section>
    </main>



    <style>
    .features-timeline {
        background-color: #ffffff;
        padding: 60px 0;
        color: #000;
    }

    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #7b68ee;
    }

    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }

    .timeline-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
    }

    .timeline-content {
        flex: 1;
        padding-right: 40px;
    }

    .timeline-content h3 {
        color: #7b68ee;
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .timeline-content p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .timeline-image {
        flex: 1;
    }

    .timeline-image img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* profil */
    .profile {
    background-color: #f9f9f9;
    padding: 80px 0;
}

.profile-content {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-card {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    max-width: 900px;
    width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.profile-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.profile-image {
    flex: 0 0 300px;
    position: relative;
    overflow: hidden;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.profile-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.profile-card:hover .profile-overlay {
    opacity: 1;
}

.profile-social a {
    color: #fff;
    font-size: 24px;
    margin: 0 10px;
    transition: transform 0.3s ease;
}

.profile-social a:hover {
    transform: scale(1.2);
}

.profile-info {
    flex: 1;
    padding: 30px;
}

.profile-info h3 {
    font-size: 28px;
    margin-bottom: 10px;
    color: #333;
}

.job-title {
    font-style: italic;
    color: #666;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.bio {
    line-height: 1.8;
    margin-bottom: 25px;
    color: #555;
}

.skills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 25px;
}

.skill-tag {
    background-color: #e9f5ff;
    color: #007bff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.skill-tag:hover {
    background-color: #007bff;
    color: #fff;
}

.btn-contact {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-contact:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

/* footer */
footer {
    background: linear-gradient(to right, #2c3e50, #3498db);
    color: #ecf0f1;
    padding: 60px 0 30px;
    position: relative;
    overflow: hidden;
}

footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(to right, #e74c3c, #f39c12, #2ecc71, #3498db);
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-section {
    flex: 1;
    min-width: 250px;
    margin-bottom: 30px;
}

.footer-logo img {
    max-width: 200px;
    height: auto;
    margin-bottom: 15px;
}

.footer-section h4 {
    color: #f39c12;
    font-size: 1.2rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}

.footer-section h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background-color: #f39c12;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #ecf0f1;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #f39c12;
}

.footer-social a {
    color: #ecf0f1;
    font-size: 1.5rem;
    margin-right: 15px;
    transition: color 0.3s ease;
}

.footer-social a:hover {
    color: #f39c12;
}

.footer-contact p {
    margin-bottom: 10px;
}

.footer-bottom {
    text-align: center;
    padding-top: 30px;
    margin-top: 40px;
    border-top: 1px solid rgba(236, 240, 241, 0.1);
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
    }
    
    .footer-section {
        margin-right: 0;
        margin-bottom: 30px;
    }
}

@media (max-width: 768px) {
    .profile-card {
        flex-direction: column;
    }

    .profile-image {
        flex: 0 0 200px;
    }

    .profile-info {
        padding: 20px;
    }
}

    @media screen and (max-width: 768px) {
        .timeline-item {
            flex-direction: column;
        }
        
        .timeline-content {
            padding-right: 0;
            margin-bottom: 20px;
        }
    }
    </style>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images/logo-footer.png" alt="Logo Footer" style="width: 300px; height: auto;">
                </div>
               
                <div class="footer-links">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><a href="sejarah.php">Sejarah</a></li>
                        <li><a href="jenis.php">Jenis-Jenis Komputer</a></li>
                        <li><a href="kuis.php">Kuis</a></li>
                      
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Ikuti Kami</h4>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="footer-contact">
                    <h4>Kontak Kami</h4>
                    <p>Email: info@pembelajarankomputer.com</p>
                    <p>Telepon: +62 123 4567 890</p>
                    <p>Alamat: Jl. Teknologi No. 123, Jakarta, Indonesia</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Pembelajaran Komputer. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    <script>
    var backToTopButton = document.getElementById("back-to-top");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block";
            setTimeout(() => {
                backToTopButton.style.opacity = "1";
            }, 10);
        } else {
            backToTopButton.style.opacity = "0";
            setTimeout(() => {
                backToTopButton.style.display = "none";
            }, 300);
        }
    }

    backToTopButton.onclick = function() {
        scrollToTop(300);
    }

    function scrollToTop(duration) {
        var start = window.pageYOffset;
        var startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

        function scroll(time) {
            var now = 'now' in window.performance ? performance.now() : new Date().getTime();
            var time = Math.min(1, ((now - startTime) / duration));
            window.scroll(0, Math.ceil((1 - time) * start));

            if (time < 1) requestAnimationFrame(scroll);
        }

        requestAnimationFrame(scroll);
    }
</script>
</body>
</html>
<!--  
<?php else: ?>
    <section class="hero" style="background-image: url('images/l.jpg');">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Selamat Datang di Pembelajaran Komputer</h1>
                <p class="hero-subtitle">Silakan login untuk mengakses semua fitur</p>
                <a href="login_register/index.php" class="cta-button">Login Sekarang</a>
            </div>
        </div>
    </section>
<?php endif; ?>
</main>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="images/logo-footer.png" alt="Logo Footer" style="width: 300px; height: auto;">
            </div>
           
            <div class="footer-links">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="sejarah.php">Sejarah</a></li>
                    <li><a href="jenis.php">Jenis-Jenis Komputer</a></li>
                    <li><a href="kuis.php">Kuis</a></li>
                  
                </ul>
            </div>
            <div class="footer-social">
                <h4>Ikuti Kami</h4>
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="footer-contact">
                <h4>Kontak Kami</h4>
                <p>Email: info@pembelajarankomputer.com</p>
                <p>Telepon: +62 123 4567 890</p>
                <p>Alamat: Jl. Teknologi No. 123, Jakarta, Indonesia</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Pembelajaran Komputer. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>
<script>
var backToTopButton = document.getElementById("back-to-top");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = "block";
        setTimeout(() => {
            backToTopButton.style.opacity = "1";
        }, 10);
    } else {
        backToTopButton.style.opacity = "0";
        setTimeout(() => {
            backToTopButton.style.display = "none";
        }, 300);
    }
}

backToTopButton.onclick = function() {
    scrollToTop(300);
}

function scrollToTop(duration) {
    var start = window.pageYOffset;
    var startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

    function scroll(time) {
        var now = 'now' in window.performance ? performance.now() : new Date().getTime();
        var time = Math.min(1, ((now - startTime) / duration));
        window.scroll(0, Math.ceil((1 - time) * start));

        if (time < 1) requestAnimationFrame(scroll);
    }

    requestAnimationFrame(scroll);
}
</script>
</body>
</html> -->
