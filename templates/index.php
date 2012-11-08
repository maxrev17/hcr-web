<head>
<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
<script language="JavaScript" src="includes/js/bootstrap.min.js"></script>
</head>

<?php
echo '<h1>'.$title.'</h1>';
echo '<br>';
    foreach($output as $o){
        echo $o->getId() .' '. $o->getCode() . '<br>';
    }
?>