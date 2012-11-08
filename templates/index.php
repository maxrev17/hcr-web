<head>
<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
<script language="JavaScript" src="includes/js/bootstrap.min.js"></script>
</head>

<?php
echo '<h1>'.$title.'</h1>';
echo '<br>';
echo 'Your unique link code is ' . $ticketArray[0] . ', thanks for clicking!';
echo '<br>';
echo 'You have viewed your link ' . count($ticketArray) . ' times!';
echo '<br>';
echo 'You spoke with ROBOT at the following time, ' . date("F j, Y, g:i a", Utility::getDatetime($ticketArray[0]));
?>