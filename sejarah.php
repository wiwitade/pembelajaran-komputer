<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Komputer - Pembelajaran Komputer Modern</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
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
            margin-top: 40px;
            font-size: 28px;
            color: #007bff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .info-box {
            background: #e9ecef;
            padding: 20px;
            border-left: 5px solid #007bff;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .timeline {
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .timeline-item {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 4px solid #007bff;
            background: #f9f9f9;
            border-radius: 5px;
            transition: transform 0.3s;
        }
        .timeline-item:hover {
            transform: scale(1.02);
        }
        .timeline-list {
            list-style: none;
            padding: 0;
        }
        .timeline-list li {
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }
        .timeline-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 10px;
            width: 8px;
            height: 8px;
            background: #007bff;
            border-radius: 50%;
        }
        .conclusion-box {
            background: #007bff;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
     
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
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 12px;
            cursor: pointer;
            display: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: background 0.3s;
        }
        #back-to-top:hover {
            background: #0056b3;
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
                <h1 class="page-title">Sejarah Komputer</h1>
                <p class="hero-text">Menjelajahi perjalanan evolusi teknologi komputer dari masa ke masa</p>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <article class="sejarah-article">
                    <h2 class="section-title animate__animated animate__fadeInLeft">Pengertian Komputer</h2>
                    <p>Komputer adalah alat yang dipakai untuk mengolah data menurut perintah yang telah diprogram. Kata komputer semula dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmetika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri. Pada awalnya, pengolahan informasi hampir eksklusif berhubungan dengan masalah aritmatika, tetapi komputer modern dipakai untuk banyak tugas yang tidak berhubungan dengan matematika.</p>

                    <p>Secara luas, Komputer dapat didefinisikan sebagai suatu peralatan elektronik yang terdiri dari beberapa komponen, yang dapat bekerja sama antara komponen satu dengan yang lain untuk menghasilkan suatu informasi berdasarkan program dan data yang ada. Konsep komponen-komponen komputer ini berasal dari arsitektur von Neumann, ketika John von Neumann memaparkan arsitekturnya pada tahun 1945.</p>

                    <div class="info-box animate__animated animate__fadeInRight">
                        <h3>Tahukah Anda?</h3>
                        <p>Konsep komponen-komponen komputer berasal dari arsitektur von Neumann, yang dipaparkan oleh John von Neumann pada tahun 1945.</p>
                    </div>

                    <h2 class="section-title animate__animated animate__fadeInLeft">Perjalanan Evolusi Komputer</h2>
                    <p>Komputer adalah salah satu inovasi paling penting dalam sejarah teknologi. Dari perangkat mekanis sederhana hingga mesin modern yang kita gunakan saat ini, perkembangan komputer telah melalui berbagai fase yang menakjubkan.</p>
                    <div class="timeline">
                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Era Pra-Komputer</h3>
                            <p>Sebelum komputer modern, manusia telah mengembangkan berbagai alat bantu hitung yang sangat berpengaruh dalam sejarah perhitungan:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-abacus"></i>
                                    <strong>Abacus (sekitar 2400 SM):</strong>
                                    <p>Alat hitung tertua yang diketahui, berasal dari Babilonia, digunakan untuk melakukan perhitungan dasar seperti penjumlahan dan pengurangan.</p>
                                </li>
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Tulang Napier (1617):</strong>
                                    <p>Diciptakan oleh John Napier, alat ini membantu dalam proses perkalian dan merupakan salah satu inovasi penting dalam sejarah matematika.</p>
                                </li>
                                <li>
                                    <i class="fas fa-ruler-combined"></i>
                                    <strong>Slide Rule (1620-an):</strong>
                                    <p>Alat hitung analog yang digunakan hingga era kalkulator elektronik, memungkinkan pengguna untuk melakukan perhitungan kompleks dengan cepat dan efisien.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Era Komputer Mekanis</h3>
                            <p>Komputer mekanis awal menggunakan roda gigi dan tuas untuk melakukan perhitungan. Inovasi ini menjadi dasar bagi perkembangan teknologi komputer selanjutnya:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Pascaline (1642):</strong>
                                    <p>Kalkulator mekanis pertama yang diciptakan oleh Blaise Pascal, dirancang untuk membantu dalam perhitungan aritmetika dasar.</p>
                                </li>
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Mesin Leibniz (1673):</strong>
                                    <p>Diciptakan oleh Gottfried Leibniz, mesin ini mampu melakukan operasi perkalian dan merupakan salah satu langkah awal menuju komputer modern.</p>
                                </li>
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Difference Engine (1822):</strong>
                                    <p>Dirancang oleh Charles Babbage, mesin ini merupakan kalkulator otomatis pertama yang dapat menghitung dan mencetak tabel matematis.</p>
                                </li>
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Analytical Engine (1837):</strong>
                                    <p>Konsep komputer serbaguna pertama oleh Babbage, yang memiliki kemampuan untuk melakukan berbagai operasi dengan input/output, memori, dan unit pemrosesan, menjadi cikal bakal komputer modern.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Era Komputer Elektromekanis</h3>
                            <p>Periode transisi antara mekanis murni dan elektronik penuh:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-calculator"></i>
                                    <strong>Tabulator Herman Hollerith (1890):</strong>
                                    <p>Menggunakan kartu berlubang untuk sensus AS.</p>
                                </li>
                                <li>
                                    <i class="fas fa-microchip"></i>
                                    <strong>Z1 (1938):</strong>
                                    <p>Komputer program-terkendali pertama oleh Konrad Zuse.</p>
                                </li>
                                <li>
                                    <i class="fas fa-server"></i>
                                    <strong>Harvard Mark I (1944):</strong>
                                    <p>Komputer elektromekanis skala besar oleh IBM dan Harvard University.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Era Komputer Elektronik</h3>
                            <p>Komputer elektronik menggunakan komponen listrik untuk pemrosesan data:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-microchip"></i>
                                    <strong>ABC (Atanasoff-Berry Computer) (1942):</strong>
                                    <p>Komputer elektronik pertama untuk menyelesaikan sistem persamaan linear.</p>
                                </li>
                                <li>
                                    <i class="fas fa-lock"></i>
                                    <strong>Colossus (1943):</strong>
                                    <p>Komputer elektronik pertama yang dapat diprogram, digunakan untuk memecahkan kode Nazi.</p>
                                </li>
                                <li>
                                    <i class="fas fa-server"></i>
                                    <strong>ENIAC (1945):</strong>
                                    <p>Komputer serbaguna elektronik pertama, menggunakan 17.000 tabung vakum.</p>
                                </li>
                                <li>
                                    <i class="fas fa-desktop"></i>
                                    <strong>UNIVAC I (1951):</strong>
                                    <p>Komputer komersial pertama, digunakan untuk bisnis dan pemerintahan.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Generasi Komputer</h3>
                            <p>Generasi komputer dapat diklasifikasikan berdasarkan kemajuan teknologi yang digunakan, dimulai dari komputer yang berukuran besar dan menggunakan tabung vakum hingga komputer modern yang canggih dengan kecerdasan buatan. Berikut adalah penjelasan tentang setiap generasi komputer:</p>
                            
                            <ol>
                                <li>
                                    <strong>Generasi Pertama (1940-an - 1950-an):</strong>
                                    <ul>
                                        <li><strong>Teknologi Utama:</strong> Tabung vakum digunakan sebagai komponen utama untuk sirkuit elektronik.</li>
                                        <li><strong>Karakteristik:</strong>
                                            <ul>
                                                <li>Komputer berukuran sangat besar, membutuhkan ruangan besar dan sistem pendingin.</li>
                                                <li>Pemrograman dilakukan dengan bahasa mesin (machine language) yang sulit dan rentan terhadap kesalahan.</li>
                                                <li>Kapasitas penyimpanan dan kecepatan pemrosesan yang sangat terbatas.</li>
                                                <li><strong>Contoh:</strong> ENIAC (Electronic Numerical Integrator and Computer) dan UNIVAC I (Universal Automatic Computer I).</li>
                                            </ul>
                                        </li>
                                        <li><strong>Kelemahan:</strong>
                                            <ul>
                                                <li>Boros energi dan sering mengalami kerusakan.</li>
                                                <li>Biaya pembuatan dan operasi yang sangat tinggi.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <strong>Generasi Kedua (1950-an - 1960-an):</strong>
                                    <ul>
                                        <li><strong>Teknologi Utama:</strong> Transistor menggantikan tabung vakum.</li>
                                        <li><strong>Karakteristik:</strong>
                                            <ul>
                                                <li>Ukuran komputer menjadi lebih kecil, lebih cepat, dan lebih efisien.</li>
                                                <li>Menggunakan bahasa assembly yang lebih mudah dibandingkan bahasa mesin.</li>
                                                <li>Penyimpanan data menggunakan pita magnetik dan disk magnetik.</li>
                                                <li><strong>Contoh:</strong> IBM 7094, UNIVAC II.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Kelemahan:</strong>
                                            <ul>
                                                <li>Meskipun lebih kecil dari generasi pertama, komputer ini masih cukup besar dan mahal.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <strong>Generasi Ketiga (1960-an - 1970-an):</strong>
                                    <ul>
                                        <li><strong>Teknologi Utama:</strong> Sirkuit terpadu (Integrated Circuits/ICs), yang memungkinkan penggabungan ratusan transistor dalam satu chip silikon.</li>
                                        <li><strong>Karakteristik:</strong>
                                            <ul>
                                                <li>Ukuran komputer semakin kecil dan lebih cepat.</li>
                                                <li>Menggunakan sistem operasi yang memungkinkan penggunaan multiprogramming dan multitasking.</li>
                                                <li>Kemampuan menjalankan bahasa pemrograman tingkat tinggi seperti COBOL dan FORTRAN.</li>
                                                <li><strong>Contoh:</strong> IBM System/360, UNIVAC 1108.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Kelemahan:</strong>
                                            <ul>
                                                <li>Keterbatasan dalam hal kompatibilitas perangkat keras dan perangkat lunak antara satu sistem dengan yang lain.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <strong>Generasi Keempat (1970-an - Sekarang):</strong>
                                    <ul>
                                        <li><strong>Teknologi Utama:</strong> Microprocessor atau mikroprosesor, yang mengintegrasikan seluruh CPU pada satu chip.</li>
                                        <li><strong>Karakteristik:</strong>
                                            <ul>
                                                <li>Komputer menjadi semakin kecil, lebih cepat, dan lebih murah.</li>
                                                <li>Penggunaan komputer pribadi (PC) meluas ke rumah dan kantor.</li>
                                                <li>Pengembangan antarmuka grafis pengguna (GUI) yang lebih user-friendly.</li>
                                                <li><strong>Contoh:</strong> IBM PC, Apple Macintosh, Intel 4004 (mikroprosesor pertama).</li>
                                            </ul>
                                        </li>
                                        <li><strong>Kelebihan:</strong>
                                            <ul>
                                                <li>Komputer menjadi lebih terjangkau dan mudah digunakan oleh masyarakat umum.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <strong>Generasi Kelima (Sekarang - Masa Depan):</strong>
                                    <ul>
                                        <li><strong>Teknologi Utama:</strong> Fokus pada kecerdasan buatan (AI), komputasi paralel, komputasi kuantum, dan komputasi awan (cloud computing).</li>
                                        <li><strong>Karakteristik:</strong>
                                            <ul>
                                                <li>Pengembangan komputer yang cerdas, yang mampu belajar dan membuat keputusan sendiri.</li>
                                                <li>Meningkatnya penggunaan algoritma pembelajaran mesin (machine learning) dan jaringan saraf untuk pemrosesan data dan pengambilan keputusan.</li>
                                                <li>Komputasi kuantum mulai berkembang, meskipun masih dalam tahap penelitian dan pengembangan.</li>
                                                <li>Penggunaan komputasi awan untuk penyimpanan dan pemrosesan data secara online, mengurangi kebutuhan akan perangkat keras lokal yang kuat.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Kelebihan:</strong>
                                            <ul>
                                                <li>Kemampuan komputasi yang sangat tinggi, dengan aplikasi dalam berbagai bidang seperti pengobatan, ilmu data, robotika, dan lain-lain.</li>
                                                <li>Potensi untuk merevolusi banyak aspek kehidupan dengan menciptakan sistem yang lebih cerdas dan efisien.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            
                            <h4>Perkembangan Masa Depan</h4>
                            <p><strong>Generasi Enam (Potensial):</strong> Melibatkan teknologi seperti biokomputasi dan komputasi kuantum yang lebih lanjut, yang dapat membawa perubahan radikal dalam cara kita menggunakan komputer.</p>
                            
                            <p>Seiring waktu, setiap generasi komputer membawa peningkatan signifikan dalam hal ukuran, kecepatan, biaya, dan kapabilitas, yang pada akhirnya membawa kita ke era digital modern yang kita nikmati saat ini.</p>
                        </div>
                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Perkembangan Komputer Modern</h3>
                            <p>Era komputer modern ditandai dengan beberapa perkembangan penting yang mengubah lanskap teknologi:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-microchip"></i>
                                    <strong>Mikroprosesor (1971):</strong>
                                    <p>Intel 4004, chip komputer pertama yang mengintegrasikan seluruh CPU dalam satu chip.</p>
                                </li>
                                <li>
                                    <i class="fas fa-desktop"></i>
                                    <strong>Komputer Pribadi (1970-an - 1980-an):</strong>
                                    <p>Altair 8800 (1975) memulai revolusi komputer rumahan, diikuti Apple II (1977) dan IBM PC (1981) yang mempopulerkan komputer di rumah dan kantor.</p>
                                </li>
                                <li>
                                    <i class="fas fa-cogs"></i>
                                    <strong>Sistem Operasi:</strong>
                                    <p>MS-DOS (1981) menjadi standar untuk PC IBM, Mac OS (1984) memperkenalkan antarmuka grafis untuk Apple, Windows (1985) membawa GUI ke PC umum.</p>
                                </li>
                                <li>
                                    <i class="fas fa-globe"></i>
                                    <strong>World Wide Web (1989):</strong>
                                    <p>Diciptakan oleh Tim Berners-Lee di CERN, merevolusi cara informasi dibagikan dan diakses secara global.</p>
                                </li>
                                <li>
                                    <i class="fas fa-laptop"></i>
                                    <strong>Laptop (1981):</strong>
                                    <p>Osborne 1 menjadi komputer portabel pertama, membuka jalan untuk komputasi mobile.</p>
                                </li>
                                <li>
                                    <i class="fas fa-mobile-alt"></i>
                                    <strong>Smartphone (2000-an):</strong>
                                    <p>BlackBerry (2002) memperkenalkan email mobile, iPhone (2007) merevolusi touchscreen dan app ecosystem, Android (2008) membawa smartphone ke pasar massal.</p>
                                </li>
                                <li>
                                    <i class="fas fa-cloud"></i>
                                    <strong>Cloud Computing (2006):</strong>
                                    <p>Amazon Web Services meluncurkan layanan cloud publik, mengubah cara bisnis mengelola infrastruktur IT.</p>
                                </li>
                                <li>
                                    <i class="fas fa-tablet-alt"></i>
                                    <strong>Tablet (2010):</strong>
                                    <p>iPad memulai era komputasi tablet modern, menjembatani celah antara smartphone dan laptop.</p>
                                </li>
                                <li>
                                    <i class="fas fa-vr-cardboard"></i>
                                    <strong>Virtual Reality (2016):</strong>
                                    <p>Oculus Rift dan HTC Vive memperkenalkan VR konsumen berkualitas tinggi.</p>
                                </li>
                                <li>
                                    <i class="fas fa-robot"></i>
                                    <strong>AI dan Machine Learning (2010-an):</strong>
                                    <p>Kemajuan signifikan dalam kecerdasan buatan dan pembelajaran mesin, dengan aplikasi seperti asisten virtual dan pengolahan bahasa alami.</p>
                                </li>
                            </ul>
                            <p>Perkembangan ini tidak hanya meningkatkan kecepatan dan kapasitas komputasi, tetapi juga mengubah cara manusia berinteraksi dengan teknologi dan satu sama lain.</p>
                        </div>

                        <div class="timeline-item animate__animated animate__fadeInUp">
                            <h3>Tren Masa Depan Teknologi Komputer</h3>
                            <p>Perkembangan teknologi komputer terus berlanjut dengan pesat, membawa kita ke era baru komputasi. Beberapa tren utama yang akan membentuk masa depan teknologi komputer meliputi:</p>
                            <ul class="timeline-list">
                                <li>
                                    <i class="fas fa-brain"></i>
                                    <strong>Kecerdasan Buatan (AI) dan Pembelajaran Mesin:</strong>
                                    <p>Pengembangan sistem AI yang lebih canggih, mampu melakukan tugas kompleks dan pengambilan keputusan yang mendekati kemampuan manusia.</p>
                                </li>
                                <li>
                                    <i class="fas fa-atom"></i>
                                    <strong>Komputasi Kuantum:</strong>
                                    <p>Pemanfaatan prinsip mekanika kuantum untuk menciptakan komputer super cepat yang dapat memecahkan masalah kompleks dalam hitungan detik.</p>
                                </li>
                                <li>
                                    <i class="fas fa-network-wired"></i>
                                    <strong>Internet of Things (IoT):</strong>
                                    <p>Integrasi perangkat pintar dalam kehidupan sehari-hari, menciptakan ekosistem yang terhubung dan cerdas.</p>
                                </li>
                                <li>
                                    <i class="fas fa-vr-cardboard"></i>
                                    <strong>Augmented Reality (AR) dan Virtual Reality (VR):</strong>
                                    <p>Pengembangan teknologi immersive yang mengubah cara kita berinteraksi dengan informasi digital dan lingkungan virtual.</p>
                                </li>
                                <li>
                                    <i class="fas fa-server"></i>
                                    <strong>Edge Computing:</strong>
                                    <p>Pemrosesan data lebih dekat ke sumber, meningkatkan kecepatan respons dan efisiensi bandwidth.</p>
                                </li>
                                <li>
                                    <i class="fas fa-link"></i>
                                    <strong>Blockchain dan Teknologi Terdistribusi:</strong>
                                    <p>Peningkatan keamanan dan transparansi dalam transaksi digital dan manajemen data.</p>
                                </li>
                                <li>
                                    <i class="fas fa-microchip"></i>
                                    <strong>Komputasi Neuromorphic:</strong>
                                    <p>Pengembangan chip yang meniru struktur dan fungsi otak manusia untuk pemrosesan informasi yang lebih efisien.</p>
                                </li>
                                <li>
                                    <i class="fas fa-dna"></i>
                                    <strong>Komputasi DNA:</strong>
                                    <p>Pemanfaatan molekul DNA untuk penyimpanan dan pemrosesan data, menjanjikan kapasitas penyimpanan yang sangat besar.</p>
                                </li>
                            </ul>
                            <p>Tren-tren ini tidak hanya akan meningkatkan kemampuan komputasi, tetapi juga berpotensi mengubah fundamental cara kita hidup, bekerja, dan berinteraksi dengan teknologi di masa depan.</p>
                        </div>

                    <div class="conclusion-box animate__animated animate__fadeInUp">
                        <h3>Kesimpulan</h3>
                        <p>Sejarah komputer menunjukkan perkembangan yang luar biasa dalam waktu relatif singkat. Dari mesin mekanis sederhana hingga perangkat canggih yang kita gunakan saat ini, komputer telah mengubah cara kita hidup, bekerja, dan berinteraksi. Dengan inovasi yang terus berlanjut, masa depan komputasi menjanjikan kemungkinan yang hampir tak terbatas.</p>
                    </div>
                </article>
            </div>
        </section>
    </main>

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

    <button id="back-to-top" title="Kembali ke atas"><i class="fas fa-chevron-up"></i></button>

    <script src="js/script.js"></script>
    <script src="js/sejarah.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>