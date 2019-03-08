<!doctype html>
<html lang="fr">
    <head>
        <?php include 'partials/head.php'; ?>
        <title>Power Freak</title>
        <meta name="description" content="Description de la page" />
    </head>

    <body>
      <div class="wrapper">

        <header class="page_head">

          <section class="head_logo">
              <figure>
                <img src="images/PW19_logo.png" alt="logo">
              </figure>
          </section>

          <section class="head_flag">
              <figure>
                <img src="images/language_flag.png" alt="language" width="60">
              </figure>
          </section>

          <nav class="nav_bar">
            <ul>
              <li>
                <a href="about.php" title="power freak">Power Freak</a>
                <a href="recyclage.php" title="recyclage">Recyclage, une priorité</a>
                <a href="https://www.organicsbyredbull.com/ch/fr" target="_blank" title="shop">Shop</a>
                <a href="contact.php" title="contactez nous">Contactez-nous</a>
              </li>
            </ul>
          </nav>

        </header>
      <!-- HEADER -->

        <main class="page_content">

            <section class="section_new">

              <div class="container">

                <div class="picture">
                  <img src="images/old_vs_new.png" alt="cannette vs bouteille" width="200">
                  <h1>powerfreak se fait <br>un nouvel éco-look !</h1>
                </div>

                <div class="content">
                  <div class="strong_point">
                    <p>100% naturel</p>
                    <figure>
                      <img src="images/sprout_white.svg" alt="sprout" width="60">
                    </figure>
                  </div>

                  <div class="strong_point">
                    <p>Éco-responsable <br>Recyclable</p>
                    <figure>
                      <img src="images/leaves_white.svg" alt="leaves" width="60">
                    </figure>
                  </div>

                  <div class="strong_point">
                    <p>Swiss made</p>
                    <figure>
                      <img src="images/suisse_flag.svg" alt="suisse flag" width="60">
                    </figure>
                  </div>
                </div>

              </div>

            </section>
          <!-- SECTION_NEW -->

              <section class="slider">

                <div class="container">
                    <div class="flexslider">

                          <ul class="slides">
                            <li class="slide_1">
                              <h1>2 goûts 100% naturels</h1>
                              <figure>
                                <img src="images/icon_fruits.png" alt="icon fruits" width="200">
                              </figure>
                            </li>
                            <li class="slide_2">
                              <h1> Framboise </h1>
                              <figure>
                                <img src="images/picture_raspberry.png" alt="picture raspberry " width="200">
                              </figure>
                            </li>
                            <li class="slide_3">
                              <h1> Pamplemousse <br>rose </h1>
                              <figure>
                                <img src="images/icon_grapefruit.png" alt="icon grapefruit" width="200">
                              </figure>
                            </li>
                          </ul>

                      </div>
                  </div>

              </section>
            <!-- SLIDER -->

              <section class="section_made">
                  <h1>UNE BOISSON ENERGISANTE MADE IN VALAIS</h1>
                  <figure>
                    <img src="images/mountain.png" alt="mountain picture" width="150">
                  </figure>
              </section>
            <!-- PAGE_PICTURE -->
          </main>


              <footer class="page_foot">
                <h1> Suivez nous</h1>
                <div class="social_media">

                  <figure class="icon_facebook">
                    <a href="https://www.facebook.com/" target="_blank" title="facebook">
                      <img src="images/icon_fb.png" alt="icon facebook" width="60">
                    </a>
                  </figure>
                  <figure class="icon_insta">
                    <a href="https://www.instagram.com" target="_blank" title="instagram">
                      <img src="images/icon_insta.png" alt="icon instagram" width="80">
                    </a>
                  </figure>
                  <figure class="icon_share">
                    <a href="#" target="_blank" title="share">
                      <img src="images/share.svg" alt="arrow share" width="80">
                    </a>
                  </figure>
                </div>

                <div class="mentions">
                  <ul>
                    <li>
                      <a href="#" title="mentions légales">Mentions légales</a>
                      <a href="#" title="copyright">Copyright</a>
                    </li>
                  </ul>
                </div>
              </footer>
            <!-- FOOTER -->

      </div>

      <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
          $('.flexslider').flexslider();
        });
      </script>
    </body>

</html>
