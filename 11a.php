<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 <?php
    $handle = fopen("counter.txt", "r"); 
    if(!$handle)
    { 
            echo "could not open the file" ; 
    } 
    else 
    { 
        $counter = (int ) fread($handle,20); 
        fclose ($handle); 
        $counter++; 
        echo" <strong> you are visitor no ". $counter . " </strong> " ; 
        $handle = fopen("counter.txt", "w" ); 
        fwrite($handle,$counter) ; 
        fclose ($handle) ; 
    } 
    ?>
</body>
</html>
