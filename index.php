<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Welcome to Dragonpunch!'; $title='Dragonpunch'; include('include/head.php'); ?>
  <link rel="stylesheet" href="css/index.css">
  <body>
    <?php include 'include/header.php' ?>

    <section class="home">
      <div class="imgCarousel container">
        <div id="slider" class="carousel slide boxer" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel/image1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/image2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/image3.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/image4.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/image5.jpg" class="d-block w-100" alt="">
            </div>
          </div>
          <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="welcome">
        <div class="container boxer">
          <h2 class="heading">
            Welcome to Dragonpunch!
          </h2>

          <p class="subheading">
            We are an online retailer selling custom artwork for fight-sticks, please look around and enjoy your stay shopping here! If you looking into building a new fight-stick please check out our parts page for recommended parts for beginners! We'll also explain how to put together a fight-stick and customize it to you're own liking!
          </p>

          <p><a href="order.php" class="button">Order Now!</a></p>
        </div>
      </div>
    </section>
  
    <section class="wiring boxer">
      <div class="imagerep container">
        <div class="repairimg">
            <img src="images/repair.jpg" alt="">
        </div>
        <p><a href="order.php" class="button">Repair Now!</a></p>
      </div>
      <div class="textrep container">
        <h2 class="heading">
          Broken Fightstick?
        </h2>
        <p class="subheading">
          Got a problem with the wiring, or your fight-stick isn't turning on? Send in the stick and we'll repair it for a small fee, We also do repairs on casing damage, just fill out a repair order and we'll handle the rest and get it back to you in no time! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab aspernatur, eligendi harum accusantium sint soluta blanditiis molestias. Doloremque ad non necessitatibus. Dolorem quae beatae minima eveniet eligendi cupiditate culpa?
        </p>
        <br>
        <p class="subheading">
          We also are currently setting up a live chat that can hopefully connect you to our professional helpers, we generally sort out problems in a quickie, our chats are available Monday to Friday, 10:00 AM to 6:00PM. Saturday and Sunday the lines will be open 12:00PM to 4:00PM. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iusto dicta cum sapiente fugiat, ratione sunt atque praesentium earum explicabo accusantium? Sunt officiis optio architecto sed aut repellat accusantium commodi?
        </p>
      </div>
    </section>

    <section class="news boxer">
      <div class="title">
        <h2 class="heading">Whats New!</h2>
      </div>

      <div class="newitem">
        <h3 class="newheader">
          New Fightstick Art Styles!
        </h3>
        <a href="artwork.php"><img src="images/stormstickcrop.jpg" alt=""></a>
        <p><a href="artwork.php" class="button">Artwork</a></p>
      </div>
      <div class="newitem">
        <h3 class="newheader">
          Recommended Parts!
        </h3>
        <a href="parts.php"><img src="images/buttons.jpg" alt=""></a>
        <p><a href="parts.php" class="button">Parts</a></p>
      </div>
      <div class="newitem">
        <h3 class="newheader">
          Check Out Our Gallery!
        </h3>
        <a href="gallery.php"><img src="images/fightstick.jpg" alt=""></a>
        <p><a href="gallery.php" class="button">Gallery</a></p>
      </div>
      <div class="newitem">
        <h3 class="newheader">
          Our Favorite Joysticks & Buttons
        </h3>
        <a href="parts.php"><img src="images/stick.jpg" alt=""></a>
        <p><a href="parts.php" class="button">parts</a></p>
      </div>
      <div class="newitem">
        <h3 class="newheader">
          New Sticks Incoming
        </h3>
        <a href="sticks.php"><img src="images/fightingedge.jpg" alt=""></a>
        <p><a href="sticks.php" class="button">Fightsticks</a></p>
      </div>
      <div class="newitem">
        <h3 class="newheader">
          We Launched Our Website!
        </h3>
        <a href="index.php"><img src="images/logo.png" alt=""></a>
        <p><a href="index.php" class="button">Website</a></p>
      </div>
    </section>

    <?php include 'include/footer.php' ?>
  </body>
</html>