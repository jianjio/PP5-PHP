<?php include './components/header.php';
  // this is where we query the feedback data.
$sql = 'SELECT * FROM feedback';
//  the sql retrieves all data from the feedback table
$result = mysqli_query($conn, $sql); 
// this executes the sql query on the mysql database connection which is $conn
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); 
// this feches all rows from the result set as an associative array and mysqli_assoc makes sure the array is keyed by all columns
// the retrieved  feedback data is stored in the $feedback array
?>
<h2 class="text-white" style="font-family: poppins; font-weight: 500;">Previous Feedback</h2>
<br>

<?php if (empty($feedback)): ?>  <!-- // para sa walang binigay na feedback -->
  <p class="lead mt-3 text-center">No response has been provided.</p> <!-- //chinicheck kung meron bang feedback na binigay. pag wala edi wala. lalabas ang no response provided -->
<?php endif; ?> <!-- //tinapos ang if -->


<!-- //looping through feedback data
//this loop iterates over each feedback entry stored in $feedback  -->
<?php foreach ($feedback as $item): ?>  <!-- //for each entry then $item. -->
  <div class="card m-auto mt-4 w-50 text-white">
    <div class="card-body text-center">
      <?php echo $item['body']; ?> <!-- //pinapakita kung ano mismo ang sinend na feedback kung pangit ka ba o pangit ka talaga -->
      <div class="text-secondary mt-2"></div>
      <?php echo $item['name']; ?>   <!-- //pinapakita ang name ng nag bigay ng feedback -->
      on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>  <!-- //pinakita kung anong oras sinend ang feedback -->
    </div>
  </div>
<?php endforeach; ?> <!-- //tinapos ang foreach -->


</div>
</main>
    <?php include './components/footer.php' ?>
        <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66fa170629dfadef4aedcb55"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="./js/animation.js" type="text/javascript"></script>
  </body>
</html>
