<?php
    require 'header.php';
?>

    <div class="container">

      <h3>Thanks for clicking, we will donate 10p to Cancer Research on your behalf!</h3>

      <?php    
        //echo 'Your unique link code is <strong>' . $visit_code . '</strong>, thanks for clicking!';
        //echo '<br>';
        //echo 'You have viewed your link <strong>' . $visit_count . '</strong> times!';
        //echo '<br>';
        echo 'You spoke with ROBOT at the following time, <strong>' . $visit_date . '</strong><br>';
        echo 'Please consider making regular donations to this great cause...'
      ?>
      
      <iframe src="http://supportus.cancerresearchuk.org/campaign-pages/donate/" seamless="seamless" height="1300" width="100%"></ifram>
      
    </div> <!-- /container -->
    
<?php
    require 'footer.php';
?>      