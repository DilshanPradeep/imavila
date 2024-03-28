<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>IMA-VILLA</title>
  <meta name="title" content="IMA-VILLA">
  <meta name="description" content="">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/gallery.sty.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">


</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">IMA-VILLA</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          IMA VILLA, Mahasengama, Sigiriya
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 5.00 am to 9.00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">0743140245 / 0778610281 / 0778640245
        </span>
      </a>

      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">imayavilla22@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->



  <header class="header" data-header>

    <div class="container">

      <a href="index.php" class="logo">
        <img src="./assets/images/logo.png" width="100" height="40" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="index.php" class="logo">
          <img src="./assets/images/logo.png" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">
          <li class="navbar-item" style="margin-right: 120px;"> <!-- Adjust the margin-right value as needed -->
            <a href="index.php" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Home</span>
            </a>
          </li>

  


      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>




      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black 10" aria-label="event" style="margin-top: 100px;">
    <div class="container">
      <p class="section-subtitle label-2 text-center">Recent Updates</p>
      <h2 class="section-title headline-1 text-center">Our Gallery</h2>
      <ul class="grid-list">
        <?php
          include_once('include/dbh.inc.php');
          $sql = 'SELECT * FROM `event_pic`;';
          $result = mysqli_query($con, $sql);
          if($result){
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result)){
                $topic = $row['topic'];
                $description = $row['description'];
                $image = $row['image'];
                $date = $row['date'];
                echo "<li>
                  <div class='event-card has-before hover:shine'>
                    <div class='card-banner img-holder' style='--width: 350; --height: 450;'>
                      <img src='assets/images/eventimage/{$image}' width='350' height='450' loading='lazy' alt='{$image}' class='img-cover'>
                      <time class='publish-date label-2' datetime='{$date}'>{$date}</time>
                    </div>
                    <div class='card-content'>
                      <p class='{$topic}'></p>
                      <h3 class='{$description}'></h3>
                    </div>
                  </div>
                </li>";
              }
            }
          }    
        ?>
      </ul>
    </div>
  </section>
<!---->
         

        </div>
      </section>

    </article>
  </main>



  <style>
    /* Modal CSS */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 9999; /* Sit on top */
      padding-top: 50px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
    }

    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 800px;
    }

    /* Add Animation */
    .modal-content, #caption {  
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)} 
      to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
      from {transform:scale(0)} 
      to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
      z-index: 9999; /* Ensure the close button is on top of the modal */
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    /* Blur effect when modal is open */
    body.modal-open {
      overflow: hidden; /* Prevent scrolling when modal is open */
    }

    body.modal-open .container {
      filter: blur(5px); /* Add blur effect to the background */
    }
  </style>



<!-- Modal Popup -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

<!-- Your previous HTML code -->

<!-- Your JavaScript code -->
<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var images = document.querySelectorAll(".img-cover");
  var modalImg = document.getElementById("modalImg");

  images.forEach(function(img) {
    img.addEventListener('click', function() {
      modal.style.display = "block";
      modalImg.src = this.src;
    });
  });

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
</script>



  <!-- 
    - #FOOTER
  -->

<!-- 
    - #FOOTER
-->
<style>
    /* CSS for the footer */
    body {
    margin: 0;
    padding: 0; 
    box-sizing: border-box;
  }

  footer.footer {
    background: #3d4144; /* Change as needed */
    padding: 10px 0;
    position: relative;
    width: 100%;
    text-align: center;
    bottom: 0;
    box-sizing: border-box;
    margin-top: 100px; /* This pushes the footer to the bottom */
  }

  .copyright {
    margin: 0;
  }

</style>
<!-- Footer -->
<footer class="footer section text-center">
  <div class="container">
    <p class="copyright">
      &copy; 2024 IMA-VILLA. All Rights Reserved
    </p>
  </div>
</footer>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>