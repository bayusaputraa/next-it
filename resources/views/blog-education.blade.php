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

  <title>Education Story - Personal Portfolio</title>

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
            <h2 class="h2 article-title">Education Story</h2>
            <!-- Tombol Back ke Pojok Kanan -->
            <a href="{{ route('home') }}" class="back-button">
              <i class="bi bi-arrow-left"></i> Back
            </a>
          </div>
        </header>

        <div class="blog-meta">
          <p class="blog-author">Admin</p>
          <span class="dot"></span>
          <p class="blog-category">Story</p>
          <span class="dot"></span>
          <time datetime="2024-08-01">August 1, 2024</time>
        </div>

        <section class="about-text">
          <img src="{{ asset('assets/images/blogs/edu.avif') }}" alt="gambar-edu">
          <p style="padding-top: 20px;">
            I began my studies at Bani Saleh University in 2021 and have been continuously learning about programming
            and networking since then. Initially, adapting to life as a Computer Science student was challenging.
            However, with strong determination, I am confident in successfully completing my studies.
          </p>

          <p>
            I have taken various courses related to my field, including Network Administration, Computer Architecture,
            Operating Systems, Computer Networks, Web Programming, and Android Programming. Now in my 7th semester, I
            have achieved a GPA of 3.73/4.00.
          </p>

          <p>
            I attended MAN 1 Bekasi in Bekasi, West Java, from June 2018 to July 2021, majoring in Science Mathematics.
            During my time there, I developed a strong foundation in various scientific and mathematical disciplines.
            The rigorous academic environment helped me cultivate critical thinking and problem-solving skills, which
            have been invaluable in my further studies and personal growth. My high school experience at MAN 1 Bekasi
            has significantly shaped my academic journey and prepared me for the challenges of higher education.
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
