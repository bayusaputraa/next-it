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

  <title>Organization Background - Personal Portfolio</title>

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
            <h2 class="h2 article-title">Organization Background</h2>
            <!-- Tombol Back ke Pojok Kanan -->
            <a href="{{ route('home') }}" class="back-button">
              <i class="bi bi-arrow-left"></i> Back
            </a>
          </div>
        </header>

        <div class="blog-meta">
          <p class="blog-author">Admin</p>
          <span class="dot"></span>
          <p class="blog-category">Background</p>
          <span class="dot"></span>
          <time datetime="2024-08-01">August 1, 2024</time>
        </div>

        <section class="about-text">
          <img src="{{ asset('assets/images/blogs/org.avif') }}" alt="gambar-edu">
          <p style="padding-top: 20px;">
            Throughout my academic journey, I have actively engaged in various organizational roles that have greatly
            contributed to my personal and professional growth. As the Leader of HMTI at Bani Saleh University since
            February 2024, I have successfully led and directed 57 HMTI members in executing work programs, monitoring
            and evaluating their performance, establishing effective communication with Informatics Engineering
            students, and fostering cooperation with other student organizations at the university.
          </p>

          <p>
            Previously, from November 2022 to January 2024, I served as a member of the Publications, Documentation, and
            Decoration team at HMTI. In this role, I edited images, photos, and videos of various events organized by
            HMTI and the campus to ensure high visual quality and sustainability. I also created promotional materials,
            including posters, banners, brochures, and other items used to market organizational events. Additionally, I
            played a key role in the MAESTRO 2023 event, overseeing and guiding committee members to execute activities
            according to the event plan, ensuring smooth operations and success.
          </p>

          <p>
            During my high school years at MAN 1 Bekasi from 2019 to 2021, I was an active member of the IPTEK (Science
            and Technology) team. I was responsible for creating, editing, and managing media content, photos, and
            videos that highlighted various school activities and presentations. I documented numerous school events,
            such as sports standings, performances, concerts, and conferences, through photography and news coverage.
            Furthermore, I designed and managed the school's social media accounts to promote school activities, monitor
            user interactions, and ensure the consistency of school messages and branding. At MAN 1 Bekasi, I also
            managed extracurricular activities related to science and technology, such as ITC (IT Community MAN 1
            Bekasi) and JMC (Journalistic MAN 1 Bekasi Reborn).
          </p>

          <p>
            In addition, I served as the President of KATEDA MAN 1 Bekasi, where I helped implement programs and
            organized belt promotion exams. I also managed the training schedules and organized physical training
            programs.
            Additionally, I was an active member of the Journalistic team at MAN 1 Bekasi, specifically in the
            videography section. In this role, I worked as a videographer, reporter, and cameraman during various events
            at MAN 1 Bekasi, ensuring high-quality video coverage and documentation.
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
