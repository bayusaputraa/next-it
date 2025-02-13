<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Bayu Saputra - Personal Portfolio, Programmer, and Junior Network Engineer from Location. I have expertise in web and mobile programming." />
  <meta name="keywords"
    content="Bayu Saputra, Portfolio, Programmer, Network Engineer, Junior Network Engineer, Web Developer, Flutter Developer, Dart, Bekasi" />
  <meta name="author" content="Bayu Saputra" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph Meta Tags -->

  <meta property="og:url" content="https://next-it.my.id" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Bayu Saputra - Portfolio Programmer dan Network Engineer Junior" />
  <meta property="og:description"
    content="Bayu Saputra - Personal Portfolio, Programmer, and Junior Network Engineer from Location. I have expertise in web and mobile programming." />
  <meta property="og:image" content="https://next-it.my.id/{{ asset('assets/images/Logos.ico') }}" />

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://next-it.my.id" />
  <meta name="twitter:title" content="Bayu Saputra - Portfolio Programmer dan Network Engineer Junior" />
  <meta name="twitter:description"
    content="Bayu Saputra - Personal Portfolio, Programmer, and Junior Network Engineer from Location. I have expertise in web and mobile programming." />
  <meta name="twitter:image" content="https://next-it.my.id/{{ asset('assets/images/Logos.ico') }}" />
  <title>Personal Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('assets/images/Logos.ico') }}" type="image/x-icon" />

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!--
    - Bootstrap css link
  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

  <!--
    - CDN What i do link
  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!--
    - chatbit link
  -->
  <link href="https://app.chatbit.co/iframe/bac78cec-1ffa-4c24-a2c4-04677b8c27c7" rel="chatbot" />

    <!--
    - CSS content not loaded
  -->
  <style>
    .skills-item p {
    color: hsl(0, 0%, 84%) !important;
    }
  </style>
  {{-- <style>
    /* Container tombol agar berada di tengah */
    .download-container {
      text-align: center;
      margin-top: 20px;
    }

    /* Styling tombol download */
    .download-button {
      display: inline-flex;
      align-items: center;
      padding: 12px 20px;
      background-color: #ffcc00;
      color: black;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      border-radius: 8px;
      transition: background 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Icon dalam tombol */
    .download-button i {
      margin-right: 8px;
      font-size: 22px;
    }

    /* Efek hover */
    .download-button:hover {
      background-color: #e6b800;
      transform: scale(1.05);
    }

    /* Efek klik */
    .download-button:active {
      transform: scale(0.95);
    }

    .blog-text {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* Jumlah baris yang ingin ditampilkan */
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      /* Tambahkan "..." jika teks terlalu panjang */
      max-width: 100%;
    }
  </style> --}}

</head>

<body>
  <!--
    - #MAIN
  -->

  <main>
    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>
      <div class="sidebar-info">
        <figure class="avatar-box">
            <img src="{{ asset('assets/images/my-avatar.png') }}" alt="Avatar">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Bayu Saputra">Bayu Saputra</h1>

          <p class="title">
            <span class="typed" data-typed-items="Bayu Saputra, Network Engineer, Developer, Freelancer, Designer">
              <!-- | -->
            </span>
          </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>
      </div>

      <div class="sidebar-info_more">
        <div class="separator"></div>
        <ul class="contacts-list">
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>
              <a href="mailto:bayusaputra.005.003@gmail.com" class="contact-link">bayusaputra.005.003@gmail.com</a>
              <a href="mailto:bayusaputra@next-it.my.id" class="contact-link">bayusaputra@next-it.my.id</a>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="https://wa.me/+6285881770712" class="contact-link">+62 85881770712</a>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">May 05, 2003</time>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Kabupaten Bekasi, Jawa Barat, ID</address>
            </div>
          </li>
        </ul>

        <div class="separator"></div>

        <ul class="social-list">
          <li class="social-item">
            <a href="https://www.youtube.com/channel/UCNIpYfaIOgdbWkPtA33P5TQ" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/bayusaputraa" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/bayusaputra05/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <!--
      - #main-content
    -->

    <div class="main-content">
      <!--
        - #NAVBAR
      -->

      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>
        </ul>
      </nav>

      <!--
        - #ABOUT
      -->

      <article class="about active" data-page="about">
        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            IT Support & Networking Specialist with expertise in technical
            support, network troubleshooting, and system maintenance.
            Experienced in network configuration, IT security, and
            Windows/Linux server management. Holds professional certifications
            in networking, web development, and programming.
            Solution-oriented, collaborative, and consistently striving to
            optimize systems to enhance efficiency and security.
          </p>
        </section>

        <!--
          - service
        -->

        <section class="service">
          <h3 class="h3 service-title">What I'm Doing</h3>

          <ul class="service-list">
            <li class="service-item">
              <div class="service-icon-box">
                <i class="bi bi-router" style="font-size: 40px; color: hsl(45, 100%, 71%)"></i>
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Network Administration</h4>
                <p class="service-item-text">
                  Experienced in configuring and maintaining routers,
                  switches, and firewalls to ensure optimal network
                  performance.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <i class="fas fa-user-shield" style="font-size: 40px; color: hsl(45, 100%, 71%)"></i>
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Cybersecurity</h4>
                <p class="service-item-text">
                  Skilled in implementing network security protocols such as
                  firewall management, DHCP Snooping, and Rogue Detection to
                  protect data.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <i class="fas fa-code" style="font-size: 40px; color: hsl(45, 100%, 71%)"></i>
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Development</h4>
                <p class="service-item-text">
                  Developing high-quality web applications using PHP,
                  JavaScript, and SQL with responsive designs and secure
                  architectures.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <i class="fas fa-database" style="font-size: 40px; color: hsl(45, 100%, 71%)"></i>
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Database Management</h4>
                <p class="service-item-text">
                  Proficient in database administration using MySQL, MariaDB,
                  and Oracle to ensure efficient data storage and retrieval.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <i class="fas fa-headset" style="font-size: 40px; color: hsl(45, 100%, 71%)"></i>
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">
                  IT Support & Troubleshooting
                </h4>
                <p class="service-item-text">
                  Providing technical support, troubleshooting software and
                  hardware issues, and ensuring smooth IT operations.
                </p>
              </div>
            </li>
          </ul>
        </section>

        <!--
          - testimonials
        -->

        <!-- Testimonials Section -->
        <section class="testimonials">
          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item" data-testimonials-item data-date="2025-01-24">
              <div class="content-card">

                <figure class="testimonials-avatar-box">
                  <img src="{{ asset('assets/images/avatar-2.png') }}" alt="Windy Agustin" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Windy Agustin - HR, West 4 Change</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    During my time working with Bayu, I was impressed by his dedication to fostering an inclusive and
                    supportive work environment that empowers colleagues to grow and reach their full potential.

                    Bayu is always open to ideas and input from his coworkers, enhancing collaboration and innovation.
                    He is also a great listener, always ready to offer support both professionally and personally
                    whenever needed.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item" data-testimonials-item data-date="2025-02-10">
              <div class="content-card">

                <figure class="testimonials-avatar-box">
                  <img src="{{ asset('assets/images/avatar-1.png') }}" alt="Rahmat Hidayat" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Rahmat Hidayat - Manajer IT, Damai Putra
                </h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Kemampuan dalam bidang networking benar-benar luar biasa. Selain itu, memiliki keahlian di berbagai
                    bidang lainnya yang sangat membantu dalam menyelesaikan proyek-proyek kompleks. Sangat
                    direkomendasikan bagi siapa saja yang membutuhkan tenaga ahli di dunia IT.
                  </p>
                </div>

              </div>
            </li>

          </ul>
        </section>

        <!-- Testimonials Modal -->
        <div class="modal-container" data-modal-container>
          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">
            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="" alt="User Avatar" width="80" data-modal-img />
              </figure>
              <img src="{{ asset('assets/images/icon-quote.svg') }}" alt="quote icon" />
            </div>

            <div class="modal-content">
              <h4 class="h3 modal-title" data-modal-title></h4>
              <time datetime="" data-modal-date></time> <!-- Tanggal hanya muncul di pop-up -->
              <div data-modal-text>
                <p></p>
              </div>
            </div>
          </section>
        </div>



        <!--
          - clients
        -->

        <section class="clients">
          <h3 class="h3 clients-title">
            Organizations I've Collaborated With
          </h3>
          <ul class="clients-list has-scrollbar">
            <li class="clients-item">
              <img src="{{ asset('assets/images/damai_putra_grup.svg') }}" alt="Damai Putra Group Logo" />
            </li>

            <li class="clients-item">
              <img src="{{ asset('assets/images/baznas_kt_bekasi.svg') }}" alt="Baznas Kota Bekasi Logo" />
            </li>

            <li class="clients-item">
              <img src="{{ asset('assets/images/komdigi_kab_bekasi.svg') }}" alt="Komdigi Kabupaten Bekasi Logo" />
            </li>

            <li class="clients-item">
              <img src="{{ asset('assets/images/kementrian_agama.svg') }}" alt="Kementerian Agama Kota Bekasi Logo" />
            </li>
          </ul>
        </section>
      </article>

      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">
        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">
          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Work Experience</h3>
          </div>

          <ol class="timeline-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Damai Putra Grup</h4>
              <span>Des 2024 — Now</span>
              <p class="timeline-text">
                Skilled in identifying, analyzing, and resolving technical
                issues related to hardware, software, and networks. Proficient
                in configuring, maintaining, and troubleshooting LAN/WAN,
                VPNs, and firewalls. Experienced in managing Windows/Linux
                servers, Active Directory, and system backups. Strong
                knowledge of IT security, threat analysis, and data protection
                practices.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">
                Badan Amil Zakat Nasional (BAZNAS) Kota Bekasi
              </h4>
              <span>Nov 2024 — Des 2024</span>
              <p class="timeline-text">
                Developed a Zakat, Infak, and Sedekah dashboard using Looker
                Studio by Google to monitor data and fund collection
                performance. Built a web-based email broadcast system for mass
                distribution, enhancing communication with donors and
                beneficiaries. Designed a structured marketing strategy to
                strengthen communication and raise public awareness of BAZNAS
                programs.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Kominfo Kabupaten Bekasi</h4>
              <span>Okt 2024 — Nov 2024</span>
              <p class="timeline-text">
                Maintained internet connectivity by identifying and resolving
                network performance issues, ensuring seamless access for all
                users. Installed LAN cables from switches to workstations,
                ensuring efficient network distribution for ministry
                operations. Configured network security protocols (firewall,
                DHCP Snooping, DHCP Rogue detection) to prevent unauthorized
                access and protect infrastructure.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">
                Kantor Kementerian Agama Kota Bekasi
              </h4>
              <span>Sep 2024 — Okt 2024</span>
              <p class="timeline-text">
                Supported key operational and technical functions in the
                personnel department. Designed network routing to enhance
                office efficiency. Upgraded devices to maintain optimal
                performance. Implemented automation solutions for document
                creation, streamlining administrative processes. Contributed
                to improving overall departmental efficiency and smooth
                operations.
              </p>
            </li>
          </ol>
        </section>

        <section class="timeline">
          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Organization Experience</h3>
          </div>

          <ol class="timeline-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Leader of HMTI</h4>
              <span>Feb 2024 — Present</span>
              <p class="timeline-text">
                Leads and directs 57 HMTI members in running the work program.
                Monitoring and evaluating the performance of HMTI members.
                Establishing effective communication with students of
                Informatics Engineering. Building cooperation with other
                student organizations at the University.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">
                Members of Publications, Documentation and Decoration
              </h4>
              <span>Nov 2022 — Jan 2024</span>
              <p class="timeline-text">
                Editing images, photos, and videos of various events held by
                HMTI or campus to ensure visual quality and visual
                sustainability. Create promotional materials, posters,
                banners, brochures, and other stamp materials used to market
                organizational events. Responsible for the Faculty of
                Information and Digital Technology in the event of MAESTRO
                2023, supervises and socializes committee members to carry out
                activities according to the arrangement of events.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Head of MAESTRO</h4>
              <span>2023</span>
              <p class="timeline-text">
                Responsible for the Faculty of Information and Digital
                Technology in the event of MAESTRO 2023. Supervised and guided
                committee members to execute activities in accordance with the
                event plan. Ensured the successful implementation of MAESTRO
                2023 through effective coordination and strategic planning.
              </p>
            </li>
          </ol>
        </section>

        <section class="skill">
            <h3 class="h3 skills-title">My Skills</h3>

            <ul class="skills-list content-card">
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Network Administration</h5>
                </div>
                <p>Experienced in configuring and maintaining routers, switches, and firewalls to ensure optimal network performance.</p>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Cybersecurity</h5>
                </div>
                <p>Skilled in implementing security protocols, firewall management, and network monitoring for secure data transmission.</p>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Web Development</h5>
                </div>
                <p>Proficient in building responsive web applications using HTML, CSS, JavaScript, PHP, and SQL.</p>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Database Management</h5>
                </div>
                <p>Experienced in managing and optimizing databases using MySQL, MariaDB, and Oracle.</p>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">IT Support & Troubleshooting</h5>
                </div>
                <p>Capable of diagnosing and resolving hardware, software, and network issues to maintain system stability.</p>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Public Speaking & Team Leadership</h5>
                </div>
                <p>Strong leadership and communication skills, honed through experience in managing teams and coordinating projects.</p>
              </li>
            </ul>
          </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">
        <header>
          <h2 class="h2 article-title">My Portfolio</h2>
        </header>

        <section class="projects">
          <ul class="filter-list">
            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn>Web</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn>App</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn>Network</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn>Design</button>
            </li>
          </ul>

          <div class="filter-select-box">
            <button class="filter-select" data-select>
              <div class="select-value" data-selecct-value>
                Select category
              </div>
              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>
            </button>

            <ul class="select-list">
              <li class="select-item">
                <button data-select-item>All</button>
              </li>
              <li class="select-item">
                <button data-select-item>Web</button>
              </li>
              <li class="select-item">
                <button data-select-item>App</button>
              </li>
              <li class="select-item">
                <button data-select-item>Network</button>
              </li>
              <li class="select-item">
                <button data-select-item>Design</button>
              </li>
            </ul>
          </div>

          <ul class="project-list">
            <!-- Railway Web Application -->
            <li class="project-item active" data-filter-item data-category="web">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/WEB-Railway-1.png') }}" alt="Railway Web Application" loading="lazy" />
              </figure>
              <h3 class="project-title">Railway Web Application</h3>
              <p class="project-category">Web</p>
            </li>

            <!-- Doctor Data Processing Application -->
            <li class="project-item active" data-filter-item data-category="app">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/App-Doctor-1.png') }}" alt="Doctor Data Processing Application"
                  loading="lazy" />
              </figure>
              <h3 class="project-title">
                Doctor Data Processing Application
              </h3>
              <p class="project-category">App</p>
            </li>

            <!-- Linux as Router -->
            <li class="project-item active" data-filter-item data-category="network">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/Networking 1.png') }}" alt="Linux as Router" loading="lazy" />
              </figure>
              <h3 class="project-title">Linux as Router</h3>
              <p class="project-category">Network</p>
            </li>

            <!--Laravel Poster Desgin-->
            <li class="project-item active" data-filter-item data-category="design">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/Desain-Poster-Laravel.png') }}" alt="Poster Laravel" loading="lazy" />
              </figure>
              <h3 class="project-title">Poster Laravel</h3>
              <p class="project-category">Design</p>
            </li>

            <!-- Ticketing Reservation Application -->
            <li class="project-item active" data-filter-item data-category="app">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/App-Ticket-1.png') }}" alt="Ticketing Reservation Application"
                  loading="lazy" />
              </figure>
              <h3 class="project-title">Ticketing Reservation Application</h3>
              <p class="project-category">App</p>
            </li>

            <!--Laravel Poster Desgin-->
            <li class="project-item active" data-filter-item data-category="design">
              <figure class="project-img">
                <img src="{{ asset('assets/images/portfolio/Desain-Poster-Hut77.png') }}" alt="Poster Hut77" loading="lazy" />
              </figure>
              <h3 class="project-title">Poster Hut77</h3>
              <p class="project-category">Design</p>
            </li>
          </ul>
        </section>
      </article>

      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
            <h2 class="h2 article-title">Blog</h2>
          </header>

          <section class="blog-posts">

            <ul class="blog-posts-list">

              <li class="blog-post-item">
                <a href="{{ route('blog.education') }}">

                  <figure class="blog-banner-box">
                    <img src="{{ asset('assets/images/blogs/edu.avif') }}" alt="Educational Story" loading="lazy">
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Story</p>
                      <span class="dot"></span>
                      <time datetime="2024-08-01">August 1, 2024</time>
                    </div>
                    <h3 class="h3 blog-item-title">Educational Story</h3>
                    <p class="blog-text">
                      I began my studies at Bani Saleh University in 2021 and have been continuously learning about
                      programming and networking since then.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="{{ route('blog.organization') }}">

                  <figure class="blog-banner-box">
                    <img src="{{ asset('assets/images/blogs/org.avif') }}" alt="Organization Background" loading="lazy">
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Background</p>
                      <span class="dot"></span>
                      <time datetime="2024-08-01">August 1, 2024</time>
                    </div>
                    <h3 class="h3 blog-item-title">Organization Background</h3>
                    <p class="blog-text">
                      Throughout my academic journey, I have actively engaged in various organizational roles that have
                      greatly contributed to my personal and professional growth.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="{{ route('blog.peltier') }}">

                  <figure class="blog-banner-box">
                    <img src="{{ asset('assets/images/blogs/lomba.avif') }}" alt="Peltier Innovation" loading="lazy">
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Competition</p>
                      <span class="dot"></span>
                      <time datetime="2024-08-01">August 1, 2024</time>
                    </div>
                    <h3 class="h3 blog-item-title">Peltier Innovation Project</h3>
                    <p class="blog-text">
                      I participated in the GTTG competition in Bekasi City as a representative of Bani Saleh University.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="{{ route('blog.vpn') }}">

                  <figure class="blog-banner-box">
                    <img src="{{ asset('assets/images/blogs/VPN.avif') }}" alt="VPN Tunneling" loading="lazy">
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Networking</p>
                      <span class="dot"></span>
                      <time datetime="2024-08-01">February 13, 2025</time>
                    </div>
                    <h3 class="h3 blog-item-title">VPN Tunneling</h3>
                    <p class="blog-text">
                      Pastikan semua IP pada router telah diatur dengan benar. Jika belum, tambahkan dengan menggunakan
                      DHCP-Client di Winbox.
                    </p>
                  </div>
                </a>
              </li>
            </ul>
          </section>

      </article>

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">
        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.056255843593!2d107.11868966417248!3d-6.190805807721064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697a6fc65b7333%3A0x7eddb0ddf0f8d717!2sKarangsentosa%2C%20Karangbahagia%2C%20Bekasi%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1707682398359!5m2!1sen!2sid"
              width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade" title="maps area">
            </iframe>
          </figure>
        </section>

        <section class="contact-form">
          <h3 class="h3 form-title">Get In Touch</h3>

          <div class="socials-media text-center">
            <ul class="list-unstyled" style="
                  display: flex;
                  gap: 15px;
                  justify-content: center;
                  padding: 0;
                ">
              <li style="list-style: none">
                <a href="https://www.youtube.com/channel/UCNIpYfaIOgdbWkPtA33P5TQ" target="_blank">
                  <i class="bi bi-youtube" style="font-size: 24px; color: hsl(0, 0%, 84%)"></i>
                </a>
              </li>

              <li style="list-style: none">
                <a href="https://www.instagram.com/filesystem_" target="_blank">
                  <i class="bi bi-instagram" style="font-size: 24px; color: hsl(0, 0%, 84%)"></i>
                </a>
              </li>

              <li style="list-style: none">
                <a href="https://www.linkedin.com/in/bayusaputra05/" target="_blank">
                  <i class="bi bi-linkedin" style="font-size: 24px; color: hsl(0, 0%, 84%)"></i>
                </a>
              </li>

              <li style="list-style: none">
                <a href="https://linktr.ee/bayusaputra54" target="_blank">
                  <i class="bi bi-link" style="font-size: 24px; color: hsl(0, 0%, 84%)"></i>
                </a>
              </li>

              <li style="list-style: none">
                <a href="https://github.com/bayusaputraa" target="_blank">
                  <i class="bi bi-github" style="font-size: 24px; color: hsl(0, 0%, 84%)"></i>
                </a>
              </li>
            </ul>
          </div>

          <!-- Tombol Download Resume -->
          <div class="download-container">
            <a href="{{ asset('assets/file/Resume Bayu Saputra.pdf') }}" class="download-button" download>
              <i class="bi bi-file-earmark-arrow-down"></i> Download Resume
            </a>
          </div>
        </section>

      </article>
    </div>
  </main>

  <!--
    - custom js link
  -->
  <script>
    window.cbConfig = {
      chatId: "bac78cec-1ffa-4c24-a2c4-04677b8c27c7",
    };
  </script>
  <script src="https://app.chatbit.co/embed.min.js" defer></script>

  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- <script src=".{{ asset('assets/') }}js/blog.js"></script> -->

  <!--
    - JS title
  -->
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
    }, 5000); // Ganti setiap 2 detik
  </script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!--
    - typed link
  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var typed = new Typed(".typed", {
        strings: [
          "Bayu Saputra",
          "Network Engineer",
          "Developer",
          "Freelancer",
          "Designer",
        ],
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 4000,
        loop: true,
        showCursor: false, // Menonaktifkan garis typer
      });
    });
  </script>
</body>

</html>
