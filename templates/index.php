<head>
<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
<script language="JavaScript" src="includes/js/bootstrap.min.js"></script>
</head>

<title>
    <?php echo $title ?>
</title>

<body>    

    <?php    
        echo '<h1>'.$title.'</h1>';
        echo '<br>';
        echo 'Your unique link code is <strong>' . $visit_code . '</strong>, thanks for clicking!';
        echo '<br>';
        echo 'You have viewed your link <strong>' . $visit_count . '</strong> times!';
        echo '<br>';
        echo 'You spoke with ROBOT at the following time, ' . $visit_date;
    ?>  

</body>

