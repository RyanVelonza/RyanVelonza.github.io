<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Custom Artwork'; $title='Dragonpunch | Art'; include('include/head.php'); ?>
  <link rel="stylesheet" href="css/artwork.css">
  <body>
    <?php include 'include/header.php' ?>

    <section class="artwork">
    <div class="imgCarousel container">
        <div id="slider" class="carousel slide boxer" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/art/storm.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/art/orie.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/art/cool.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/art/persona.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/art/chunli.jpg" class="d-block w-100" alt="">
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

      <div class="text">
        <h2 class="heading">
          Need Artwork Done?
        </h2>
        <p class="subheading">
          I'm plenty experienced in Photoshop and Illustrator. Fully custom art takes long while, non-unique drawings take a short amount of time to finish. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ullam perspiciatis odit neque, ipsa consequatur illo sint sunt assumenda facilis ex doloremque alias sit accusamus. Iste magni ea mollitia alias. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi pariatur reprehenderit excepturi facilis praesentium, minima hic fugiat corporis, accusantium aspernatur deserunt libero, repudiandae totam est provident minus esse tenetur quasi.
        </p>
        <p><a href="order.php" class="button">Order Artwork Now!</a></p>
      </div>
    </section>

    <?php include 'include/footer.php' ?>
  </body>
</html>