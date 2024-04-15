<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <!-- Fonts Poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <?php include "./function.php" ?>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="headerflex">
          <div class="logo">
            <a href="index.html">
              <!-- <img src="./assets/header/logo.png" alt="logo" /> -->
              <span>Lux <span class="ventusBG"> Ventus</span></span>
            </a>
          </div>

          <div class="navigation-content">
            <div class="navigation">
              <?php 
              
               foreach($headerNav as $nav) {
                echo 
                '<div class="' . $nav["class"] . '">
                      <a href="#">' . $nav["title"] . '</a>';
                      
                      foreach($nav["list"] as $list) {
                        echo '
                          <ul class="navigation2">
                            <li><span>' . $list["name1"] . '</span></li>
                            <li><span>' . $list["name2"] . '</span></li>
                          </ul>
                        ';
                      }
                    
                echo '</div>';
               }
              
              ?>
            </div>

            <div class="search">
              <img src="./assets/header/search.png" alt="search" />
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header -->

    <!-- First Section -->
    <section class="first-section container">
      <div class="img">
        <h6>LUX VENTUS MAGAZINE</h6>

        <h1>We Are the <span>Ventus Fashion</span></h1>

        <p>
          We like to gossip about everything, but we will never forget the daily
          fashion dose.
        </p>
      </div>
    </section>
    <!-- First Section -->

    <!-- Second Section -->
    <section class="second-section container">
      <div class="topics">
        <h2>Topics</h2>

        <div class="topic-cards">
          <?php 
          cardInteration($topicCards); 
          ?>
            
        </div>
      </div>
    </section>

    <!-- Second Section -->

    <!-- Third Section  -->

    <section class="third-section">
      <div class="container2 container">
        <div class="boxx">
          <div class="img2">
            <button>FASHION</button>
          </div>

          <div class="line">
            <div class="reyn">
              <div class="malloryreyn">
                <img src="./assets/malloryreyn.png" alt="malloryreyn" />
              </div>
              <p>Mallory Reyn</p>
            </div>

            <div class="space">
              <p>April 14th, 2023</p>
              <p id="hot">COMING IN HOT!</p>
            </div>
          </div>

          <div class="line2">
            <h4>The Latest Trends from the Moon Fashion Week.</h4>
            <p class="main-p">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et
              massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien
              fringilla, mattis ligula consectetur, ultrices mauris. Maecenas
              vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.
            </p>
          </div>
          <div class="arrow-flex">
            <div class="arrow">
              <img src="./assets/arrow-small-right.png" alt="arrow" />
            </div>
            <a href="#">READ MORE</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Third Section  -->

    <!-- Fourth Section  -->

    <section class="fourth-section">
      <h2>Trending</h2>

      <div class="container3 container2">
        <?php 
          card($container3);
        ?>
      </div>

      <div class="container4 container2">
          <?php
            card2($container4);
          ?>
      </div>
    </section>

    <!-- Fourth Section  -->

    <!-- Footer  -->

    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div class="footer-flex">
            <div class="logo">
              <img src="./assets/footer/logo.png" alt="logo" />
            </div>
            <div class="social">
              <p>Let&#39;s Hang Out</p>
              <a href="#"
                ><div class="socimg">
                  <img src="./assets/footer/facebook.png" alt="fb" /></div
              ></a>
              <a href="#"
                ><div class="socimg">
                  <img src="./assets/footer/twitter.png" alt="twitter" /></div
              ></a>
              <a href="#"
                ><div class="socimg">
                  <img src="./assets/footer/linkedin.png" alt="linkedin" /></div
              ></a>
              <a href="#"
                ><div class="socimg">
                  <img src="./assets/footer/youtube.png" alt="youtube" /></div
              ></a>
              <a href="#"
                ><div class="socimg">
                  <img
                    src="./assets/footer/instagram.png"
                    alt="instagram"
                  /></div
              ></a>
            </div>
          </div>
          <p class="Copyright">© 2023 - Lux Ventus by Zine.E.Falouti</p>
        </div>
      </div>
    </footer>

    <!-- Footer  -->
  </body>
</html>
