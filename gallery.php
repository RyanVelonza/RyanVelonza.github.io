<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Dragonpnuch Gallery'; $title='Dragonpunch'; include('include/head.php'); ?>
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

  <body>
    <?php include 'include/header.php' ?>

      <div class="gallery images">
        <div class="item boxer"><a href="images/gallery/gallery (1).jpg" data-caption="Gurren Lagann"><img src="images/gallery/gallery (1).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (2).jpg" data-caption="Dragonball Super"><img src="images/gallery/gallery (2).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (3).jpg" data-caption="StreetFighter"><img src="images/gallery/gallery (3).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (4).jpg" data-caption="Fire Emblem"><img src="images/gallery/gallery (4).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (5).jpg" data-caption="Hajime No Ippo"><img src="images/gallery/gallery (5).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (6).jpg" data-caption="Kill La Kill"><img src="images/gallery/gallery (6).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (7).jpg" data-caption="Koi Pond"><img src="images/gallery/gallery (7).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (8).jpg" data-caption="MVC2"><img src="images/gallery/gallery (8).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (9).jpg" data-caption="Cool"><img src="images/gallery/gallery (9).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (10).jpg" data-caption="Samsho"><img src="images/gallery/gallery (10).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (11).jpg" data-caption="StreetFighter"><img src="images/gallery/gallery (11).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (12).jpg" data-caption="Soulcal"><img src="images/gallery/gallery (12).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (13).jpg" data-caption="Dragonball FighterZ"><img src="images/gallery/gallery (13).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (14).jpg" data-caption="Great Wave"><img src="images/gallery/gallery (14).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (15).jpg" data-caption="Chul Li & Android 17"><img src="images/gallery/gallery (15).jpg" alt=""></a></div>
        <div class="item boxer"><a href="images/gallery/gallery (16).jpg" data-caption="Yu From Persona 5"><img src="images/gallery/gallery (16).jpg" alt=""></a></div>
      </div>
    

    <?php include 'include/footer.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
      baguetteBox.run('.gallery', {
      animation: 'fadeIn'
      });
    </script>
  </body>
</html>