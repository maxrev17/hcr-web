<head>
<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
<script language="JavaScript" src="includes/js/bootstrap.min.js"></script>
</head>

<?php
echo '<h1>'.$title.'</h1>';
echo '<br>';
echo 'Your unique link code is ' . $visit_code . ', thanks for clicking!';
echo '<br>';
echo 'You have viewed your link ' . $visit_count . ' times!';
echo '<br>';
echo 'You spoke with ROBOT at the following time, ' . $visit_date;
?>