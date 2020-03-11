<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Thank You!'; $title='Dragonpunch'; include('include/head.php'); ?>

  <body>
    <?php include 'include/header.php' ?>
    <link rel="stylesheet" href="css/ordered.css">
    <div class="container thanks">
        <?php
          include('include/connect.php');

          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $otype = $_POST['otype'];
          $message = $_POST['message'];

          $sql = "INSERT INTO dporder(name, phone, email, otype, message) values ('$name', '$phone', '$email', '$otype', '$message')";

          if(mysqli_query($con, $sql)){
            echo"<script> alert('Your order has been placed')</script>";
          }
          else{
            echo"<script> alert('Your order couldn't be placed')</script>";
          }
        ?>
      <h2 class="heading">
        <?php echo "$name"; ?> Please Check Your Email, <?php echo "$email" ?> For More Details!
      </h2>
      <p>
        Stay updated and check your email frequently to make sure you don't miss any updates on the progress of your order! Or Let us know if you prefer to be texted/called!
      </p>
    </div>

    <?php include 'include/footer.php' ?>
  </body>
</html>