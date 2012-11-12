<?php
    require 'header.php';
?>

    <div class="container">

      <h1>Thanks for visiting :)!</h1>

      <?php    
        echo 'Your unique link code is <strong>' . $visit_code . '</strong>, thanks for clicking!';
        echo '<br>';
        echo 'You have viewed your link <strong>' . $visit_count . '</strong> times!';
        echo '<br>';
        echo 'You spoke with ROBOT at the following time, <strong>' . $visit_date . '</strong>';
      ?>
      
      <iframe src="http://supportus.cancerresearchuk.org/campaign-pages/donate/" seamless="seamless" height="1300" width="100%"></ifram>
      
    </div> <!-- /container -->
    
<?php
    require 'footer.php';
?>      