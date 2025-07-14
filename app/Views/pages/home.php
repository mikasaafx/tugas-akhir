<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Temukan yang Tepat, Untuk Hati yang Siap</h1>
            <p class="mt-2">Platform pencarian jodoh profesional yang menjunjung tinggi kepercayaan dan integritas.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Selengkapnya</a>
              <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url('assets'); ?>/img/hero-img.png" class="img-fluid animated" alt="hero">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>


          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url('assets'); ?>/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section> --><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              <strong>LoveStreet</strong> adalah sebuah perusahaan startup yang menyediakan platform inovatif untuk mencari pasangan hidup. Berbasis teknologi, LoveStreet menggabungkan algoritma canggih dengan pengalaman pengguna yang intuitif, memungkinkan penggunanya untuk menemukan pasangan yang kompatibel berdasarkan minat, nilai, dan tujuan hidup yang sama.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Matching Berdasarkan Kecocokan Minat dan Nilai Hidup.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Rekomendasi Profil yang Dipersonalisasi.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Privasi dan Keamanan Terjamin</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p> Dengan fitur-fitur unggulan seperti profil yang terverifikasi, percakapan yang aman, dan rekomendasi pasangan yang dipersonalisasi, LoveStreet bertujuan untuk menciptakan hubungan yang bermakna. Visi LoveStreet adalah membantu jutaan orang menemukan cinta sejati mereka melalui teknologi yang canggih dan modern.</p>
            <a href="/pages/about" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5 mb-3" data-aos="fade-up" data-aos-delay="100">
              <h3><span></span><strong>Mengapa Harus Kami?</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">

                <h3><span>1</span> Pendekatan Personal dan Profesional</h3>
                <div class="faq-content">
                  <p>Lovestreet percaya bahwa setiap orang unik, sehingga kami memberikan pendekatan personal untuk setiap pengguna. Dengan bantuan konsultan cinta berpengalaman, kami membantu Anda memahami kebutuhan emosional dan preferensi pribadi, menjadikan proses pencarian jodoh lebih bermakna dan terarah.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>2</span> Pencocokan Berdasarkan Psikologi dan Nilai Hidup</h3>
                <div class="faq-content">
                  <p>Tidak hanya berfokus pada penampilan atau status sosial, Lovestreet menggunakan analisis psikologis dan penilaian nilai hidup dalam proses pencocokan. Kami berupaya membantu Anda menemukan pasangan yang memiliki visi dan prinsip hidup sejalan, menciptakan hubungan yang harmonis dan langgeng.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>3</span> Algoritma Rekomendasi Cerdas dan Berbasis Data</h3>
                <div class="faq-content">
                  <p>Lovestreet memanfaatkan teknologi rekomendasi berbasis data untuk mencocokkan Anda dengan calon yang paling potensial. Dengan rekomendasi profil harian yang dipersonalisasi, kami membantu memaksimalkan peluang Anda untuk menemukan pasangan ideal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="<?= base_url('assets'); ?>/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-lightbulb icon"></i></div>
              <h4><a href="" class="stretched-link">Aplikasi Cerdas</a></h4>
              <p>Platform kami dilengkapi dengan algoritma matching canggih yang melibatkan berbagai faktor penting dalam hubungan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-shield-lock icon"></i></div>
              <h4><a href="" class="stretched-link">Private</a></h4>
              <p>Dengan sistem verifikasi yang ketat dan pengamanan data yang tinggi, pengguna dapat merasa aman dan nyaman dalam mencari cinta di LoveStreet.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Acara Eksklusif</a></h4>
              <p>LoveStreet mengadakan berbagai event eksklusif untuk memberikan kesempatan membangun koneksi yang lebih dalam.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-person-fill-gear icon"></i></div>
              <h4><a href="" class="stretched-link">Konsultasi</a></h4>
              <p>Tim konsultan kami siap membantu setiap pengguna dalam menemukan dan membangun hubungan yang sehat dan bahagia.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-arrow-through-heart icon"></i></div>
              <h4><a href="" class="stretched-link">Profil Psikologis</a></h4>
              <p>Teknologi kami memungkinkan untuk memahami kondisi psikologis untuk mencocokkan dengan pasangan yang kompatibel.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-ui-checks icon"></i></div>
              <h4><a href="" class="stretched-link">User Friendly</a></h4>
              <p>Aplikasi ini dirancang dengan antarmuka yang intuitif dan fitur-fitur yang memudahkan dalam aksesnya.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section dark-background">

      <img src="<?= base_url('assets'); ?>/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section> --><!-- /Call To Action Section -->
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Kebuktian orang-orang yang telah berhasil menemukan cinta sejatinya di LoveStreet.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets'); ?>/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Asep Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Awalnya saya ragu untuk mencoba biro jodoh, tapi LoveStreet mengubah cara pandang saya. Algoritma mereka sangat akurat, dan saya benar-benar dipertemukan dengan orang yang memiliki visi dan nilai yang sama dengan saya. Selain itu, event-event mereka sangat membantu untuk membangun koneksi dengan orang baru dalam suasana santai.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets'); ?>/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Maya Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proses pencocokan di LoveStreet sangat tepat dan personal. Saya merasa setiap langkahnya dirancang untuk membuat pengalaman menemukan pasangan menjadi lebih nyaman dan aman. Berkat LoveStreet, saya menemukan seseorang yang membuat hidup saya lebih berwarna. Terima kasih, LoveStreet!.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets'); ?>/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Ancika Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Setelah beberapa kali mencoba platform lain, saya menemukan LoveStreet. Dengan konsultan pribadi yang selalu membantu dan memberi arahan, akhirnya saya merasa lebih percaya diri dalam perjalanan mencari pasangan. LoveStreet benar-benar berbeda karena mereka tidak hanya mengandalkan teknologi, tetapi juga memberikan pendekatan yang manusiawi.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets'); ?>/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Jajang Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>LoveStreet sangat profesional dalam menjaga privasi dan keamanan data anggotanya. Ini membuat saya merasa nyaman sejak awal. Sekarang saya bersama pasangan yang saya temui di LoveStreet, dan kami sangat cocok. Saya merekomendasikan LoveStreet untuk siapa pun yang ingin mencari cinta sejati secara serius!.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('assets'); ?>/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Cecep Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Saya suka bahwa LoveStreet tidak hanya mencocokkan profil, tetapi juga mengadakan event yang memudahkan kita bertemu langsung dalam suasana yang menyenangkan. Dari salah satu event ini, saya bertemu dengan seseorang yang sekarang menjadi pasangan hidup saya. Terima kasih, LoveStreet!.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <!-- <p>Paling yang paling sering ditanyakan</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apa itu LoveStreet?</h3>
                <div class="faq-content">
                  <p>LoveStreet adalah perusahaan startup yang menawarkan layanan biro jodoh modern. Kami menggunakan teknologi canggih dan pendekatan personal untuk membantu individu menemukan pasangan hidup yang sesuai dengan kepribadian dan preferensi mereka.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara kerja LoveStreet?</h3>
                <div class="faq-content">
                  <p>LoveStreet menggunakan algoritma yang menganalisis kepribadian, minat, dan nilai-nilai Anda untuk mencocokkan Anda dengan pasangan yang kompatibel. Kami juga menyediakan layanan konsultasi personal dan mengadakan event sosial untuk membantu Anda bertemu dengan orang-orang yang tepat.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara mendaftar di LoveStreet?</h3>
                <div class="faq-content">
                  <p>Anda dapat mendaftar di LoveStreet melalui situs web kami dengan mengisi formulir pendaftaran dan membuat profil kepribadian Anda. Setelah itu, Anda akan mendapatkan akses ke semua fitur dan layanan kami.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana LoveStreet menjaga privasi saya?</h3>
                <div class="faq-content">
                  <p>LoveStreet menggunakan sistem enkripsi canggih untuk melindungi data pribadi Anda. Kami berkomitmen untuk menjaga privasi dan keamanan informasi Anda, sesuai dengan kebijakan privasi kami.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Saya mengalami masalah teknis, bagaimana cara mendapatkan bantuan?</h3>
                <div class="faq-content">
                  <p>Jika Anda mengalami masalah teknis, Anda dapat menghubungi tim dukungan kami melalui email atau fitur live chat di situs web atau aplikasi LoveStreet. Kami akan segera membantu Anda menyelesaikan masalah tersebut.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Hubungi Kami untuk Mendapatkan Bantuan & Dukungan.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Peta No.154, Suka Asih, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40231</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telepon</h3>
                  <p>08977346008</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>ibnuihsan28@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Unipi%20Kampus%20Bandung&zoom=15&maptype=satellite" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Pesan</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Tunggu ..</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
<?= $this->endSection('content'); ?>