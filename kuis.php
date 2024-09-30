<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Seputar Komputer | Pembelajaran Komputer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/kuis.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
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
        
        .kuis-wrapper {
            max-width: 800px;
            margin: 40px auto;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            padding: 40px;
            transition: all 0.3s ease;
        }
        
        .kuis-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        #inputNamaContainer label {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
            display: block;
        }
        
        input[type="text"] {
            width: 80%; /* Mengubah lebar input agar tidak terlalu panjang */
            padding: 18px;
            margin: 15px 0 25px;
            border: 2px solid #ddd;
            border-radius: 15px;
            font-size: 18px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        input[type="text"]:focus {
            border-color: #3498db;
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.2);
        }
        
        #tingkatKesulitan {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        
        .btn-difficulty {
            margin: 0 10px 15px;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
        }
        
        #mudah { background-color: #2ecc71; color: white; }
        #sedang { background-color: #f39c12; color: white; }
        #sulit { background-color: #e74c3c; color: white; }
        
        .btn-difficulty:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }
        
        #pertanyaanContainer {
            margin-top: 40px;
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }
        
        #soal {
            font-size: 1.6rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
            line-height: 1.4;
        }
        
        .btn-option {
            background-color: #f8f9fa;
            color: #333;
            border: 2px solid #ddd;
            font-size: 1.1rem;
            padding: 20px;
            margin-bottom: 15px;
            text-align: left;
            transition: all 0.3s ease;
            border-radius: 12px;
            width: 100%;
            cursor: pointer;
        }
        
        .btn-option:hover {
            background-color: #e9ecef;
            transform: translateX(8px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        #timer {
            font-size: 1.4rem;
            font-weight: bold;
            color: #e74c3c;
            margin: 30px 0;
            text-align: center;
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        #hasilContainer {
            background-color: #f0f8ff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeIn 0.5s ease-out;
        }
        
        #hasilContainer h2 {
            color: #3498db;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: bold;
        }
        
        .hasil-wrapper {
            background-color: #ffffff;
            border: 1px solid #b0c4de;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            font-size: 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .hasil-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        .hasil-info p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .hasil-rekap h3 {
            font-size: 24px;
            margin-bottom: 25px;
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        .hasil-rekap li {
            margin-bottom: 25px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 18px;
            line-height: 1.8;
            transition: all 0.3s ease;
        }
        
        .hasil-rekap li:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        
        .hasil-rekap li strong {
            font-size: 20px;
            display: block; 
            margin-bottom: 10px;
            color: #3498db;
        }
        
        .benar {
            color: #2ecc71;
            font-weight: bold;
            font-size: 20px;
        }
        
        .salah {
            color: #e74c3c;
            font-weight: bold;
            font-size: 20px;
        }
        
        #skorAkhir, #waktuPenyelesaian {
            font-weight: bold;
            font-size: 24px;
            color: #3498db;
        }
        
        #ulangiKuis {
            display: block;
            margin: 40px auto 0;
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
        }
        
        #ulangiKuis:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
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
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero-text { font-size: 1.1rem; }
            .kuis-wrapper { padding: 30px; }
            .btn-difficulty { padding: 12px 25px; font-size: 16px; }
            #soal { font-size: 1.3rem; }
            .btn-option { font-size: 1rem; padding: 15px; }
            #timer { font-size: 1.2rem; }
            .hasil-info p { font-size: 18px; }
            .hasil-rekap li { font-size: 16px; }
            #ulangiKuis { font-size: 1.1rem; padding: 12px 25px; }
        }

    </style>
