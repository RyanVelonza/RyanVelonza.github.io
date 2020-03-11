<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Order Page'; $title='Dragonpunch'; include('include/head.php'); ?>
  <link rel="stylesheet" href="css/ordered.css">
  <body>
    <?php include 'include/header.php' ?>

    <div class="order">
      <div class="message">
        <h2 class="heading">
          Order Form
        </h2>
        <p>
          Please fill out the form, So that we can get started on your order.
          <br>
          In the Message spot, please put your fight-stick base. If doing the full custom fight-stick option you don't need to, also remember to write in what idea you have in mind for a fight-stick design!
        </p>
      </div>

      <div class="orderform">
        <form role="form" method="POST" action="ordered.php"  autocomplete="on">
          <div class="boxer">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
          </div>
          <div class="boxer">
            <label for="name">Email: </label>
            <input type="email" name="email" id="email">
            <br>
          </div>
          <div class="boxer">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
            <br>
          </div>
          <div class="boxer">
            <label for="otype">Order Type</label>
            <br>
            <input type="radio" name="otype" id="full" value="full">
            <label for="full">Full Custom Fight-Stick</label>
            <br>
            <input type="radio" name="otype" id="art" value="art">
            <label for="art">Custom Fight-Stick Design</label>
            <br>
            <input type="radio" name="otype" id="drawn" value="drawn">
            <label for="drawn">Hand-drawn Fight-Stick Artwork</label>
            <br>
            <input type="radio" name="otype" id="repair" value="repair">
            <label for="repair">Fight-Stick Repair</label>
            <br>
          </div>
          <div class="boxer">
            <label for="message">Message</label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="ORDER NOW" class="button">
          </div>
        </form>
      </div>
    </div>

    <?php include 'include/footer.php' ?>
  </body>
</html>