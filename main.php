<html>
 <head>
  <title>
   Detail - Company Information Website
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }
        nav a {
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #555;
        }
        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .sidebar {
            width: 200px;
            margin-right: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 1;
            max-width: 600px;
        }
        .info-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .info-card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .info-card h2 {
            margin-top: 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .menu-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .menu-icon i {
            font-size: 24px;
            color: #fff;
        }
        .sidebar {
            display: none;
        }
        .sidebar.active {
            display: block;
        }
  </style>
 </head>
 <body>
  <header>
   <div class="menu-icon" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
   </div>
   <h1>
    PT JELAJAH NUSANTARA
   </h1>
  </header>
  <nav>
   <a href="index.html">
    Home
   </a>
   <a href="logout.html">
    Logout
   </a>
  </nav>
  <div class="container">
   <div class="sidebar" id="sidebar">
    <ul>
     <li>
      <a href="detailperusahaan.html">
       Company Overview
      </a>
     </li>
     <p>Mountain</p>
     <li>
        
      <a href="hike.html">
       Pendakian / Trekking
      </a>
     </li>
     <li>
        <a href="7s.html">
         Seven Summits of Indonesia
        </a>
       </li>
       
     
       
    </ul>
   </div>
   <div class="content">
    
    <div class="info-card" id="overview">
    <h2>
      Company Overview
     </h2>
     <img alt="Detailed image of company building with modern architecture" height="400" src="https://storage.googleapis.com/a1aa/image/dwJ5SmkZWxpkPZWeesyKXKQnUjCyQ7hQSTfeWy3P1J7MegaeE.jpg" width="600"/>
     
     <p>
        PT Jelajah Nusantara adalah perusahaan wisata alam yang beroperasi di Indonesia, menawarkan berbagai pengalaman petualangan seperti pendakian gunung, diving, dan paket wisata lainnya. Dengan fokus pada keselamatan dan kelestarian alam, perusahaan ini menyediakan panduan profesional yang berpengalaman, peralatan pendakian yang lengkap, serta akomodasi yang nyaman untuk para peserta
        <a href="detailperusahaan.html"style="color: #ff0000">Read more </a>

    </p>
    </div>
    <div class="info-card" id="products">
    <h2>
     The Seven Summits of Indonesia

    </h2>

     <img alt="Detailed image of company team working together in an office" height="400" src="https://ceritapendaki.id/wp-content/uploads/2022/08/Gunung-7-Summits-of-Indonesia.webp" width="600"/>
          <p>
     Indonesia dikenal sebagai the ring of fire karena memiliki 13% dari jumlah gunung api di dunia atau 129 gunung berstatus aktif dan 500 gunung tidak aktif. Beberapa puncak gunung di Indonesia selalu ramai dikunjungi para pendaki, tak hanya dari Indonesia namun juga dari mancanegara. Pada umumnya, puncak-puncak gunung tersebut masuk dalam the Seven Summits of Indonesia </p>
     <a href="7s.html"style="color: #ff0000">Read more </a>
    </div>
    
        <div class="info-card" id="team">
        <h2>Rincian Layanan Pendakian / Trekking     </h2>

     <img alt="Detailed image of company products displayed in a showroom" height="400" src="https://asset.kompas.com/crops/kU_1ny0QjEjYVH0B8m7DCRwCTmM=/0x0:780x520/750x500/data/photo/2019/06/25/3942596973.jpg" width="600"/>
     
<p>1. Destinasi Pendakian
Gunung Semeru: Pendakian ke puncak tertinggi di Pulau Jawa, menawarkan pemandangan alam yang menakjubkan dan pengalaman mendalam di Taman Nasional Bromo Tengger Semeru.
Gunung Rinjani: Trekking ke puncak Rinjani di Lombok, yang terkenal dengan Danau Segara Anak dan pemandangan spektakuler.
Gunung Merapi: Pendakian di salah satu gunung berapi paling aktif di Indonesia, dengan jalur yang menantang dan pemandangan yang menakjubkan.
Trekking di Taman Nasional Bukit Duabelas: Menyusuri hutan tropis yang kaya akan flora dan fauna, serta budaya masyarakat lokal.</p>
<p>2. Paket Pendakian</p>
<p>Paket Pendakian 2 Hari 1 Malam: Cocok untuk pendaki pemula yang ingin merasakan pengalaman mendaki tanpa terlalu banyak tekanan.
Paket Pendakian 3 Hari 2 Malam: Untuk pendaki yang lebih berpengalaman, paket ini mencakup pendakian ke puncak dengan waktu lebih lama untuk menikmati keindahan alam.
Paket Trekking Kustom: Menawarkan fleksibilitas untuk membuat rencana perjalanan sesuai dengan preferensi peserta, termasuk durasi dan rute.
</p>
3. Layanan yang Diberikan
Panduan Profesional: Semua pendakian dipandu oleh pemandu yang berpengalaman dan terlatih, yang memiliki pengetahuan mendalam tentang jalur, keamanan, dan lingkungan.
Peralatan Pendakian: Menyediakan peralatan yang diperlukan, termasuk tenda, sleeping bag, matras, dan perlengkapan keselamatan.
Akomodasi: Menawarkan akomodasi yang nyaman di base camp atau di lokasi strategis selama perjalanan, termasuk makanan dan minuman.
Transportasi: Menyediakan transportasi dari dan ke titik awal pendakian, termasuk mobil atau kendaraan off-road jika diperlukan.
4. Keselamatan dan Kesehatan
Briefing Keamanan: Sebelum pendakian, peserta akan mendapatkan briefing mengenai keselamatan, termasuk penggunaan peralatan dan cara menghadapi situasi darurat.
Asuransi Perjalanan: Menawarkan opsi asuransi perjalanan untuk memberikan perlindungan tambahan selama kegiatan pendakian.
Pelayanan Kesehatan: Pemandu dilengkapi dengan pengetahuan dasar pertolongan pertama dan perlengkapan medis untuk menangani situasi darurat.
<p>5. Komitmen Lingkungan
Praktik Ramah Lingkungan: Mengedukasi peserta untuk menjaga kebersihan selama pendakian, termasuk cara membuang sampah dengan benar dan tidak merusak flora dan fauna.
Konservasi Alam: Berpartisipasi dalam program pelestarian alam dan mendukung kegiatan yang bertujuan untuk menjaga ekosistem lokal.</p>
<p>6. Testimoni Peserta
Ulasan Positif: Banyak peserta yang memberikan ulasan positif mengenai pengalaman mereka, menyoroti profesionalisme pemandu, keindahan alam, dan kenyamanan akomodasi.<a href="hike.html"style="color: #ff0000">Info Selengkapnya </a></p></p>
    </div>
   </div>
  </div>
  <footer>
   <p>
    © 21552011163 HERMAWAN TIF K 21 SOPIAN WEB 1.
   </p>
  </footer>
  <script>
   function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }
  </script>
 </body>
</html>