</head>
<body>
<header class="site-header">
<div class="container">
            <div class="header-content">
            <div class="logo-wrapper">
                    <a href="index.php">
                        <img src="https://fontmeme.com/permalink/240902/1085ef830d801e5da2ed8822411b3e08.png" alt="one-piece-manga-font" border="0" style="width: 150px; height: auto;">
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
            <h1 class="page-title">Kuis Interaktif</h1>
            <p class="hero-text">Uji pengetahuan Anda tentang komputer dengan kuis interaktif kami!</p>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="kuis-wrapper">
                    <div id="inputNamaContainer">
                        <label for="nama">Masukkan Nama Anda:</label>
                        <input type="text" id="nama" class="form-control" style="width: 80%;"> <!-- Mengubah lebar input agar tidak terlalu panjang -->
                        <div id="tingkatKesulitan">
                            <label>Pilih Tingkat Kesulitan:</label>
                            <button id="mudah" class="btn btn-difficulty">Mudah</button>
                            <button id="sedang" class="btn btn-difficulty">Sedang</button>
                            <button id="sulit" class="btn btn-difficulty">Sulit</button>
                        </div>
                    </div>
                    
                    <div id="pertanyaanContainer" style="display: none;">
                        <h2 id="soal"></h2>
                        <div id="pilihan" class="pilihan-wrapper"></div>
                        <div id="timer">Waktu tersisa: <span id="waktuTersisa">05:00</span></div>
                    </div>
                    
                    <div id="hasilContainer" style="display: none;">
                        <h2>Hasil Kuis</h2>
                        <div class="hasil-wrapper">
                            <div class="hasil-info">
                                <p><strong>Nama:</strong> <span id="namaPeserta"></span></p>
                                <p><strong>Tingkat Kesulitan:</strong> <span id="tingkatKesulitanHasil"></span></p>
                                <p><strong>Skor:</strong> <span id="skorAkhir"></span></p>
                                <p><strong>Waktu:</strong> <span id="waktuPenyelesaian"></span></p>
                            </div>
                            <div class="hasil-rekap">
                                <h3>Rekap Jawaban:</h3>
                                <ul id="rekapJawaban"></ul>
                            </div>
                        </div>
                        <button id="ulangiKuis" class="btn btn-primary">Ulangi Kuis</button>
                    </div>
                </div>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="sejarah.html">Sejarah Komputer</a></li>
                        <li><a href="jenis.html">Jenis-Jenis Komputer</a></li>
                        <li><a href="kuis.html">Kuis</a></li>
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

    <script>
    const pertanyaanMudah = [
        {
            soal: "Apa kepanjangan dari CPU?",
            pilihan: ["Central Processing Unit", "Computer Personal Unit", "Central Personal Unit", "Computer Processing Unit"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari RAM?",
            pilihan: ["Random Access Memory", "Read-Only Memory", "Random Access Module", "Read-Only Module"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari GPU?",
            pilihan: ["Graphics Processing Unit", "General Purpose Unit", "Graphics Processing Module", "General Purpose Module"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari HDD?",
            pilihan: ["Hard Disk Drive", "High Density Drive", "Hard Disk Dual", "High Density Dual"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari SSD?",
            pilihan: ["Solid State Drive", "Secure Storage Device", "Solid State Dual", "Secure Storage Dual"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari USB?",
            pilihan: ["Universal Serial Bus", "Universal Storage Bus", "Universal Serial Dual", "Universal Storage Dual"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari LAN?",
            pilihan: ["Local Area Network", "Long Area Network", "Local Access Network", "Long Access Network"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari WAN?",
            pilihan: ["Wide Area Network", "Wireless Access Network", "Wide Access Network", "Wireless Area Network"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari VPN?",
            pilihan: ["Virtual Private Network", "Virtual Public Network", "Virtual Private Node", "Virtual Public Node"],
            jawabanBenar: 0
        },
        {
            soal: "Apa kepanjangan dari URL?",
            pilihan: ["Uniform Resource Locator", "Universal Resource Locator", "Uniform Resource Link", "Universal Resource Link"],
            jawabanBenar: 0
        }
    ];

    const pertanyaanSedang = [
        {
            soal: "Siapa yang dianggap sebagai 'Bapak Komputer'?",
            pilihan: ["Bill Gates", "Steve Jobs", "Charles Babbage", "Alan Turing"],
            jawabanBenar: 2
        },
        {
            soal: "Apa nama komputer elektronik pertama yang dikembangkan pada tahun 1946?",
            pilihan: ["UNIVAC", "ENIAC", "IBM 701", "Apple I"],
            jawabanBenar: 1
        },
        {
            soal: "Pada dekade berapa komputer pribadi (PC) mulai populer?",
            pilihan: ["1960-an", "1970-an", "1980-an", "1990-an"],
            jawabanBenar: 2
        },
        {
            soal: "Apa nama perusahaan yang didirikan oleh Steve Jobs dan Steve Wozniak?",
            pilihan: ["Microsoft", "IBM", "Apple", "Dell"],
            jawabanBenar: 2
        },
        {
            soal: "Apa nama sistem operasi yang dikembangkan oleh Linus Torvalds?",
            pilihan: ["Windows", "macOS", "Linux", "DOS"],
            jawabanBenar: 2
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan untuk keperluan pribadi atau rumah tangga?",
            pilihan: ["Mainframe", "Superkomputer", "Komputer Pribadi", "Server"],
            jawabanBenar: 2
        },
        {
            soal: "Apa jenis komputer yang digunakan untuk melakukan perhitungan kompleks dan simulasi ilmiah?",
            pilihan: ["Komputer Pribadi", "Mainframe", "Superkomputer", "Komputer Mini"],
            jawabanBenar: 2
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan oleh perusahaan besar untuk memproses data dalam jumlah besar?",
            pilihan: ["Komputer Pribadi", "Mainframe", "Tablet", "Laptop"],
            jawabanBenar: 1
        },
        {
            soal: "Apa nama perangkat komputer portabel yang biasanya memiliki layar sentuh?",
            pilihan: ["Laptop", "Desktop", "Tablet", "Server"],
            jawabanBenar: 2
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan untuk menyimpan dan mengelola data dalam jaringan?",
            pilihan: ["Komputer Pribadi", "Laptop", "Server", "Tablet"],
            jawabanBenar: 2
        }
    ];

    const pertanyaanSulit = [
        {
            soal: "Apa nama mesin hitung mekanik yang diciptakan oleh Blaise Pascal?",
            pilihan: ["Pascaline", "Abacus", "Difference Engine", "Analytical Engine"],
            jawabanBenar: 0
        },
        {
            soal: "Pada tahun berapa ARPANET, cikal bakal internet, pertama kali diperkenalkan?",
            pilihan: ["1959", "1969", "1979", "1989"],
            jawabanBenar: 1
        },
        {
            soal: "Siapa yang menciptakan World Wide Web?",
            pilihan: ["Tim Berners-Lee", "Bill Gates", "Steve Jobs", "Mark Zuckerberg"],
            jawabanBenar: 0
        },
        {
            soal: "Apa nama komputer Apple pertama yang diproduksi secara massal?",
            pilihan: ["Apple I", "Apple II", "Macintosh", "iMac"],
            jawabanBenar: 1
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan untuk aplikasi khusus seperti kontrol industri atau peralatan medis?",
            pilihan: ["Komputer Pribadi", "Komputer Tertanam", "Mainframe", "Superkomputer"],
            jawabanBenar: 1
        },
        {
            soal: "Apa nama perusahaan yang didirikan oleh Bill Gates dan Paul Allen?",
            pilihan: ["Apple", "IBM", "Microsoft", "Intel"],
            jawabanBenar: 2
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan oleh profesional kreatif untuk desain grafis atau editing video?",
            pilihan: ["Workstation", "Mainframe", "Tablet", "Server"],
            jawabanBenar: 0
        },
        {
            soal: "Apa nama komputer yang dikembangkan oleh IBM pada tahun 1981 yang menjadi standar industri?",
            pilihan: ["Apple II", "Commodore 64", "IBM PC", "Atari 800"],
            jawabanBenar: 2
        },
        {
            soal: "Jenis komputer apa yang biasanya digunakan untuk komputasi awan (cloud computing)?",
            pilihan: ["Komputer Pribadi", "Laptop", "Server", "Tablet"],
            jawabanBenar: 2
        },
        {
            soal: "Apa nama teknologi yang memungkinkan komputer menjalankan beberapa sistem operasi secara bersamaan?",
            pilihan: ["Multitasking", "Virtualisasi", "Cloud Computing", "Parallel Processing"],
            jawabanBenar: 1
        }
    ];

    let pertanyaanTerpilih = [];
    let indexPertanyaan = 0;
    let skor = 0;
    let namaPengguna = "";
    let jawabanPengguna = [];
    let tingkatKesulitan = "";

    const inputNamaContainer = document.getElementById("inputNamaContainer");
    const pertanyaanContainer = document.getElementById("pertanyaanContainer");
    const hasilContainer = document.getElementById("hasilContainer");
    const soal = document.getElementById("soal");
    const pilihan = document.getElementById("pilihan");
    const skorAkhir = document.getElementById("skorAkhir");

    document.getElementById("mudah").addEventListener("click", () => mulaiKuis("Mudah"));
    document.getElementById("sedang").addEventListener("click", () => mulaiKuis("Sedang"));
    document.getElementById("sulit").addEventListener("click", () => mulaiKuis("Sulit"));
    document.getElementById("ulangiKuis").addEventListener("click", ulangiKuis);

    let waktuMulai;
    let timerInterval;

    function mulaiKuis(level) {
        const namaInput = document.getElementById("nama").value;
        if (namaInput.trim() === "") {
            alert("Silakan masukkan nama Anda.");
            return;
        }
        namaPengguna = namaInput;
        tingkatKesulitan = level;
        
        switch(level) {
            case "Mudah":
                pertanyaanTerpilih = [...pertanyaanMudah];
                break;
            case "Sedang":
                pertanyaanTerpilih = [...pertanyaanSedang];
                break;
            case "Sulit":
                pertanyaanTerpilih = [...pertanyaanSulit];
                break;
        }
        
        indexPertanyaan = 0;
        skor = 0;
        jawabanPengguna = [];
        inputNamaContainer.style.display = "none";
        pertanyaanContainer.style.display = "block";
        waktuMulai = new Date().getTime();
        timerInterval = setInterval(updateTimer, 1000);
        tampilkanPertanyaan();
    }

    function updateTimer() {
        const sekarang = new Date().getTime();
        const selisih = sekarang - waktuMulai;
        const waktuTersisa = Math.max(300000 - selisih, 0);
        
        const menit = Math.floor(waktuTersisa / 60000);
        const detik = Math.floor((waktuTersisa % 60000) / 1000);
        
        document.getElementById("waktuTersisa").textContent = 
            `${menit.toString().padStart(2, '0')}:${detik.toString().padStart(2, '0')}`;
        
        if (waktuTersisa === 0) {
            clearInterval(timerInterval);
            tampilkanHasil();
        }
    }

    function tampilkanPertanyaan() {
        const pertanyaanSaatIni = pertanyaanTerpilih[indexPertanyaan];
        soal.textContent = `${indexPertanyaan + 1}. ${pertanyaanSaatIni.soal}`;
        pilihan.innerHTML = "";

        pertanyaanSaatIni.pilihan.forEach((opsi, index) => {
            const button = document.createElement("button");
            button.textContent = opsi;
            button.classList.add("btn", "btn-option");
            button.addEventListener("click", () => pilihJawaban(index));
            pilihan.appendChild(button);
        });

        // Tambahkan animasi fade-in untuk pertanyaan baru
        soal.style.animation = 'fadeIn 0.5s ease-out';
        pilihan.style.animation = 'fadeIn 0.5s ease-out 0.2s';
        pilihan.style.animationFillMode = 'both';
    }

    function pilihJawaban(index) {
        const pertanyaanSaatIni = pertanyaanTerpilih[indexPertanyaan];
        const buttons = pilihan.getElementsByTagName("button");

        for (let i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
            if (i === pertanyaanSaatIni.jawabanBenar) {
                buttons[i].classList.add("correct");
            } else if (i === index && i !== pertanyaanSaatIni.jawabanBenar) {
                buttons[i].classList.add("incorrect");
            }
        }

        // Tambahkan efek visual untuk jawaban yang dipilih
        buttons[index].classList.add(index === pertanyaanSaatIni.jawabanBenar ? "correct" : "incorrect");
        buttons[index].style.transform = "scale(1.05)";
        buttons[index].style.boxShadow = "0 0 10px rgba(0,0,0,0.2)";

        jawabanPengguna.push({
            soal: pertanyaanSaatIni.soal,
            jawabanPengguna: pertanyaanSaatIni.pilihan[index],
            jawabanBenar: pertanyaanSaatIni.pilihan[pertanyaanSaatIni.jawabanBenar],
            benar: index === pertanyaanSaatIni.jawabanBenar
        });

        if (index === pertanyaanSaatIni.jawabanBenar) {
            skor++;
        }

        setTimeout(() => {
            indexPertanyaan++;
            if (indexPertanyaan < pertanyaanTerpilih.length && new Date().getTime() - waktuMulai < 300000) {
                transisiPertanyaan();
            } else {
                tampilkanHasil();
            }
        }, 1000);
    }

    // Tambahkan animasi untuk transisi antar pertanyaan
    function transisiPertanyaan() {
        pertanyaanContainer.style.animation = 'fadeOut 0.3s ease-out';
        setTimeout(() => {
            tampilkanPertanyaan();
            pertanyaanContainer.style.animation = 'fadeIn 0.3s ease-out';
        }, 300);
    }

    function tampilkanHasil() {
        clearInterval(timerInterval);
        pertanyaanContainer.style.display = "none";
        hasilContainer.style.display = "block";

        const waktuPenyelesaian = Math.floor((new Date().getTime() - waktuMulai) / 1000);
        const menit = Math.floor(waktuPenyelesaian / 60);
        const detik = waktuPenyelesaian % 60;

        document.getElementById("namaPeserta").textContent = namaPengguna;
        document.getElementById("tingkatKesulitanHasil").textContent = tingkatKesulitan;
        document.getElementById("skorAkhir").textContent = `${skor} dari ${pertanyaanTerpilih.length}`;
        document.getElementById("waktuPenyelesaian").textContent = `${menit} menit ${detik} detik`;

        const rekapJawaban = document.getElementById("rekapJawaban");
        rekapJawaban.innerHTML = "";
        jawabanPengguna.forEach((jawaban, index) => {
            const li = document.createElement("li");
            li.innerHTML = `
                <strong>Soal ${index + 1}:</strong> ${jawaban.soal}<br>
                Jawaban Anda: ${jawaban.jawabanPengguna}<br>
                Jawaban Benar: ${jawaban.jawabanBenar}<br>
                <span class="${jawaban.benar ? 'benar' : 'salah'}">${jawaban.benar ? 'Benar' : 'Salah'}</span>
            `;
            rekapJawaban.appendChild(li);
        });
    }

    function ulangiKuis() {
        hasilContainer.style.display = "none";
        inputNamaContainer.style.display = "block";
        document.getElementById("waktuTersisa").textContent = "05:00";
        jawabanPengguna = [];
    }
</script>

</body>
</html>