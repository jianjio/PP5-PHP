<?php include './components/header.php' ?>

<?php
//Set vars to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

//Form submit
if (isset($_POST['submit'])) {
  //Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  //Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {

    //Set timezone to Asia/Manila
    date_default_timezone_set('Asia/Manila');

    //Add to database
    $currentDate = date('Y-m-d H:i:s'); //current timestamp
    $sql = "INSERT INTO feedback (name, email, body, date) VALUES ('$name', '$email', '$body', '$currentDate')";
    if (mysqli_query($conn, $sql)) {
      //success
      header('Location: feedback.php');
    } else {
      //Error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>
 <!-- HERO SECTION  -->
 <div class="hero-section centered">
      <div
        data-w-id="e464d218-f801-55d1-1f50-7da00b5bfb8f"
        style="opacity: 0"
        class="w-container"
      >
        <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading" style="font-family: protest guerrilla; font-size: 5rem" >
          gamedev
        </h1>
        <div data-ix="fade-in-bottom-page-loads" class="hero-subheading" style="font-family: Poppins, sans-serif; font-weight:500">
          Discover the Best Free-To-Play Games with Ease!
        </div>
        <div data-ix="fade-in-bottom-page-loads">
          <a href="#Download" class="hollow-button bg-danger all-caps" style="font-weight: 400;">let&#x27;s start!</a>
        </div>
      </div>
    </div>
                                <!-- SAMPLE CARDS SECTION  -->

    <div class="section">
      <div class="container-2 w-container" >
        <div class="section-title-group"id="Download">
          <h2 class="section-heading centered text-white">most popular games</h2>
          <div class="section-subheading center">
            &quot;Expand your horizons! Dive into new genres and discover
            exciting adventures beyond your usual games.&quot;
          </div>
        </div>

                      <!-- CAROUSEL  -->

<div class="container mt-5">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-inner " style="height: 500px;">
                <div class="carousel-item active">
                    <img src="./assets/valorant.jpg" class="d-block w-100 " alt="valorant image">
                </div>
                <div class="carousel-item">
                  <img src="./assets/wz.jpg" class="d-block w-100" alt="warzone image">
                </div>
                <div class="carousel-item">
                  <img src="./assets/lol.webp" class="d-block w-100" alt="lol image">
                </div>
                <div class="carousel-item">
                  <img src="./assets/apex.jpg" class="d-block w-100" alt="apex image">
                </div>
                <div class="carousel-item">
                    <img src="./assets/dota.jpg" class="d-block w-100" alt="dota image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<!-- FIRST GAME CARD  -->

<div class="columns w-row">
          <div class="w-col w-col-4">
            <div
            data-w-id="29c25774-570b-ddb2-69b5-f4ddbb194afd"
            style="opacity: 0; background-color: #53212B; text-align:left"
            class="white-box"
            >
            <img src="./assets/valorant.jpg" alt="valorant image" class="" />
            <h3 class="text-white text-center" style="font-weight: 500;">Valorant</h3>
            <p class="paragraph text-white">
              Test your mettle in Riot Games’ character-based FPS shooter Valorant.
            </p>
              <a
                href="https://playvalorant.com/en-sg/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-danger mb-3"
                
                >
                Download
              </a>
              <ul class="list-unstyled mt-auto text-white">
                <li><strong>Genre:</strong> Shooter</li>
                <li><strong>Platform:</strong> PC (WINDOWS)</li>
                <li><strong>Release Date:</strong> 2020-06-02</li>
              </ul>
              <div class="card-footer ">
                <a
                  href="https://www.freetogame.com/valorant"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn btn-sm btn-danger"
                >
                View Profile
                </a>
              </div>
            </div>
          </div>

          <!-- SECOND GAME CARD  -->

          <div class="w-col w-col-4">
            <div
              data-w-id="270e8437-efa3-df11-d438-de69b23e41e9"
              style="opacity: 0; background-color: #53212B; text-align:left"
              class="white-box text-white"
            >
              <img src="./assets/lol.webp" alt="LoL image" class="" />
              <h3 class="text-white text-center" style="font-weight: 500;">League of Legends</h3>
              <p class="paragraph text-white">
                A free-to-play MOBA game, and one of the most played pc game in
                the world.
              </p>
              <a
                href="https://www.leagueoflegends.com/en-ph/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-danger mb-3"
              >
                Download
              </a>
              <ul class="list-unstyled mt-auto text-white">
                <li><strong>Genre:</strong> MOBA</li>
                <li><strong>Platform:</strong> PC (WINDOWS)</li>
                <li><strong>Release Date:</strong> 2009-10-27</li>
              </ul>
              <div class="card-footer">
                <a
                  href="https://www.freetogame.com/league-of-legends"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn btn-sm btn-danger"
                >
                  View Profile
                </a>
              </div>
            </div>
          </div>

          <!-- THIRD GAME CARD  -->

          <div class="w-col w-col-4">
            <div
              data-w-id="49e69b8a-ef40-4d84-1f92-d2617143b8db"
               style="opacity: 0; background-color: #53212B; text-align:left"
              class="white-box"
            >
              <img src="./assets/dota.jpg" alt="dota image" class="" />
              <h3 class="text-white text-center" style="font-weight: 500;">dota 2</h3>
              <p class="paragraph text-white">
                A free-to-play MOBA game, and one of the most played pc game in
                the world.
              </p>
              <a
                href="https://www.dota2.com/home"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-danger mb-3"
              >
                Download
              </a>
              <ul class="list-unstyled mt-auto text-white">
                <li><strong>Genre:</strong> MOBA</li>
                <li><strong>Platform:</strong> PC (WINDOWS)</li>
                <li><strong>Release Date:</strong> 2013-07-09</li>
              </ul>
              <div class="card-footer">
                <a
                  href="https://www.freetogame.com/dota-2"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn btn-sm btn-danger"
                >
                  View Profile
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RECOMMENDATIONS SECTION  -->

    <div class="section accent">
      <div class="w-container">
        <div class="section-title-group">
          <h2 class="section-heading centered white">RECOMMENDATIONS</h2>
          <div class="section-subheading center">
          "Step out of your comfort zone! Explore other games for new challenges, unique stories, and endless fun."
          </div>
        </div>

      <!-- FIRST REC CARD  -->

      <div class="w-row">
          <div class="w-col w-col-6">
            <div
            data-w-id="49e69b8a-ef40-4d84-1f92-d2617143b8db" 
            class="white-box" style=" background-color: #53212B;">
              <img
                src="./assets/wz.jpg"
                alt="warzone image"
                class="w-full mb-3"
              />
              <h3 class="white-text" style="font-weight: 400;">call of duty: warzone</h3>
              <p class="white-text">
              A standalone free-to-play battle royale and modes accessible via Call of Duty: Modern Warfare.
              </p>
              <a href="https://www.callofduty.com/warzone" target="_blank" class="hollow-button bg-danger">Learn more</a>
            </div>
          </div>

          <!-- SECOND REC CARD  -->

          <div class="w-col w-col-6">
            <div 
            data-w-id="270e8437-efa3-df11-d438-de69b23e41e9" 
            class="white-box" style=" background-color: #53212B;">
              <img
                src="./assets/deadlock.jpg"
                alt="deadlock image"
                class="w-full mb-3"
              />
              <h3 class="white-text" style="font-weight: 400;">deadlock</h3>
              <p class="white-text">
                Deadlock is an upcoming Multiplayer action game developed and published by Valve. 
              </p>
              <a href="https://store.steampowered.com/app/1422450/Deadlock/" target="_blank" class="hollow-button bg-danger all-caps">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   

      <!-- FEEDBACK FORM  -->


      <div class="container w-container">
        <div class="section-title-group">
          <h2 class="section-heading centered text-white">Send us your feedback</h2>
          <div class="section-subheading center">
            &quot;Your feedback helps us level up! We appreciate your insights
            as we work to improve your gaming experience.&quot;
          </div>
        </div>
        <div
          data-duration-in="300"
          data-duration-out="100"
          data-current="Tab 3"
          data-easing="ease"
          class="tabs-wrapper w-tabs"
        >
        
            <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">

              <!-- // FORMS // -->

             

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="text-center">
  <div class="mb-3 m-auto col-sm-6">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      class="form-control"
      id="name"
      name="name"
      placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" />

    <?php if (!empty($nameErr)) { ?> <span class="text-danger"> <?php echo $nameErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3 m-auto col-sm-6">
    <label for="email" class="form-label">Email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" />

    <?php if (!empty($emailErr)) { ?> <span class="text-danger"> <?php echo $emailErr; ?></span> <?php } ?>


  </div>
  <div class="mb-3 m-auto col-sm-6">
    <label for="body" class="form-label">Feedback</label>
    <textarea
      class="form-control"
      id="body"
      name="body"
      placeholder="Enter your feedback" style="height: 100px;">
      <?php echo htmlspecialchars($body); ?>
    </textarea>

    <?php if (!empty($bodyErr)) { ?> <span class="text-danger"> <?php echo $bodyErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <input
      type="submit"
      name="submit"
      value="Send"
      class="btn btn-danger w-1/3"/>
  </div>
</form>
</div>
</main>
    <?php include './components/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66fa170629dfadef4aedcb55"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="./js/animation.js" type="text/javascript"></script>
  </body>
</html>
