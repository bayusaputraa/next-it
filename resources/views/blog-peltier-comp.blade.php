<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bayu Saputra - Personal Portfolio, Programmer, and Junior Network Engineer." />
  <meta name="keywords"
    content="Bayu Saputra, Portfolio, Programmer, Network Engineer, Junior Network Engineer, Web Developer, Flutter Developer, Dart, Bekasi" />
  <meta name="author" content="Bayu Saputra" />
  <meta name="robots" content="index, follow" />

  <title>Peltier Innovation Project - Personal Portfolio</title>

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

    /* Jarak antara ikon dan teks dalam tombol */
    .back-button i {
      margin-right: 6px;
    }

    /* Efek hover */
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
            <h2 class="h2 article-title">Peltier Innovation Project</h2>
            <!-- Tombol Back ke Pojok Kanan -->
            <a href="{{ route('home') }}" class="back-button">
              <i class="bi bi-arrow-left"></i> Back
            </a>
          </div>
        </header>

        <div class="blog-meta">
          <p class="blog-author">Admin</p>
          <span class="dot"></span>
          <p class="blog-category">Competition</p>
          <span class="dot"></span>
          <time datetime="2024-08-01">August 1, 2024</time>
        </div>

        <section class="about-text">
          <img src="{{ asset('assets/images/blogs/lomba.avif') }}" alt="gambar-lomba">
          <p style="padding-top: 20px;">
            I participated in the GTTG competition in Bekasi City as a representative of Bani Saleh University. In this
            competition, I created a portable electricity generator using peltier modules. The generator works by
            converting heat from various sources, such as stoves, torches, campfires, and the sun, into electricity.
            This system operates similarly to solar panels, but instead of requiring light, our device requires heat to
            function efficiently.
          </p>

          <p>
            The device operates optimally at temperatures between 60-80 degrees Celsius. To generate 1W of power, we
            used 4 peltier modules and 1 fan for balance. The peltier works by exploiting the temperature difference
            between its two sides. One side generates cold, typically used in mini coolers, while the other side
            produces heat sufficient to make coffee. When the hot side receives additional external heat, it generates
            electricity.
          </p>

          <p>
            Although we only placed in the top 5 in this competition, we managed to eliminate 80 groups in the GTTG
            contest. We consider this a significant achievement, especially since it was my first time participating in
            this competition. I am determined to continue striving for even better results in the future.
          </p>
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
