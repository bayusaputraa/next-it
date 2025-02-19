<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Tunneling Server by VPN Mikrotik - Tutorial & Setup" />
  <meta name="keywords"
    content="VPN, Mikrotik, Tunneling, Server, Networking, Firewall, DHCP, NAT, SSH, Apache" />
  <meta name="author" content="Admin" />
  <meta name="robots" content="index, follow" />

  <title>Tunneling Server by VPN Mikrotik - Tech Info</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/Logos.ico') }}" type="image/x-icon" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

  <style>
    /* Responsif untuk gambar */
    img {
      width: 100%;
      height: auto;
      max-width: 100%;
      display: block;
      margin: 0 auto;
    }

    /* Header dengan Flexbox untuk memindahkan tombol ke kanan */
    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0;
    }

    /* Perbaikan tampilan tombol */
    .back-button {
      display: inline-flex;
      align-items: center;
      padding: 6px 12px;
      background-color: #ffcc00;
      color: black;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s ease;
      border: none;
      cursor: pointer;
      font-size: 14px;
    }

    .back-button i {
      margin-right: 6px;
    }

    .back-button:hover {
      background-color: #e6b800;
      color: black;
    }

    /* Rata kiri-kanan untuk teks */
    .about-text p {
      text-align: justify;
      line-height: 1.8;
    }

    /* Blog Metadata */
    .blog-meta {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      color: #aaa;
    }

    .dot {
      width: 5px;
      height: 5px;
      background-color: #aaa;
      border-radius: 50%;
      display: inline-block;
    }

    /* Code block */
    .code-block {
      background-color: #1e1e1e;
      color: #ffffff;
      padding: 10px;
      border-radius: 5px;
      font-family: monospace;
      overflow-x: auto;
    }
  </style>
</head>

<body>

  <!-- Main Content -->
  <main>
    <div class="main-content">

      <!-- Blog Article -->
      <article class="about active" data-page="about">
        <header>
          <div class="header-container">
            <h2 class="h2 article-title">Tunneling Server by VPN Mikrotik</h2>
            <!-- Tombol Back ke Pojok Kanan -->
            <a href="{{ route('home') }}" class="back-button">
              <i class="bi bi-arrow-left"></i> Back
            </a>
          </div>
        </header>

        <div class="blog-meta">
          <p class="blog-author">Admin</p>
          <span class="dot"></span>
          <p class="blog-category">Networking</p>
          <span class="dot"></span>
          <time datetime="2025-02-13">February 13, 2025</time>
        </div>

        <section class="about-text">
          <img src="{{ asset('assets/images/blogs/VPN.avif') }}" alt="VPN Tunneling">

          <h3>1. Setup Router</h3>
          <p>Pastikan semua IP pada router telah diatur dengan benar. Jika belum, tambahkan dengan menggunakan DHCP-Client di Winbox.</p>
          <div class="code-block">
            /ip dhcp-client add interface=ether1 disabled=no
          </div>

          <h3>2. Menambahkan IP Address</h3>
          <p>Tambahkan IP address pada ether2 jika belum dilakukan. Pergi ke **IP → Addresses**, lalu klik **+** dan tambahkan IP berikut:</p>
          <div class="code-block">
            /ip address add <br>
            /address: 200.200.10.1/29 <br>
            /interface: ether2
          </div>

          <h3>3. Setup NAT</h3>
          <p>Untuk memberikan akses internet ke server melalui ISP/Hotspot, lakukan NAT pada router dengan menambahkan rule berikut:</p>
          <div class="code-block">
            /ip firewall nat add chain=srcnat action=masquerade
          </div>

          <h3>4. Setup DHCP Server</h3>
          <p>Buka **IP → DHCP-Server**, lalu klik **Setup** dan pilih interface yang akan digunakan, misalnya `ether2`.</p>
          <div class="code-block">
            /ip dhcp-server setup <br>
            /dhcp server interface=ether2
          </div>

          <h3>5. Install Apache dan SSH</h3>
          <p>Jalankan perintah berikut untuk menginstal SSH dan Apache di server:</p>
          <div class="code-block">
            apt install ssh apache2
          </div>

          <h3>6. Forwarding Port 22 dan 80</h3>
          <p>Buka **IP → Firewall → NAT** dan tambahkan rule untuk meneruskan port ke server.</p>
          <div class="code-block">
            /ip firewall nat add chain=dstnat dst address=(IP Mikrotik) protocol=tcp to-port=22 to-addresses=(IP Server) <br>
            /ip firewall nat add chain=dstnat dst address=(IP Mikrotik) protocol=tcp to-port=80 to-addresses=(IP Server)
          </div>

          <h3>7. Setup VPN Client</h3>
          <p>Buka **PPP → OVPN Client** di Winbox, tambahkan konfigurasi sesuai ketentuan tunnel yang dimiliki.</p>

          <h3>8. Mengakses Server</h3>
          <p>Jika semua konfigurasi benar, server dapat diakses melalui alamat **https://mastampan.id15.tunnel.my.id/**.</p>
        </section>
      </article>

    </div>
  </main>

  <!-- Custom JS -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- Dynamic Page Title -->
  <script>
    let titles = [
      "Welcome!",
      "Explore My Website",
      "Don't Miss Out!",
      "Enjoy Your Visit",
    ];
    let index = 0;

    setInterval(() => {
      document.title = titles[index];
      index = (index + 1) % titles.length;
    }, 5000); // Ganti setiap 5 detik
  </script>

  <!-- Ionicons Link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
