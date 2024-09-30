<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis-Jenis Komputer Modern</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }    
       
        .hero {
            background: linear-gradient(135deg, #0056b3, #00c6ff);
            color: white;
            padding: 100px 0;
            text-align: center;
            border-bottom: 5px solid #ffcc00;
            overflow: hidden;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transform: translateY(-20px); 
            animation: slideIn 1s forwards; 
        }
        .hero p {
            font-size: 1.5rem;
            margin-top: 10px;
            opacity: 0; 
            transform: translateY(-20px); 
            animation: slideIn 1s forwards 0.5s; 
        }
        @keyframes slideIn {
            to {
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        .section-title {
            font-size: 2.5rem;
            color: #0056b3;
            text-align: center;
            margin: 40px 0 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .computer-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .computer-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            height: 350px; /* Set a fixed height for uniformity */
        }
        .computer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .card-front {
            text-align: center;
            padding: 20px;
            background-color: #e9ecef;
            height: 100%; /* Ensure it takes full height */
        }
        .card-back {
            padding: 20px;
            background-color: #f8f9fa;
            height: 100%; /* Ensure it takes full height */
        }
        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
            <div class="logo-wrapper">
                    <a href="index.php">
                        <img src="https://fontmeme.com/permalink/240902/1085ef830d801e5da2ed8822411b3e08.png" alt="one-piece-manga-font" border="0" style="width: 140px; height: auto;">
                    </a>
                </div>
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="sejarah.php">Sejarah Komputer</a></li>
                        <li><a href="jenis.php">Jenis-Jenis Komputer</a></li>
                        <li><a href="kuis.php">Kuis Interaktif</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1 class="page-title">Jenis-Jenis Komputer Modern</h1>
                <p class="hero-text">Eksplorasi dunia komputer modern dan perkembangannya</p>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <article class="jenis-komputer-article">
                    <h2 class="section-title">Pengertian Komputer</h2>
                    <p>Komputer modern hadir dalam berbagai bentuk, ukuran, dan kapasitas yang beragam, masing-masing dirancang secara khusus untuk memenuhi kebutuhan spesifik dan preferensi pengguna yang berbeda-beda. Dari perangkat portabel yang ringkas hingga sistem yang powerful, setiap jenis komputer memiliki keunggulan dan karakteristik uniknya sendiri. Berikut adalah beberapa jenis utama komputer yang umum digunakan dan populer di era digital saat ini, beserta penjelasan singkat mengenai fitur dan fungsi utamanya:</p>

        <section class="content">
            <div class="container">
                <div class="intro">
                </div>
                <div class="computer-types">
                    <div class="computer-type" data-aos="fade-up" data-type="pc">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/pc.jpg" alt="Personal Computer" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Personal Computer (PC)</h3>
                            </div>
                            <div class="card-back">
                                <p>Personal Computer (PC) adalah komputer yang dirancang untuk penggunaan individu dan menjadi populer pada tahun 1980-an, merevolusi penggunaan komputer di rumah dan kantor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="100" data-type="tablet">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/tablett.jpg" alt="Tablet" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Tablet</h3>
                            </div>
                            <div class="card-back">
                                <p>Tablet adalah perangkat komputer portabel dengan layar sentuh yang menggabungkan fungsi komputer dan smartphone dalam bentuk yang lebih besar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="200" data-type="all-in-one">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/all-in-one-product.jpg" alt="Komputer All-in-One" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Komputer All-in-One</h3>
                            </div>
                            <div class="card-back">
                                <p>Komputer All-in-One menggabungkan monitor dan unit sistem dalam satu perangkat, menawarkan desain yang ringkas dan efisien untuk ruang terbatas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="300" data-type="laptop">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/laptop.jpg" alt="Laptop" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Laptop</h3>
                            </div>
                            <div class="card-back">
                                <p>Laptop atau komputer jinjing menawarkan portabilitas dan kinerja yang setara dengan komputer desktop.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="400" data-type="smartphone">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/smarthphone.jpg" alt="Smartphone" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Smartphone</h3>
                            </div>
                            <div class="card-back">
                                <p>Smartphone adalah komputer genggam yang menggabungkan fungsi telepon seluler dengan komputer personal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="500" data-type="desknote">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/desknotee.jpg" alt="Desknote" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Desknote</h3>
                            </div>
                            <div class="card-back">
                                <p>Desknote adalah komputer hybrid yang menggabungkan fitur desktop dan laptop, menawarkan performa tinggi dengan portabilitas terbatas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="500" data-type="netbook">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/netbook.jpg" alt="Netbook" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Netbook</h3>
                            </div>
                            <div class="card-back">
                                <p>Netbook adalah komputer jinjing berukuran kecil dan ringan yang dirancang terutama untuk akses internet dan tugas-tugas ringan, dengan harga yang lebih terjangkau.</p>
                            </div>
                        </div>
                    </div>
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="500" data-type="superkomputer">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/super komputer.jpg" alt="Superkomputer" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Superkomputer</h3>
                            </div>
                            <div class="card-back">
                                <p>Superkomputer adalah komputer yang sangat kuat dan canggih, dirancang untuk melakukan perhitungan kompleks dan pemrosesan data dalam skala besar dengan kecepatan luar biasa.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="computer-type" data-aos="fade-up" data-aos-delay="500" data-type="komputerTertanam">
                        <div class="computer-card">
                            <div class="card-front">
                                <img src="images/komputer tertanam.jpg" alt="Komputer Tertanam" class="computer-image" style="height: 200px; object-fit: cover;">
                                <h3>Komputer Tertanam</h3>
                            </div>
                            <div class="card-back">
                                <p>Komputer tertanam adalah komputer yang dirancang untuk melakukan fungsi tertentu dalam perangkat lain, sering kali dengan sumber daya terbatas dan tanpa antarmuka pengguna yang terlihat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="content">
            <div class="container">
                <article class="jenis-komputer-article">
                    <h2 class="section-title">Kesimpulan</h2>
                    <p>Demikianlah berbagai jenis komputer modern yang telah kita bahas. Setiap jenis memiliki keunikan dan kegunaannya masing-masing, mulai dari komputer desktop yang powerful hingga perangkat mobile yang portabel. Perkembangan teknologi terus mendorong inovasi dalam dunia komputer, menciptakan perangkat yang semakin canggih dan efisien. Dengan memahami karakteristik dan fungsi dari setiap jenis komputer, kita dapat memilih perangkat yang paling sesuai dengan kebutuhan kita. Mari terus mengikuti perkembangan teknologi komputer dan memanfaatkannya dengan bijak dalam kehidupan sehari-hari.</p>
                </article>
            </div>
        </section>
    </main>
    <div id="computerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle"></h2>
            <div id="modalContent"></div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tentang Kami</h3>
                    <p>Pembelajaran Komputer Modern adalah sumber informasi terpercaya tentang perkembangan teknologi komputer.</p>
                </div>
                <div class="footer-section">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sejarah.php">Sejarah Komputer</a></li>
                        <li><a href="jenis.php">Jenis-Jenis Komputer</a></li>
                        <li><a href="kuis.php">Kuis</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <p>Email: info@pembelajarankomputer.com</p>
                    <p>Telepon: (021) 1234-5678</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Pembelajaran Komputer Modern. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="js/script.js"></script>
    <script src="js/computer-types.js"></script>
</body>
</html>