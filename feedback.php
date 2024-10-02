<?php include './components/header.php';
  
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<h2 class="text-white" style="font-family: poppins; font-weight: 500;">Past Feedback</h2>

<?php if (empty($feedback)): ?>
  <p class="lead mt-3 text-center">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
  <div class="card m-auto mt-4 w-50">
    <div class="card-body  text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2"></div>
      <?php echo $item['name']; ?>
      on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>
    </div>
  </div>
<?php endforeach; ?>

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
