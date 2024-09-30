document.addEventListener('DOMContentLoaded', function() {
    const computerTypes = document.querySelectorAll('.computer-type');
    const modal = document.getElementById('computerModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');
    const closeBtn = document.querySelector('.close');

    const computerDetails = {
        pc: {
            title: "Personal Computer (PC)",
            content: `
                <p>Personal Computer (PC) adalah komputer yang dirancang untuk penggunaan individu. Beberapa poin penting tentang PC:</p>
                <ul>
                    <li>Menjadi populer pada tahun 1980-an</li>
                    <li>Terdiri dari unit sistem, monitor, keyboard, dan mouse</li>
                    <li>Dapat digunakan untuk berbagai keperluan seperti pekerjaan kantor, hiburan, dan pendidikan</li>
                    <li>Tersedia dalam bentuk desktop dan laptop</li>
                    <li>Menggunakan sistem operasi seperti Windows, macOS, atau Linux</li>
                </ul>
                <p>PC telah merevolusi cara kita bekerja dan berkomunikasi, menjadikannya alat yang tidak terpisahkan dalam kehidupan modern.</p>
            `
        },
        tablet: {
            title: "Tablet",
            content: `
                <p>Tablet adalah perangkat komputer portabel dengan layar sentuh. Karakteristik utama tablet:</p>
                <ul>
                    <li>Desain tipis dan ringan untuk mobilitas tinggi</li>
                    <li>Menggunakan sistem operasi mobile seperti iOS atau Android</li>
                    <li>Cocok untuk browsing web, membaca e-book, dan multimedia</li>
                    <li>Memiliki baterai tahan lama</li>
                    <li>Dapat digunakan dengan stylus untuk menggambar atau menulis</li>
                </ul>
                <p>Tablet menjembatani kesenjangan antara smartphone dan laptop, menawarkan portabilitas dan fungsionalitas yang unik.</p>
            `
        },
        "all-in-one": {
            title: "Komputer All-in-One",
            content: `
                <p>Komputer All-in-One menggabungkan monitor dan unit sistem dalam satu perangkat. Fitur utama:</p>
                <ul>
                    <li>Desain yang ringkas dan efisien untuk ruang terbatas</li>
                    <li>Mudah diatur dan dipindahkan</li>
                    <li>Cocok untuk penggunaan rumah dan kantor</li>
                    <li>Biasanya dilengkapi dengan layar sentuh</li>
                    <li>Memiliki performa yang setara dengan desktop tradisional</li>
                </ul>
                <p>Komputer All-in-One menawarkan solusi yang elegan dan fungsional untuk pengguna yang menginginkan kesederhanaan tanpa mengorbankan kinerja.</p>
            `
        },
        laptop: {
            title: "Laptop",
            content: `
                <p>Laptop atau komputer jinjing adalah komputer portabel yang menawarkan mobilitas tinggi. Karakteristik laptop:</p>
                <ul>
                    <li>Menggabungkan layar, keyboard, touchpad, dan baterai dalam satu unit</li>
                    <li>Tersedia dalam berbagai ukuran, dari ultrabook ringan hingga laptop gaming yang kuat</li>
                    <li>Dapat digunakan di mana saja dengan daya baterai</li>
                    <li>Cocok untuk pekerjaan, pendidikan, dan hiburan mobile</li>
                    <li>Memiliki konektivitas nirkabel seperti Wi-Fi dan Bluetooth</li>
                </ul>
                <p>Laptop telah menjadi alat penting bagi profesional dan pelajar, memungkinkan produktivitas dan akses ke informasi di mana saja.</p>
            `
        },
        smartphone: {
            title: "Smartphone",
            content: `
                <p>Smartphone adalah komputer genggam yang menggabungkan fungsi telepon seluler dengan komputer personal. Fitur utama:</p>
                <ul>
                    <li>Layar sentuh dengan antarmuka pengguna yang intuitif</li>
                    <li>Sistem operasi mobile seperti Android atau iOS</li>
                    <li>Kemampuan untuk menjalankan berbagai aplikasi</li>
                    <li>Konektivitas internet melalui jaringan seluler dan Wi-Fi</li>
                    <li>Kamera terintegrasi untuk foto dan video</li>
                    <li>Sensor seperti GPS, akselerometer, dan giroskop</li>
                </ul>
                <p>Smartphone telah mengubah cara kita berkomunikasi, mengakses informasi, dan berinteraksi dengan dunia digital.</p>
            `
        },
        desknote: {
            title: "Desknote",
            content: `
                <p>Desknote adalah komputer hybrid yang menggabungkan fitur desktop dan laptop. Karakteristik desknote:</p>
                <ul>
                    <li>Performa tinggi seperti desktop dengan portabilitas terbatas</li>
                    <li>Biasanya memiliki layar besar dan keyboard penuh</li>
                    <li>Dapat digunakan dengan daya baterai untuk jangka waktu terbatas</li>
                    <li>Cocok untuk pengguna yang membutuhkan kinerja tinggi dengan mobilitas sesekali</li>
                    <li>Sering digunakan oleh desainer grafis atau insinyur yang membutuhkan performa tinggi</li>
                </ul>
                <p>Desknote menawarkan kompromi antara kekuatan desktop dan portabilitas laptop untuk pengguna dengan kebutuhan khusus.</p>
            `
        },
        netbook: {
            title: "Netbook",
            content: `
                <p>Netbook adalah komputer jinjing berukuran kecil dan ringan yang dirancang terutama untuk akses internet dan tugas-tugas ringan. Fitur utama:</p>
                <ul>
                    <li>Ukuran layar biasanya antara 10-12 inci</li>
                    <li>Baterai tahan lama untuk penggunaan mobile</li>
                    <li>Harga yang lebih terjangkau dibandingkan laptop tradisional</li>
                    <li>Cocok untuk browsing web, email, dan pengolah kata dasar</li>
                    <li>Ringan dan mudah dibawa-bawa</li>
                </ul>
                <p>Meskipun popularitasnya telah menurun dengan munculnya tablet dan ultrabook, netbook masih menawarkan solusi portabel yang terjangkau untuk komputasi dasar.</p>
            `
        },
        superkomputer: {
            title: "Superkomputer",
            content: `
                <p>Superkomputer adalah komputer yang sangat kuat dan canggih, dirancang untuk melakukan perhitungan kompleks dan pemrosesan data dalam skala besar. Karakteristik superkomputer:</p>
                <ul>
                    <li>Kecepatan pemrosesan yang sangat tinggi, diukur dalam petaflops</li>
                    <li>Digunakan untuk simulasi ilmiah, analisis cuaca, dan penelitian kompleks lainnya</li>
                    <li>Terdiri dari ribuan prosesor yang bekerja secara paralel</li>
                    <li>Membutuhkan sistem pendingin dan pasokan daya khusus</li>
                    <li>Biasanya dioperasikan oleh lembaga penelitian, universitas, atau pemerintah</li>
                </ul>
                <p>Superkomputer memainkan peran penting dalam kemajuan ilmu pengetahuan dan teknologi, memungkinkan penelitian yang sebelumnya tidak mungkin dilakukan.</p>
            `
        },
        komputerTertanam: {
            title: "Komputer Tertanam",
            content: `
                <p>Komputer tertanam adalah komputer yang dirancang untuk melakukan fungsi tertentu dalam perangkat lain. Karakteristik komputer tertanam:</p>
                <ul>
                    <li>Dirancang untuk tugas spesifik dengan sumber daya terbatas</li>
                    <li>Sering kali tidak memiliki antarmuka pengguna yang terlihat</li>
                    <li>Digunakan dalam berbagai aplikasi seperti perangkat rumah tangga, otomotif, dan sistem industri</li>
                    <li>Memiliki konsumsi daya yang rendah dan ukuran yang kecil</li>
                    <li>Menawarkan keandalan tinggi dan kinerja yang efisien dalam lingkungan yang terintegrasi</li>
                </ul>
                <p>Komputer tertanam memainkan peran penting dalam teknologi modern, memungkinkan perangkat untuk berfungsi secara otomatis dan efisien.</p>
            `
        }
    };

    computerTypes.forEach(type => {
        type.addEventListener('click', function() {
            const computerType = this.getAttribute('data-type');
            const details = computerDetails[computerType];

            if (details) {
                modalTitle.textContent = details.title;
                modalContent.innerHTML = details.content;
                modal.style.display = 'block';
            }
        });
    });

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});