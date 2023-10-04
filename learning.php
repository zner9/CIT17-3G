<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <form action="learning.php" method="get">
        Name: <input type="text" name="firstName">
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    Your name: 
    <?php echo $_GET["firstName"] ?>
    <br>
    Your age:
    <?php echo $_GET["age"] ?>

    </body>
</html>

