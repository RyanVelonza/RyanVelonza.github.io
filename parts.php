<!DOCTYPE html>

<html lang="en">
  <?php $welcome='Recommended Parts'; $title='Dragonpunch | Parts'; include('include/head.php'); ?>
  <link rel="stylesheet" href="css/parts.css">

  <body>
    <?php include 'include/header.php' ?>

    <div class="intro">
      <h1 class="introHead">
        Our Recommended Parts!
      </h1>

      <p class="introSub">
        Click on any of the buttons to learn more about the specific part!
      </p>
    </div>
    <section class="buttons">
      <h2 class="btnheading">
        Pushbuttons
      </h2>
      <div class="pushbutton boxer">
        <img src="images/parts/sanwaosbf.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#swaOSBF">
          Sanwa OSBF
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/crown202.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#crwn202">
          Crown SDB-202
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/sei14.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#sei14">
          Seimitsu PS-14
        </button>
      </div>
      <div class="pushbutton boxer">
      <img src="images/parts/silentosbf.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#swaOSBC">
          Silent Sanwa OSBF
        </button>
      </div>      
      <div class="pushbutton boxer">
        <img src="images/parts/gamerfinger.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#gfHBFS">
          Gamerfinger HBFS
        </button>
      </div>      <div class="pushbutton boxer">
        <img src="images/parts/sei15.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#sei15">
          Seimitsu PS-15
        </button>
      </div>

      <h2 class="joyheading">
        Joysticks
      </h2>
      <div class="pushbutton boxer">
        <img src="images/parts/sanwaJLF.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#sanwaJLF">
          Sanwa JLF
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/removeJLF.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#sanwaRemove">
          Sanwa Removable JLF
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/CDP.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#CDP">
          Crazy Dongpal
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/sqGate.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#sqGate">
          JLF Square Gate
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/octGate.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#octGate">
          JLF Octagonal Gate
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/cirGate.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#cirGate">
          JLF Circular Gate
        </button>
      </div>

      <h2 class="etcheading">
        Interesting Stuff!
      </h2>
      <div class="pushbutton boxer">
        <img src="images/parts/brookPCB.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#brook">
          Brook PCB
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/silentJLF.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#silentJLF">
          GamerFinger Silent JLF
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/tensionSpring.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#tensionspring">
          2lb/4lb JLF Spring
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/neutrikpassthrough.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#neutrik">
          Neutrik Cable Pass-through
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/phreak.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#phreak">
          Phreakmods Quick Disconnect
        </button>
      </div>
      <div class="pushbutton boxer">
        <img src="images/parts/butter.jpg" alt="">
        <button type="button" class="button" data-toggle="modal" data-target="#butter">
          Buttercade Snapout Tool
        </button>
      </div>
    </section>

    <!-- Modals for Buttons -->
    <?php include 'include/partsmodal.php' ?>
    <!-- Footer PHP -->
    <?php include 'include/footer.php' ?>
  </body>
</html>