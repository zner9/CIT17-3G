<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $_SERVER["DOCUMENT_ROOT"]; // show where the file root is
    echo $_SERVER["PHP_SELF"]; // show the file name and folder name
    echo $_SERVER["SERVER_NAME"]; // show the name of server
    echo $_SERVER["REQUEST_METHOD"]; // show which method either get or post

    
    ?>
</body>
</html>