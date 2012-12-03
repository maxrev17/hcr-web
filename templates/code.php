<?php
    require 'header.php';
?>

    <div class="container">

      <h3>Thanks for clicking!</h3>

      <?php    
        echo 'Your unique link code is <strong>' . $visit_code . '</strong>, thanks for clicking!';
        echo '<br>';
        echo 'You have viewed your link <strong>' . $visit_count . '</strong> times!';
        echo '<br>';
        echo 'You spoke with ROBOT at the following time, <strong>' . $visit_date . '</strong><br>';
      ?>
      
    </div> <!-- /container -->
    
<?php
    require 'footer.php';
?>      